<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1\HumanReviewStatus;

use UnexpectedValueException;

/**
 * The final state of human review on a processed document.
 *
 * Protobuf type <code>google.cloud.documentai.v1.HumanReviewStatus.State</code>
 */
class State
{
    /**
     * Human review state is unspecified. Most likely due to an internal error.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Human review is skipped for the document. This can happen because human
     * review is not enabled on the processor or the processing request has
     * been set to skip this document.
     *
     * Generated from protobuf enum <code>SKIPPED = 1;</code>
     */
    const SKIPPED = 1;
    /**
     * Human review validation is triggered and passed, so no review is needed.
     *
     * Generated from protobuf enum <code>VALIDATION_PASSED = 2;</code>
     */
    const VALIDATION_PASSED = 2;
    /**
     * Human review validation is triggered and the document is under review.
     *
     * Generated from protobuf enum <code>IN_PROGRESS = 3;</code>
     */
    const IN_PROGRESS = 3;
    /**
     * Some error happened during triggering human review, see the
     * [state_message] for details.
     *
     * Generated from protobuf enum <code>ERROR = 4;</code>
     */
    const ERROR = 4;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::SKIPPED => 'SKIPPED',
        self::VALIDATION_PASSED => 'VALIDATION_PASSED',
        self::IN_PROGRESS => 'IN_PROGRESS',
        self::ERROR => 'ERROR',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\DocumentAI\V1\HumanReviewStatus_State::class);

