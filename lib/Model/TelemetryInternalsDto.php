<?php
/**
 * TelemetryInternalsDto
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
 * TelemetryInternalsDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TelemetryInternalsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TelemetryInternalsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'database' => '\Swagger\Client\Model\AbstractVendorVersionInformationDto',
        'application_server' => '\Swagger\Client\Model\AbstractVendorVersionInformationDto',
        'license_key' => '\Swagger\Client\Model\TelemetryLicenseKeyDto',
        'camunda_integration' => 'string[]',
        'commands' => 'map[string,\Swagger\Client\Model\TelemetryCountDto]',
        'metrics' => 'map[string,\Swagger\Client\Model\TelemetryCountDto]',
        'webapps' => 'string[]',
        'jdk' => '\Swagger\Client\Model\AbstractVendorVersionInformationDto',
        'data_collection_start_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'database' => null,
        'application_server' => null,
        'license_key' => null,
        'camunda_integration' => null,
        'commands' => null,
        'metrics' => null,
        'webapps' => null,
        'jdk' => null,
        'data_collection_start_date' => 'date-time'
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
        'database' => 'database',
        'application_server' => 'application-server',
        'license_key' => 'license-key',
        'camunda_integration' => 'camunda-integration',
        'commands' => 'commands',
        'metrics' => 'metrics',
        'webapps' => 'webapps',
        'jdk' => 'jdk',
        'data_collection_start_date' => 'data-collection-start-date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'database' => 'setDatabase',
        'application_server' => 'setApplicationServer',
        'license_key' => 'setLicenseKey',
        'camunda_integration' => 'setCamundaIntegration',
        'commands' => 'setCommands',
        'metrics' => 'setMetrics',
        'webapps' => 'setWebapps',
        'jdk' => 'setJdk',
        'data_collection_start_date' => 'setDataCollectionStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'database' => 'getDatabase',
        'application_server' => 'getApplicationServer',
        'license_key' => 'getLicenseKey',
        'camunda_integration' => 'getCamundaIntegration',
        'commands' => 'getCommands',
        'metrics' => 'getMetrics',
        'webapps' => 'getWebapps',
        'jdk' => 'getJdk',
        'data_collection_start_date' => 'getDataCollectionStartDate'
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
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['application_server'] = isset($data['application_server']) ? $data['application_server'] : null;
        $this->container['license_key'] = isset($data['license_key']) ? $data['license_key'] : null;
        $this->container['camunda_integration'] = isset($data['camunda_integration']) ? $data['camunda_integration'] : null;
        $this->container['commands'] = isset($data['commands']) ? $data['commands'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['webapps'] = isset($data['webapps']) ? $data['webapps'] : null;
        $this->container['jdk'] = isset($data['jdk']) ? $data['jdk'] : null;
        $this->container['data_collection_start_date'] = isset($data['data_collection_start_date']) ? $data['data_collection_start_date'] : null;
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
     * Gets database
     *
     * @return \Swagger\Client\Model\AbstractVendorVersionInformationDto
     */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
     * Sets database
     *
     * @param \Swagger\Client\Model\AbstractVendorVersionInformationDto $database database
     *
     * @return $this
     */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;

        return $this;
    }

    /**
     * Gets application_server
     *
     * @return \Swagger\Client\Model\AbstractVendorVersionInformationDto
     */
    public function getApplicationServer()
    {
        return $this->container['application_server'];
    }

    /**
     * Sets application_server
     *
     * @param \Swagger\Client\Model\AbstractVendorVersionInformationDto $application_server application_server
     *
     * @return $this
     */
    public function setApplicationServer($application_server)
    {
        $this->container['application_server'] = $application_server;

        return $this;
    }

    /**
     * Gets license_key
     *
     * @return \Swagger\Client\Model\TelemetryLicenseKeyDto
     */
    public function getLicenseKey()
    {
        return $this->container['license_key'];
    }

    /**
     * Sets license_key
     *
     * @param \Swagger\Client\Model\TelemetryLicenseKeyDto $license_key license_key
     *
     * @return $this
     */
    public function setLicenseKey($license_key)
    {
        $this->container['license_key'] = $license_key;

        return $this;
    }

    /**
     * Gets camunda_integration
     *
     * @return string[]
     */
    public function getCamundaIntegration()
    {
        return $this->container['camunda_integration'];
    }

    /**
     * Sets camunda_integration
     *
     * @param string[] $camunda_integration List of Camunda integrations used (e.g., Camunda Spring Boot Starter, Camunda Run, WildFly/JBoss subsystem, Camunda EJB).
     *
     * @return $this
     */
    public function setCamundaIntegration($camunda_integration)
    {
        $this->container['camunda_integration'] = $camunda_integration;

        return $this;
    }

    /**
     * Gets commands
     *
     * @return map[string,\Swagger\Client\Model\TelemetryCountDto]
     */
    public function getCommands()
    {
        return $this->container['commands'];
    }

    /**
     * Sets commands
     *
     * @param map[string,\Swagger\Client\Model\TelemetryCountDto] $commands The count of executed commands after the last retrieved data.
     *
     * @return $this
     */
    public function setCommands($commands)
    {
        $this->container['commands'] = $commands;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return map[string,\Swagger\Client\Model\TelemetryCountDto]
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param map[string,\Swagger\Client\Model\TelemetryCountDto] $metrics The collected metrics are the number of root process instance executions started, the number of activity instances started or also known as flow node instances, and the number of executed decision instances and elements.
     *
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets webapps
     *
     * @return string[]
     */
    public function getWebapps()
    {
        return $this->container['webapps'];
    }

    /**
     * Sets webapps
     *
     * @param string[] $webapps The webapps enabled in this installation of Camunda.
     *
     * @return $this
     */
    public function setWebapps($webapps)
    {
        $this->container['webapps'] = $webapps;

        return $this;
    }

    /**
     * Gets jdk
     *
     * @return \Swagger\Client\Model\AbstractVendorVersionInformationDto
     */
    public function getJdk()
    {
        return $this->container['jdk'];
    }

    /**
     * Sets jdk
     *
     * @param \Swagger\Client\Model\AbstractVendorVersionInformationDto $jdk jdk
     *
     * @return $this
     */
    public function setJdk($jdk)
    {
        $this->container['jdk'] = $jdk;

        return $this;
    }

    /**
     * Gets data_collection_start_date
     *
     * @return \DateTime
     */
    public function getDataCollectionStartDate()
    {
        return $this->container['data_collection_start_date'];
    }

    /**
     * Sets data_collection_start_date
     *
     * @param \DateTime $data_collection_start_date The date when the engine started to collect dynamic data, such as command executions and metrics. If telemetry sending is enabled, dynamic data resets on sending the data to Camunda. Dynamic data and the date returned by this method are reset in three cases: engine startup, after engine start when sending telemetry data to Camunda is enabled via API, after sending telemetry data to Camunda (only when this was enabled) The date is in the format <code>YYYY-MM-DD'T'HH:mm:ss.SSSZ</code>.
     *
     * @return $this
     */
    public function setDataCollectionStartDate($data_collection_start_date)
    {
        $this->container['data_collection_start_date'] = $data_collection_start_date;

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