<?php
/**
 * HistoricJobLogDto
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
 * HistoricJobLogDto Class Doc Comment
 *
 * @category Class
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */
class HistoricJobLogDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $CamundaModelName = 'HistoricJobLogDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaTypes = [
        'id' => 'string',
        'timestamp' => '\DateTime',
        'removal_time' => '\DateTime',
        'job_id' => 'string',
        'job_due_date' => '\DateTime',
        'job_retries' => 'int',
        'job_priority' => 'int',
        'job_exception_message' => 'string',
        'failed_activity_id' => 'string',
        'job_definition_id' => 'string',
        'job_definition_type' => 'string',
        'job_definition_configuration' => 'string',
        'activity_id' => 'string',
        'execution_id' => 'string',
        'process_instance_id' => 'string',
        'process_definition_id' => 'string',
        'process_definition_key' => 'string',
        'deployment_id' => 'string',
        'root_process_instance_id' => 'string',
        'tenant_id' => 'string',
        'hostname' => 'string',
        'creation_log' => 'bool',
        'failure_log' => 'bool',
        'success_log' => 'bool',
        'deletion_log' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaFormats = [
        'id' => null,
        'timestamp' => 'date-time',
        'removal_time' => 'date-time',
        'job_id' => null,
        'job_due_date' => 'date-time',
        'job_retries' => 'int32',
        'job_priority' => 'int64',
        'job_exception_message' => null,
        'failed_activity_id' => null,
        'job_definition_id' => null,
        'job_definition_type' => null,
        'job_definition_configuration' => null,
        'activity_id' => null,
        'execution_id' => null,
        'process_instance_id' => null,
        'process_definition_id' => null,
        'process_definition_key' => null,
        'deployment_id' => null,
        'root_process_instance_id' => null,
        'tenant_id' => null,
        'hostname' => null,
        'creation_log' => null,
        'failure_log' => null,
        'success_log' => null,
        'deletion_log' => null
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
        'timestamp' => 'timestamp',
        'removal_time' => 'removalTime',
        'job_id' => 'jobId',
        'job_due_date' => 'jobDueDate',
        'job_retries' => 'jobRetries',
        'job_priority' => 'jobPriority',
        'job_exception_message' => 'jobExceptionMessage',
        'failed_activity_id' => 'failedActivityId',
        'job_definition_id' => 'jobDefinitionId',
        'job_definition_type' => 'jobDefinitionType',
        'job_definition_configuration' => 'jobDefinitionConfiguration',
        'activity_id' => 'activityId',
        'execution_id' => 'executionId',
        'process_instance_id' => 'processInstanceId',
        'process_definition_id' => 'processDefinitionId',
        'process_definition_key' => 'processDefinitionKey',
        'deployment_id' => 'deploymentId',
        'root_process_instance_id' => 'rootProcessInstanceId',
        'tenant_id' => 'tenantId',
        'hostname' => 'hostname',
        'creation_log' => 'creationLog',
        'failure_log' => 'failureLog',
        'success_log' => 'successLog',
        'deletion_log' => 'deletionLog'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'timestamp' => 'setTimestamp',
        'removal_time' => 'setRemovalTime',
        'job_id' => 'setJobId',
        'job_due_date' => 'setJobDueDate',
        'job_retries' => 'setJobRetries',
        'job_priority' => 'setJobPriority',
        'job_exception_message' => 'setJobExceptionMessage',
        'failed_activity_id' => 'setFailedActivityId',
        'job_definition_id' => 'setJobDefinitionId',
        'job_definition_type' => 'setJobDefinitionType',
        'job_definition_configuration' => 'setJobDefinitionConfiguration',
        'activity_id' => 'setActivityId',
        'execution_id' => 'setExecutionId',
        'process_instance_id' => 'setProcessInstanceId',
        'process_definition_id' => 'setProcessDefinitionId',
        'process_definition_key' => 'setProcessDefinitionKey',
        'deployment_id' => 'setDeploymentId',
        'root_process_instance_id' => 'setRootProcessInstanceId',
        'tenant_id' => 'setTenantId',
        'hostname' => 'setHostname',
        'creation_log' => 'setCreationLog',
        'failure_log' => 'setFailureLog',
        'success_log' => 'setSuccessLog',
        'deletion_log' => 'setDeletionLog'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'timestamp' => 'getTimestamp',
        'removal_time' => 'getRemovalTime',
        'job_id' => 'getJobId',
        'job_due_date' => 'getJobDueDate',
        'job_retries' => 'getJobRetries',
        'job_priority' => 'getJobPriority',
        'job_exception_message' => 'getJobExceptionMessage',
        'failed_activity_id' => 'getFailedActivityId',
        'job_definition_id' => 'getJobDefinitionId',
        'job_definition_type' => 'getJobDefinitionType',
        'job_definition_configuration' => 'getJobDefinitionConfiguration',
        'activity_id' => 'getActivityId',
        'execution_id' => 'getExecutionId',
        'process_instance_id' => 'getProcessInstanceId',
        'process_definition_id' => 'getProcessDefinitionId',
        'process_definition_key' => 'getProcessDefinitionKey',
        'deployment_id' => 'getDeploymentId',
        'root_process_instance_id' => 'getRootProcessInstanceId',
        'tenant_id' => 'getTenantId',
        'hostname' => 'getHostname',
        'creation_log' => 'getCreationLog',
        'failure_log' => 'getFailureLog',
        'success_log' => 'getSuccessLog',
        'deletion_log' => 'getDeletionLog'
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
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['removal_time'] = isset($data['removal_time']) ? $data['removal_time'] : null;
        $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : null;
        $this->container['job_due_date'] = isset($data['job_due_date']) ? $data['job_due_date'] : null;
        $this->container['job_retries'] = isset($data['job_retries']) ? $data['job_retries'] : null;
        $this->container['job_priority'] = isset($data['job_priority']) ? $data['job_priority'] : null;
        $this->container['job_exception_message'] = isset($data['job_exception_message']) ? $data['job_exception_message'] : null;
        $this->container['failed_activity_id'] = isset($data['failed_activity_id']) ? $data['failed_activity_id'] : null;
        $this->container['job_definition_id'] = isset($data['job_definition_id']) ? $data['job_definition_id'] : null;
        $this->container['job_definition_type'] = isset($data['job_definition_type']) ? $data['job_definition_type'] : null;
        $this->container['job_definition_configuration'] = isset($data['job_definition_configuration']) ? $data['job_definition_configuration'] : null;
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
        $this->container['execution_id'] = isset($data['execution_id']) ? $data['execution_id'] : null;
        $this->container['process_instance_id'] = isset($data['process_instance_id']) ? $data['process_instance_id'] : null;
        $this->container['process_definition_id'] = isset($data['process_definition_id']) ? $data['process_definition_id'] : null;
        $this->container['process_definition_key'] = isset($data['process_definition_key']) ? $data['process_definition_key'] : null;
        $this->container['deployment_id'] = isset($data['deployment_id']) ? $data['deployment_id'] : null;
        $this->container['root_process_instance_id'] = isset($data['root_process_instance_id']) ? $data['root_process_instance_id'] : null;
        $this->container['tenant_id'] = isset($data['tenant_id']) ? $data['tenant_id'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['creation_log'] = isset($data['creation_log']) ? $data['creation_log'] : null;
        $this->container['failure_log'] = isset($data['failure_log']) ? $data['failure_log'] : null;
        $this->container['success_log'] = isset($data['success_log']) ? $data['success_log'] : null;
        $this->container['deletion_log'] = isset($data['deletion_log']) ? $data['deletion_log'] : null;
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
     * @param \DateTime $removal_time The time after which the log entry should be removed by the History Cleanup job. Default format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`. For further info see the [docs](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/)
     *
     * @return $this
     */
    public function setRemovalTime($removal_time)
    {
        $this->container['removal_time'] = $removal_time;

        return $this;
    }

    /**
     * Gets job_id
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     *
     * @param string $job_id The id of the associated job.
     *
     * @return $this
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets job_due_date
     *
     * @return \DateTime
     */
    public function getJobDueDate()
    {
        return $this->container['job_due_date'];
    }

    /**
     * Sets job_due_date
     *
     * @param \DateTime $job_due_date The date on which the associated job is supposed to be processed.
     *
     * @return $this
     */
    public function setJobDueDate($job_due_date)
    {
        $this->container['job_due_date'] = $job_due_date;

        return $this;
    }

    /**
     * Gets job_retries
     *
     * @return int
     */
    public function getJobRetries()
    {
        return $this->container['job_retries'];
    }

    /**
     * Sets job_retries
     *
     * @param int $job_retries The number of retries the associated job has left.
     *
     * @return $this
     */
    public function setJobRetries($job_retries)
    {
        $this->container['job_retries'] = $job_retries;

        return $this;
    }

    /**
     * Gets job_priority
     *
     * @return int
     */
    public function getJobPriority()
    {
        return $this->container['job_priority'];
    }

    /**
     * Sets job_priority
     *
     * @param int $job_priority The execution priority the job had when the log entry was created.
     *
     * @return $this
     */
    public function setJobPriority($job_priority)
    {
        $this->container['job_priority'] = $job_priority;

        return $this;
    }

    /**
     * Gets job_exception_message
     *
     * @return string
     */
    public function getJobExceptionMessage()
    {
        return $this->container['job_exception_message'];
    }

    /**
     * Sets job_exception_message
     *
     * @param string $job_exception_message The message of the exception that occurred by executing the associated job.
     *
     * @return $this
     */
    public function setJobExceptionMessage($job_exception_message)
    {
        $this->container['job_exception_message'] = $job_exception_message;

        return $this;
    }

    /**
     * Gets failed_activity_id
     *
     * @return string
     */
    public function getFailedActivityId()
    {
        return $this->container['failed_activity_id'];
    }

    /**
     * Sets failed_activity_id
     *
     * @param string $failed_activity_id The id of the activity on which the last exception occurred by executing the associated job.
     *
     * @return $this
     */
    public function setFailedActivityId($failed_activity_id)
    {
        $this->container['failed_activity_id'] = $failed_activity_id;

        return $this;
    }

    /**
     * Gets job_definition_id
     *
     * @return string
     */
    public function getJobDefinitionId()
    {
        return $this->container['job_definition_id'];
    }

    /**
     * Sets job_definition_id
     *
     * @param string $job_definition_id The id of the job definition on which the associated job was created.
     *
     * @return $this
     */
    public function setJobDefinitionId($job_definition_id)
    {
        $this->container['job_definition_id'] = $job_definition_id;

        return $this;
    }

    /**
     * Gets job_definition_type
     *
     * @return string
     */
    public function getJobDefinitionType()
    {
        return $this->container['job_definition_type'];
    }

    /**
     * Sets job_definition_type
     *
     * @param string $job_definition_type The job definition type of the associated job. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/the-job-executor/#job-creation) for more information about job definition types.
     *
     * @return $this
     */
    public function setJobDefinitionType($job_definition_type)
    {
        $this->container['job_definition_type'] = $job_definition_type;

        return $this;
    }

    /**
     * Gets job_definition_configuration
     *
     * @return string
     */
    public function getJobDefinitionConfiguration()
    {
        return $this->container['job_definition_configuration'];
    }

    /**
     * Sets job_definition_configuration
     *
     * @param string $job_definition_configuration The job definition configuration type of the associated job.
     *
     * @return $this
     */
    public function setJobDefinitionConfiguration($job_definition_configuration)
    {
        $this->container['job_definition_configuration'] = $job_definition_configuration;

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
     * @param string $activity_id The id of the activity on which the associated job was created.
     *
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

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
     * @param string $execution_id The execution id on which the associated job was created.
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
     * @param string $process_instance_id The id of the process instance on which the associated job was created.
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
     * @param string $process_definition_id The id of the process definition which the associated job belongs to.
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
     * @param string $process_definition_key The key of the process definition which the associated job belongs to.
     *
     * @return $this
     */
    public function setProcessDefinitionKey($process_definition_key)
    {
        $this->container['process_definition_key'] = $process_definition_key;

        return $this;
    }

    /**
     * Gets deployment_id
     *
     * @return string
     */
    public function getDeploymentId()
    {
        return $this->container['deployment_id'];
    }

    /**
     * Sets deployment_id
     *
     * @param string $deployment_id The id of the deployment which the associated job belongs to.
     *
     * @return $this
     */
    public function setDeploymentId($deployment_id)
    {
        $this->container['deployment_id'] = $deployment_id;

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
     * @param string $root_process_instance_id The process instance id of the root process instance that initiated the process which the associated job belongs to.
     *
     * @return $this
     */
    public function setRootProcessInstanceId($root_process_instance_id)
    {
        $this->container['root_process_instance_id'] = $root_process_instance_id;

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
     * @param string $tenant_id The id of the tenant that this historic job log entry belongs to.
     *
     * @return $this
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string $hostname The name of the host of the Process Engine where the job of this historic job log entry was executed.
     *
     * @return $this
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

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
     * @param bool $creation_log A flag indicating whether this log represents the creation of the associated job.
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
     * @param bool $failure_log A flag indicating whether this log represents the failed execution of the associated job.
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
     * @param bool $success_log A flag indicating whether this log represents the successful execution of the associated job.
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
     * @param bool $deletion_log A flag indicating whether this log represents the deletion of the associated job.
     *
     * @return $this
     */
    public function setDeletionLog($deletion_log)
    {
        $this->container['deletion_log'] = $deletion_log;

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
