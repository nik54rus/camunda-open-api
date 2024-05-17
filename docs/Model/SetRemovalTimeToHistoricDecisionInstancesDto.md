# SetRemovalTimeToHistoricDecisionInstancesDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hierarchical** | **bool** | Sets the removal time to all historic decision instances in the hierarchy. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] 
**historic_decision_instance_query** | [**\Camunda\Client\Model\HistoricDecisionInstanceQueryDto**](HistoricDecisionInstanceQueryDto.md) |  | [optional] 
**historic_decision_instance_ids** | **string[]** | The ids of the historic decision instances to set the removal time for. | [optional] 
**absolute_removal_time** | [**\DateTime**](\DateTime.md) | The date for which the instances shall be removed. Value may not be &#x60;null&#x60;.  **Note:** Cannot be set in conjunction with &#x60;clearedRemovalTime&#x60; or &#x60;calculatedRemovalTime&#x60;. | [optional] 
**cleared_removal_time** | **bool** | Sets the removal time to &#x60;null&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior.  **Note:** Cannot be set in conjunction with &#x60;absoluteRemovalTime&#x60; or &#x60;calculatedRemovalTime&#x60;. | [optional] 
**calculated_removal_time** | **bool** | The removal time is calculated based on the engine&#x27;s configuration settings. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior.  **Note:** Cannot be set in conjunction with &#x60;absoluteRemovalTime&#x60; or &#x60;clearedRemovalTime&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

