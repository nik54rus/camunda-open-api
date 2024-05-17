<?php
/**
 * SetRemovalTimeToHistoricProcessInstancesDto
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
 * SetRemovalTimeToHistoricProcessInstancesDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SetRemovalTimeToHistoricProcessInstancesDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SetRemovalTimeToHistoricProcessInstancesDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'historic_process_instance_ids' => 'string[]',
        'historic_process_instance_query' => '\Swagger\Client\Model\HistoricProcessInstanceQueryDto',
        'hierarchical' => 'bool',
        'update_in_chunks' => 'bool',
        'update_chunk_size' => 'int',
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
        'historic_process_instance_ids' => null,
        'historic_process_instance_query' => null,
        'hierarchical' => null,
        'update_in_chunks' => null,
        'update_chunk_size' => 'int32',
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
        'historic_process_instance_ids' => 'historicProcessInstanceIds',
        'historic_process_instance_query' => 'historicProcessInstanceQuery',
        'hierarchical' => 'hierarchical',
        'update_in_chunks' => 'updateInChunks',
        'update_chunk_size' => 'updateChunkSize',
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
        'historic_process_instance_ids' => 'setHistoricProcessInstanceIds',
        'historic_process_instance_query' => 'setHistoricProcessInstanceQuery',
        'hierarchical' => 'setHierarchical',
        'update_in_chunks' => 'setUpdateInChunks',
        'update_chunk_size' => 'setUpdateChunkSize',
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
        'historic_process_instance_ids' => 'getHistoricProcessInstanceIds',
        'historic_process_instance_query' => 'getHistoricProcessInstanceQuery',
        'hierarchical' => 'getHierarchical',
        'update_in_chunks' => 'getUpdateInChunks',
        'update_chunk_size' => 'getUpdateChunkSize',
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
        $this->container['historic_process_instance_ids'] = isset($data['historic_process_instance_ids']) ? $data['historic_process_instance_ids'] : null;
        $this->container['historic_process_instance_query'] = isset($data['historic_process_instance_query']) ? $data['historic_process_instance_query'] : null;
        $this->container['hierarchical'] = isset($data['hierarchical']) ? $data['hierarchical'] : null;
        $this->container['update_in_chunks'] = isset($data['update_in_chunks']) ? $data['update_in_chunks'] : null;
        $this->container['update_chunk_size'] = isset($data['update_chunk_size']) ? $data['update_chunk_size'] : null;
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
     * Gets historic_process_instance_ids
     *
     * @return string[]
     */
    public function getHistoricProcessInstanceIds()
    {
        return $this->container['historic_process_instance_ids'];
    }

    /**
     * Sets historic_process_instance_ids
     *
     * @param string[] $historic_process_instance_ids The id of the process instance.
     *
     * @return $this
     */
    public function setHistoricProcessInstanceIds($historic_process_instance_ids)
    {
        $this->container['historic_process_instance_ids'] = $historic_process_instance_ids;

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
     * Gets hierarchical
     *
     * @return bool
     */
    public function getHierarchical()
    {
        return $this->container['hierarchical'];
    }

    /**
     * Sets hierarchical
     *
     * @param bool $hierarchical Sets the removal time to all historic process instances in the hierarchy. Value may only be `true`, as `false` is the default behavior.
     *
     * @return $this
     */
    public function setHierarchical($hierarchical)
    {
        $this->container['hierarchical'] = $hierarchical;

        return $this;
    }

    /**
     * Gets update_in_chunks
     *
     * @return bool
     */
    public function getUpdateInChunks()
    {
        return $this->container['update_in_chunks'];
    }

    /**
     * Sets update_in_chunks
     *
     * @param bool $update_in_chunks Handles removal time updates in chunks, taking into account the defined size in `removalTimeUpdateChunkSize` in the process engine configuration. The size of the  chunks can also be overridden per call with the `updateChunkSize` parameter. Enabling this option can lead to multiple executions of the resulting jobs, preventing the database transaction from timing out by limiting the number of rows to update. Value may only be `true`, as `false` is the default behavior.
     *
     * @return $this
     */
    public function setUpdateInChunks($update_in_chunks)
    {
        $this->container['update_in_chunks'] = $update_in_chunks;

        return $this;
    }

    /**
     * Gets update_chunk_size
     *
     * @return int
     */
    public function getUpdateChunkSize()
    {
        return $this->container['update_chunk_size'];
    }

    /**
     * Sets update_chunk_size
     *
     * @param int $update_chunk_size Defines the size of the chunks in which removal time updates are processed. The value must be a positive integer between `1` and `500`. This only has an  effect if `updateInChunks` is set to `true`. If undefined, the operation uses the  `removalTimeUpdateChunkSize` defined in the process engine configuration.
     *
     * @return $this
     */
    public function setUpdateChunkSize($update_chunk_size)
    {
        $this->container['update_chunk_size'] = $update_chunk_size;

        return $this;
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