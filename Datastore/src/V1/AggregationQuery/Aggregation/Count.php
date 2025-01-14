<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/query.proto

namespace Google\Cloud\Datastore\V1\AggregationQuery\Aggregation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Count of entities that match the query.
 * The `COUNT(*)` aggregation function operates on the entire entity
 * so it does not require a field reference.
 *
 * Generated from protobuf message <code>google.datastore.v1.AggregationQuery.Aggregation.Count</code>
 */
class Count extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Optional constraint on the maximum number of entities to
     * count.
     * This provides a way to set an upper bound on the number of entities
     * to scan, limiting latency and cost.
     * Unspecified is interpreted as no bound.
     * If a zero value is provided, a count result of zero should always be
     * expected.
     * High-Level Example:
     * ```
     * AGGREGATE COUNT_UP_TO(1000) OVER ( SELECT * FROM k );
     * ```
     * Requires:
     * * Must be non-negative when present.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value up_to = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $up_to = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $up_to
     *           Optional. Optional constraint on the maximum number of entities to
     *           count.
     *           This provides a way to set an upper bound on the number of entities
     *           to scan, limiting latency and cost.
     *           Unspecified is interpreted as no bound.
     *           If a zero value is provided, a count result of zero should always be
     *           expected.
     *           High-Level Example:
     *           ```
     *           AGGREGATE COUNT_UP_TO(1000) OVER ( SELECT * FROM k );
     *           ```
     *           Requires:
     *           * Must be non-negative when present.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Optional constraint on the maximum number of entities to
     * count.
     * This provides a way to set an upper bound on the number of entities
     * to scan, limiting latency and cost.
     * Unspecified is interpreted as no bound.
     * If a zero value is provided, a count result of zero should always be
     * expected.
     * High-Level Example:
     * ```
     * AGGREGATE COUNT_UP_TO(1000) OVER ( SELECT * FROM k );
     * ```
     * Requires:
     * * Must be non-negative when present.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value up_to = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getUpTo()
    {
        return $this->up_to;
    }

    public function hasUpTo()
    {
        return isset($this->up_to);
    }

    public function clearUpTo()
    {
        unset($this->up_to);
    }

    /**
     * Returns the unboxed value from <code>getUpTo()</code>

     * Optional. Optional constraint on the maximum number of entities to
     * count.
     * This provides a way to set an upper bound on the number of entities
     * to scan, limiting latency and cost.
     * Unspecified is interpreted as no bound.
     * If a zero value is provided, a count result of zero should always be
     * expected.
     * High-Level Example:
     * ```
     * AGGREGATE COUNT_UP_TO(1000) OVER ( SELECT * FROM k );
     * ```
     * Requires:
     * * Must be non-negative when present.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value up_to = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string|null
     */
    public function getUpToValue()
    {
        return $this->readWrapperValue("up_to");
    }

    /**
     * Optional. Optional constraint on the maximum number of entities to
     * count.
     * This provides a way to set an upper bound on the number of entities
     * to scan, limiting latency and cost.
     * Unspecified is interpreted as no bound.
     * If a zero value is provided, a count result of zero should always be
     * expected.
     * High-Level Example:
     * ```
     * AGGREGATE COUNT_UP_TO(1000) OVER ( SELECT * FROM k );
     * ```
     * Requires:
     * * Must be non-negative when present.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value up_to = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setUpTo($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->up_to = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Optional. Optional constraint on the maximum number of entities to
     * count.
     * This provides a way to set an upper bound on the number of entities
     * to scan, limiting latency and cost.
     * Unspecified is interpreted as no bound.
     * If a zero value is provided, a count result of zero should always be
     * expected.
     * High-Level Example:
     * ```
     * AGGREGATE COUNT_UP_TO(1000) OVER ( SELECT * FROM k );
     * ```
     * Requires:
     * * Must be non-negative when present.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value up_to = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setUpToValue($var)
    {
        $this->writeWrapperValue("up_to", $var);
        return $this;}

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Count::class, \Google\Cloud\Datastore\V1\AggregationQuery_Aggregation_Count::class);

