<?php
/**
 * Copyright 2022 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Dev\DocFx\Toc;

use Google\Cloud\Dev\DocFx\Node\ClassNode;

/**
 * Class to output the DocFX Table of Contents
 */
class NamespaceToc
{
    protected array $items = [];
    private bool $isVersionNamespace = false;

    public function __construct(
        private string $namespace,
        private string $name
    ) {}

    public function addNode(ClassNode $classNode): void
    {
        $uid = $classNode->getFullname();
        $namespace = $this->namespace . '\\';
        $parts = explode('\\', str_replace('\\' . $namespace, '', $uid));
        if (count($parts) > 1) {
            $nestedNs = $this->namespace . '\\' . $parts[0];
            $nestedUid = 'ns:' . $nestedNs;
            if (!isset($this->items[$nestedUid])) {
                $this->items[$nestedUid] = new NamespaceToc($nestedNs, $parts[0]);
            }
            $this->items[$nestedUid]->addNode($classNode);
        } else {
            $this->items[$uid] = new ClassToc($classNode);

            if ($this->items[$uid]->isServiceClass()) {
                $this->isVersionNamespace = true;
            }
        }
    }

    public function toToc(): array
    {
        $tocArray = [
            'name' => $this->name,
            'uid'  => 'ns:' . $this->namespace,
            'items' => [],
        ];

        // Organize into "Services", "Messages", and "Enums" for version namespaces
        // e.g. "\Google\Cloud\Vision\V1"
        if ($this->isVersionNamespace) {
            $tocArray['name'] = $this->namespace;
            if ($services = $this->getServicesToc()) {
                $tocArray['items'][] = [
                    'name' => 'Services',
                    'uid'  => 'services:' . $this->namespace,
                    'items' => $services,
                ];
            }
            if ($messages = $this->getMessagesToc()) {
                $tocArray['items'][] = [
                    'name' => 'Messages',
                    'uid'  => 'messages:' . $this->namespace,
                    'items' => $messages,
                ];
            }
            if ($enums = $this->getEnumsToc()) {
                $tocArray['items'][] = [
                    'name' => 'Enums',
                    'uid'  => 'enums:' . $this->namespace,
                    'items' => $enums,
                ];
            };
            $tocArray['items'] = array_merge($tocArray['items'], $this->getOthersToc());
        } else {
            foreach ($this->items as $item) {
                $tocArray['items'][] = $item->toToc();
            }
        }

        return $tocArray;
    }

    protected function getServicesToc(): array
    {
        // Get a list of all Service classes
        $services = [];
        foreach ($this->items as $item) {
            if ($item instanceof ClassToc && $item->isServiceClass()) {
                $services[] = $item->toToc();
            } elseif ($item instanceof NamespaceToc) {
                $services = array_merge($services, $item->getServicesToc());
            }
        }

        // Do not wrap in namespace if none exist or we're in top level namespace
        if (!$services || $this->isVersionNamespace) {
            return $services;
        }

        return [
            [
                'name' => $this->name,
                'uid'  => 'ns:' . $this->namespace,
                'items' => $services,
            ],
        ];
    }

    protected function getMessagesToc(): array
    {
        // Get a list of all protobuf messages
        $messages = [];
        foreach ($this->items as $item) {
            if ($item instanceof ClassToc && $item->isProtobufMessageClass()) {
                $messages[] = $item->toToc();
            } elseif ($item instanceof NamespaceToc) {
                $messages = array_merge($messages, $item->getMessagesToc());
            }
        }

        // Do not wrap in namespace if none exist or we're in top level namespace
        if (!$messages || $this->isVersionNamespace) {
            return $messages;
        }

        return [
            [
                'name' => $this->name,
                'uid'  => 'ns:' . $this->namespace,
                'items' => $messages,
            ],
        ];
    }

    protected function getEnumsToc(): array
    {
        // Get a list of all protobuf enums
        $enums = [];
        foreach ($this->items as $item) {
            if ($item instanceof ClassToc && $item->isProtobufEnumClass()) {
                $enums[] = $item->toToc();
            } elseif ($item instanceof NamespaceToc) {
                $enums = array_merge($enums, $item->getEnumsToc());
            }
        }
        // Do not wrap in namespace if none exist or we're in top level namespace
        if (!$enums || $this->isVersionNamespace) {
            return $enums;
        }

        return [
            [
                'name' => $this->name,
                'uid'  => 'ns:' . $this->namespace,
                'items' => $enums,
            ],
        ];
    }

    protected function getOthersToc(): array
    {
        // Get a list of all other classes which are not gapic clients / enums or protobuf messages / enums
        $others = [];
        foreach ($this->items as $item) {
            if (
                $item instanceof ClassToc
                && !$item->isServiceClass()
                && !$item->isProtobufMessageClass()
                && !$item->isProtobufEnumClass()
            ) {
                $others[] = $item->toToc();
            } elseif ($item instanceof NamespaceToc) {
                $others = array_merge($others, $item->getOthersToc());
            }
        }
        // Do not wrap in namespace if none exist or we're in top level namespace
        if (!$others || $this->isVersionNamespace) {
            return $others;
        }

        return [
            [
                'name' => $this->name,
                'uid'  => 'ns:' . $this->namespace,
                'items' => $others,
            ],
        ];
    }
}
