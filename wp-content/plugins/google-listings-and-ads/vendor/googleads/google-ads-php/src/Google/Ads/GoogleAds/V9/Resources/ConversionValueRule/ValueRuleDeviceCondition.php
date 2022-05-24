<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/conversion_value_rule.proto

namespace Google\Ads\GoogleAds\V9\Resources\ConversionValueRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Condition on Device dimension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.resources.ConversionValueRule.ValueRuleDeviceCondition</code>
 */
class ValueRuleDeviceCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * Value for device type condition.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.enums.ValueRuleDeviceTypeEnum.ValueRuleDeviceType device_types = 1;</code>
     */
    private $device_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $device_types
     *           Value for device type condition.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Resources\ConversionValueRule::initOnce();
        parent::__construct($data);
    }

    /**
     * Value for device type condition.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.enums.ValueRuleDeviceTypeEnum.ValueRuleDeviceType device_types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeviceTypes()
    {
        return $this->device_types;
    }

    /**
     * Value for device type condition.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.enums.ValueRuleDeviceTypeEnum.ValueRuleDeviceType device_types = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeviceTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V9\Enums\ValueRuleDeviceTypeEnum\ValueRuleDeviceType::class);
        $this->device_types = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ValueRuleDeviceCondition::class, \Google\Ads\GoogleAds\V9\Resources\ConversionValueRule_ValueRuleDeviceCondition::class);

