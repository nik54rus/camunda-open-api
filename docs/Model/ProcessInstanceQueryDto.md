# ProcessInstanceQueryDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deployment_id** | **string** | Filter by the deployment the id belongs to. | [optional] 
**process_definition_id** | **string** | Filter by the process definition the instances run on. | [optional] 
**process_definition_key** | **string** | Filter by the key of the process definition the instances run on. | [optional] 
**process_definition_key_in** | **string[]** | Filter by a list of process definition keys. A process instance must have one of the given process definition keys. Must be a JSON array of Strings. | [optional] 
**process_definition_key_not_in** | **string[]** | Exclude instances by a list of process definition keys. A process instance must not have one of the given process definition keys. Must be a JSON array of Strings. | [optional] 
**business_key** | **string** | Filter by process instance business key. | [optional] 
**business_key_like** | **string** | Filter by process instance business key that the parameter is a substring of. | [optional] 
**case_instance_id** | **string** | Filter by case instance id. | [optional] 
**super_process_instance** | **string** | Restrict query to all process instances that are sub process instances of the given process instance. Takes a process instance id. | [optional] 
**sub_process_instance** | **string** | Restrict query to all process instances that have the given process instance as a sub process instance. Takes a process instance id. | [optional] 
**super_case_instance** | **string** | Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id. | [optional] 
**sub_case_instance** | **string** | Restrict query to all process instances that have the given case instance as a sub case instance. Takes a case instance id. | [optional] 
**active** | **bool** | Only include active process instances. Value may only be true, as false is the default behavior. | [optional] 
**suspended** | **bool** | Only include suspended process instances. Value may only be true, as false is the default behavior. | [optional] 
**process_instance_ids** | **string[]** | Filter by a list of process instance ids. Must be a JSON array of Strings. | [optional] 
**with_incident** | **bool** | Filter by presence of incidents. Selects only process instances that have an incident. | [optional] 
**incident_id** | **string** | Filter by the incident id. | [optional] 
**incident_type** | **string** | Filter by the incident type. See the User Guide for a list of incident types. | [optional] 
**incident_message** | **string** | Filter by the incident message. Exact match. | [optional] 
**incident_message_like** | **string** | Filter by the incident message that the parameter is a substring of. | [optional] 
**tenant_id_in** | **string[]** | Filter by a list of tenant ids. A process instance must have one of the given tenant ids. Must be a JSON array of Strings. | [optional] 
**without_tenant_id** | **bool** | Only include process instances which belong to no tenant. Value may only be true, as false is the default behavior. | [optional] 
**process_definition_without_tenant_id** | **bool** | Only include process instances which process definition has no tenant id. | [optional] 
**activity_id_in** | **string[]** | Filter by a list of activity ids. A process instance must currently wait in a leaf activity with one of the given activity ids. | [optional] 
**root_process_instances** | **bool** | Restrict the query to all process instances that are top level process instances. | [optional] 
**leaf_process_instances** | **bool** | Restrict the query to all process instances that are leaf instances. (i.e. don&#x27;t have any sub instances) | [optional] 
**variables** | [**\Camunda\Client\Model\VariableQueryParameterDto[]**](VariableQueryParameterDto.md) | A JSON array to only include process instances that have variables with certain values. The array consists of objects with the three properties &#x60;name&#x60;, &#x60;operator&#x60; and &#x60;value&#x60;. &#x60;name&#x60; (String) is the variable name, &#x60;operator&#x60; (String) is the comparison operator to be used and &#x60;value&#x60; the variable value. The &#x60;value&#x60; may be String, Number or Boolean.  Valid operator values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. | [optional] 
**variable_names_ignore_case** | **bool** | Match all variable names in this query case-insensitively. If set to true variableName and variablename are treated as equal. | [optional] 
**variable_values_ignore_case** | **bool** | Match all variable values in this query case-insensitively. If set to true variableValue and variablevalue are treated as equal. | [optional] 
**or_queries** | [**\Camunda\Client\Model\ProcessInstanceQueryDto[]**](ProcessInstanceQueryDto.md) | A JSON array of nested process instance queries with OR semantics. A process instance matches a nested query if it fulfills at least one of the query&#x27;s predicates. With multiple nested queries, a process instance must fulfill at least one predicate of each query (Conjunctive Normal Form). All process instance query properties can be used except for: &#x60;sorting&#x60; See the [User guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/process-engine-api/#or-queries) for more information about OR queries. | [optional] 
**sorting** | [**\Camunda\Client\Model\ProcessInstanceQueryDtoSorting[]**](ProcessInstanceQueryDtoSorting.md) | Apply sorting of the result | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

