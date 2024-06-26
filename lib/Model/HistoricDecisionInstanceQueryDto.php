<?php
/**
 * HistoricDecisionInstanceQueryDto
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
 * HistoricDecisionInstanceQueryDto Class Doc Comment
 *
 * @category Class
 * @description A historic decision instance query which defines a list of historic decision instances
 * @package  Camunda\Client
 * @author   Nik54rus
 * @link     https://github.com/nik54rus/camunda-open-api
 */
class HistoricDecisionInstanceQueryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $CamundaModelName = 'HistoricDecisionInstanceQueryDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaTypes = [
        'decision_instance_id' => 'string',
        'decision_instance_id_in' => 'string[]',
        'decision_definition_id' => 'string',
        'decision_definition_id_in' => 'string[]',
        'decision_definition_key' => 'string',
        'decision_definition_key_in' => 'string[]',
        'decision_definition_name' => 'string',
        'decision_definition_name_like' => 'string',
        'process_definition_id' => 'string',
        'process_definition_key' => 'string',
        'process_instance_id' => 'string',
        'case_definition_id' => 'string',
        'case_definition_key' => 'string',
        'case_instance_id' => 'string',
        'activity_id_in' => 'string[]',
        'activity_instance_id_in' => 'string[]',
        'tenant_id_in' => 'string[]',
        'without_tenant_id' => 'bool',
        'evaluated_before' => '\DateTime',
        'evaluated_after' => '\DateTime',
        'user_id' => 'string',
        'root_decision_instance_id' => 'string',
        'root_decision_instances_only' => 'bool',
        'decision_requirements_definition_id' => 'string',
        'decision_requirements_definition_key' => 'string',
        'include_inputs' => 'bool',
        'include_outputs' => 'bool',
        'disable_binary_fetching' => 'bool',
        'disable_custom_object_deserialization' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $CamundaFormats = [
        'decision_instance_id' => null,
        'decision_instance_id_in' => null,
        'decision_definition_id' => null,
        'decision_definition_id_in' => null,
        'decision_definition_key' => null,
        'decision_definition_key_in' => null,
        'decision_definition_name' => null,
        'decision_definition_name_like' => null,
        'process_definition_id' => null,
        'process_definition_key' => null,
        'process_instance_id' => null,
        'case_definition_id' => null,
        'case_definition_key' => null,
        'case_instance_id' => null,
        'activity_id_in' => null,
        'activity_instance_id_in' => null,
        'tenant_id_in' => null,
        'without_tenant_id' => null,
        'evaluated_before' => 'date-time',
        'evaluated_after' => 'date-time',
        'user_id' => null,
        'root_decision_instance_id' => null,
        'root_decision_instances_only' => null,
        'decision_requirements_definition_id' => null,
        'decision_requirements_definition_key' => null,
        'include_inputs' => null,
        'include_outputs' => null,
        'disable_binary_fetching' => null,
        'disable_custom_object_deserialization' => null
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
        'decision_instance_id' => 'decisionInstanceId',
        'decision_instance_id_in' => 'decisionInstanceIdIn',
        'decision_definition_id' => 'decisionDefinitionId',
        'decision_definition_id_in' => 'decisionDefinitionIdIn',
        'decision_definition_key' => 'decisionDefinitionKey',
        'decision_definition_key_in' => 'decisionDefinitionKeyIn',
        'decision_definition_name' => 'decisionDefinitionName',
        'decision_definition_name_like' => 'decisionDefinitionNameLike',
        'process_definition_id' => 'processDefinitionId',
        'process_definition_key' => 'processDefinitionKey',
        'process_instance_id' => 'processInstanceId',
        'case_definition_id' => 'caseDefinitionId',
        'case_definition_key' => 'caseDefinitionKey',
        'case_instance_id' => 'caseInstanceId',
        'activity_id_in' => 'activityIdIn',
        'activity_instance_id_in' => 'activityInstanceIdIn',
        'tenant_id_in' => 'tenantIdIn',
        'without_tenant_id' => 'withoutTenantId',
        'evaluated_before' => 'evaluatedBefore',
        'evaluated_after' => 'evaluatedAfter',
        'user_id' => 'userId',
        'root_decision_instance_id' => 'rootDecisionInstanceId',
        'root_decision_instances_only' => 'rootDecisionInstancesOnly',
        'decision_requirements_definition_id' => 'decisionRequirementsDefinitionId',
        'decision_requirements_definition_key' => 'decisionRequirementsDefinitionKey',
        'include_inputs' => 'includeInputs',
        'include_outputs' => 'includeOutputs',
        'disable_binary_fetching' => 'disableBinaryFetching',
        'disable_custom_object_deserialization' => 'disableCustomObjectDeserialization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'decision_instance_id' => 'setDecisionInstanceId',
        'decision_instance_id_in' => 'setDecisionInstanceIdIn',
        'decision_definition_id' => 'setDecisionDefinitionId',
        'decision_definition_id_in' => 'setDecisionDefinitionIdIn',
        'decision_definition_key' => 'setDecisionDefinitionKey',
        'decision_definition_key_in' => 'setDecisionDefinitionKeyIn',
        'decision_definition_name' => 'setDecisionDefinitionName',
        'decision_definition_name_like' => 'setDecisionDefinitionNameLike',
        'process_definition_id' => 'setProcessDefinitionId',
        'process_definition_key' => 'setProcessDefinitionKey',
        'process_instance_id' => 'setProcessInstanceId',
        'case_definition_id' => 'setCaseDefinitionId',
        'case_definition_key' => 'setCaseDefinitionKey',
        'case_instance_id' => 'setCaseInstanceId',
        'activity_id_in' => 'setActivityIdIn',
        'activity_instance_id_in' => 'setActivityInstanceIdIn',
        'tenant_id_in' => 'setTenantIdIn',
        'without_tenant_id' => 'setWithoutTenantId',
        'evaluated_before' => 'setEvaluatedBefore',
        'evaluated_after' => 'setEvaluatedAfter',
        'user_id' => 'setUserId',
        'root_decision_instance_id' => 'setRootDecisionInstanceId',
        'root_decision_instances_only' => 'setRootDecisionInstancesOnly',
        'decision_requirements_definition_id' => 'setDecisionRequirementsDefinitionId',
        'decision_requirements_definition_key' => 'setDecisionRequirementsDefinitionKey',
        'include_inputs' => 'setIncludeInputs',
        'include_outputs' => 'setIncludeOutputs',
        'disable_binary_fetching' => 'setDisableBinaryFetching',
        'disable_custom_object_deserialization' => 'setDisableCustomObjectDeserialization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'decision_instance_id' => 'getDecisionInstanceId',
        'decision_instance_id_in' => 'getDecisionInstanceIdIn',
        'decision_definition_id' => 'getDecisionDefinitionId',
        'decision_definition_id_in' => 'getDecisionDefinitionIdIn',
        'decision_definition_key' => 'getDecisionDefinitionKey',
        'decision_definition_key_in' => 'getDecisionDefinitionKeyIn',
        'decision_definition_name' => 'getDecisionDefinitionName',
        'decision_definition_name_like' => 'getDecisionDefinitionNameLike',
        'process_definition_id' => 'getProcessDefinitionId',
        'process_definition_key' => 'getProcessDefinitionKey',
        'process_instance_id' => 'getProcessInstanceId',
        'case_definition_id' => 'getCaseDefinitionId',
        'case_definition_key' => 'getCaseDefinitionKey',
        'case_instance_id' => 'getCaseInstanceId',
        'activity_id_in' => 'getActivityIdIn',
        'activity_instance_id_in' => 'getActivityInstanceIdIn',
        'tenant_id_in' => 'getTenantIdIn',
        'without_tenant_id' => 'getWithoutTenantId',
        'evaluated_before' => 'getEvaluatedBefore',
        'evaluated_after' => 'getEvaluatedAfter',
        'user_id' => 'getUserId',
        'root_decision_instance_id' => 'getRootDecisionInstanceId',
        'root_decision_instances_only' => 'getRootDecisionInstancesOnly',
        'decision_requirements_definition_id' => 'getDecisionRequirementsDefinitionId',
        'decision_requirements_definition_key' => 'getDecisionRequirementsDefinitionKey',
        'include_inputs' => 'getIncludeInputs',
        'include_outputs' => 'getIncludeOutputs',
        'disable_binary_fetching' => 'getDisableBinaryFetching',
        'disable_custom_object_deserialization' => 'getDisableCustomObjectDeserialization'
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
        $this->container['decision_instance_id'] = isset($data['decision_instance_id']) ? $data['decision_instance_id'] : null;
        $this->container['decision_instance_id_in'] = isset($data['decision_instance_id_in']) ? $data['decision_instance_id_in'] : null;
        $this->container['decision_definition_id'] = isset($data['decision_definition_id']) ? $data['decision_definition_id'] : null;
        $this->container['decision_definition_id_in'] = isset($data['decision_definition_id_in']) ? $data['decision_definition_id_in'] : null;
        $this->container['decision_definition_key'] = isset($data['decision_definition_key']) ? $data['decision_definition_key'] : null;
        $this->container['decision_definition_key_in'] = isset($data['decision_definition_key_in']) ? $data['decision_definition_key_in'] : null;
        $this->container['decision_definition_name'] = isset($data['decision_definition_name']) ? $data['decision_definition_name'] : null;
        $this->container['decision_definition_name_like'] = isset($data['decision_definition_name_like']) ? $data['decision_definition_name_like'] : null;
        $this->container['process_definition_id'] = isset($data['process_definition_id']) ? $data['process_definition_id'] : null;
        $this->container['process_definition_key'] = isset($data['process_definition_key']) ? $data['process_definition_key'] : null;
        $this->container['process_instance_id'] = isset($data['process_instance_id']) ? $data['process_instance_id'] : null;
        $this->container['case_definition_id'] = isset($data['case_definition_id']) ? $data['case_definition_id'] : null;
        $this->container['case_definition_key'] = isset($data['case_definition_key']) ? $data['case_definition_key'] : null;
        $this->container['case_instance_id'] = isset($data['case_instance_id']) ? $data['case_instance_id'] : null;
        $this->container['activity_id_in'] = isset($data['activity_id_in']) ? $data['activity_id_in'] : null;
        $this->container['activity_instance_id_in'] = isset($data['activity_instance_id_in']) ? $data['activity_instance_id_in'] : null;
        $this->container['tenant_id_in'] = isset($data['tenant_id_in']) ? $data['tenant_id_in'] : null;
        $this->container['without_tenant_id'] = isset($data['without_tenant_id']) ? $data['without_tenant_id'] : null;
        $this->container['evaluated_before'] = isset($data['evaluated_before']) ? $data['evaluated_before'] : null;
        $this->container['evaluated_after'] = isset($data['evaluated_after']) ? $data['evaluated_after'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['root_decision_instance_id'] = isset($data['root_decision_instance_id']) ? $data['root_decision_instance_id'] : null;
        $this->container['root_decision_instances_only'] = isset($data['root_decision_instances_only']) ? $data['root_decision_instances_only'] : null;
        $this->container['decision_requirements_definition_id'] = isset($data['decision_requirements_definition_id']) ? $data['decision_requirements_definition_id'] : null;
        $this->container['decision_requirements_definition_key'] = isset($data['decision_requirements_definition_key']) ? $data['decision_requirements_definition_key'] : null;
        $this->container['include_inputs'] = isset($data['include_inputs']) ? $data['include_inputs'] : null;
        $this->container['include_outputs'] = isset($data['include_outputs']) ? $data['include_outputs'] : null;
        $this->container['disable_binary_fetching'] = isset($data['disable_binary_fetching']) ? $data['disable_binary_fetching'] : null;
        $this->container['disable_custom_object_deserialization'] = isset($data['disable_custom_object_deserialization']) ? $data['disable_custom_object_deserialization'] : null;
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
     * Gets decision_instance_id
     *
     * @return string
     */
    public function getDecisionInstanceId()
    {
        return $this->container['decision_instance_id'];
    }

    /**
     * Sets decision_instance_id
     *
     * @param string $decision_instance_id Filter by decision instance id.
     *
     * @return $this
     */
    public function setDecisionInstanceId($decision_instance_id)
    {
        $this->container['decision_instance_id'] = $decision_instance_id;

        return $this;
    }

    /**
     * Gets decision_instance_id_in
     *
     * @return string[]
     */
    public function getDecisionInstanceIdIn()
    {
        return $this->container['decision_instance_id_in'];
    }

    /**
     * Sets decision_instance_id_in
     *
     * @param string[] $decision_instance_id_in Filter by decision instance ids. Must be a comma-separated list of decision instance ids.
     *
     * @return $this
     */
    public function setDecisionInstanceIdIn($decision_instance_id_in)
    {
        $this->container['decision_instance_id_in'] = $decision_instance_id_in;

        return $this;
    }

    /**
     * Gets decision_definition_id
     *
     * @return string
     */
    public function getDecisionDefinitionId()
    {
        return $this->container['decision_definition_id'];
    }

    /**
     * Sets decision_definition_id
     *
     * @param string $decision_definition_id Filter by the decision definition the instances belongs to.
     *
     * @return $this
     */
    public function setDecisionDefinitionId($decision_definition_id)
    {
        $this->container['decision_definition_id'] = $decision_definition_id;

        return $this;
    }

    /**
     * Gets decision_definition_id_in
     *
     * @return string[]
     */
    public function getDecisionDefinitionIdIn()
    {
        return $this->container['decision_definition_id_in'];
    }

    /**
     * Sets decision_definition_id_in
     *
     * @param string[] $decision_definition_id_in Filter by the decision definitions the instances belongs to. Must be a comma-separated list of decision definition ids.
     *
     * @return $this
     */
    public function setDecisionDefinitionIdIn($decision_definition_id_in)
    {
        $this->container['decision_definition_id_in'] = $decision_definition_id_in;

        return $this;
    }

    /**
     * Gets decision_definition_key
     *
     * @return string
     */
    public function getDecisionDefinitionKey()
    {
        return $this->container['decision_definition_key'];
    }

    /**
     * Sets decision_definition_key
     *
     * @param string $decision_definition_key Filter by the key of the decision definition the instances belongs to.
     *
     * @return $this
     */
    public function setDecisionDefinitionKey($decision_definition_key)
    {
        $this->container['decision_definition_key'] = $decision_definition_key;

        return $this;
    }

    /**
     * Gets decision_definition_key_in
     *
     * @return string[]
     */
    public function getDecisionDefinitionKeyIn()
    {
        return $this->container['decision_definition_key_in'];
    }

    /**
     * Sets decision_definition_key_in
     *
     * @param string[] $decision_definition_key_in Filter by the keys of the decision definition the instances belongs to. Must be a comma- separated list of decision definition keys.
     *
     * @return $this
     */
    public function setDecisionDefinitionKeyIn($decision_definition_key_in)
    {
        $this->container['decision_definition_key_in'] = $decision_definition_key_in;

        return $this;
    }

    /**
     * Gets decision_definition_name
     *
     * @return string
     */
    public function getDecisionDefinitionName()
    {
        return $this->container['decision_definition_name'];
    }

    /**
     * Sets decision_definition_name
     *
     * @param string $decision_definition_name Filter by the name of the decision definition the instances belongs to.
     *
     * @return $this
     */
    public function setDecisionDefinitionName($decision_definition_name)
    {
        $this->container['decision_definition_name'] = $decision_definition_name;

        return $this;
    }

    /**
     * Gets decision_definition_name_like
     *
     * @return string
     */
    public function getDecisionDefinitionNameLike()
    {
        return $this->container['decision_definition_name_like'];
    }

    /**
     * Sets decision_definition_name_like
     *
     * @param string $decision_definition_name_like Filter by the name of the decision definition the instances belongs to, that the parameter is a substring of.
     *
     * @return $this
     */
    public function setDecisionDefinitionNameLike($decision_definition_name_like)
    {
        $this->container['decision_definition_name_like'] = $decision_definition_name_like;

        return $this;
    }

    /**
     * Gets process_definition_id
     *
     * @return string
     */
    public function getProcessDefinitionId()
    {
        return $this->container['process_definition_id'];
    }

    /**
     * Sets process_definition_id
     *
     * @param string $process_definition_id Filter by the process definition the instances belongs to.
     *
     * @return $this
     */
    public function setProcessDefinitionId($process_definition_id)
    {
        $this->container['process_definition_id'] = $process_definition_id;

        return $this;
    }

    /**
     * Gets process_definition_key
     *
     * @return string
     */
    public function getProcessDefinitionKey()
    {
        return $this->container['process_definition_key'];
    }

    /**
     * Sets process_definition_key
     *
     * @param string $process_definition_key Filter by the key of the process definition the instances belongs to.
     *
     * @return $this
     */
    public function setProcessDefinitionKey($process_definition_key)
    {
        $this->container['process_definition_key'] = $process_definition_key;

        return $this;
    }

    /**
     * Gets process_instance_id
     *
     * @return string
     */
    public function getProcessInstanceId()
    {
        return $this->container['process_instance_id'];
    }

    /**
     * Sets process_instance_id
     *
     * @param string $process_instance_id Filter by the process instance the instances belongs to.
     *
     * @return $this
     */
    public function setProcessInstanceId($process_instance_id)
    {
        $this->container['process_instance_id'] = $process_instance_id;

        return $this;
    }

    /**
     * Gets case_definition_id
     *
     * @return string
     */
    public function getCaseDefinitionId()
    {
        return $this->container['case_definition_id'];
    }

    /**
     * Sets case_definition_id
     *
     * @param string $case_definition_id Filter by the case definition the instances belongs to.
     *
     * @return $this
     */
    public function setCaseDefinitionId($case_definition_id)
    {
        $this->container['case_definition_id'] = $case_definition_id;

        return $this;
    }

    /**
     * Gets case_definition_key
     *
     * @return string
     */
    public function getCaseDefinitionKey()
    {
        return $this->container['case_definition_key'];
    }

    /**
     * Sets case_definition_key
     *
     * @param string $case_definition_key Filter by the key of the case definition the instances belongs to.
     *
     * @return $this
     */
    public function setCaseDefinitionKey($case_definition_key)
    {
        $this->container['case_definition_key'] = $case_definition_key;

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
     * @param string $case_instance_id Filter by the case instance the instances belongs to.
     *
     * @return $this
     */
    public function setCaseInstanceId($case_instance_id)
    {
        $this->container['case_instance_id'] = $case_instance_id;

        return $this;
    }

    /**
     * Gets activity_id_in
     *
     * @return string[]
     */
    public function getActivityIdIn()
    {
        return $this->container['activity_id_in'];
    }

    /**
     * Sets activity_id_in
     *
     * @param string[] $activity_id_in Filter by the activity ids the instances belongs to. Must be a comma-separated list of acitvity ids.
     *
     * @return $this
     */
    public function setActivityIdIn($activity_id_in)
    {
        $this->container['activity_id_in'] = $activity_id_in;

        return $this;
    }

    /**
     * Gets activity_instance_id_in
     *
     * @return string[]
     */
    public function getActivityInstanceIdIn()
    {
        return $this->container['activity_instance_id_in'];
    }

    /**
     * Sets activity_instance_id_in
     *
     * @param string[] $activity_instance_id_in Filter by the activity instance ids the instances belongs to. Must be a comma-separated list of acitvity instance ids.
     *
     * @return $this
     */
    public function setActivityInstanceIdIn($activity_instance_id_in)
    {
        $this->container['activity_instance_id_in'] = $activity_instance_id_in;

        return $this;
    }

    /**
     * Gets tenant_id_in
     *
     * @return string[]
     */
    public function getTenantIdIn()
    {
        return $this->container['tenant_id_in'];
    }

    /**
     * Sets tenant_id_in
     *
     * @param string[] $tenant_id_in Filter by a comma-separated list of tenant ids. A historic decision instance must have one of the given tenant ids.
     *
     * @return $this
     */
    public function setTenantIdIn($tenant_id_in)
    {
        $this->container['tenant_id_in'] = $tenant_id_in;

        return $this;
    }

    /**
     * Gets without_tenant_id
     *
     * @return bool
     */
    public function getWithoutTenantId()
    {
        return $this->container['without_tenant_id'];
    }

    /**
     * Sets without_tenant_id
     *
     * @param bool $without_tenant_id Only include historic decision instances that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
     *
     * @return $this
     */
    public function setWithoutTenantId($without_tenant_id)
    {
        $this->container['without_tenant_id'] = $without_tenant_id;

        return $this;
    }

    /**
     * Gets evaluated_before
     *
     * @return \DateTime
     */
    public function getEvaluatedBefore()
    {
        return $this->container['evaluated_before'];
    }

    /**
     * Sets evaluated_before
     *
     * @param \DateTime $evaluated_before Restrict to instances that were evaluated before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM- dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
     *
     * @return $this
     */
    public function setEvaluatedBefore($evaluated_before)
    {
        $this->container['evaluated_before'] = $evaluated_before;

        return $this;
    }

    /**
     * Gets evaluated_after
     *
     * @return \DateTime
     */
    public function getEvaluatedAfter()
    {
        return $this->container['evaluated_after'];
    }

    /**
     * Sets evaluated_after
     *
     * @param \DateTime $evaluated_after Restrict to instances that were evaluated after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM- dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
     *
     * @return $this
     */
    public function setEvaluatedAfter($evaluated_after)
    {
        $this->container['evaluated_after'] = $evaluated_after;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id Restrict to instances that were evaluated by the given user.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets root_decision_instance_id
     *
     * @return string
     */
    public function getRootDecisionInstanceId()
    {
        return $this->container['root_decision_instance_id'];
    }

    /**
     * Sets root_decision_instance_id
     *
     * @param string $root_decision_instance_id Restrict to instances that have a given root decision instance id. This also includes the decision instance with the given id.
     *
     * @return $this
     */
    public function setRootDecisionInstanceId($root_decision_instance_id)
    {
        $this->container['root_decision_instance_id'] = $root_decision_instance_id;

        return $this;
    }

    /**
     * Gets root_decision_instances_only
     *
     * @return bool
     */
    public function getRootDecisionInstancesOnly()
    {
        return $this->container['root_decision_instances_only'];
    }

    /**
     * Sets root_decision_instances_only
     *
     * @param bool $root_decision_instances_only Restrict to instances those are the root decision instance of an evaluation. Value may only be `true`, as `false` is the default behavior.
     *
     * @return $this
     */
    public function setRootDecisionInstancesOnly($root_decision_instances_only)
    {
        $this->container['root_decision_instances_only'] = $root_decision_instances_only;

        return $this;
    }

    /**
     * Gets decision_requirements_definition_id
     *
     * @return string
     */
    public function getDecisionRequirementsDefinitionId()
    {
        return $this->container['decision_requirements_definition_id'];
    }

    /**
     * Sets decision_requirements_definition_id
     *
     * @param string $decision_requirements_definition_id Filter by the decision requirements definition the instances belongs to.
     *
     * @return $this
     */
    public function setDecisionRequirementsDefinitionId($decision_requirements_definition_id)
    {
        $this->container['decision_requirements_definition_id'] = $decision_requirements_definition_id;

        return $this;
    }

    /**
     * Gets decision_requirements_definition_key
     *
     * @return string
     */
    public function getDecisionRequirementsDefinitionKey()
    {
        return $this->container['decision_requirements_definition_key'];
    }

    /**
     * Sets decision_requirements_definition_key
     *
     * @param string $decision_requirements_definition_key Filter by the key of the decision requirements definition the instances belongs to.
     *
     * @return $this
     */
    public function setDecisionRequirementsDefinitionKey($decision_requirements_definition_key)
    {
        $this->container['decision_requirements_definition_key'] = $decision_requirements_definition_key;

        return $this;
    }

    /**
     * Gets include_inputs
     *
     * @return bool
     */
    public function getIncludeInputs()
    {
        return $this->container['include_inputs'];
    }

    /**
     * Sets include_inputs
     *
     * @param bool $include_inputs Include input values in the result. Value may only be `true`, as `false` is the default behavior.
     *
     * @return $this
     */
    public function setIncludeInputs($include_inputs)
    {
        $this->container['include_inputs'] = $include_inputs;

        return $this;
    }

    /**
     * Gets include_outputs
     *
     * @return bool
     */
    public function getIncludeOutputs()
    {
        return $this->container['include_outputs'];
    }

    /**
     * Sets include_outputs
     *
     * @param bool $include_outputs Include output values in the result. Value may only be `true`, as `false` is the default behavior.
     *
     * @return $this
     */
    public function setIncludeOutputs($include_outputs)
    {
        $this->container['include_outputs'] = $include_outputs;

        return $this;
    }

    /**
     * Gets disable_binary_fetching
     *
     * @return bool
     */
    public function getDisableBinaryFetching()
    {
        return $this->container['disable_binary_fetching'];
    }

    /**
     * Sets disable_binary_fetching
     *
     * @param bool $disable_binary_fetching Disables fetching of byte array input and output values. Value may only be `true`, as `false` is the default behavior.
     *
     * @return $this
     */
    public function setDisableBinaryFetching($disable_binary_fetching)
    {
        $this->container['disable_binary_fetching'] = $disable_binary_fetching;

        return $this;
    }

    /**
     * Gets disable_custom_object_deserialization
     *
     * @return bool
     */
    public function getDisableCustomObjectDeserialization()
    {
        return $this->container['disable_custom_object_deserialization'];
    }

    /**
     * Sets disable_custom_object_deserialization
     *
     * @param bool $disable_custom_object_deserialization Disables deserialization of input and output values that are custom objects. Value may only be `true`, as `false` is the default behavior.
     *
     * @return $this
     */
    public function setDisableCustomObjectDeserialization($disable_custom_object_deserialization)
    {
        $this->container['disable_custom_object_deserialization'] = $disable_custom_object_deserialization;

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
