<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\ForwardingRule;

use UnexpectedValueException;

/**
 * The IP Version that will be used by this forwarding rule. Valid options are IPV4 or IPV6. This can only be specified for an external global forwarding rule.
 *
 * Protobuf type <code>google.cloud.compute.v1.ForwardingRule.IpVersion</code>
 */
class IpVersion
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_IP_VERSION = 0;</code>
     */
    const UNDEFINED_IP_VERSION = 0;
    /**
     * Generated from protobuf enum <code>IPV4 = 2254341;</code>
     */
    const IPV4 = 2254341;
    /**
     * Generated from protobuf enum <code>IPV6 = 2254343;</code>
     */
    const IPV6 = 2254343;
    /**
     * Generated from protobuf enum <code>UNSPECIFIED_VERSION = 21850000;</code>
     */
    const UNSPECIFIED_VERSION = 21850000;

    private static $valueToName = [
        self::UNDEFINED_IP_VERSION => 'UNDEFINED_IP_VERSION',
        self::IPV4 => 'IPV4',
        self::IPV6 => 'IPV6',
        self::UNSPECIFIED_VERSION => 'UNSPECIFIED_VERSION',
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
class_alias(IpVersion::class, \Google\Cloud\Compute\V1\ForwardingRule_IpVersion::class);

