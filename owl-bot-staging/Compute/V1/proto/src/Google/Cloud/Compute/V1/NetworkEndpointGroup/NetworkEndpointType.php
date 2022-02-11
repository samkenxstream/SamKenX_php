<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NetworkEndpointGroup;

use UnexpectedValueException;

/**
 * Type of network endpoints in this network endpoint group. Can be one of GCE_VM_IP_PORT, NON_GCP_PRIVATE_IP_PORT, INTERNET_FQDN_PORT, INTERNET_IP_PORT, SERVERLESS, PRIVATE_SERVICE_CONNECT.
 *
 * Protobuf type <code>google.cloud.compute.v1.NetworkEndpointGroup.NetworkEndpointType</code>
 */
class NetworkEndpointType
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_NETWORK_ENDPOINT_TYPE = 0;</code>
     */
    const UNDEFINED_NETWORK_ENDPOINT_TYPE = 0;
    /**
     * The network endpoint is represented by an IP address.
     *
     * Generated from protobuf enum <code>GCE_VM_IP = 401880793;</code>
     */
    const GCE_VM_IP = 401880793;
    /**
     * The network endpoint is represented by IP address and port pair.
     *
     * Generated from protobuf enum <code>GCE_VM_IP_PORT = 501838375;</code>
     */
    const GCE_VM_IP_PORT = 501838375;
    /**
     * The network endpoint is represented by fully qualified domain name and port.
     *
     * Generated from protobuf enum <code>INTERNET_FQDN_PORT = 404154477;</code>
     */
    const INTERNET_FQDN_PORT = 404154477;
    /**
     * The network endpoint is represented by an internet IP address and port.
     *
     * Generated from protobuf enum <code>INTERNET_IP_PORT = 477719963;</code>
     */
    const INTERNET_IP_PORT = 477719963;
    /**
     * The network endpoint is represented by an IP address and port. The endpoint belongs to a VM or pod running in a customer's on-premises.
     *
     * Generated from protobuf enum <code>NON_GCP_PRIVATE_IP_PORT = 336447968;</code>
     */
    const NON_GCP_PRIVATE_IP_PORT = 336447968;
    /**
     * The network endpoint is either public Google APIs or services exposed by other GCP Project with a Service Attachment. The connection is set up by private service connect
     *
     * Generated from protobuf enum <code>PRIVATE_SERVICE_CONNECT = 48134724;</code>
     */
    const PRIVATE_SERVICE_CONNECT = 48134724;
    /**
     * The network endpoint is handled by specified serverless infrastructure.
     *
     * Generated from protobuf enum <code>SERVERLESS = 270492508;</code>
     */
    const SERVERLESS = 270492508;

    private static $valueToName = [
        self::UNDEFINED_NETWORK_ENDPOINT_TYPE => 'UNDEFINED_NETWORK_ENDPOINT_TYPE',
        self::GCE_VM_IP => 'GCE_VM_IP',
        self::GCE_VM_IP_PORT => 'GCE_VM_IP_PORT',
        self::INTERNET_FQDN_PORT => 'INTERNET_FQDN_PORT',
        self::INTERNET_IP_PORT => 'INTERNET_IP_PORT',
        self::NON_GCP_PRIVATE_IP_PORT => 'NON_GCP_PRIVATE_IP_PORT',
        self::PRIVATE_SERVICE_CONNECT => 'PRIVATE_SERVICE_CONNECT',
        self::SERVERLESS => 'SERVERLESS',
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
class_alias(NetworkEndpointType::class, \Google\Cloud\Compute\V1\NetworkEndpointGroup_NetworkEndpointType::class);

