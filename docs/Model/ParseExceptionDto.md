# ParseExceptionDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**details** | [**map[string,\Camunda\Client\Model\ResourceReportDto]**](ResourceReportDto.md) | A JSON Object containing list of errors and warnings occurred during deployment. | [optional] 
**type** | **string** | An exception class indicating the occurred error. | [optional] 
**message** | **string** | A detailed message of the error. | [optional] 
**code** | **float** | The code allows your client application to identify the error in an automated fashion. You can look up the meaning of all built-in codes and learn how to add custom codes in the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/error-handling/#exception-codes). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

