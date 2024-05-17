<?php
/**
 * StartProcessInstanceDto
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
 * StartProcessInstanceDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StartProcessInstanceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StartProcessInstanceDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'business_key' => 'string',
        'variables' => 'map[string,\Swagger\Client\Model\VariableValueDto]',
        'case_instance_id' => 'string',
        'start_instructions' => '\Swagger\Client\Model\ProcessInstanceModificationInstructionDto[]',
        'skip_custom_listeners' => 'bool',
        'skip_io_mappings' => 'bool',
        'with_variables_in_return' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'business_key' => null,
        'variables' => null,
        'case_instance_id' => null,
        'start_instructions' => null,
        'skip_custom_listeners' => null,
        'skip_io_mappings' => null,
        'with_variables_in_return' => null
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
        'business_key' => 'businessKey',
        'variables' => 'variables',
        'case_instance_id' => 'caseInstanceId',
        'start_instructions' => 'startInstructions',
        'skip_custom_listeners' => 'skipCustomListeners',
        'skip_io_mappings' => 'skipIoMappings',
        'with_variables_in_return' => 'withVariablesInReturn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_key' => 'setBusinessKey',
        'variables' => 'setVariables',
        'case_instance_id' => 'setCaseInstanceId',
        'start_instructions' => 'setStartInstructions',
        'skip_custom_listeners' => 'setSkipCustomListeners',
        'skip_io_mappings' => 'setSkipIoMappings',
        'with_variables_in_return' => 'setWithVariablesInReturn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_key' => 'getBusinessKey',
        'variables' => 'getVariables',
        'case_instance_id' => 'getCaseInstanceId',
        'start_instructions' => 'getStartInstructions',
        'skip_custom_listeners' => 'getSkipCustomListeners',
        'skip_io_mappings' => 'getSkipIoMappings',
        'with_variables_in_return' => 'getWithVariablesInReturn'
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
        $this->container['business_key'] = isset($data['business_key']) ? $data['business_key'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
        $this->container['case_instance_id'] = isset($data['case_instance_id']) ? $data['case_instance_id'] : null;
        $this->container['start_instructions'] = isset($data['start_instructions']) ? $data['start_instructions'] : null;
        $this->container['skip_custom_listeners'] = isset($data['skip_custom_listeners']) ? $data['skip_custom_listeners'] : null;
        $this->container['skip_io_mappings'] = isset($data['skip_io_mappings']) ? $data['skip_io_mappings'] : null;
        $this->container['with_variables_in_return'] = isset($data['with_variables_in_return']) ? $data['with_variables_in_return'] : null;
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
     * Gets variables
     *
     * @return map[string,\Swagger\Client\Model\VariableValueDto]
     */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
     * Sets variables
     *
     * @param map[string,\Swagger\Client\Model\VariableValueDto] $variables variables
     *
     * @return $this
     */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;

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
     * @param string $case_instance_id The case instance id the process instance is to be initialized with.
     *
     * @return $this
     */
    public function setCaseInstanceId($case_instance_id)
    {
        $this->container['case_instance_id'] = $case_instance_id;

        return $this;
    }

    /**
     * Gets start_instructions
     *
     * @return \Swagger\Client\Model\ProcessInstanceModificationInstructionDto[]
     */
    public function getStartInstructions()
    {
        return $this->container['start_instructions'];
    }

    /**
     * Sets start_instructions
     *
     * @param \Swagger\Client\Model\ProcessInstanceModificationInstructionDto[] $start_instructions **Optional**. A JSON array of instructions that specify which activities to start the process instance at. If this property is omitted, the process instance starts at its default blank start event.
     *
     * @return $this
     */
    public function setStartInstructions($start_instructions)
    {
        $this->container['start_instructions'] = $start_instructions;

        return $this;
    }

    /**
     * Gets skip_custom_listeners
     *
     * @return bool
     */
    public function getSkipCustomListeners()
    {
        return $this->container['skip_custom_listeners'];
    }

    /**
     * Sets skip_custom_listeners
     *
     * @param bool $skip_custom_listeners Skip execution listener invocation for activities that are started or ended as part of this request. **Note**: This option is currently only respected when start instructions are submitted via the `startInstructions` property.
     *
     * @return $this
     */
    public function setSkipCustomListeners($skip_custom_listeners)
    {
        $this->container['skip_custom_listeners'] = $skip_custom_listeners;

        return $this;
    }

    /**
     * Gets skip_io_mappings
     *
     * @return bool
     */
    public function getSkipIoMappings()
    {
        return $this->container['skip_io_mappings'];
    }

    /**
     * Sets skip_io_mappings
     *
     * @param bool $skip_io_mappings Skip execution of [input/output variable mappings](https://docs.camunda.org/manual/7.21/user-guide/process-engine/variables/#input-output-variable-mapping) for activities that are started or ended as part of this request. **Note**: This option is currently only respected when start instructions are submitted via the `startInstructions` property.
     *
     * @return $this
     */
    public function setSkipIoMappings($skip_io_mappings)
    {
        $this->container['skip_io_mappings'] = $skip_io_mappings;

        return $this;
    }

    /**
     * Gets with_variables_in_return
     *
     * @return bool
     */
    public function getWithVariablesInReturn()
    {
        return $this->container['with_variables_in_return'];
    }

    /**
     * Sets with_variables_in_return
     *
     * @param bool $with_variables_in_return Indicates if the variables, which was used by the process instance during execution, should be returned. Default value: `false`
     *
     * @return $this
     */
    public function setWithVariablesInReturn($with_variables_in_return)
    {
        $this->container['with_variables_in_return'] = $with_variables_in_return;

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
