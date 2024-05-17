<?php
/**
 * HistoricProcessInstanceDto
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
 * HistoricProcessInstanceDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HistoricProcessInstanceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HistoricProcessInstanceDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'root_process_instance_id' => 'string',
        'super_process_instance_id' => 'string',
        'super_case_instance_id' => 'string',
        'case_instance_id' => 'string',
        'process_definition_name' => 'string',
        'process_definition_key' => 'string',
        'process_definition_version' => 'int',
        'process_definition_id' => 'string',
        'business_key' => 'string',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'removal_time' => '\DateTime',
        'duration_in_millis' => 'int',
        'start_user_id' => 'string',
        'start_activity_id' => 'string',
        'delete_reason' => 'string',
        'tenant_id' => 'string',
        'state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'root_process_instance_id' => null,
        'super_process_instance_id' => null,
        'super_case_instance_id' => null,
        'case_instance_id' => null,
        'process_definition_name' => null,
        'process_definition_key' => null,
        'process_definition_version' => 'int32',
        'process_definition_id' => null,
        'business_key' => null,
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'removal_time' => 'date-time',
        'duration_in_millis' => 'int64',
        'start_user_id' => null,
        'start_activity_id' => null,
        'delete_reason' => null,
        'tenant_id' => null,
        'state' => null
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
        'root_process_instance_id' => 'rootProcessInstanceId',
        'super_process_instance_id' => 'superProcessInstanceId',
        'super_case_instance_id' => 'superCaseInstanceId',
        'case_instance_id' => 'caseInstanceId',
        'process_definition_name' => 'processDefinitionName',
        'process_definition_key' => 'processDefinitionKey',
        'process_definition_version' => 'processDefinitionVersion',
        'process_definition_id' => 'processDefinitionId',
        'business_key' => 'businessKey',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'removal_time' => 'removalTime',
        'duration_in_millis' => 'durationInMillis',
        'start_user_id' => 'startUserId',
        'start_activity_id' => 'startActivityId',
        'delete_reason' => 'deleteReason',
        'tenant_id' => 'tenantId',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'root_process_instance_id' => 'setRootProcessInstanceId',
        'super_process_instance_id' => 'setSuperProcessInstanceId',
        'super_case_instance_id' => 'setSuperCaseInstanceId',
        'case_instance_id' => 'setCaseInstanceId',
        'process_definition_name' => 'setProcessDefinitionName',
        'process_definition_key' => 'setProcessDefinitionKey',
        'process_definition_version' => 'setProcessDefinitionVersion',
        'process_definition_id' => 'setProcessDefinitionId',
        'business_key' => 'setBusinessKey',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'removal_time' => 'setRemovalTime',
        'duration_in_millis' => 'setDurationInMillis',
        'start_user_id' => 'setStartUserId',
        'start_activity_id' => 'setStartActivityId',
        'delete_reason' => 'setDeleteReason',
        'tenant_id' => 'setTenantId',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'root_process_instance_id' => 'getRootProcessInstanceId',
        'super_process_instance_id' => 'getSuperProcessInstanceId',
        'super_case_instance_id' => 'getSuperCaseInstanceId',
        'case_instance_id' => 'getCaseInstanceId',
        'process_definition_name' => 'getProcessDefinitionName',
        'process_definition_key' => 'getProcessDefinitionKey',
        'process_definition_version' => 'getProcessDefinitionVersion',
        'process_definition_id' => 'getProcessDefinitionId',
        'business_key' => 'getBusinessKey',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'removal_time' => 'getRemovalTime',
        'duration_in_millis' => 'getDurationInMillis',
        'start_user_id' => 'getStartUserId',
        'start_activity_id' => 'getStartActivityId',
        'delete_reason' => 'getDeleteReason',
        'tenant_id' => 'getTenantId',
        'state' => 'getState'
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

    const STATE_ACTIVE = 'ACTIVE';
    const STATE_SUSPENDED = 'SUSPENDED';
    const STATE_COMPLETED = 'COMPLETED';
    const STATE_EXTERNALLY_TERMINATED = 'EXTERNALLY_TERMINATED';
    const STATE_INTERNALLY_TERMINATED = 'INTERNALLY_TERMINATED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE
            self::STATE_SUSPENDED
            self::STATE_COMPLETED
            self::STATE_EXTERNALLY_TERMINATED
            self::STATE_INTERNALLY_TERMINATED
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['root_process_instance_id'] = isset($data['root_process_instance_id']) ? $data['root_process_instance_id'] : null;
        $this->container['super_process_instance_id'] = isset($data['super_process_instance_id']) ? $data['super_process_instance_id'] : null;
        $this->container['super_case_instance_id'] = isset($data['super_case_instance_id']) ? $data['super_case_instance_id'] : null;
        $this->container['case_instance_id'] = isset($data['case_instance_id']) ? $data['case_instance_id'] : null;
        $this->container['process_definition_name'] = isset($data['process_definition_name']) ? $data['process_definition_name'] : null;
        $this->container['process_definition_key'] = isset($data['process_definition_key']) ? $data['process_definition_key'] : null;
        $this->container['process_definition_version'] = isset($data['process_definition_version']) ? $data['process_definition_version'] : null;
        $this->container['process_definition_id'] = isset($data['process_definition_id']) ? $data['process_definition_id'] : null;
        $this->container['business_key'] = isset($data['business_key']) ? $data['business_key'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['removal_time'] = isset($data['removal_time']) ? $data['removal_time'] : null;
        $this->container['duration_in_millis'] = isset($data['duration_in_millis']) ? $data['duration_in_millis'] : null;
        $this->container['start_user_id'] = isset($data['start_user_id']) ? $data['start_user_id'] : null;
        $this->container['start_activity_id'] = isset($data['start_activity_id']) ? $data['start_activity_id'] : null;
        $this->container['delete_reason'] = isset($data['delete_reason']) ? $data['delete_reason'] : null;
        $this->container['tenant_id'] = isset($data['tenant_id']) ? $data['tenant_id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
     * @param string $id The id of the process instance.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $root_process_instance_id The process instance id of the root process instance that initiated the process.
     *
     * @return $this
     */
    public function setRootProcessInstanceId($root_process_instance_id)
    {
        $this->container['root_process_instance_id'] = $root_process_instance_id;

        return $this;
    }

    /**
     * Gets super_process_instance_id
     *
     * @return string
     */
    public function getSuperProcessInstanceId()
    {
        return $this->container['super_process_instance_id'];
    }

    /**
     * Sets super_process_instance_id
     *
     * @param string $super_process_instance_id The id of the parent process instance, if it exists.
     *
     * @return $this
     */
    public function setSuperProcessInstanceId($super_process_instance_id)
    {
        $this->container['super_process_instance_id'] = $super_process_instance_id;

        return $this;
    }

    /**
     * Gets super_case_instance_id
     *
     * @return string
     */
    public function getSuperCaseInstanceId()
    {
        return $this->container['super_case_instance_id'];
    }

    /**
     * Sets super_case_instance_id
     *
     * @param string $super_case_instance_id The id of the parent case instance, if it exists.
     *
     * @return $this
     */
    public function setSuperCaseInstanceId($super_case_instance_id)
    {
        $this->container['super_case_instance_id'] = $super_case_instance_id;

        return $this;
    }

    /**
     * Gets case_instance_id
     *
     * @return string
     */
    public function getCaseInstanceId()
    {
        return $this->container['case_instance_id'];
    }

    /**
     * Sets case_instance_id
     *
     * @param string $case_instance_id The id of the parent case instance, if it exists.
     *
     * @return $this
     */
    public function setCaseInstanceId($case_instance_id)
    {
        $this->container['case_instance_id'] = $case_instance_id;

        return $this;
    }

    /**
     * Gets process_definition_name
     *
     * @return string
     */
    public function getProcessDefinitionName()
    {
        return $this->container['process_definition_name'];
    }

    /**
     * Sets process_definition_name
     *
     * @param string $process_definition_name The name of the process definition that this process instance belongs to.
     *
     * @return $this
     */
    public function setProcessDefinitionName($process_definition_name)
    {
        $this->container['process_definition_name'] = $process_definition_name;

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
     * @param string $process_definition_key The key of the process definition that this process instance belongs to.
     *
     * @return $this
     */
    public function setProcessDefinitionKey($process_definition_key)
    {
        $this->container['process_definition_key'] = $process_definition_key;

        return $this;
    }

    /**
     * Gets process_definition_version
     *
     * @return int
     */
    public function getProcessDefinitionVersion()
    {
        return $this->container['process_definition_version'];
    }

    /**
     * Sets process_definition_version
     *
     * @param int $process_definition_version The version of the process definition that this process instance belongs to.
     *
     * @return $this
     */
    public function setProcessDefinitionVersion($process_definition_version)
    {
        $this->container['process_definition_version'] = $process_definition_version;

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
     * @param string $process_definition_id The id of the process definition that this process instance belongs to.
     *
     * @return $this
     */
    public function setProcessDefinitionId($process_definition_id)
    {
        $this->container['process_definition_id'] = $process_definition_id;

        return $this;
    }

    /**
     * Gets business_key
     *
     * @return string
     */
    public function getBusinessKey()
    {
        return $this->container['business_key'];
    }

    /**
     * Sets business_key
     *
     * @param string $business_key The business key of the process instance.
     *
     * @return $this
     */
    public function setBusinessKey($business_key)
    {
        $this->container['business_key'] = $business_key;

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
     * @param \DateTime $start_time The time the instance was started. Default [format](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/) `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time The time the instance ended. Default [format](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/) `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

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
     * @param \DateTime $removal_time The time after which the instance should be removed by the History Cleanup job. Default [format](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/) `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     *
     * @return $this
     */
    public function setRemovalTime($removal_time)
    {
        $this->container['removal_time'] = $removal_time;

        return $this;
    }

    /**
     * Gets duration_in_millis
     *
     * @return int
     */
    public function getDurationInMillis()
    {
        return $this->container['duration_in_millis'];
    }

    /**
     * Sets duration_in_millis
     *
     * @param int $duration_in_millis The time the instance took to finish (in milliseconds).
     *
     * @return $this
     */
    public function setDurationInMillis($duration_in_millis)
    {
        $this->container['duration_in_millis'] = $duration_in_millis;

        return $this;
    }

    /**
     * Gets start_user_id
     *
     * @return string
     */
    public function getStartUserId()
    {
        return $this->container['start_user_id'];
    }

    /**
     * Sets start_user_id
     *
     * @param string $start_user_id The id of the user who started the process instance.
     *
     * @return $this
     */
    public function setStartUserId($start_user_id)
    {
        $this->container['start_user_id'] = $start_user_id;

        return $this;
    }

    /**
     * Gets start_activity_id
     *
     * @return string
     */
    public function getStartActivityId()
    {
        return $this->container['start_activity_id'];
    }

    /**
     * Sets start_activity_id
     *
     * @param string $start_activity_id The id of the initial activity that was executed (e.g., a start event).
     *
     * @return $this
     */
    public function setStartActivityId($start_activity_id)
    {
        $this->container['start_activity_id'] = $start_activity_id;

        return $this;
    }

    /**
     * Gets delete_reason
     *
     * @return string
     */
    public function getDeleteReason()
    {
        return $this->container['delete_reason'];
    }

    /**
     * Sets delete_reason
     *
     * @param string $delete_reason The provided delete reason in case the process instance was canceled during execution.
     *
     * @return $this
     */
    public function setDeleteReason($delete_reason)
    {
        $this->container['delete_reason'] = $delete_reason;

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
     * @param string $tenant_id The tenant id of the process instance.
     *
     * @return $this
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Last state of the process instance, possible values are:  `ACTIVE` - running process instance  `SUSPENDED` - suspended process instances  `COMPLETED` - completed through normal end event  `EXTERNALLY_TERMINATED` - terminated externally, for instance through REST API  `INTERNALLY_TERMINATED` - terminated internally, for instance by terminating boundary event
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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