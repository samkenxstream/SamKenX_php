<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for UndeleteService method.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.UndeleteServiceRequest</code>
 */
class UndeleteServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the service. See the [overview](/service-management/overview)
     * for naming requirements. For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_name
     *           Required. The name of the service. See the [overview](/service-management/overview)
     *           for naming requirements. For example: `example.googleapis.com`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the service. See the [overview](/service-management/overview)
     * for naming requirements. For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * Required. The name of the service. See the [overview](/service-management/overview)
     * for naming requirements. For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

}

