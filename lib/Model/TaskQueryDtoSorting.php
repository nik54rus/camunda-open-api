<?php
/**
 * TaskQueryDtoSorting
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
 * TaskQueryDtoSorting Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskQueryDtoSorting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskQueryDto_sorting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sort_by' => 'string',
        'sort_order' => 'string',
        'parameters' => '\Swagger\Client\Model\SortTaskQueryParametersDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sort_by' => null,
        'sort_order' => null,
        'parameters' => null
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
        'sort_by' => 'sortBy',
        'sort_order' => 'sortOrder',
        'parameters' => 'parameters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sort_by' => 'setSortBy',
        'sort_order' => 'setSortOrder',
        'parameters' => 'setParameters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sort_by' => 'getSortBy',
        'sort_order' => 'getSortOrder',
        'parameters' => 'getParameters'
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

    const SORT_BY_INSTANCE_ID = 'instanceId';
    const SORT_BY_CASE_INSTANCE_ID = 'caseInstanceId';
    const SORT_BY_DUE_DATE = 'dueDate';
    const SORT_BY_EXECUTION_ID = 'executionId';
    const SORT_BY_CASE_EXECUTION_ID = 'caseExecutionId';
    const SORT_BY_ASSIGNEE = 'assignee';
    const SORT_BY_CREATED = 'created';
    const SORT_BY_LAST_UPDATED = 'lastUpdated';
    const SORT_BY_FOLLOW_UP_DATE = 'followUpDate';
    const SORT_BY_DESCRIPTION = 'description';
    const SORT_BY_ID = 'id';
    const SORT_BY_NAME = 'name';
    const SORT_BY_NAME_CASE_INSENSITIVE = 'nameCaseInsensitive';
    const SORT_BY_PRIORITY = 'priority';
    const SORT_BY_PROCESS_VARIABLE = 'processVariable';
    const SORT_BY_EXECUTION_VARIABLE = 'executionVariable';
    const SORT_BY_TASK_VARIABLE = 'taskVariable';
    const SORT_BY_CASE_EXECUTION_VARIABLE = 'caseExecutionVariable';
    const SORT_BY_CASE_INSTANCE_VARIABLE = 'caseInstanceVariable';
    const SORT_ORDER_ASC = 'asc';
    const SORT_ORDER_DESC = 'desc';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSortByAllowableValues()
    {
        return [
            self::SORT_BY_INSTANCE_ID,
            self::SORT_BY_CASE_INSTANCE_ID,
            self::SORT_BY_DUE_DATE,
            self::SORT_BY_EXECUTION_ID,
            self::SORT_BY_CASE_EXECUTION_ID,
            self::SORT_BY_ASSIGNEE,
            self::SORT_BY_CREATED,
            self::SORT_BY_LAST_UPDATED,
            self::SORT_BY_FOLLOW_UP_DATE,
            self::SORT_BY_DESCRIPTION,
            self::SORT_BY_ID,
            self::SORT_BY_NAME,
            self::SORT_BY_NAME_CASE_INSENSITIVE,
            self::SORT_BY_PRIORITY,
            self::SORT_BY_PROCESS_VARIABLE,
            self::SORT_BY_EXECUTION_VARIABLE,
            self::SORT_BY_TASK_VARIABLE,
            self::SORT_BY_CASE_EXECUTION_VARIABLE,
            self::SORT_BY_CASE_INSTANCE_VARIABLE,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSortOrderAllowableValues()
    {
        return [
            self::SORT_ORDER_ASC,
            self::SORT_ORDER_DESC,
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
        $this->container['sort_by'] = isset($data['sort_by']) ? $data['sort_by'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSortByAllowableValues();
        if (!is_null($this->container['sort_by']) && !in_array($this->container['sort_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sort_by', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSortOrderAllowableValues();
        if (!is_null($this->container['sort_order']) && !in_array($this->container['sort_order'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sort_order', must be one of '%s'",
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
     * Gets sort_by
     *
     * @return string
     */
    public function getSortBy()
    {
        return $this->container['sort_by'];
    }

    /**
     * Sets sort_by
     *
     * @param string $sort_by Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
     *
     * @return $this
     */
    public function setSortBy($sort_by)
    {
        $allowedValues = $this->getSortByAllowableValues();
        if (!is_null($sort_by) && !in_array($sort_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sort_by', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sort_by'] = $sort_by;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param string $sort_order Sort the results in a given order. Values may be `asc` for ascending order or `desc` for descending order. Must be used in conjunction with the sortBy parameter.
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $allowedValues = $this->getSortOrderAllowableValues();
        if (!is_null($sort_order) && !in_array($sort_order, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sort_order', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \Swagger\Client\Model\SortTaskQueryParametersDto
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \Swagger\Client\Model\SortTaskQueryParametersDto $parameters parameters
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

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