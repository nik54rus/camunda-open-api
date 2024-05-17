# MigrationPlanGenerationDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_process_definition_id** | **string** | The id of the source process definition for the migration. | [optional] 
**target_process_definition_id** | **string** | The id of the target process definition for the migration. | [optional] 
**update_event_triggers** | **bool** | A boolean flag indicating whether instructions between events should be configured to update the event triggers. | [optional] 
**variables** | [**map[string,\Camunda\Client\Model\VariableValueDto]**](VariableValueDto.md) | A map of variables which will be set into the process instances&#x27; scope. Each key is a variable name and each value a JSON variable value object. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

