# ProcessDefinitionStatisticsResultDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the process definition the results are aggregated for. | [optional] 
**instances** | **int** | The total number of running process instances of this process definition. | [optional] 
**failed_jobs** | **int** | The total number of failed jobs for the running instances. **Note**: Will be &#x60;0&#x60; (not &#x60;null&#x60;), if failed jobs were excluded. | [optional] 
**incidents** | [**\Camunda\Client\Model\IncidentStatisticsResultDto[]**](IncidentStatisticsResultDto.md) | Each item in the resulting array is an object which contains &#x60;incidentType&#x60; and &#x60;incidentCount&#x60;. **Note**: Will be an empty array, if &#x60;incidents&#x60; or &#x60;incidentsForType&#x60; were excluded. Furthermore, the array will be also empty if no incidents were found. | [optional] 
**class** | **string** | The fully qualified class name of the data transfer object class. The class name might change in future releases. | [optional] 
**definition** | [**\Camunda\Client\Model\ProcessDefinitionDto**](ProcessDefinitionDto.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

