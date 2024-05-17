# MigrationPlanReportDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instruction_reports** | [**\Swagger\Client\Model\MigrationInstructionValidationReportDto[]**](MigrationInstructionValidationReportDto.md) | The list of instruction validation reports. If no validation errors are detected it is an empty list. | [optional] 
**variable_reports** | [**map[string,\Swagger\Client\Model\MigrationVariableValidationReportDto]**](MigrationVariableValidationReportDto.md) | A map of variable reports. Each key is a variable name and each value a JSON object consisting of the variable&#x27;s type, value, value info object and a list of failures. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

