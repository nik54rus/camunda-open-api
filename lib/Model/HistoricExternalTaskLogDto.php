<?php
/**
 * HistoricExternalTaskLogDto
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
 * HistoricExternalTaskLogDto Class Doc Comment
 *
 * @category Class
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */
class HistoricExternalTaskLogDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $CamundaModelName = 'HistoricExternalTaskLogDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaTypes = [
        'id' => 'string',
        'external_task_id' => 'string',
        'timestamp' => '\DateTime',
        'topic_name' => 'string',
        'worker_id' => 'string',
        'retries' => 'int',
        'priority' => 'int',
        'error_message' => 'string',
        'activity_id' => 'string',
        'activity_instance_id' => 'string',
        'execution_id' => 'string',
        'process_instance_id' => 'string',
        'process_definition_id' => 'string',
        'process_definition_key' => 'string',
        'tenant_id' => 'string',
        'creation_log' => 'bool',
        'failure_log' => 'bool',
        'success_log' => 'bool',
        'deletion_log' => 'bool',
        'removal_time' => '\DateTime',
        'root_process_instance_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaFormats = [
        'id' => null,
        'external_task_id' => null,
        'timestamp' => 'date-time',
        'topic_name' => null,
        'worker_id' => null,
        'retries' => 'int32',
        'priority' => 'int64',
        'error_message' => null,
        'activity_id' => null,
        'activity_instance_id' => null,
        'execution_id' => null,
        'process_instance_id' => null,
        'process_definition_id' => null,
        'process_definition_key' => null,
        'tenant_id' => null,
        'creation_log' => null,
        'failure_log' => null,
        'success_log' => null,
        'deletion_log' => null,
        'removal_time' => 'date-time',
        'root_process_instance_id' => null
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
        'id' => 'id',
        'external_task_id' => 'externalTaskId',
        'timestamp' => 'timestamp',
        'topic_name' => 'topicName',
        'worker_id' => 'workerId',
        'retries' => 'retries',
        'priority' => 'priority',
        'error_message' => 'errorMessage',
        'activity_id' => 'activityId',
        'activity_instance_id' => 'activityInstanceId',
        'execution_id' => 'executionId',
        'process_instance_id' => 'processInstanceId',
        'process_definition_id' => 'processDefinitionId',
        'process_definition_key' => 'processDefinitionKey',
        'tenant_id' => 'tenantId',
        'creation_log' => 'creationLog',
        'failure_log' => 'failureLog',
        'success_log' => 'successLog',
        'deletion_log' => 'deletionLog',
        'removal_time' => 'removalTime',
        'root_process_instance_id' => 'rootProcessInstanceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'external_task_id' => 'setExternalTaskId',
        'timestamp' => 'setTimestamp',
        'topic_name' => 'setTopicName',
        'worker_id' => 'setWorkerId',
        'retries' => 'setRetries',
        'priority' => 'setPriority',
        'error_message' => 'setErrorMessage',
        'activity_id' => 'setActivityId',
        'activity_instance_id' => 'setActivityInstanceId',
        'execution_id' => 'setExecutionId',
        'process_instance_id' => 'setProcessInstanceId',
        'process_definition_id' => 'setProcessDefinitionId',
        'process_definition_key' => 'setProcessDefinitionKey',
        'tenant_id' => 'setTenantId',
        'creation_log' => 'setCreationLog',
        'failure_log' => 'setFailureLog',
        'success_log' => 'setSuccessLog',
        'deletion_log' => 'setDeletionLog',
        'removal_time' => 'setRemovalTime',
        'root_process_instance_id' => 'setRootProcessInstanceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'external_task_id' => 'getExternalTaskId',
        'timestamp' => 'getTimestamp',
        'topic_name' => 'getTopicName',
        'worker_id' => 'getWorkerId',
        'retries' => 'getRetries',
        'priority' => 'getPriority',
        'error_message' => 'getErrorMessage',
        'activity_id' => 'getActivityId',
        'activity_instance_id' => 'getActivityInstanceId',
        'execution_id' => 'getExecutionId',
        'process_instance_id' => 'getProcessInstanceId',
        'process_definition_id' => 'getProcessDefinitionId',
        'process_definition_key' => 'getProcessDefinitionKey',
        'tenant_id' => 'getTenantId',
        'creation_log' => 'getCreationLog',
        'failure_log' => 'getFailureLog',
        'success_log' => 'getSuccessLog',
        'deletion_log' => 'getDeletionLog',
        'removal_time' => 'getRemovalTime',
        'root_process_instance_id' => 'getRootProcessInstanceId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['external_task_id'] = isset($data['external_task_id']) ? $data['external_task_id'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['topic_name'] = isset($data['topic_name']) ? $data['topic_name'] : null;
        $this->container['worker_id'] = isset($data['worker_id']) ? $data['worker_id'] : null;
        $this->container['retries'] = isset($data['retries']) ? $data['retries'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
        $this->container['activity_instance_id'] = isset($data['activity_instance_id']) ? $data['activity_instance_id'] : null;
        $this->container['execution_id'] = isset($data['execution_id']) ? $data['execution_id'] : null;
        $this->container['process_instance_id'] = isset($data['process_instance_id']) ? $data['process_instance_id'] : null;
        $this->container['process_definition_id'] = isset($data['process_definition_id']) ? $data['process_definition_id'] : null;
        $this->container['process_definition_key'] = isset($data['process_definition_key']) ? $data['process_definition_key'] : null;
        $this->container['tenant_id'] = isset($data['tenant_id']) ? $data['tenant_id'] : null;
        $this->container['creation_log'] = isset($data['creation_log']) ? $data['creation_log'] : null;
        $this->container['failure_log'] = isset($data['failure_log']) ? $data['failure_log'] : null;
        $this->container['success_log'] = isset($data['success_log']) ? $data['success_log'] : null;
        $this->container['deletion_log'] = isset($data['deletion_log']) ? $data['deletion_log'] : null;
        $this->container['removal_time'] = isset($data['removal_time']) ? $data['removal_time'] : null;
        $this->container['root_process_instance_id'] = isset($data['root_process_instance_id']) ? $data['root_process_instance_id'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The id of the log entry.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string $external_task_id The id of the external task.
     *
     * @return $this
     */
    public function setExternalTaskId($external_task_id)
    {
        $this->container['external_task_id'] = $external_task_id;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp The time when the log entry has been written.
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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
     * @param string $topic_name The topic name of the associated external task.
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
     * @param string $worker_id The id of the worker that posessed the most recent lock.
     *
     * @return $this
     */
    public function setWorkerId($worker_id)
    {
        $this->container['worker_id'] = $worker_id;

        return $this;
    }

    /**
     * Gets retries
     *
     * @return int
     */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
     * Sets retries
     *
     * @param int $retries The number of retries the associated external task has left.
     *
     * @return $this
     */
    public function setRetries($retries)
    {
        $this->container['retries'] = $retries;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority The execution priority the external task had when the log entry was created.
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string $error_message The message of the error that occurred by executing the associated external task.
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

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
     * @param string $activity_id The id of the activity on which the associated external task was created.
     *
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets activity_instance_id
     *
     * @return string
     */
    public function getActivityInstanceId()
    {
        return $this->container['activity_instance_id'];
    }

    /**
     * Sets activity_instance_id
     *
     * @param string $activity_instance_id The id of the activity instance on which the associated external task was created.
     *
     * @return $this
     */
    public function setActivityInstanceId($activity_instance_id)
    {
        $this->container['activity_instance_id'] = $activity_instance_id;

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
     * @param string $execution_id The execution id on which the associated external task was created.
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
     * @param string $process_instance_id The id of the process instance on which the associated external task was created.
     *
     * @return $this
     */
    public function setProcessInstanceId($process_instance_id)
    {
        $this->container['process_instance_id'] = $process_instance_id;

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
     * @param string $process_definition_id The id of the process definition which the associated external task belongs to.
     *
     * @return $this
     */
    public function setProcessDefinitionId($process_definition_id)
    {
        $this->container['process_definition_id'] = $process_definition_id;

        return $this;
    }

    /**
     * Gets process_definition_key
     *
     * @return string
     */
    public function getProcessDefinitionKey()
    {
        return $this->container['process_definition_key'];
    }

    /**
     * Sets process_definition_key
     *
     * @param string $process_definition_key The key of the process definition which the associated external task belongs to.
     *
     * @return $this
     */
    public function setProcessDefinitionKey($process_definition_key)
    {
        $this->container['process_definition_key'] = $process_definition_key;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param string $tenant_id The id of the tenant that this historic external task log entry belongs to.
     *
     * @return $this
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets creation_log
     *
     * @return bool
     */
    public function getCreationLog()
    {
        return $this->container['creation_log'];
    }

    /**
     * Sets creation_log
     *
     * @param bool $creation_log A flag indicating whether this log represents the creation of the associated external task.
     *
     * @return $this
     */
    public function setCreationLog($creation_log)
    {
        $this->container['creation_log'] = $creation_log;

        return $this;
    }

    /**
     * Gets failure_log
     *
     * @return bool
     */
    public function getFailureLog()
    {
        return $this->container['failure_log'];
    }

    /**
     * Sets failure_log
     *
     * @param bool $failure_log A flag indicating whether this log represents the failed execution of the associated external task.
     *
     * @return $this
     */
    public function setFailureLog($failure_log)
    {
        $this->container['failure_log'] = $failure_log;

        return $this;
    }

    /**
     * Gets success_log
     *
     * @return bool
     */
    public function getSuccessLog()
    {
        return $this->container['success_log'];
    }

    /**
     * Sets success_log
     *
     * @param bool $success_log A flag indicating whether this log represents the successful execution of the associated external task.
     *
     * @return $this
     */
    public function setSuccessLog($success_log)
    {
        $this->container['success_log'] = $success_log;

        return $this;
    }

    /**
     * Gets deletion_log
     *
     * @return bool
     */
    public function getDeletionLog()
    {
        return $this->container['deletion_log'];
    }

    /**
     * Sets deletion_log
     *
     * @param bool $deletion_log A flag indicating whether this log represents the deletion of the associated external task.
     *
     * @return $this
     */
    public function setDeletionLog($deletion_log)
    {
        $this->container['deletion_log'] = $deletion_log;

        return $this;
    }

    /**
     * Gets removal_time
     *
     * @return \DateTime
     */
    public function getRemovalTime()
    {
        return $this->container['removal_time'];
    }

    /**
     * Sets removal_time
     *
     * @param \DateTime $removal_time The time after which this log should be removed by the History Cleanup job. Default format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.  For further information, please see the [documentation](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/)
     *
     * @return $this
     */
    public function setRemovalTime($removal_time)
    {
        $this->container['removal_time'] = $removal_time;

        return $this;
    }

    /**
     * Gets root_process_instance_id
     *
     * @return string
     */
    public function getRootProcessInstanceId()
    {
        return $this->container['root_process_instance_id'];
    }

    /**
     * Sets root_process_instance_id
     *
     * @param string $root_process_instance_id The process instance id of the root process instance that initiated the process containing this log.
     *
     * @return $this
     */
    public function setRootProcessInstanceId($root_process_instance_id)
    {
        $this->container['root_process_instance_id'] = $root_process_instance_id;

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
