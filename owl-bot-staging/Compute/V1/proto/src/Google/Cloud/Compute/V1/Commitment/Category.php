<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Commitment;

use UnexpectedValueException;

/**
 * The category of the commitment. Category MACHINE specifies commitments composed of machine resources such as VCPU or MEMORY, listed in resources. Category LICENSE specifies commitments composed of software licenses, listed in licenseResources. Note that only MACHINE commitments should have a Type specified.
 *
 * Protobuf type <code>google.cloud.compute.v1.Commitment.Category</code>
 */
class Category
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_CATEGORY = 0;</code>
     */
    const UNDEFINED_CATEGORY = 0;
    /**
     * Generated from protobuf enum <code>CATEGORY_UNSPECIFIED = 509189462;</code>
     */
    const CATEGORY_UNSPECIFIED = 509189462;
    /**
     * Generated from protobuf enum <code>LICENSE = 347869217;</code>
     */
    const LICENSE = 347869217;
    /**
     * Generated from protobuf enum <code>MACHINE = 469553191;</code>
     */
    const MACHINE = 469553191;

    private static $valueToName = [
        self::UNDEFINED_CATEGORY => 'UNDEFINED_CATEGORY',
        self::CATEGORY_UNSPECIFIED => 'CATEGORY_UNSPECIFIED',
        self::LICENSE => 'LICENSE',
        self::MACHINE => 'MACHINE',
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
class_alias(Category::class, \Google\Cloud\Compute\V1\Commitment_Category::class);

