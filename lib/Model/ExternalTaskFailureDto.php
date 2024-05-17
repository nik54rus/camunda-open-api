<?php
/**
 * ExternalTaskFailureDto
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
 * ExternalTaskFailureDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExternalTaskFailureDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExternalTaskFailureDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error_message' => 'string',
        'error_details' => 'string',
        'retries' => 'int',
        'retry_timeout' => 'int',
        'variables' => 'map[string,\Swagger\Client\Model\VariableValueDto]',
        'local_variables' => 'map[string,\Swagger\Client\Model\VariableValueDto]',
        'worker_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error_message' => null,
        'error_details' => null,
        'retries' => 'int32',
        'retry_timeout' => 'int64',
        'variables' => null,
        'local_variables' => null,
        'worker_id' => null
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
        'error_message' => 'errorMessage',
        'error_details' => 'errorDetails',
        'retries' => 'retries',
        'retry_timeout' => 'retryTimeout',
        'variables' => 'variables',
        'local_variables' => 'localVariables',
        'worker_id' => 'workerId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_message' => 'setErrorMessage',
        'error_details' => 'setErrorDetails',
        'retries' => 'setRetries',
        'retry_timeout' => 'setRetryTimeout',
        'variables' => 'setVariables',
        'local_variables' => 'setLocalVariables',
        'worker_id' => 'setWorkerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_message' => 'getErrorMessage',
        'error_details' => 'getErrorDetails',
        'retries' => 'getRetries',
        'retry_timeout' => 'getRetryTimeout',
        'variables' => 'getVariables',
        'local_variables' => 'getLocalVariables',
        'worker_id' => 'getWorkerId'
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
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['retries'] = isset($data['retries']) ? $data['retries'] : null;
        $this->container['retry_timeout'] = isset($data['retry_timeout']) ? $data['retry_timeout'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
        $this->container['local_variables'] = isset($data['local_variables']) ? $data['local_variables'] : null;
        $this->container['worker_id'] = isset($data['worker_id']) ? $data['worker_id'] : null;
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
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string $error_message An message indicating the reason of the failure.
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return string
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param string $error_details A detailed error description.
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

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
     * @param int $retries A number of how often the task should be retried. Must be >= 0. If this is 0, an incident is created and the task cannot be fetched anymore unless the retries are increased again. The incident's message is set to the `errorMessage` parameter.
     *
     * @return $this
     */
    public function setRetries($retries)
    {
        $this->container['retries'] = $retries;

        return $this;
    }

    /**
     * Gets retry_timeout
     *
     * @return int
     */
    public function getRetryTimeout()
    {
        return $this->container['retry_timeout'];
    }

    /**
     * Sets retry_timeout
     *
     * @param int $retry_timeout A timeout in milliseconds before the external task becomes available again for fetching. Must be >= 0.
     *
     * @return $this
     */
    public function setRetryTimeout($retry_timeout)
    {
        $this->container['retry_timeout'] = $retry_timeout;

        return $this;
    }

    /**
     * Gets variables
     *
     * @return map[string,\Swagger\Client\Model\VariableValueDto]
     */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
     * Sets variables
     *
     * @param map[string,\Swagger\Client\Model\VariableValueDto] $variables A JSON object containing variable key-value pairs. Each key is a variable name and each value a JSON variable value object with the following properties:
     *
     * @return $this
     */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;

        return $this;
    }

    /**
     * Gets local_variables
     *
     * @return map[string,\Swagger\Client\Model\VariableValueDto]
     */
    public function getLocalVariables()
    {
        return $this->container['local_variables'];
    }

    /**
     * Sets local_variables
     *
     * @param map[string,\Swagger\Client\Model\VariableValueDto] $local_variables A JSON object containing local variable key-value pairs. Local variables are set only in the scope of external task. Each key is a variable name and each value a JSON variable value object with the following properties:
     *
     * @return $this
     */
    public function setLocalVariables($local_variables)
    {
        $this->container['local_variables'] = $local_variables;

        return $this;
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
     * @param string $worker_id **Mandatory.** The ID of the worker who is performing the operation on the external task. If the task is already locked, must match the id of the worker who has most recently locked the task.
     *
     * @return $this
     */
    public function setWorkerId($worker_id)
    {
        $this->container['worker_id'] = $worker_id;

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
