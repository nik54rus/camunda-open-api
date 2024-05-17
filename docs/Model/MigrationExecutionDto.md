# MigrationExecutionDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**migration_plan** | [**\Camunda\Client\Model\MigrationPlanDto**](MigrationPlanDto.md) |  | [optional] 
**process_instance_ids** | **string[]** | A list of process instance ids to migrate. | [optional] 
**process_instance_query** | [**\Camunda\Client\Model\ProcessInstanceQueryDto**](ProcessInstanceQueryDto.md) |  | [optional] 
**skip_custom_listeners** | **bool** | A boolean value to control whether execution listeners should be invoked during migration. | [optional] 
**skip_io_mappings** | **bool** | A boolean value to control whether input/output mappings should be executed during migration. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

