<?php
/**
 * ProcessInstanceDto
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
 * ProcessInstanceDto Class Doc Comment
 *
 * @category Class
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */
class ProcessInstanceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $CamundaModelName = 'ProcessInstanceDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaTypes = [
        'id' => 'string',
        'definition_id' => 'string',
        'business_key' => 'string',
        'case_instance_id' => 'string',
        'ended' => 'bool',
        'suspended' => 'bool',
        'tenant_id' => 'string',
        'links' => '\Camunda\Client\Model\AtomLink[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaFormats = [
        'id' => null,
        'definition_id' => null,
        'business_key' => null,
        'case_instance_id' => null,
        'ended' => null,
        'suspended' => null,
        'tenant_id' => null,
        'links' => null
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
        'definition_id' => 'definitionId',
        'business_key' => 'businessKey',
        'case_instance_id' => 'caseInstanceId',
        'ended' => 'ended',
        'suspended' => 'suspended',
        'tenant_id' => 'tenantId',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'definition_id' => 'setDefinitionId',
        'business_key' => 'setBusinessKey',
        'case_instance_id' => 'setCaseInstanceId',
        'ended' => 'setEnded',
        'suspended' => 'setSuspended',
        'tenant_id' => 'setTenantId',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'definition_id' => 'getDefinitionId',
        'business_key' => 'getBusinessKey',
        'case_instance_id' => 'getCaseInstanceId',
        'ended' => 'getEnded',
        'suspended' => 'getSuspended',
        'tenant_id' => 'getTenantId',
        'links' => 'getLinks'
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
        $this->container['definition_id'] = isset($data['definition_id']) ? $data['definition_id'] : null;
        $this->container['business_key'] = isset($data['business_key']) ? $data['business_key'] : null;
        $this->container['case_instance_id'] = isset($data['case_instance_id']) ? $data['case_instance_id'] : null;
        $this->container['ended'] = isset($data['ended']) ? $data['ended'] : null;
        $this->container['suspended'] = isset($data['suspended']) ? $data['suspended'] : null;
        $this->container['tenant_id'] = isset($data['tenant_id']) ? $data['tenant_id'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
     * @param string $id The id of the process instance.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets definition_id
     *
     * @return string
     */
    public function getDefinitionId()
    {
        return $this->container['definition_id'];
    }

    /**
     * Sets definition_id
     *
     * @param string $definition_id The id of the process definition that this process instance belongs to.
     *
     * @return $this
     */
    public function setDefinitionId($definition_id)
    {
        $this->container['definition_id'] = $definition_id;

        return $this;
    }

    /**
     * Gets business_key
     *
     * @return string
     */
    public function getBusinessKey()
    {
        return $this->container['business_key'];
    }

    /**
     * Sets business_key
     *
     * @param string $business_key The business key of the process instance.
     *
     * @return $this
     */
    public function setBusinessKey($business_key)
    {
        $this->container['business_key'] = $business_key;

        return $this;
    }

    /**
     * Gets case_instance_id
     *
     * @return string
     */
    public function getCaseInstanceId()
    {
        return $this->container['case_instance_id'];
    }

    /**
     * Sets case_instance_id
     *
     * @param string $case_instance_id The id of the case instance associated with the process instance.
     *
     * @return $this
     */
    public function setCaseInstanceId($case_instance_id)
    {
        $this->container['case_instance_id'] = $case_instance_id;

        return $this;
    }

    /**
     * Gets ended
     *
     * @return bool
     */
    public function getEnded()
    {
        return $this->container['ended'];
    }

    /**
     * Sets ended
     *
     * @param bool $ended A flag indicating whether the process instance has ended or not. Deprecated: will always be false!
     *
     * @return $this
     */
    public function setEnded($ended)
    {
        $this->container['ended'] = $ended;

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
     * @param bool $suspended A flag indicating whether the process instance is suspended or not.
     *
     * @return $this
     */
    public function setSuspended($suspended)
    {
        $this->container['suspended'] = $suspended;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param string $tenant_id The tenant id of the process instance.
     *
     * @return $this
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Camunda\Client\Model\AtomLink[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Camunda\Client\Model\AtomLink[] $links The links associated to this resource, with `method`, `href` and `rel`.
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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
