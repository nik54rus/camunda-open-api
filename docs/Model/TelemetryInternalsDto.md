# TelemetryInternalsDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**database** | [**\Camunda\Client\Model\AbstractVendorVersionInformationDto**](AbstractVendorVersionInformationDto.md) |  | [optional] 
**application_server** | [**\Camunda\Client\Model\AbstractVendorVersionInformationDto**](AbstractVendorVersionInformationDto.md) |  | [optional] 
**license_key** | [**\Camunda\Client\Model\TelemetryLicenseKeyDto**](TelemetryLicenseKeyDto.md) |  | [optional] 
**camunda_integration** | **string[]** | List of Camunda integrations used (e.g., Camunda Spring Boot Starter, Camunda Run, WildFly/JBoss subsystem, Camunda EJB). | [optional] 
**commands** | [**map[string,\Camunda\Client\Model\TelemetryCountDto]**](TelemetryCountDto.md) | The count of executed commands after the last retrieved data. | [optional] 
**metrics** | [**map[string,\Camunda\Client\Model\TelemetryCountDto]**](TelemetryCountDto.md) | The collected metrics are the number of root process instance executions started, the number of activity instances started or also known as flow node instances, and the number of executed decision instances and elements. | [optional] 
**webapps** | **string[]** | The webapps enabled in this installation of Camunda. | [optional] 
**jdk** | [**\Camunda\Client\Model\AbstractVendorVersionInformationDto**](AbstractVendorVersionInformationDto.md) |  | [optional] 
**data_collection_start_date** | [**\DateTime**](\DateTime.md) | The date when the engine started to collect dynamic data, such as command executions and metrics. If telemetry sending is enabled, dynamic data resets on sending the data to Camunda. Dynamic data and the date returned by this method are reset in three cases: engine startup, after engine start when sending telemetry data to Camunda is enabled via API, after sending telemetry data to Camunda (only when this was enabled) The date is in the format &lt;code&gt;YYYY-MM-DD&#x27;T&#x27;HH:mm:ss.SSSZ&lt;/code&gt;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

