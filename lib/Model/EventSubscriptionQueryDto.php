<?php
/**
 * EventSubscriptionQueryDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */

/**
 * Camunda Platform REST API
 *
 * OpenApi Spec for Camunda Platform REST API.
 *
 * OpenAPI spec version: 7.21.1-ee
 * 
 * Generated by: https://github.com/nik54rus/camunda-open-api.git
 * Camunda Codegen version: 3.0.56
 */


namespace Camunda\Client\Model;

use \ArrayAccess;
use \Camunda\Client\ObjectSerializer;

/**
 * EventSubscriptionQueryDto Class Doc Comment
 *
 * @category Class
 * @description A event subscription query which retrieves a list of event subscriptions
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */
class EventSubscriptionQueryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $CamundaModelName = 'EventSubscriptionQueryDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaTypes = [
        'event_subscription_id' => 'string',
        'event_name' => 'string',
        'event_type' => 'string',
        'execution_id' => 'string',
        'process_instance_id' => 'string',
        'activity_id' => 'string',
        'tenant_id_in' => 'string[]',
        'without_tenant_id' => 'bool',
        'include_event_subscriptions_without_tenant_id' => 'bool',
        'sorting' => '\Camunda\Client\Model\EventSubscriptionQueryDtoSorting[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaFormats = [
        'event_subscription_id' => null,
        'event_name' => null,
        'event_type' => null,
        'execution_id' => null,
        'process_instance_id' => null,
        'activity_id' => null,
        'tenant_id_in' => null,
        'without_tenant_id' => null,
        'include_event_subscriptions_without_tenant_id' => null,
        'sorting' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function CamundaTypes()
    {
        return self::$CamundaTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function CamundaFormats()
    {
        return self::$CamundaFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'event_subscription_id' => 'eventSubscriptionId',
        'event_name' => 'eventName',
        'event_type' => 'eventType',
        'execution_id' => 'executionId',
        'process_instance_id' => 'processInstanceId',
        'activity_id' => 'activityId',
        'tenant_id_in' => 'tenantIdIn',
        'without_tenant_id' => 'withoutTenantId',
        'include_event_subscriptions_without_tenant_id' => 'includeEventSubscriptionsWithoutTenantId',
        'sorting' => 'sorting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_subscription_id' => 'setEventSubscriptionId',
        'event_name' => 'setEventName',
        'event_type' => 'setEventType',
        'execution_id' => 'setExecutionId',
        'process_instance_id' => 'setProcessInstanceId',
        'activity_id' => 'setActivityId',
        'tenant_id_in' => 'setTenantIdIn',
        'without_tenant_id' => 'setWithoutTenantId',
        'include_event_subscriptions_without_tenant_id' => 'setIncludeEventSubscriptionsWithoutTenantId',
        'sorting' => 'setSorting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_subscription_id' => 'getEventSubscriptionId',
        'event_name' => 'getEventName',
        'event_type' => 'getEventType',
        'execution_id' => 'getExecutionId',
        'process_instance_id' => 'getProcessInstanceId',
        'activity_id' => 'getActivityId',
        'tenant_id_in' => 'getTenantIdIn',
        'without_tenant_id' => 'getWithoutTenantId',
        'include_event_subscriptions_without_tenant_id' => 'getIncludeEventSubscriptionsWithoutTenantId',
        'sorting' => 'getSorting'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$CamundaModelName;
    }

    const EVENT_TYPE_MESSAGE = 'message';
    const EVENT_TYPE_SIGNAL = 'signal';
    const EVENT_TYPE_COMPENSATE = 'compensate';
    const EVENT_TYPE_CONDITIONAL = 'conditional';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_MESSAGE,
            self::EVENT_TYPE_SIGNAL,
            self::EVENT_TYPE_COMPENSATE,
            self::EVENT_TYPE_CONDITIONAL,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['event_subscription_id'] = isset($data['event_subscription_id']) ? $data['event_subscription_id'] : null;
        $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['execution_id'] = isset($data['execution_id']) ? $data['execution_id'] : null;
        $this->container['process_instance_id'] = isset($data['process_instance_id']) ? $data['process_instance_id'] : null;
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
        $this->container['tenant_id_in'] = isset($data['tenant_id_in']) ? $data['tenant_id_in'] : null;
        $this->container['without_tenant_id'] = isset($data['without_tenant_id']) ? $data['without_tenant_id'] : null;
        $this->container['include_event_subscriptions_without_tenant_id'] = isset($data['include_event_subscriptions_without_tenant_id']) ? $data['include_event_subscriptions_without_tenant_id'] : null;
        $this->container['sorting'] = isset($data['sorting']) ? $data['sorting'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($this->container['event_type']) && !in_array($this->container['event_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'event_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets event_subscription_id
     *
     * @return string
     */
    public function getEventSubscriptionId()
    {
        return $this->container['event_subscription_id'];
    }

    /**
     * Sets event_subscription_id
     *
     * @param string $event_subscription_id The id of the event subscription.
     *
     * @return $this
     */
    public function setEventSubscriptionId($event_subscription_id)
    {
        $this->container['event_subscription_id'] = $event_subscription_id;

        return $this;
    }

    /**
     * Gets event_name
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string $event_name The name of the event this subscription belongs to as defined in the process model.
     *
     * @return $this
     */
    public function setEventName($event_name)
    {
        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type The type of the event subscription.
     *
     * @return $this
     */
    public function setEventType($event_type)
    {
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($event_type) && !in_array($event_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'event_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets execution_id
     *
     * @return string
     */
    public function getExecutionId()
    {
        return $this->container['execution_id'];
    }

    /**
     * Sets execution_id
     *
     * @param string $execution_id The execution that is subscribed on the referenced event.
     *
     * @return $this
     */
    public function setExecutionId($execution_id)
    {
        $this->container['execution_id'] = $execution_id;

        return $this;
    }

    /**
     * Gets process_instance_id
     *
     * @return string
     */
    public function getProcessInstanceId()
    {
        return $this->container['process_instance_id'];
    }

    /**
     * Sets process_instance_id
     *
     * @param string $process_instance_id The process instance this subscription belongs to.
     *
     * @return $this
     */
    public function setProcessInstanceId($process_instance_id)
    {
        $this->container['process_instance_id'] = $process_instance_id;

        return $this;
    }

    /**
     * Gets activity_id
     *
     * @return string
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     *
     * @param string $activity_id The identifier of the activity that this event subscription belongs to. This could for example be the id of a receive task.
     *
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets tenant_id_in
     *
     * @return string[]
     */
    public function getTenantIdIn()
    {
        return $this->container['tenant_id_in'];
    }

    /**
     * Sets tenant_id_in
     *
     * @param string[] $tenant_id_in Filter by a comma-separated list of tenant ids. Only select subscriptions that belong to one of the given tenant ids.
     *
     * @return $this
     */
    public function setTenantIdIn($tenant_id_in)
    {
        $this->container['tenant_id_in'] = $tenant_id_in;

        return $this;
    }

    /**
     * Gets without_tenant_id
     *
     * @return bool
     */
    public function getWithoutTenantId()
    {
        return $this->container['without_tenant_id'];
    }

    /**
     * Sets without_tenant_id
     *
     * @param bool $without_tenant_id Only select subscriptions which have no tenant id. Value may only be `true`, as `false` is the default behavior.
     *
     * @return $this
     */
    public function setWithoutTenantId($without_tenant_id)
    {
        $this->container['without_tenant_id'] = $without_tenant_id;

        return $this;
    }

    /**
     * Gets include_event_subscriptions_without_tenant_id
     *
     * @return bool
     */
    public function getIncludeEventSubscriptionsWithoutTenantId()
    {
        return $this->container['include_event_subscriptions_without_tenant_id'];
    }

    /**
     * Sets include_event_subscriptions_without_tenant_id
     *
     * @param bool $include_event_subscriptions_without_tenant_id Select event subscriptions which have no tenant id. Can be used in combination with tenantIdIn parameter. Value may only be `true`, as `false` is the default behavior.
     *
     * @return $this
     */
    public function setIncludeEventSubscriptionsWithoutTenantId($include_event_subscriptions_without_tenant_id)
    {
        $this->container['include_event_subscriptions_without_tenant_id'] = $include_event_subscriptions_without_tenant_id;

        return $this;
    }

    /**
     * Gets sorting
     *
     * @return \Camunda\Client\Model\EventSubscriptionQueryDtoSorting[]
     */
    public function getSorting()
    {
        return $this->container['sorting'];
    }

    /**
     * Sets sorting
     *
     * @param \Camunda\Client\Model\EventSubscriptionQueryDtoSorting[] $sorting Apply sorting of the result
     *
     * @return $this
     */
    public function setSorting($sorting)
    {
        $this->container['sorting'] = $sorting;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
