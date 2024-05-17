<?php
/**
 * ProblemDto
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
 * ProblemDto Class Doc Comment
 *
 * @category Class
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */
class ProblemDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $CamundaModelName = 'ProblemDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaTypes = [
        'message' => 'string',
        'line' => 'int',
        'column' => 'int',
        'main_element_id' => 'string',
        'element_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaFormats = [
        'message' => null,
        'line' => 'int32',
        'column' => 'int32',
        'main_element_id' => null,
        'element_ids' => null
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
        'message' => 'message',
        'line' => 'line',
        'column' => 'column',
        'main_element_id' => 'mainElementId',
        'element_ids' => 'elementIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message' => 'setMessage',
        'line' => 'setLine',
        'column' => 'setColumn',
        'main_element_id' => 'setMainElementId',
        'element_ids' => 'setElementIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message' => 'getMessage',
        'line' => 'getLine',
        'column' => 'getColumn',
        'main_element_id' => 'getMainElementId',
        'element_ids' => 'getElementIds'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['column'] = isset($data['column']) ? $data['column'] : null;
        $this->container['main_element_id'] = isset($data['main_element_id']) ? $data['main_element_id'] : null;
        $this->container['element_ids'] = isset($data['element_ids']) ? $data['element_ids'] : null;
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
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message The message of the problem.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets line
     *
     * @return int
     */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
     * Sets line
     *
     * @param int $line The line where the problem occurred.
     *
     * @return $this
     */
    public function setLine($line)
    {
        $this->container['line'] = $line;

        return $this;
    }

    /**
     * Gets column
     *
     * @return int
     */
    public function getColumn()
    {
        return $this->container['column'];
    }

    /**
     * Sets column
     *
     * @param int $column The column where the problem occurred.
     *
     * @return $this
     */
    public function setColumn($column)
    {
        $this->container['column'] = $column;

        return $this;
    }

    /**
     * Gets main_element_id
     *
     * @return string
     */
    public function getMainElementId()
    {
        return $this->container['main_element_id'];
    }

    /**
     * Sets main_element_id
     *
     * @param string $main_element_id The main element id where the problem occurred.
     *
     * @return $this
     */
    public function setMainElementId($main_element_id)
    {
        $this->container['main_element_id'] = $main_element_id;

        return $this;
    }

    /**
     * Gets element_ids
     *
     * @return string[]
     */
    public function getElementIds()
    {
        return $this->container['element_ids'];
    }

    /**
     * Sets element_ids
     *
     * @param string[] $element_ids A list of element id affected by the problem.
     *
     * @return $this
     */
    public function setElementIds($element_ids)
    {
        $this->container['element_ids'] = $element_ids;

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
