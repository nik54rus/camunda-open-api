# SetJobRetriesByProcessDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**process_instances** | **string[]** | A list of process instance ids to fetch jobs, for which retries will be set. | [optional] 
**process_instance_query** | [**\Camunda\Client\Model\ProcessInstanceQueryDto**](ProcessInstanceQueryDto.md) |  | [optional] 
**historic_process_instance_query** | [**\Camunda\Client\Model\HistoricProcessInstanceQueryDto**](HistoricProcessInstanceQueryDto.md) |  | [optional] 
**retries** | **int** | The number of retries to set for the resource.  Must be &gt;&#x3D; 0. If this is 0, an incident is created and the task, or job, cannot be fetched, or acquired anymore unless the retries are increased again. Can not be null. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

