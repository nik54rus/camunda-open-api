# CorrelationMessageAsyncDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_name** | **string** | The name of the message to correlate. Corresponds to the &#x27;name&#x27; element of the message defined in BPMN 2.0 XML. Can be null to correlate by other criteria only. | [optional] 
**process_instance_ids** | **string[]** | A list of process instance ids that define a group of process instances to which the operation will correlate a message.  Please note that if &#x60;processInstanceIds&#x60;, &#x60;processInstanceQuery&#x60; and &#x60;historicProcessInstanceQuery&#x60; are defined, the resulting operation will be performed on the union of these sets. | [optional] 
**process_instance_query** | [**\Swagger\Client\Model\ProcessInstanceQueryDto**](ProcessInstanceQueryDto.md) |  | [optional] 
**historic_process_instance_query** | [**\Swagger\Client\Model\HistoricProcessInstanceQueryDto**](HistoricProcessInstanceQueryDto.md) |  | [optional] 
**variables** | [**map[string,\Swagger\Client\Model\VariableValueDto]**](VariableValueDto.md) | All variables the operation will set in the root scope of the process instances the message is correlated to. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

