# JobDefinitionPriorityDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**priority** | **int** | The new execution priority number for jobs of the given definition. The definition&#x27;s priority can be reset by using the value &#x60;null&#x60;. In that case, the job definition&#x27;s priority no longer applies but a new job&#x27;s priority is determined as specified in the process model. | [optional] 
**include_jobs** | **bool** | A boolean value indicating whether existing jobs of the given definition should receive the priority as well. Default value is &#x60;false&#x60;. Can only be &#x60;true&#x60; when the __priority__ parameter is not &#x60;null&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

