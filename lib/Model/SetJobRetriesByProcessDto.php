<?php
/**
 * SetJobRetriesByProcessDto
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
 * SetJobRetriesByProcessDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SetJobRetriesByProcessDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SetJobRetriesByProcessDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'process_instances' => 'string[]',
        'process_instance_query' => '\Swagger\Client\Model\ProcessInstanceQueryDto',
        'historic_process_instance_query' => '\Swagger\Client\Model\HistoricProcessInstanceQueryDto',
        'retries' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'process_instances' => null,
        'process_instance_query' => null,
        'historic_process_instance_query' => null,
        'retries' => 'int32'
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
        'process_instances' => 'processInstances',
        'process_instance_query' => 'processInstanceQuery',
        'historic_process_instance_query' => 'historicProcessInstanceQuery',
        'retries' => 'retries'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'process_instances' => 'setProcessInstances',
        'process_instance_query' => 'setProcessInstanceQuery',
        'historic_process_instance_query' => 'setHistoricProcessInstanceQuery',
        'retries' => 'setRetries'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'process_instances' => 'getProcessInstances',
        'process_instance_query' => 'getProcessInstanceQuery',
        'historic_process_instance_query' => 'getHistoricProcessInstanceQuery',
        'retries' => 'getRetries'
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
        $this->container['process_instances'] = isset($data['process_instances']) ? $data['process_instances'] : null;
        $this->container['process_instance_query'] = isset($data['process_instance_query']) ? $data['process_instance_query'] : null;
        $this->container['historic_process_instance_query'] = isset($data['historic_process_instance_query']) ? $data['historic_process_instance_query'] : null;
        $this->container['retries'] = isset($data['retries']) ? $data['retries'] : null;
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
     * Gets process_instances
     *
     * @return string[]
     */
    public function getProcessInstances()
    {
        return $this->container['process_instances'];
    }

    /**
     * Sets process_instances
     *
     * @param string[] $process_instances A list of process instance ids to fetch jobs, for which retries will be set.
     *
     * @return $this
     */
    public function setProcessInstances($process_instances)
    {
        $this->container['process_instances'] = $process_instances;

        return $this;
    }

    /**
     * Gets process_instance_query
     *
     * @return \Swagger\Client\Model\ProcessInstanceQueryDto
     */
    public function getProcessInstanceQuery()
    {
        return $this->container['process_instance_query'];
    }

    /**
     * Sets process_instance_query
     *
     * @param \Swagger\Client\Model\ProcessInstanceQueryDto $process_instance_query process_instance_query
     *
     * @return $this
     */
    public function setProcessInstanceQuery($process_instance_query)
    {
        $this->container['process_instance_query'] = $process_instance_query;

        return $this;
    }

    /**
     * Gets historic_process_instance_query
     *
     * @return \Swagger\Client\Model\HistoricProcessInstanceQueryDto
     */
    public function getHistoricProcessInstanceQuery()
    {
        return $this->container['historic_process_instance_query'];
    }

    /**
     * Sets historic_process_instance_query
     *
     * @param \Swagger\Client\Model\HistoricProcessInstanceQueryDto $historic_process_instance_query historic_process_instance_query
     *
     * @return $this
     */
    public function setHistoricProcessInstanceQuery($historic_process_instance_query)
    {
        $this->container['historic_process_instance_query'] = $historic_process_instance_query;

        return $this;
    }

    /**
     * Gets retries
     *
     * @return int
     */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
     * Sets retries
     *
     * @param int $retries The number of retries to set for the resource.  Must be >= 0. If this is 0, an incident is created and the task, or job, cannot be fetched, or acquired anymore unless the retries are increased again. Can not be null.
     *
     * @return $this
     */
    public function setRetries($retries)
    {
        $this->container['retries'] = $retries;

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
