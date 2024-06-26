<?php
/**
 * DeleteHistoricProcessInstancesDto
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
 * DeleteHistoricProcessInstancesDto Class Doc Comment
 *
 * @category Class
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */
class DeleteHistoricProcessInstancesDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $CamundaModelName = 'DeleteHistoricProcessInstancesDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaTypes = [
        'historic_process_instance_ids' => 'string[]',
        'historic_process_instance_query' => '\Camunda\Client\Model\HistoricProcessInstanceQueryDto',
        'delete_reason' => 'string',
        'fail_if_not_exists' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaFormats = [
        'historic_process_instance_ids' => null,
        'historic_process_instance_query' => null,
        'delete_reason' => null,
        'fail_if_not_exists' => null
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
        'historic_process_instance_ids' => 'historicProcessInstanceIds',
        'historic_process_instance_query' => 'historicProcessInstanceQuery',
        'delete_reason' => 'deleteReason',
        'fail_if_not_exists' => 'failIfNotExists'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'historic_process_instance_ids' => 'setHistoricProcessInstanceIds',
        'historic_process_instance_query' => 'setHistoricProcessInstanceQuery',
        'delete_reason' => 'setDeleteReason',
        'fail_if_not_exists' => 'setFailIfNotExists'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'historic_process_instance_ids' => 'getHistoricProcessInstanceIds',
        'historic_process_instance_query' => 'getHistoricProcessInstanceQuery',
        'delete_reason' => 'getDeleteReason',
        'fail_if_not_exists' => 'getFailIfNotExists'
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
        $this->container['historic_process_instance_ids'] = isset($data['historic_process_instance_ids']) ? $data['historic_process_instance_ids'] : null;
        $this->container['historic_process_instance_query'] = isset($data['historic_process_instance_query']) ? $data['historic_process_instance_query'] : null;
        $this->container['delete_reason'] = isset($data['delete_reason']) ? $data['delete_reason'] : null;
        $this->container['fail_if_not_exists'] = isset($data['fail_if_not_exists']) ? $data['fail_if_not_exists'] : null;
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
     * @param string[] $historic_process_instance_ids A list historic process instance ids to delete.
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
     * @return \Camunda\Client\Model\HistoricProcessInstanceQueryDto
     */
    public function getHistoricProcessInstanceQuery()
    {
        return $this->container['historic_process_instance_query'];
    }

    /**
     * Sets historic_process_instance_query
     *
     * @param \Camunda\Client\Model\HistoricProcessInstanceQueryDto $historic_process_instance_query historic_process_instance_query
     *
     * @return $this
     */
    public function setHistoricProcessInstanceQuery($historic_process_instance_query)
    {
        $this->container['historic_process_instance_query'] = $historic_process_instance_query;

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
     * @param string $delete_reason A string with delete reason.
     *
     * @return $this
     */
    public function setDeleteReason($delete_reason)
    {
        $this->container['delete_reason'] = $delete_reason;

        return $this;
    }

    /**
     * Gets fail_if_not_exists
     *
     * @return bool
     */
    public function getFailIfNotExists()
    {
        return $this->container['fail_if_not_exists'];
    }

    /**
     * Sets fail_if_not_exists
     *
     * @param bool $fail_if_not_exists If set to `false`, the request will still be successful if one ore more of the process ids are not found.
     *
     * @return $this
     */
    public function setFailIfNotExists($fail_if_not_exists)
    {
        $this->container['fail_if_not_exists'] = $fail_if_not_exists;

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
