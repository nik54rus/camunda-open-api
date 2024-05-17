# SetJobRetriesDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**job_ids** | **string[]** | A list of job ids to set retries for. | [optional] 
**job_query** | [**\Swagger\Client\Model\JobQueryDto**](JobQueryDto.md) |  | [optional] 
**retries** | **int** | The number of retries to set for the resource.  Must be &gt;&#x3D; 0. If this is 0, an incident is created and the task, or job, cannot be fetched, or acquired anymore unless the retries are increased again. Can not be null. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
