<?php
/**
 * HistoricVariableInstanceQueryDto
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
 * HistoricVariableInstanceQueryDto Class Doc Comment
 *
 * @category Class
 * @description A Historic Variable Instance instance query which defines a list of Historic Variable Instance instances
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */
class HistoricVariableInstanceQueryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $CamundaModelName = 'HistoricVariableInstanceQueryDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaTypes = [
        'variable_name' => 'string',
        'variable_name_like' => 'string',
        'variable_value' => 'object',
        'variable_names_ignore_case' => 'bool',
        'variable_values_ignore_case' => 'bool',
        'variable_type_in' => 'string[]',
        'include_deleted' => 'bool',
        'process_instance_id' => 'string',
        'process_instance_id_in' => 'string[]',
        'process_definition_id' => 'string',
        'process_definition_key' => 'string',
        'execution_id_in' => 'string[]',
        'case_instance_id' => 'string',
        'case_execution_id_in' => 'string[]',
        'case_activity_id_in' => 'string[]',
        'task_id_in' => 'string[]',
        'activity_instance_id_in' => 'string[]',
        'tenant_id_in' => 'string[]',
        'without_tenant_id' => 'bool',
        'variable_name_in' => 'string[]',
        'sorting' => '\Camunda\Client\Model\HistoricVariableInstanceQueryDtoSorting[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaFormats = [
        'variable_name' => null,
        'variable_name_like' => null,
        'variable_value' => null,
        'variable_names_ignore_case' => null,
        'variable_values_ignore_case' => null,
        'variable_type_in' => null,
        'include_deleted' => null,
        'process_instance_id' => null,
        'process_instance_id_in' => null,
        'process_definition_id' => null,
        'process_definition_key' => null,
        'execution_id_in' => null,
        'case_instance_id' => null,
        'case_execution_id_in' => null,
        'case_activity_id_in' => null,
        'task_id_in' => null,
        'activity_instance_id_in' => null,
        'tenant_id_in' => null,
        'without_tenant_id' => null,
        'variable_name_in' => null,
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
        'variable_name' => 'variableName',
        'variable_name_like' => 'variableNameLike',
        'variable_value' => 'variableValue',
        'variable_names_ignore_case' => 'variableNamesIgnoreCase',
        'variable_values_ignore_case' => 'variableValuesIgnoreCase',
        'variable_type_in' => 'variableTypeIn',
        'include_deleted' => 'includeDeleted',
        'process_instance_id' => 'processInstanceId',
        'process_instance_id_in' => 'processInstanceIdIn',
        'process_definition_id' => 'processDefinitionId',
        'process_definition_key' => 'processDefinitionKey',
        'execution_id_in' => 'executionIdIn',
        'case_instance_id' => 'caseInstanceId',
        'case_execution_id_in' => 'caseExecutionIdIn',
        'case_activity_id_in' => 'caseActivityIdIn',
        'task_id_in' => 'taskIdIn',
        'activity_instance_id_in' => 'activityInstanceIdIn',
        'tenant_id_in' => 'tenantIdIn',
        'without_tenant_id' => 'withoutTenantId',
        'variable_name_in' => 'variableNameIn',
        'sorting' => 'sorting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'variable_name' => 'setVariableName',
        'variable_name_like' => 'setVariableNameLike',
        'variable_value' => 'setVariableValue',
        'variable_names_ignore_case' => 'setVariableNamesIgnoreCase',
        'variable_values_ignore_case' => 'setVariableValuesIgnoreCase',
        'variable_type_in' => 'setVariableTypeIn',
        'include_deleted' => 'setIncludeDeleted',
        'process_instance_id' => 'setProcessInstanceId',
        'process_instance_id_in' => 'setProcessInstanceIdIn',
        'process_definition_id' => 'setProcessDefinitionId',
        'process_definition_key' => 'setProcessDefinitionKey',
        'execution_id_in' => 'setExecutionIdIn',
        'case_instance_id' => 'setCaseInstanceId',
        'case_execution_id_in' => 'setCaseExecutionIdIn',
        'case_activity_id_in' => 'setCaseActivityIdIn',
        'task_id_in' => 'setTaskIdIn',
        'activity_instance_id_in' => 'setActivityInstanceIdIn',
        'tenant_id_in' => 'setTenantIdIn',
        'without_tenant_id' => 'setWithoutTenantId',
        'variable_name_in' => 'setVariableNameIn',
        'sorting' => 'setSorting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'variable_name' => 'getVariableName',
        'variable_name_like' => 'getVariableNameLike',
        'variable_value' => 'getVariableValue',
        'variable_names_ignore_case' => 'getVariableNamesIgnoreCase',
        'variable_values_ignore_case' => 'getVariableValuesIgnoreCase',
        'variable_type_in' => 'getVariableTypeIn',
        'include_deleted' => 'getIncludeDeleted',
        'process_instance_id' => 'getProcessInstanceId',
        'process_instance_id_in' => 'getProcessInstanceIdIn',
        'process_definition_id' => 'getProcessDefinitionId',
        'process_definition_key' => 'getProcessDefinitionKey',
        'execution_id_in' => 'getExecutionIdIn',
        'case_instance_id' => 'getCaseInstanceId',
        'case_execution_id_in' => 'getCaseExecutionIdIn',
        'case_activity_id_in' => 'getCaseActivityIdIn',
        'task_id_in' => 'getTaskIdIn',
        'activity_instance_id_in' => 'getActivityInstanceIdIn',
        'tenant_id_in' => 'getTenantIdIn',
        'without_tenant_id' => 'getWithoutTenantId',
        'variable_name_in' => 'getVariableNameIn',
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
        $this->container['variable_name'] = isset($data['variable_name']) ? $data['variable_name'] : null;
        $this->container['variable_name_like'] = isset($data['variable_name_like']) ? $data['variable_name_like'] : null;
        $this->container['variable_value'] = isset($data['variable_value']) ? $data['variable_value'] : null;
        $this->container['variable_names_ignore_case'] = isset($data['variable_names_ignore_case']) ? $data['variable_names_ignore_case'] : null;
        $this->container['variable_values_ignore_case'] = isset($data['variable_values_ignore_case']) ? $data['variable_values_ignore_case'] : null;
        $this->container['variable_type_in'] = isset($data['variable_type_in']) ? $data['variable_type_in'] : null;
        $this->container['include_deleted'] = isset($data['include_deleted']) ? $data['include_deleted'] : null;
        $this->container['process_instance_id'] = isset($data['process_instance_id']) ? $data['process_instance_id'] : null;
        $this->container['process_instance_id_in'] = isset($data['process_instance_id_in']) ? $data['process_instance_id_in'] : null;
        $this->container['process_definition_id'] = isset($data['process_definition_id']) ? $data['process_definition_id'] : null;
        $this->container['process_definition_key'] = isset($data['process_definition_key']) ? $data['process_definition_key'] : null;
        $this->container['execution_id_in'] = isset($data['execution_id_in']) ? $data['execution_id_in'] : null;
        $this->container['case_instance_id'] = isset($data['case_instance_id']) ? $data['case_instance_id'] : null;
        $this->container['case_execution_id_in'] = isset($data['case_execution_id_in']) ? $data['case_execution_id_in'] : null;
        $this->container['case_activity_id_in'] = isset($data['case_activity_id_in']) ? $data['case_activity_id_in'] : null;
        $this->container['task_id_in'] = isset($data['task_id_in']) ? $data['task_id_in'] : null;
        $this->container['activity_instance_id_in'] = isset($data['activity_instance_id_in']) ? $data['activity_instance_id_in'] : null;
        $this->container['tenant_id_in'] = isset($data['tenant_id_in']) ? $data['tenant_id_in'] : null;
        $this->container['without_tenant_id'] = isset($data['without_tenant_id']) ? $data['without_tenant_id'] : null;
        $this->container['variable_name_in'] = isset($data['variable_name_in']) ? $data['variable_name_in'] : null;
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
     * Gets variable_name
     *
     * @return string
     */
    public function getVariableName()
    {
        return $this->container['variable_name'];
    }

    /**
     * Sets variable_name
     *
     * @param string $variable_name Filter by variable name.
     *
     * @return $this
     */
    public function setVariableName($variable_name)
    {
        $this->container['variable_name'] = $variable_name;

        return $this;
    }

    /**
     * Gets variable_name_like
     *
     * @return string
     */
    public function getVariableNameLike()
    {
        return $this->container['variable_name_like'];
    }

    /**
     * Sets variable_name_like
     *
     * @param string $variable_name_like Restrict to variables with a name like the parameter.
     *
     * @return $this
     */
    public function setVariableNameLike($variable_name_like)
    {
        $this->container['variable_name_like'] = $variable_name_like;

        return $this;
    }

    /**
     * Gets variable_value
     *
     * @return object
     */
    public function getVariableValue()
    {
        return $this->container['variable_value'];
    }

    /**
     * Sets variable_value
     *
     * @param object $variable_value Filter by variable value. May be `String`, `Number` or `Boolean`.
     *
     * @return $this
     */
    public function setVariableValue($variable_value)
    {
        $this->container['variable_value'] = $variable_value;

        return $this;
    }

    /**
     * Gets variable_names_ignore_case
     *
     * @return bool
     */
    public function getVariableNamesIgnoreCase()
    {
        return $this->container['variable_names_ignore_case'];
    }

    /**
     * Sets variable_names_ignore_case
     *
     * @param bool $variable_names_ignore_case Match the variable name provided in `variableName` and `variableNameLike` case- insensitively. If set to `true` **variableName** and **variablename** are treated as equal.
     *
     * @return $this
     */
    public function setVariableNamesIgnoreCase($variable_names_ignore_case)
    {
        $this->container['variable_names_ignore_case'] = $variable_names_ignore_case;

        return $this;
    }

    /**
     * Gets variable_values_ignore_case
     *
     * @return bool
     */
    public function getVariableValuesIgnoreCase()
    {
        return $this->container['variable_values_ignore_case'];
    }

    /**
     * Sets variable_values_ignore_case
     *
     * @param bool $variable_values_ignore_case Match the variable value provided in `variableValue` case-insensitively. If set to `true` **variableValue** and **variablevalue** are treated as equal.
     *
     * @return $this
     */
    public function setVariableValuesIgnoreCase($variable_values_ignore_case)
    {
        $this->container['variable_values_ignore_case'] = $variable_values_ignore_case;

        return $this;
    }

    /**
     * Gets variable_type_in
     *
     * @return string[]
     */
    public function getVariableTypeIn()
    {
        return $this->container['variable_type_in'];
    }

    /**
     * Sets variable_type_in
     *
     * @param string[] $variable_type_in Only include historic variable instances which belong to one of the passed and comma- separated variable types. A list of all supported variable types can be found [here](https://docs.camunda.org/manual/7.21/user-guide/process-engine/variables/#supported-variable-values). **Note:** All non-primitive variables are associated with the type 'serializable'.
     *
     * @return $this
     */
    public function setVariableTypeIn($variable_type_in)
    {
        $this->container['variable_type_in'] = $variable_type_in;

        return $this;
    }

    /**
     * Gets include_deleted
     *
     * @return bool
     */
    public function getIncludeDeleted()
    {
        return $this->container['include_deleted'];
    }

    /**
     * Sets include_deleted
     *
     * @param bool $include_deleted Include variables that has already been deleted during the execution.
     *
     * @return $this
     */
    public function setIncludeDeleted($include_deleted)
    {
        $this->container['include_deleted'] = $include_deleted;

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
     * @param string $process_instance_id Filter by the process instance the variable belongs to.
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
     * @param string[] $process_instance_id_in Only include historic variable instances which belong to one of the passed  process instance ids.
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
     * @param string $process_definition_id Filter by the process definition the variable belongs to.
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
     * @param string $process_definition_key Filter by a key of the process definition the variable belongs to.
     *
     * @return $this
     */
    public function setProcessDefinitionKey($process_definition_key)
    {
        $this->container['process_definition_key'] = $process_definition_key;

        return $this;
    }

    /**
     * Gets execution_id_in
     *
     * @return string[]
     */
    public function getExecutionIdIn()
    {
        return $this->container['execution_id_in'];
    }

    /**
     * Sets execution_id_in
     *
     * @param string[] $execution_id_in Only include historic variable instances which belong to one of the passed and  execution ids.
     *
     * @return $this
     */
    public function setExecutionIdIn($execution_id_in)
    {
        $this->container['execution_id_in'] = $execution_id_in;

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
     * @param string $case_instance_id Filter by the case instance the variable belongs to.
     *
     * @return $this
     */
    public function setCaseInstanceId($case_instance_id)
    {
        $this->container['case_instance_id'] = $case_instance_id;

        return $this;
    }

    /**
     * Gets case_execution_id_in
     *
     * @return string[]
     */
    public function getCaseExecutionIdIn()
    {
        return $this->container['case_execution_id_in'];
    }

    /**
     * Sets case_execution_id_in
     *
     * @param string[] $case_execution_id_in Only include historic variable instances which belong to one of the passed and  case execution ids.
     *
     * @return $this
     */
    public function setCaseExecutionIdIn($case_execution_id_in)
    {
        $this->container['case_execution_id_in'] = $case_execution_id_in;

        return $this;
    }

    /**
     * Gets case_activity_id_in
     *
     * @return string[]
     */
    public function getCaseActivityIdIn()
    {
        return $this->container['case_activity_id_in'];
    }

    /**
     * Sets case_activity_id_in
     *
     * @param string[] $case_activity_id_in Only include historic variable instances which belong to one of the passed and  case activity ids.
     *
     * @return $this
     */
    public function setCaseActivityIdIn($case_activity_id_in)
    {
        $this->container['case_activity_id_in'] = $case_activity_id_in;

        return $this;
    }

    /**
     * Gets task_id_in
     *
     * @return string[]
     */
    public function getTaskIdIn()
    {
        return $this->container['task_id_in'];
    }

    /**
     * Sets task_id_in
     *
     * @param string[] $task_id_in Only include historic variable instances which belong to one of the passed and  task ids.
     *
     * @return $this
     */
    public function setTaskIdIn($task_id_in)
    {
        $this->container['task_id_in'] = $task_id_in;

        return $this;
    }

    /**
     * Gets activity_instance_id_in
     *
     * @return string[]
     */
    public function getActivityInstanceIdIn()
    {
        return $this->container['activity_instance_id_in'];
    }

    /**
     * Sets activity_instance_id_in
     *
     * @param string[] $activity_instance_id_in Only include historic variable instances which belong to one of the passed and  activity instance ids.
     *
     * @return $this
     */
    public function setActivityInstanceIdIn($activity_instance_id_in)
    {
        $this->container['activity_instance_id_in'] = $activity_instance_id_in;

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
     * @param string[] $tenant_id_in Only include historic variable instances which belong to one of the passed and comma- separated tenant ids.
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
     * @param bool $without_tenant_id Only include historic variable instances that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
     *
     * @return $this
     */
    public function setWithoutTenantId($without_tenant_id)
    {
        $this->container['without_tenant_id'] = $without_tenant_id;

        return $this;
    }

    /**
     * Gets variable_name_in
     *
     * @return string[]
     */
    public function getVariableNameIn()
    {
        return $this->container['variable_name_in'];
    }

    /**
     * Sets variable_name_in
     *
     * @param string[] $variable_name_in Only include historic variable instances which belong to one of the passed  variable names.
     *
     * @return $this
     */
    public function setVariableNameIn($variable_name_in)
    {
        $this->container['variable_name_in'] = $variable_name_in;

        return $this;
    }

    /**
     * Gets sorting
     *
     * @return \Camunda\Client\Model\HistoricVariableInstanceQueryDtoSorting[]
     */
    public function getSorting()
    {
        return $this->container['sorting'];
    }

    /**
     * Sets sorting
     *
     * @param \Camunda\Client\Model\HistoricVariableInstanceQueryDtoSorting[] $sorting An array of criteria to sort the result by. Each element of the array is                      an object that specifies one ordering. The position in the array                      identifies the rank of an ordering, i.e., whether it is primary, secondary,                      etc. Sorting has no effect for `count` endpoints
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
