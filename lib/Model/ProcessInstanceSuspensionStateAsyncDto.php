<?php
/**
 * ProcessInstanceSuspensionStateAsyncDto
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
 * ProcessInstanceSuspensionStateAsyncDto Class Doc Comment
 *
 * @category Class
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */
class ProcessInstanceSuspensionStateAsyncDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $CamundaModelName = 'ProcessInstanceSuspensionStateAsyncDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaTypes = [
        'process_instance_ids' => 'string[]',
        'process_instance_query' => '\Camunda\Client\Model\ProcessInstanceQueryDto',
        'historic_process_instance_query' => '\Camunda\Client\Model\HistoricProcessInstanceQueryDto',
        'suspended' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaFormats = [
        'process_instance_ids' => null,
        'process_instance_query' => null,
        'historic_process_instance_query' => null,
        'suspended' => null
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
        'process_instance_ids' => 'processInstanceIds',
        'process_instance_query' => 'processInstanceQuery',
        'historic_process_instance_query' => 'historicProcessInstanceQuery',
        'suspended' => 'suspended'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'process_instance_ids' => 'setProcessInstanceIds',
        'process_instance_query' => 'setProcessInstanceQuery',
        'historic_process_instance_query' => 'setHistoricProcessInstanceQuery',
        'suspended' => 'setSuspended'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'process_instance_ids' => 'getProcessInstanceIds',
        'process_instance_query' => 'getProcessInstanceQuery',
        'historic_process_instance_query' => 'getHistoricProcessInstanceQuery',
        'suspended' => 'getSuspended'
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
        $this->container['process_instance_ids'] = isset($data['process_instance_ids']) ? $data['process_instance_ids'] : null;
        $this->container['process_instance_query'] = isset($data['process_instance_query']) ? $data['process_instance_query'] : null;
        $this->container['historic_process_instance_query'] = isset($data['historic_process_instance_query']) ? $data['historic_process_instance_query'] : null;
        $this->container['suspended'] = isset($data['suspended']) ? $data['suspended'] : null;
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
     * Gets process_instance_ids
     *
     * @return string[]
     */
    public function getProcessInstanceIds()
    {
        return $this->container['process_instance_ids'];
    }

    /**
     * Sets process_instance_ids
     *
     * @param string[] $process_instance_ids A list of process instance ids which defines a group of process instances which will be activated or suspended by the operation.
     *
     * @return $this
     */
    public function setProcessInstanceIds($process_instance_ids)
    {
        $this->container['process_instance_ids'] = $process_instance_ids;

        return $this;
    }

    /**
     * Gets process_instance_query
     *
     * @return \Camunda\Client\Model\ProcessInstanceQueryDto
     */
    public function getProcessInstanceQuery()
    {
        return $this->container['process_instance_query'];
    }

    /**
     * Sets process_instance_query
     *
     * @param \Camunda\Client\Model\ProcessInstanceQueryDto $process_instance_query process_instance_query
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
     * Gets suspended
     *
     * @return bool
     */
    public function getSuspended()
    {
        return $this->container['suspended'];
    }

    /**
     * Sets suspended
     *
     * @param bool $suspended A Boolean value which indicates whether to activate or suspend a given instance  (e.g. process instance, job, job definition, or batch). When the value is set to true,  the given instance will be suspended and when the value is set to false,  the given instance will be activated.
     *
     * @return $this
     */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;

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
