<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\FirewallPolicyRule;

use UnexpectedValueException;

/**
 * The direction in which this rule applies.
 *
 * Protobuf type <code>google.cloud.compute.v1.FirewallPolicyRule.Direction</code>
 */
class Direction
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_DIRECTION = 0;</code>
     */
    const UNDEFINED_DIRECTION = 0;
    /**
     * Generated from protobuf enum <code>EGRESS = 432880501;</code>
     */
    const EGRESS = 432880501;
    /**
     * Generated from protobuf enum <code>INGRESS = 516931221;</code>
     */
    const INGRESS = 516931221;

    private static $valueToName = [
        self::UNDEFINED_DIRECTION => 'UNDEFINED_DIRECTION',
        self::EGRESS => 'EGRESS',
        self::INGRESS => 'INGRESS',
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
class_alias(Direction::class, \Google\Cloud\Compute\V1\FirewallPolicyRule_Direction::class);

