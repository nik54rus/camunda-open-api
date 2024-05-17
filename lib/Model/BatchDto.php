<?php
/**
 * BatchDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Camunda Platform REST API
 *
 * OpenApi Spec for Camunda Platform REST API.
 *
 * OpenAPI spec version: 7.21.1-ee
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.56
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * BatchDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BatchDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BatchDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'type' => 'string',
        'total_jobs' => 'int',
        'jobs_created' => 'int',
        'batch_jobs_per_seed' => 'int',
        'invocations_per_batch_job' => 'int',
        'seed_job_definition_id' => 'string',
        'monitor_job_definition_id' => 'string',
        'batch_job_definition_id' => 'string',
        'suspended' => 'bool',
        'tenant_id' => 'string',
        'create_user_id' => 'string',
        'start_time' => '\DateTime',
        'execution_start_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'type' => null,
        'total_jobs' => 'int32',
        'jobs_created' => 'int32',
        'batch_jobs_per_seed' => 'int32',
        'invocations_per_batch_job' => 'int32',
        'seed_job_definition_id' => null,
        'monitor_job_definition_id' => null,
        'batch_job_definition_id' => null,
        'suspended' => null,
        'tenant_id' => null,
        'create_user_id' => null,
        'start_time' => 'date-time',
        'execution_start_time' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'type' => 'type',
        'total_jobs' => 'totalJobs',
        'jobs_created' => 'jobsCreated',
        'batch_jobs_per_seed' => 'batchJobsPerSeed',
        'invocations_per_batch_job' => 'invocationsPerBatchJob',
        'seed_job_definition_id' => 'seedJobDefinitionId',
        'monitor_job_definition_id' => 'monitorJobDefinitionId',
        'batch_job_definition_id' => 'batchJobDefinitionId',
        'suspended' => 'suspended',
        'tenant_id' => 'tenantId',
        'create_user_id' => 'createUserId',
        'start_time' => 'startTime',
        'execution_start_time' => 'executionStartTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'total_jobs' => 'setTotalJobs',
        'jobs_created' => 'setJobsCreated',
        'batch_jobs_per_seed' => 'setBatchJobsPerSeed',
        'invocations_per_batch_job' => 'setInvocationsPerBatchJob',
        'seed_job_definition_id' => 'setSeedJobDefinitionId',
        'monitor_job_definition_id' => 'setMonitorJobDefinitionId',
        'batch_job_definition_id' => 'setBatchJobDefinitionId',
        'suspended' => 'setSuspended',
        'tenant_id' => 'setTenantId',
        'create_user_id' => 'setCreateUserId',
        'start_time' => 'setStartTime',
        'execution_start_time' => 'setExecutionStartTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'total_jobs' => 'getTotalJobs',
        'jobs_created' => 'getJobsCreated',
        'batch_jobs_per_seed' => 'getBatchJobsPerSeed',
        'invocations_per_batch_job' => 'getInvocationsPerBatchJob',
        'seed_job_definition_id' => 'getSeedJobDefinitionId',
        'monitor_job_definition_id' => 'getMonitorJobDefinitionId',
        'batch_job_definition_id' => 'getBatchJobDefinitionId',
        'suspended' => 'getSuspended',
        'tenant_id' => 'getTenantId',
        'create_user_id' => 'getCreateUserId',
        'start_time' => 'getStartTime',
        'execution_start_time' => 'getExecutionStartTime'
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
        return self::$swaggerModelName;
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['total_jobs'] = isset($data['total_jobs']) ? $data['total_jobs'] : null;
        $this->container['jobs_created'] = isset($data['jobs_created']) ? $data['jobs_created'] : null;
        $this->container['batch_jobs_per_seed'] = isset($data['batch_jobs_per_seed']) ? $data['batch_jobs_per_seed'] : null;
        $this->container['invocations_per_batch_job'] = isset($data['invocations_per_batch_job']) ? $data['invocations_per_batch_job'] : null;
        $this->container['seed_job_definition_id'] = isset($data['seed_job_definition_id']) ? $data['seed_job_definition_id'] : null;
        $this->container['monitor_job_definition_id'] = isset($data['monitor_job_definition_id']) ? $data['monitor_job_definition_id'] : null;
        $this->container['batch_job_definition_id'] = isset($data['batch_job_definition_id']) ? $data['batch_job_definition_id'] : null;
        $this->container['suspended'] = isset($data['suspended']) ? $data['suspended'] : null;
        $this->container['tenant_id'] = isset($data['tenant_id']) ? $data['tenant_id'] : null;
        $this->container['create_user_id'] = isset($data['create_user_id']) ? $data['create_user_id'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['execution_start_time'] = isset($data['execution_start_time']) ? $data['execution_start_time'] : null;
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
     * @param string $id The id of the batch.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of the batch. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets total_jobs
     *
     * @return int
     */
    public function getTotalJobs()
    {
        return $this->container['total_jobs'];
    }

    /**
     * Sets total_jobs
     *
     * @param int $total_jobs The total jobs of a batch is the number of batch execution jobs required to complete the batch.
     *
     * @return $this
     */
    public function setTotalJobs($total_jobs)
    {
        $this->container['total_jobs'] = $total_jobs;

        return $this;
    }

    /**
     * Gets jobs_created
     *
     * @return int
     */
    public function getJobsCreated()
    {
        return $this->container['jobs_created'];
    }

    /**
     * Sets jobs_created
     *
     * @param int $jobs_created The number of batch execution jobs already created by the seed job.
     *
     * @return $this
     */
    public function setJobsCreated($jobs_created)
    {
        $this->container['jobs_created'] = $jobs_created;

        return $this;
    }

    /**
     * Gets batch_jobs_per_seed
     *
     * @return int
     */
    public function getBatchJobsPerSeed()
    {
        return $this->container['batch_jobs_per_seed'];
    }

    /**
     * Sets batch_jobs_per_seed
     *
     * @param int $batch_jobs_per_seed The number of batch execution jobs created per seed job invocation. The batch seed job is invoked until it has created all batch execution jobs required by the batch (see `totalJobs` property).
     *
     * @return $this
     */
    public function setBatchJobsPerSeed($batch_jobs_per_seed)
    {
        $this->container['batch_jobs_per_seed'] = $batch_jobs_per_seed;

        return $this;
    }

    /**
     * Gets invocations_per_batch_job
     *
     * @return int
     */
    public function getInvocationsPerBatchJob()
    {
        return $this->container['invocations_per_batch_job'];
    }

    /**
     * Sets invocations_per_batch_job
     *
     * @param int $invocations_per_batch_job Every batch execution job invokes the command executed by the batch `invocationsPerBatchJob` times. E.g., for a process instance migration batch this specifies the number of process instances which are migrated per batch execution job.
     *
     * @return $this
     */
    public function setInvocationsPerBatchJob($invocations_per_batch_job)
    {
        $this->container['invocations_per_batch_job'] = $invocations_per_batch_job;

        return $this;
    }

    /**
     * Gets seed_job_definition_id
     *
     * @return string
     */
    public function getSeedJobDefinitionId()
    {
        return $this->container['seed_job_definition_id'];
    }

    /**
     * Sets seed_job_definition_id
     *
     * @param string $seed_job_definition_id The job definition id for the seed jobs of this batch.
     *
     * @return $this
     */
    public function setSeedJobDefinitionId($seed_job_definition_id)
    {
        $this->container['seed_job_definition_id'] = $seed_job_definition_id;

        return $this;
    }

    /**
     * Gets monitor_job_definition_id
     *
     * @return string
     */
    public function getMonitorJobDefinitionId()
    {
        return $this->container['monitor_job_definition_id'];
    }

    /**
     * Sets monitor_job_definition_id
     *
     * @param string $monitor_job_definition_id The job definition id for the monitor jobs of this batch.
     *
     * @return $this
     */
    public function setMonitorJobDefinitionId($monitor_job_definition_id)
    {
        $this->container['monitor_job_definition_id'] = $monitor_job_definition_id;

        return $this;
    }

    /**
     * Gets batch_job_definition_id
     *
     * @return string
     */
    public function getBatchJobDefinitionId()
    {
        return $this->container['batch_job_definition_id'];
    }

    /**
     * Sets batch_job_definition_id
     *
     * @param string $batch_job_definition_id The job definition id for the batch execution jobs of this batch.
     *
     * @return $this
     */
    public function setBatchJobDefinitionId($batch_job_definition_id)
    {
        $this->container['batch_job_definition_id'] = $batch_job_definition_id;

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
     * @param bool $suspended Indicates whether this batch is suspended or not.
     *
     * @return $this
     */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;

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
     * @param string $tenant_id The tenant id of the batch.
     *
     * @return $this
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets create_user_id
     *
     * @return string
     */
    public function getCreateUserId()
    {
        return $this->container['create_user_id'];
    }

    /**
     * Sets create_user_id
     *
     * @param string $create_user_id The id of the user that created the batch.
     *
     * @return $this
     */
    public function setCreateUserId($create_user_id)
    {
        $this->container['create_user_id'] = $create_user_id;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time The time the batch was started. Default format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`. For further information, please see the [documentation] (https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/)
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets execution_start_time
     *
     * @return \DateTime
     */
    public function getExecutionStartTime()
    {
        return $this->container['execution_start_time'];
    }

    /**
     * Sets execution_start_time
     *
     * @param \DateTime $execution_start_time The time the batch execution was started, i.e., at least one batch job has been executed. Default format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`. For further information, please see the [documentation] (https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/)
     *
     * @return $this
     */
    public function setExecutionStartTime($execution_start_time)
    {
        $this->container['execution_start_time'] = $execution_start_time;

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
