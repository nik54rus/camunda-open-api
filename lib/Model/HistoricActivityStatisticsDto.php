<?php
/**
 * HistoricActivityStatisticsDto
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
 * HistoricActivityStatisticsDto Class Doc Comment
 *
 * @category Class
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */
class HistoricActivityStatisticsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $CamundaModelName = 'HistoricActivityStatisticsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaTypes = [
        'id' => 'string',
        'instances' => 'int',
        'canceled' => 'int',
        'finished' => 'int',
        'complete_scope' => 'int',
        'open_incidents' => 'int',
        'resolved_incidents' => 'int',
        'deleted_incidents' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaFormats = [
        'id' => null,
        'instances' => 'int64',
        'canceled' => 'int64',
        'finished' => 'int64',
        'complete_scope' => 'int64',
        'open_incidents' => 'int64',
        'resolved_incidents' => 'int64',
        'deleted_incidents' => 'int64'
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
        'id' => 'id',
        'instances' => 'instances',
        'canceled' => 'canceled',
        'finished' => 'finished',
        'complete_scope' => 'completeScope',
        'open_incidents' => 'openIncidents',
        'resolved_incidents' => 'resolvedIncidents',
        'deleted_incidents' => 'deletedIncidents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'instances' => 'setInstances',
        'canceled' => 'setCanceled',
        'finished' => 'setFinished',
        'complete_scope' => 'setCompleteScope',
        'open_incidents' => 'setOpenIncidents',
        'resolved_incidents' => 'setResolvedIncidents',
        'deleted_incidents' => 'setDeletedIncidents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'instances' => 'getInstances',
        'canceled' => 'getCanceled',
        'finished' => 'getFinished',
        'complete_scope' => 'getCompleteScope',
        'open_incidents' => 'getOpenIncidents',
        'resolved_incidents' => 'getResolvedIncidents',
        'deleted_incidents' => 'getDeletedIncidents'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['canceled'] = isset($data['canceled']) ? $data['canceled'] : null;
        $this->container['finished'] = isset($data['finished']) ? $data['finished'] : null;
        $this->container['complete_scope'] = isset($data['complete_scope']) ? $data['complete_scope'] : null;
        $this->container['open_incidents'] = isset($data['open_incidents']) ? $data['open_incidents'] : null;
        $this->container['resolved_incidents'] = isset($data['resolved_incidents']) ? $data['resolved_incidents'] : null;
        $this->container['deleted_incidents'] = isset($data['deleted_incidents']) ? $data['deleted_incidents'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The id of the activity the results are aggregated for.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets instances
     *
     * @return int
     */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
     * Sets instances
     *
     * @param int $instances The total number of all running instances of the activity.
     *
     * @return $this
     */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;

        return $this;
    }

    /**
     * Gets canceled
     *
     * @return int
     */
    public function getCanceled()
    {
        return $this->container['canceled'];
    }

    /**
     * Sets canceled
     *
     * @param int $canceled The total number of all canceled instances of the activity. **Note:** Will be `0` (not `null`), if canceled activity instances were excluded.
     *
     * @return $this
     */
    public function setCanceled($canceled)
    {
        $this->container['canceled'] = $canceled;

        return $this;
    }

    /**
     * Gets finished
     *
     * @return int
     */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /**
     * Sets finished
     *
     * @param int $finished The total number of all finished instances of the activity. **Note:** Will be `0` (not `null`), if finished activity instances were excluded.
     *
     * @return $this
     */
    public function setFinished($finished)
    {
        $this->container['finished'] = $finished;

        return $this;
    }

    /**
     * Gets complete_scope
     *
     * @return int
     */
    public function getCompleteScope()
    {
        return $this->container['complete_scope'];
    }

    /**
     * Sets complete_scope
     *
     * @param int $complete_scope The total number of all instances which completed a scope of the activity. **Note:** Will be `0` (not `null`), if activity instances which completed a scope were excluded.
     *
     * @return $this
     */
    public function setCompleteScope($complete_scope)
    {
        $this->container['complete_scope'] = $complete_scope;

        return $this;
    }

    /**
     * Gets open_incidents
     *
     * @return int
     */
    public function getOpenIncidents()
    {
        return $this->container['open_incidents'];
    }

    /**
     * Sets open_incidents
     *
     * @param int $open_incidents The total number of open incidents for the activity. **Note:** Will be `0` (not `null`), if `incidents` is set to `false`.
     *
     * @return $this
     */
    public function setOpenIncidents($open_incidents)
    {
        $this->container['open_incidents'] = $open_incidents;

        return $this;
    }

    /**
     * Gets resolved_incidents
     *
     * @return int
     */
    public function getResolvedIncidents()
    {
        return $this->container['resolved_incidents'];
    }

    /**
     * Sets resolved_incidents
     *
     * @param int $resolved_incidents The total number of resolved incidents for the activity. **Note:** Will be `0` (not `null`), if `incidents` is set to `false`.
     *
     * @return $this
     */
    public function setResolvedIncidents($resolved_incidents)
    {
        $this->container['resolved_incidents'] = $resolved_incidents;

        return $this;
    }

    /**
     * Gets deleted_incidents
     *
     * @return int
     */
    public function getDeletedIncidents()
    {
        return $this->container['deleted_incidents'];
    }

    /**
     * Sets deleted_incidents
     *
     * @param int $deleted_incidents The total number of deleted incidents for the activity. **Note:** Will be `0` (not `null`), if `incidents` is set to `false`.
     *
     * @return $this
     */
    public function setDeletedIncidents($deleted_incidents)
    {
        $this->container['deleted_incidents'] = $deleted_incidents;

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
