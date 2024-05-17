<?php
/**
 * FetchExternalTasksDto
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
 * FetchExternalTasksDto Class Doc Comment
 *
 * @category Class
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */
class FetchExternalTasksDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $CamundaModelName = 'FetchExternalTasksDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaTypes = [
        'worker_id' => 'string',
        'max_tasks' => 'int',
        'use_priority' => 'bool',
        'async_response_timeout' => 'int',
        'topics' => '\Camunda\Client\Model\FetchExternalTaskTopicDto[]',
        'sorting' => '\Camunda\Client\Model\FetchExternalTasksDtoSorting[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaFormats = [
        'worker_id' => null,
        'max_tasks' => 'int32',
        'use_priority' => null,
        'async_response_timeout' => 'int64',
        'topics' => null,
        'sorting' => null
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
        'worker_id' => 'workerId',
        'max_tasks' => 'maxTasks',
        'use_priority' => 'usePriority',
        'async_response_timeout' => 'asyncResponseTimeout',
        'topics' => 'topics',
        'sorting' => 'sorting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'worker_id' => 'setWorkerId',
        'max_tasks' => 'setMaxTasks',
        'use_priority' => 'setUsePriority',
        'async_response_timeout' => 'setAsyncResponseTimeout',
        'topics' => 'setTopics',
        'sorting' => 'setSorting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'worker_id' => 'getWorkerId',
        'max_tasks' => 'getMaxTasks',
        'use_priority' => 'getUsePriority',
        'async_response_timeout' => 'getAsyncResponseTimeout',
        'topics' => 'getTopics',
        'sorting' => 'getSorting'
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
        $this->container['worker_id'] = isset($data['worker_id']) ? $data['worker_id'] : null;
        $this->container['max_tasks'] = isset($data['max_tasks']) ? $data['max_tasks'] : null;
        $this->container['use_priority'] = isset($data['use_priority']) ? $data['use_priority'] : null;
        $this->container['async_response_timeout'] = isset($data['async_response_timeout']) ? $data['async_response_timeout'] : null;
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
        $this->container['sorting'] = isset($data['sorting']) ? $data['sorting'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['worker_id'] === null) {
            $invalidProperties[] = "'worker_id' can't be null";
        }
        if ($this->container['max_tasks'] === null) {
            $invalidProperties[] = "'max_tasks' can't be null";
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
     * Gets worker_id
     *
     * @return string
     */
    public function getWorkerId()
    {
        return $this->container['worker_id'];
    }

    /**
     * Sets worker_id
     *
     * @param string $worker_id **Mandatory.** The id of the worker on which behalf tasks are fetched. The returned tasks are locked for that worker and can only be completed when providing the same worker id.
     *
     * @return $this
     */
    public function setWorkerId($worker_id)
    {
        $this->container['worker_id'] = $worker_id;

        return $this;
    }

    /**
     * Gets max_tasks
     *
     * @return int
     */
    public function getMaxTasks()
    {
        return $this->container['max_tasks'];
    }

    /**
     * Sets max_tasks
     *
     * @param int $max_tasks **Mandatory.** The maximum number of tasks to return.
     *
     * @return $this
     */
    public function setMaxTasks($max_tasks)
    {
        $this->container['max_tasks'] = $max_tasks;

        return $this;
    }

    /**
     * Gets use_priority
     *
     * @return bool
     */
    public function getUsePriority()
    {
        return $this->container['use_priority'];
    }

    /**
     * Sets use_priority
     *
     * @param bool $use_priority A `boolean` value, which indicates whether the task should be fetched based on its priority or arbitrarily.
     *
     * @return $this
     */
    public function setUsePriority($use_priority)
    {
        $this->container['use_priority'] = $use_priority;

        return $this;
    }

    /**
     * Gets async_response_timeout
     *
     * @return int
     */
    public function getAsyncResponseTimeout()
    {
        return $this->container['async_response_timeout'];
    }

    /**
     * Sets async_response_timeout
     *
     * @param int $async_response_timeout The [Long Polling](https://docs.camunda.org/manual/7.21/user-guide/process-engine/external-tasks/#long-polling-to-fetch-and-lock-external-tasks) timeout in milliseconds.  **Note:** The value cannot be set larger than 1.800.000 milliseconds (corresponds to 30 minutes).
     *
     * @return $this
     */
    public function setAsyncResponseTimeout($async_response_timeout)
    {
        $this->container['async_response_timeout'] = $async_response_timeout;

        return $this;
    }

    /**
     * Gets topics
     *
     * @return \Camunda\Client\Model\FetchExternalTaskTopicDto[]
     */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
     * Sets topics
     *
     * @param \Camunda\Client\Model\FetchExternalTaskTopicDto[] $topics A JSON array of topic objects for which external tasks should be fetched. The returned tasks may be arbitrarily distributed among these topics. Each topic object has the following properties:
     *
     * @return $this
     */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;

        return $this;
    }

    /**
     * Gets sorting
     *
     * @return \Camunda\Client\Model\FetchExternalTasksDtoSorting[]
     */
    public function getSorting()
    {
        return $this->container['sorting'];
    }

    /**
     * Sets sorting
     *
     * @param \Camunda\Client\Model\FetchExternalTasksDtoSorting[] $sorting Apply sorting of the result
     *
     * @return $this
     */
    public function setSorting($sorting)
    {
        $this->container['sorting'] = $sorting;

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
