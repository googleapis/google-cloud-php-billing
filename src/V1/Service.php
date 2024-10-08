<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/v1/cloud_catalog.proto

namespace Google\Cloud\Billing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encapsulates a single service in Google Cloud Platform.
 *
 * Generated from protobuf message <code>google.cloud.billing.v1.Service</code>
 */
class Service extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name for the service.
     * Example: "services/6F81-5844-456A"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The identifier for the service.
     * Example: "6F81-5844-456A"
     *
     * Generated from protobuf field <code>string service_id = 2;</code>
     */
    protected $service_id = '';
    /**
     * A human readable display name for this service.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    protected $display_name = '';
    /**
     * The business under which the service is offered.
     * Ex. "businessEntities/GCP", "businessEntities/Maps"
     *
     * Generated from protobuf field <code>string business_entity_name = 4;</code>
     */
    protected $business_entity_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name for the service.
     *           Example: "services/6F81-5844-456A"
     *     @type string $service_id
     *           The identifier for the service.
     *           Example: "6F81-5844-456A"
     *     @type string $display_name
     *           A human readable display name for this service.
     *     @type string $business_entity_name
     *           The business under which the service is offered.
     *           Ex. "businessEntities/GCP", "businessEntities/Maps"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\V1\CloudCatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name for the service.
     * Example: "services/6F81-5844-456A"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name for the service.
     * Example: "services/6F81-5844-456A"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The identifier for the service.
     * Example: "6F81-5844-456A"
     *
     * Generated from protobuf field <code>string service_id = 2;</code>
     * @return string
     */
    public function getServiceId()
    {
        return $this->service_id;
    }

    /**
     * The identifier for the service.
     * Example: "6F81-5844-456A"
     *
     * Generated from protobuf field <code>string service_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_id = $var;

        return $this;
    }

    /**
     * A human readable display name for this service.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * A human readable display name for this service.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The business under which the service is offered.
     * Ex. "businessEntities/GCP", "businessEntities/Maps"
     *
     * Generated from protobuf field <code>string business_entity_name = 4;</code>
     * @return string
     */
    public function getBusinessEntityName()
    {
        return $this->business_entity_name;
    }

    /**
     * The business under which the service is offered.
     * Ex. "businessEntities/GCP", "businessEntities/Maps"
     *
     * Generated from protobuf field <code>string business_entity_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessEntityName($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_entity_name = $var;

        return $this;
    }

}

