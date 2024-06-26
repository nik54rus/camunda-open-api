<?php
/**
 * ExternalTaskQueryDto
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
 * ExternalTaskQueryDto Class Doc Comment
 *
 * @category Class
 * @description A JSON object with the following properties:
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */
class ExternalTaskQueryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $CamundaModelName = 'ExternalTaskQueryDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaTypes = [
        'external_task_id' => 'string',
        'external_task_id_in' => 'string[]',
        'topic_name' => 'string',
        'worker_id' => 'string',
        'locked' => 'bool',
        'not_locked' => 'bool',
        'with_retries_left' => 'bool',
        'no_retries_left' => 'bool',
        'lock_expiration_after' => '\DateTime',
        'lock_expiration_before' => '\DateTime',
        'activity_id' => 'string',
        'activity_id_in' => 'string[]',
        'execution_id' => 'string',
        'process_instance_id' => 'string',
        'process_instance_id_in' => 'string[]',
        'process_definition_id' => 'string',
        'tenant_id_in' => 'string[]',
        'active' => 'bool',
        'suspended' => 'bool',
        'priority_higher_than_or_equals' => 'int',
        'priority_lower_than_or_equals' => 'int',
        'sorting' => '\Camunda\Client\Model\ExternalTaskQueryDtoSorting[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaFormats = [
        'external_task_id' => null,
        'external_task_id_in' => null,
        'topic_name' => null,
        'worker_id' => null,
        'locked' => null,
        'not_locked' => null,
        'with_retries_left' => null,
        'no_retries_left' => null,
        'lock_expiration_after' => 'date-time',
        'lock_expiration_before' => 'date-time',
        'activity_id' => null,
        'activity_id_in' => null,
        'execution_id' => null,
        'process_instance_id' => null,
        'process_instance_id_in' => null,
        'process_definition_id' => null,
        'tenant_id_in' => null,
        'active' => null,
        'suspended' => null,
        'priority_higher_than_or_equals' => 'int64',
        'priority_lower_than_or_equals' => 'int64',
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
        'external_task_id' => 'externalTaskId',
        'external_task_id_in' => 'externalTaskIdIn',
        'topic_name' => 'topicName',
        'worker_id' => 'workerId',
        'locked' => 'locked',
        'not_locked' => 'notLocked',
        'with_retries_left' => 'withRetriesLeft',
        'no_retries_left' => 'noRetriesLeft',
        'lock_expiration_after' => 'lockExpirationAfter',
        'lock_expiration_before' => 'lockExpirationBefore',
        'activity_id' => 'activityId',
        'activity_id_in' => 'activityIdIn',
        'execution_id' => 'executionId',
        'process_instance_id' => 'processInstanceId',
        'process_instance_id_in' => 'processInstanceIdIn',
        'process_definition_id' => 'processDefinitionId',
        'tenant_id_in' => 'tenantIdIn',
        'active' => 'active',
        'suspended' => 'suspended',
        'priority_higher_than_or_equals' => 'priorityHigherThanOrEquals',
        'priority_lower_than_or_equals' => 'priorityLowerThanOrEquals',
        'sorting' => 'sorting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_task_id' => 'setExternalTaskId',
        'external_task_id_in' => 'setExternalTaskIdIn',
        'topic_name' => 'setTopicName',
        'worker_id' => 'setWorkerId',
        'locked' => 'setLocked',
        'not_locked' => 'setNotLocked',
        'with_retries_left' => 'setWithRetriesLeft',
        'no_retries_left' => 'setNoRetriesLeft',
        'lock_expiration_after' => 'setLockExpirationAfter',
        'lock_expiration_before' => 'setLockExpirationBefore',
        'activity_id' => 'setActivityId',
        'activity_id_in' => 'setActivityIdIn',
        'execution_id' => 'setExecutionId',
        'process_instance_id' => 'setProcessInstanceId',
        'process_instance_id_in' => 'setProcessInstanceIdIn',
        'process_definition_id' => 'setProcessDefinitionId',
        'tenant_id_in' => 'setTenantIdIn',
        'active' => 'setActive',
        'suspended' => 'setSuspended',
        'priority_higher_than_or_equals' => 'setPriorityHigherThanOrEquals',
        'priority_lower_than_or_equals' => 'setPriorityLowerThanOrEquals',
        'sorting' => 'setSorting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_task_id' => 'getExternalTaskId',
        'external_task_id_in' => 'getExternalTaskIdIn',
        'topic_name' => 'getTopicName',
        'worker_id' => 'getWorkerId',
        'locked' => 'getLocked',
        'not_locked' => 'getNotLocked',
        'with_retries_left' => 'getWithRetriesLeft',
        'no_retries_left' => 'getNoRetriesLeft',
        'lock_expiration_after' => 'getLockExpirationAfter',
        'lock_expiration_before' => 'getLockExpirationBefore',
        'activity_id' => 'getActivityId',
        'activity_id_in' => 'getActivityIdIn',
        'execution_id' => 'getExecutionId',
        'process_instance_id' => 'getProcessInstanceId',
        'process_instance_id_in' => 'getProcessInstanceIdIn',
        'process_definition_id' => 'getProcessDefinitionId',
        'tenant_id_in' => 'getTenantIdIn',
        'active' => 'getActive',
        'suspended' => 'getSuspended',
        'priority_higher_than_or_equals' => 'getPriorityHigherThanOrEquals',
        'priority_lower_than_or_equals' => 'getPriorityLowerThanOrEquals',
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
        $this->container['external_task_id'] = isset($data['external_task_id']) ? $data['external_task_id'] : null;
        $this->container['external_task_id_in'] = isset($data['external_task_id_in']) ? $data['external_task_id_in'] : null;
        $this->container['topic_name'] = isset($data['topic_name']) ? $data['topic_name'] : null;
        $this->container['worker_id'] = isset($data['worker_id']) ? $data['worker_id'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['not_locked'] = isset($data['not_locked']) ? $data['not_locked'] : null;
        $this->container['with_retries_left'] = isset($data['with_retries_left']) ? $data['with_retries_left'] : null;
        $this->container['no_retries_left'] = isset($data['no_retries_left']) ? $data['no_retries_left'] : null;
        $this->container['lock_expiration_after'] = isset($data['lock_expiration_after']) ? $data['lock_expiration_after'] : null;
        $this->container['lock_expiration_before'] = isset($data['lock_expiration_before']) ? $data['lock_expiration_before'] : null;
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
        $this->container['activity_id_in'] = isset($data['activity_id_in']) ? $data['activity_id_in'] : null;
        $this->container['execution_id'] = isset($data['execution_id']) ? $data['execution_id'] : null;
        $this->container['process_instance_id'] = isset($data['process_instance_id']) ? $data['process_instance_id'] : null;
        $this->container['process_instance_id_in'] = isset($data['process_instance_id_in']) ? $data['process_instance_id_in'] : null;
        $this->container['process_definition_id'] = isset($data['process_definition_id']) ? $data['process_definition_id'] : null;
        $this->container['tenant_id_in'] = isset($data['tenant_id_in']) ? $data['tenant_id_in'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['suspended'] = isset($data['suspended']) ? $data['suspended'] : null;
        $this->container['priority_higher_than_or_equals'] = isset($data['priority_higher_than_or_equals']) ? $data['priority_higher_than_or_equals'] : null;
        $this->container['priority_lower_than_or_equals'] = isset($data['priority_lower_than_or_equals']) ? $data['priority_lower_than_or_equals'] : null;
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
     * Gets external_task_id
     *
     * @return string
     */
    public function getExternalTaskId()
    {
        return $this->container['external_task_id'];
    }

    /**
     * Sets external_task_id
     *
     * @param string $external_task_id Filter by an external task's id.
     *
     * @return $this
     */
    public function setExternalTaskId($external_task_id)
    {
        $this->container['external_task_id'] = $external_task_id;

        return $this;
    }

    /**
     * Gets external_task_id_in
     *
     * @return string[]
     */
    public function getExternalTaskIdIn()
    {
        return $this->container['external_task_id_in'];
    }

    /**
     * Sets external_task_id_in
     *
     * @param string[] $external_task_id_in Filter by the comma-separated list of external task ids.
     *
     * @return $this
     */
    public function setExternalTaskIdIn($external_task_id_in)
    {
        $this->container['external_task_id_in'] = $external_task_id_in;

        return $this;
    }

    /**
     * Gets topic_name
     *
     * @return string
     */
    public function getTopicName()
    {
        return $this->container['topic_name'];
    }

    /**
     * Sets topic_name
     *
     * @param string $topic_name Filter by an external task topic.
     *
     * @return $this
     */
    public function setTopicName($topic_name)
    {
        $this->container['topic_name'] = $topic_name;

        return $this;
    }

    /**
     * Gets worker_id
     *
     * @return string
     */
    public function getWorkerId()
    {
        return $this->container['worker_id'];
    }

    /**
     * Sets worker_id
     *
     * @param string $worker_id Filter by the id of the worker that the task was most recently locked by.
     *
     * @return $this
     */
    public function setWorkerId($worker_id)
    {
        $this->container['worker_id'] = $worker_id;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return bool
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param bool $locked Only include external tasks that are currently locked (i.e., they have a lock time and it has not expired). Value may only be `true`, as `false` matches any external task.
     *
     * @return $this
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets not_locked
     *
     * @return bool
     */
    public function getNotLocked()
    {
        return $this->container['not_locked'];
    }

    /**
     * Sets not_locked
     *
     * @param bool $not_locked Only include external tasks that are currently not locked (i.e., they have no lock or it has expired). Value may only be `true`, as `false` matches any external task.
     *
     * @return $this
     */
    public function setNotLocked($not_locked)
    {
        $this->container['not_locked'] = $not_locked;

        return $this;
    }

    /**
     * Gets with_retries_left
     *
     * @return bool
     */
    public function getWithRetriesLeft()
    {
        return $this->container['with_retries_left'];
    }

    /**
     * Sets with_retries_left
     *
     * @param bool $with_retries_left Only include external tasks that have a positive (&gt; 0) number of retries (or `null`). Value may only be `true`, as `false` matches any external task.
     *
     * @return $this
     */
    public function setWithRetriesLeft($with_retries_left)
    {
        $this->container['with_retries_left'] = $with_retries_left;

        return $this;
    }

    /**
     * Gets no_retries_left
     *
     * @return bool
     */
    public function getNoRetriesLeft()
    {
        return $this->container['no_retries_left'];
    }

    /**
     * Sets no_retries_left
     *
     * @param bool $no_retries_left Only include external tasks that have 0 retries. Value may only be `true`, as `false` matches any external task.
     *
     * @return $this
     */
    public function setNoRetriesLeft($no_retries_left)
    {
        $this->container['no_retries_left'] = $no_retries_left;

        return $this;
    }

    /**
     * Gets lock_expiration_after
     *
     * @return \DateTime
     */
    public function getLockExpirationAfter()
    {
        return $this->container['lock_expiration_after'];
    }

    /**
     * Sets lock_expiration_after
     *
     * @param \DateTime $lock_expiration_after Restrict to external tasks that have a lock that expires after a given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
     *
     * @return $this
     */
    public function setLockExpirationAfter($lock_expiration_after)
    {
        $this->container['lock_expiration_after'] = $lock_expiration_after;

        return $this;
    }

    /**
     * Gets lock_expiration_before
     *
     * @return \DateTime
     */
    public function getLockExpirationBefore()
    {
        return $this->container['lock_expiration_before'];
    }

    /**
     * Sets lock_expiration_before
     *
     * @param \DateTime $lock_expiration_before Restrict to external tasks that have a lock that expires before a given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
     *
     * @return $this
     */
    public function setLockExpirationBefore($lock_expiration_before)
    {
        $this->container['lock_expiration_before'] = $lock_expiration_before;

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
     * @param string $activity_id Filter by the id of the activity that an external task is created for.
     *
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets activity_id_in
     *
     * @return string[]
     */
    public function getActivityIdIn()
    {
        return $this->container['activity_id_in'];
    }

    /**
     * Sets activity_id_in
     *
     * @param string[] $activity_id_in Filter by the comma-separated list of ids of the activities that an external task is created for.
     *
     * @return $this
     */
    public function setActivityIdIn($activity_id_in)
    {
        $this->container['activity_id_in'] = $activity_id_in;

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
     * @param string $execution_id Filter by the id of the execution that an external task belongs to.
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
     * @param string $process_instance_id Filter by the id of the process instance that an external task belongs to.
     *
     * @return $this
     */
    public function setProcessInstanceId($process_instance_id)
    {
        $this->container['process_instance_id'] = $process_instance_id;

        return $this;
    }

    /**
     * Gets process_instance_id_in
     *
     * @return string[]
     */
    public function getProcessInstanceIdIn()
    {
        return $this->container['process_instance_id_in'];
    }

    /**
     * Sets process_instance_id_in
     *
     * @param string[] $process_instance_id_in Filter by a comma-separated list of process instance ids that an external task may belong to.
     *
     * @return $this
     */
    public function setProcessInstanceIdIn($process_instance_id_in)
    {
        $this->container['process_instance_id_in'] = $process_instance_id_in;

        return $this;
    }

    /**
     * Gets process_definition_id
     *
     * @return string
     */
    public function getProcessDefinitionId()
    {
        return $this->container['process_definition_id'];
    }

    /**
     * Sets process_definition_id
     *
     * @param string $process_definition_id Filter by the id of the process definition that an external task belongs to.
     *
     * @return $this
     */
    public function setProcessDefinitionId($process_definition_id)
    {
        $this->container['process_definition_id'] = $process_definition_id;

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
     * @param string[] $tenant_id_in Filter by a comma-separated list of tenant ids. An external task must have one of the given tenant ids.
     *
     * @return $this
     */
    public function setTenantIdIn($tenant_id_in)
    {
        $this->container['tenant_id_in'] = $tenant_id_in;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active Only include active tasks. Value may only be `true`, as `false` matches any external task.
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets suspended
     *
     * @return bool
     */
    public function getSuspended()
    {
        return $this->container['suspended'];
    }

    /**
     * Sets suspended
     *
     * @param bool $suspended Only include suspended tasks. Value may only be `true`, as `false` matches any external task.
     *
     * @return $this
     */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;

        return $this;
    }

    /**
     * Gets priority_higher_than_or_equals
     *
     * @return int
     */
    public function getPriorityHigherThanOrEquals()
    {
        return $this->container['priority_higher_than_or_equals'];
    }

    /**
     * Sets priority_higher_than_or_equals
     *
     * @param int $priority_higher_than_or_equals Only include jobs with a priority higher than or equal to the given value. Value must be a valid `long` value.
     *
     * @return $this
     */
    public function setPriorityHigherThanOrEquals($priority_higher_than_or_equals)
    {
        $this->container['priority_higher_than_or_equals'] = $priority_higher_than_or_equals;

        return $this;
    }

    /**
     * Gets priority_lower_than_or_equals
     *
     * @return int
     */
    public function getPriorityLowerThanOrEquals()
    {
        return $this->container['priority_lower_than_or_equals'];
    }

    /**
     * Sets priority_lower_than_or_equals
     *
     * @param int $priority_lower_than_or_equals Only include jobs with a priority lower than or equal to the given value. Value must be a valid `long` value.
     *
     * @return $this
     */
    public function setPriorityLowerThanOrEquals($priority_lower_than_or_equals)
    {
        $this->container['priority_lower_than_or_equals'] = $priority_lower_than_or_equals;

        return $this;
    }

    /**
     * Gets sorting
     *
     * @return \Camunda\Client\Model\ExternalTaskQueryDtoSorting[]
     */
    public function getSorting()
    {
        return $this->container['sorting'];
    }

    /**
     * Sets sorting
     *
     * @param \Camunda\Client\Model\ExternalTaskQueryDtoSorting[] $sorting A JSON array of criteria to sort the result by. Each element of the array is a JSON object that                     specifies one ordering. The position in the array identifies the rank of an ordering, i.e., whether                     it is primary, secondary, etc. The ordering objects have the following properties:                      **Note:** The `sorting` properties will not be applied to the External Task count query.
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
