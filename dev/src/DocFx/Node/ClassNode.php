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

namespace Google\Cloud\Dev\DocFx\Node;

use SimpleXMLElement;

class ClassNode
{
    use DocblockTrait;
    use NameTrait;

    private $childNode;
    private array $protoPackages = [];

    public function __construct(
        private SimpleXMLElement $xmlNode
    ) {}

    public function isProtobufEnumClass(): bool
    {
        if ($this->getExtends()) {
            return false;
        }

        if (empty($this->xmlNode->docblock)) {
            return false;
        }

        if (empty($this->xmlNode->docblock->{'long-description'})) {
            if (empty($this->xmlNode->docblock->{'description'})) {
                return false;
            }
            $description = $this->xmlNode->docblock->{'description'};
        } else {
            $description = (string) $this->xmlNode->docblock->{'long-description'};
        }

        // check that last line of long-description starts with "Protobuf type..."
        $descriptionParts = explode("\n", $description);
        $lastDescriptionLine = array_pop($descriptionParts);
        return 0 === strpos($lastDescriptionLine, 'Protobuf type');
    }

    public function isGapicEnumClass(): bool
    {
        // returns true if the class extends \Google\Protobuf\Internal\Message
        return false !== strpos($this->getNamespace(), '\Enums\\');
    }

    public function isServiceClass(): bool
    {
        // returns true if the class extends a generated GAPIC client
        if ($extends = $this->getExtends()) {
            return 'GapicClient' === substr($extends, -11);
        }
        return false;
    }

    public function getStatus(): string
    {
        if ($this->xmlNode->docblock) {
            foreach ($this->xmlNode->docblock->tag as $tag) {
                if ((string) $tag['name'] === 'deprecated') {
                    return 'deprecated';
                }
            }
        }

        // If the namespace contains a segment like "V1alpha1/" or "/V1p1beta1/"
        $version = $this->getVersion();
        if (str_contains($version, 'beta') || str_contains($version, 'alpha')) {
            return 'beta';
        }

        return '';
    }

    public function getVersion(): string
    {
        // Matches all known combinations of version numbers:
        //   - V1
        //   - V1alpha
        //   - V1alpha1
        //   - V1beta
        //   - V1beta1
        //   - V1p1beta
        //   - V1p1beta1
        $regex = '/\\\(V[0-9]?(p[0-9])?(beta|alpha)?[0-9]?)?(\\\.*)?$/';
        if (preg_match($regex, $this->getNamespace(), $matches)) {
            return $matches[1];
        }

        return '';
    }

    public function getExtends(): string
    {
        return (string) $this->xmlNode->extends;
    }

    public function isInternal(): bool
    {
        if (!$this->xmlNode->docblock) {
            return false;
        }

        foreach ($this->xmlNode->docblock->tag as $tag) {
            if ((string) $tag['name'] === 'internal') {
                return true;
            }
        }

        return false;
    }

    public function getMethods(): array
    {
        $methods = [];
        foreach ($this->xmlNode->method as $methodNode) {
            $method = new MethodNode($methodNode, $this->protoPackages);
            if ($method->isPublic() && !$method->isInherited()) {
                $methods[] = $method;
            }
        }

        if ($this->childNode) {
            foreach ($this->childNode->getMethods() as $childMethod) {
                $childMethod->setParentNode($this);
                $methods[] = $childMethod;
            }
        }

        return $methods;
    }

    public function getConstants(): array
    {
        $constants = [];
        foreach ($this->xmlNode->constant as $constantNode) {
            $constant = new ConstantNode($constantNode, $this->protoPackages);
            if ($constant->isPublic() && !$constant->isInherited()) {
                $constants[] = $constant;
            }
        }

        if ($this->childNode) {
            foreach ($this->childNode->getConstants() as $childConstant) {
                $childConstant->setParentNode($this);
                $constants[] = $childConstant;
            }
        }

        return $constants;
    }

    public function getImplements(): array
    {
        return (array) $this->xmlNode->implements;
    }

    public function setChildNode(ClassNode $childNode)
    {
        $this->childNode = $childNode;
    }

    public function getProtoPackage(): ?string
    {
        $constants = $this->getConstants();
        foreach ($constants as $constant) {
            if ($constant->getName() === 'SERVICE_NAME') {
                // pop the service from the end to get the package name
                $package = trim($constant->getValue(), '\'');
                return substr($package, 0, strrpos($package, '.'));
            }
        }
        return null;
    }

    public function setProtoPackages(array $protoPackages)
    {
        $this->protoPackages = $protoPackages;
    }
}
