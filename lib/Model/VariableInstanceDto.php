<?php
/**
 * VariableInstanceDto
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
 * VariableInstanceDto Class Doc Comment
 *
 * @category Class
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */
class VariableInstanceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $CamundaModelName = 'VariableInstanceDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaTypes = [
        'id' => 'string',
        'name' => 'string',
        'process_definition_id' => 'string',
        'process_instance_id' => 'string',
        'execution_id' => 'string',
        'case_instance_id' => 'string',
        'case_execution_id' => 'string',
        'task_id' => 'string',
        'batch_id' => 'string',
        'activity_instance_id' => 'string',
        'tenant_id' => 'string',
        'error_message' => 'string',
        'value' => '\Camunda\Client\Model\AnyValue',
        'type' => 'string',
        'value_info' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaFormats = [
        'id' => null,
        'name' => null,
        'process_definition_id' => null,
        'process_instance_id' => null,
        'execution_id' => null,
        'case_instance_id' => null,
        'case_execution_id' => null,
        'task_id' => null,
        'batch_id' => null,
        'activity_instance_id' => null,
        'tenant_id' => null,
        'error_message' => null,
        'value' => null,
        'type' => null,
        'value_info' => null
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
        'name' => 'name',
        'process_definition_id' => 'processDefinitionId',
        'process_instance_id' => 'processInstanceId',
        'execution_id' => 'executionId',
        'case_instance_id' => 'caseInstanceId',
        'case_execution_id' => 'caseExecutionId',
        'task_id' => 'taskId',
        'batch_id' => 'batchId',
        'activity_instance_id' => 'activityInstanceId',
        'tenant_id' => 'tenantId',
        'error_message' => 'errorMessage',
        'value' => 'value',
        'type' => 'type',
        'value_info' => 'valueInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'process_definition_id' => 'setProcessDefinitionId',
        'process_instance_id' => 'setProcessInstanceId',
        'execution_id' => 'setExecutionId',
        'case_instance_id' => 'setCaseInstanceId',
        'case_execution_id' => 'setCaseExecutionId',
        'task_id' => 'setTaskId',
        'batch_id' => 'setBatchId',
        'activity_instance_id' => 'setActivityInstanceId',
        'tenant_id' => 'setTenantId',
        'error_message' => 'setErrorMessage',
        'value' => 'setValue',
        'type' => 'setType',
        'value_info' => 'setValueInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'process_definition_id' => 'getProcessDefinitionId',
        'process_instance_id' => 'getProcessInstanceId',
        'execution_id' => 'getExecutionId',
        'case_instance_id' => 'getCaseInstanceId',
        'case_execution_id' => 'getCaseExecutionId',
        'task_id' => 'getTaskId',
        'batch_id' => 'getBatchId',
        'activity_instance_id' => 'getActivityInstanceId',
        'tenant_id' => 'getTenantId',
        'error_message' => 'getErrorMessage',
        'value' => 'getValue',
        'type' => 'getType',
        'value_info' => 'getValueInfo'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['process_definition_id'] = isset($data['process_definition_id']) ? $data['process_definition_id'] : null;
        $this->container['process_instance_id'] = isset($data['process_instance_id']) ? $data['process_instance_id'] : null;
        $this->container['execution_id'] = isset($data['execution_id']) ? $data['execution_id'] : null;
        $this->container['case_instance_id'] = isset($data['case_instance_id']) ? $data['case_instance_id'] : null;
        $this->container['case_execution_id'] = isset($data['case_execution_id']) ? $data['case_execution_id'] : null;
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
        $this->container['batch_id'] = isset($data['batch_id']) ? $data['batch_id'] : null;
        $this->container['activity_instance_id'] = isset($data['activity_instance_id']) ? $data['activity_instance_id'] : null;
        $this->container['tenant_id'] = isset($data['tenant_id']) ? $data['tenant_id'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value_info'] = isset($data['value_info']) ? $data['value_info'] : null;
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
     * @param string $id The id of the variable instance.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the variable instance.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $process_definition_id The id of the process definition that this variable instance belongs to.
     *
     * @return $this
     */
    public function setProcessDefinitionId($process_definition_id)
    {
        $this->container['process_definition_id'] = $process_definition_id;

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
     * @param string $process_instance_id The id of the process instance that this variable instance belongs to.
     *
     * @return $this
     */
    public function setProcessInstanceId($process_instance_id)
    {
        $this->container['process_instance_id'] = $process_instance_id;

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
     * @param string $execution_id The id of the execution that this variable instance belongs to.
     *
     * @return $this
     */
    public function setExecutionId($execution_id)
    {
        $this->container['execution_id'] = $execution_id;

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
     * @param string $case_instance_id The id of the case instance that this variable instance belongs to.
     *
     * @return $this
     */
    public function setCaseInstanceId($case_instance_id)
    {
        $this->container['case_instance_id'] = $case_instance_id;

        return $this;
    }

    /**
     * Gets case_execution_id
     *
     * @return string
     */
    public function getCaseExecutionId()
    {
        return $this->container['case_execution_id'];
    }

    /**
     * Sets case_execution_id
     *
     * @param string $case_execution_id The id of the case execution that this variable instance belongs to.
     *
     * @return $this
     */
    public function setCaseExecutionId($case_execution_id)
    {
        $this->container['case_execution_id'] = $case_execution_id;

        return $this;
    }

    /**
     * Gets task_id
     *
     * @return string
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param string $task_id The id of the task that this variable instance belongs to.
     *
     * @return $this
     */
    public function setTaskId($task_id)
    {
        $this->container['task_id'] = $task_id;

        return $this;
    }

    /**
     * Gets batch_id
     *
     * @return string
     */
    public function getBatchId()
    {
        return $this->container['batch_id'];
    }

    /**
     * Sets batch_id
     *
     * @param string $batch_id The id of the batch that this variable instance belongs to.<
     *
     * @return $this
     */
    public function setBatchId($batch_id)
    {
        $this->container['batch_id'] = $batch_id;

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
     * @param string $activity_instance_id The id of the activity instance that this variable instance belongs to.
     *
     * @return $this
     */
    public function setActivityInstanceId($activity_instance_id)
    {
        $this->container['activity_instance_id'] = $activity_instance_id;

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
     * @param string $tenant_id The id of the tenant that this variable instance belongs to.
     *
     * @return $this
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

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
     * @param string $error_message An error message in case a Java Serialized Object could not be de-serialized.
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets value
     *
     * @return \Camunda\Client\Model\AnyValue
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \Camunda\Client\Model\AnyValue $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
     * @param string $type The value type of the variable.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets value_info
     *
     * @return map[string,object]
     */
    public function getValueInfo()
    {
        return $this->container['value_info'];
    }

    /**
     * Sets value_info
     *
     * @param map[string,object] $value_info A JSON object containing additional, value-type-dependent properties. For serialized variables of type Object, the following properties can be provided:  * `objectTypeName`: A string representation of the object's type name. * `serializationDataFormat`: The serialization format used to store the variable.  For serialized variables of type File, the following properties can be provided:  * `filename`: The name of the file. This is not the variable name but the name that will be used when downloading the file again. * `mimetype`: The MIME type of the file that is being uploaded. * `encoding`: The encoding of the file that is being uploaded.  The following property can be provided for all value types:  * `transient`: Indicates whether the variable should be transient or not. See [documentation](https://docs.camunda.org/manual/7.21/user-guide/process-engine/variables#transient-variables) for more informations. (Not applicable for `decision-definition`, ` /process-instance/variables-async`, and `/migration/executeAsync` endpoints)
     *
     * @return $this
     */
    public function setValueInfo($value_info)
    {
        $this->container['value_info'] = $value_info;

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
