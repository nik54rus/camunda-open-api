<?php
/**
 * CompleteTaskDto
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
 * CompleteTaskDto Class Doc Comment
 *
 * @category Class
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */
class CompleteTaskDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $CamundaModelName = 'CompleteTaskDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaTypes = [
        'variables' => 'map[string,\Camunda\Client\Model\VariableValueDto]',
        'with_variables_in_return' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaFormats = [
        'variables' => null,
        'with_variables_in_return' => null
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
        'variables' => 'variables',
        'with_variables_in_return' => 'withVariablesInReturn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'variables' => 'setVariables',
        'with_variables_in_return' => 'setWithVariablesInReturn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'variables' => 'getVariables',
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
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
        $this->container['with_variables_in_return'] = isset($data['with_variables_in_return']) ? $data['with_variables_in_return'] : false;
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
     * Gets variables
     *
     * @return map[string,\Camunda\Client\Model\VariableValueDto]
     */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
     * Sets variables
     *
     * @param map[string,\Camunda\Client\Model\VariableValueDto] $variables A JSON object containing variable key-value pairs.
     *
     * @return $this
     */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;

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
     * @param bool $with_variables_in_return Indicates whether the response should contain the process variables or not. The default is `false` with a response code of `204`. If set to `true` the response contains the process variables and has a response code of `200`. If the task is not associated with a process instance (e.g. if it's part of a case instance) no variables will be returned.
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
