<?php
/**
 * AbstractSetRemovalTimeDto
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
 * AbstractSetRemovalTimeDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AbstractSetRemovalTimeDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AbstractSetRemovalTimeDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'absolute_removal_time' => '\DateTime',
        'cleared_removal_time' => 'bool',
        'calculated_removal_time' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'absolute_removal_time' => 'date-time',
        'cleared_removal_time' => null,
        'calculated_removal_time' => null
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
        'absolute_removal_time' => 'absoluteRemovalTime',
        'cleared_removal_time' => 'clearedRemovalTime',
        'calculated_removal_time' => 'calculatedRemovalTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'absolute_removal_time' => 'setAbsoluteRemovalTime',
        'cleared_removal_time' => 'setClearedRemovalTime',
        'calculated_removal_time' => 'setCalculatedRemovalTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'absolute_removal_time' => 'getAbsoluteRemovalTime',
        'cleared_removal_time' => 'getClearedRemovalTime',
        'calculated_removal_time' => 'getCalculatedRemovalTime'
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
        $this->container['absolute_removal_time'] = isset($data['absolute_removal_time']) ? $data['absolute_removal_time'] : null;
        $this->container['cleared_removal_time'] = isset($data['cleared_removal_time']) ? $data['cleared_removal_time'] : null;
        $this->container['calculated_removal_time'] = isset($data['calculated_removal_time']) ? $data['calculated_removal_time'] : null;
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
     * Gets absolute_removal_time
     *
     * @return \DateTime
     */
    public function getAbsoluteRemovalTime()
    {
        return $this->container['absolute_removal_time'];
    }

    /**
     * Sets absolute_removal_time
     *
     * @param \DateTime $absolute_removal_time The date for which the instances shall be removed. Value may not be `null`.  **Note:** Cannot be set in conjunction with `clearedRemovalTime` or `calculatedRemovalTime`.
     *
     * @return $this
     */
    public function setAbsoluteRemovalTime($absolute_removal_time)
    {
        $this->container['absolute_removal_time'] = $absolute_removal_time;

        return $this;
    }

    /**
     * Gets cleared_removal_time
     *
     * @return bool
     */
    public function getClearedRemovalTime()
    {
        return $this->container['cleared_removal_time'];
    }

    /**
     * Sets cleared_removal_time
     *
     * @param bool $cleared_removal_time Sets the removal time to `null`. Value may only be `true`, as `false` is the default behavior.  **Note:** Cannot be set in conjunction with `absoluteRemovalTime` or `calculatedRemovalTime`.
     *
     * @return $this
     */
    public function setClearedRemovalTime($cleared_removal_time)
    {
        $this->container['cleared_removal_time'] = $cleared_removal_time;

        return $this;
    }

    /**
     * Gets calculated_removal_time
     *
     * @return bool
     */
    public function getCalculatedRemovalTime()
    {
        return $this->container['calculated_removal_time'];
    }

    /**
     * Sets calculated_removal_time
     *
     * @param bool $calculated_removal_time The removal time is calculated based on the engine's configuration settings. Value may only be `true`, as `false` is the default behavior.  **Note:** Cannot be set in conjunction with `absoluteRemovalTime` or `clearedRemovalTime`.
     *
     * @return $this
     */
    public function setCalculatedRemovalTime($calculated_removal_time)
    {
        $this->container['calculated_removal_time'] = $calculated_removal_time;

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