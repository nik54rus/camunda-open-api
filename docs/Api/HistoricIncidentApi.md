# Swagger\Client\HistoricIncidentApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistoricIncidents**](HistoricIncidentApi.md#gethistoricincidents) | **GET** /history/incident | Get Incidents
[**getHistoricIncidentsCount**](HistoricIncidentApi.md#gethistoricincidentscount) | **GET** /history/incident/count | Get Incident Count

# **getHistoricIncidents**
> \Swagger\Client\Model\HistoricIncidentDto[] getHistoricIncidents($incident_id, $incident_type, $incident_message, $incident_message_like, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_instance_id, $execution_id, $create_time_before, $create_time_after, $end_time_before, $end_time_after, $activity_id, $failed_activity_id, $cause_incident_id, $root_cause_incident_id, $configuration, $history_configuration, $open, $resolved, $deleted, $tenant_id_in, $without_tenant_id, $job_definition_id_in, $sort_by, $sort_order, $first_result, $max_results)

Get Incidents

Queries for historic incidents that fulfill given parameters. The size of the result set can be retrieved by using the [Get Incident Count](https://docs.camunda.org/manual/7.21/reference/rest/history/incident/get-incident-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HistoricIncidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incident_id = "incident_id_example"; // string | Restricts to incidents that have the given id.
$incident_type = "incident_type_example"; // string | Restricts to incidents that belong to the given incident type. See the [User Guide](/manual/develop/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$incident_message = "incident_message_example"; // string | Restricts to incidents that have the given incident message.
$incident_message_like = "incident_message_like_example"; // string | Restricts to incidents that incidents message is a substring of the given value. The string can include the wildcard character '%' to express like-strategy: starts with (string%), ends with (%string) or contains (%string%).
$process_definition_id = "process_definition_id_example"; // string | Restricts to incidents that belong to a process definition with the given id.
$process_definition_key = "process_definition_key_example"; // string | Restricts to incidents that have the given processDefinitionKey.
$process_definition_key_in = "process_definition_key_in_example"; // string | Restricts to incidents that have one of the given process definition keys.
$process_instance_id = "process_instance_id_example"; // string | Restricts to incidents that belong to a process instance with the given id.
$execution_id = "execution_id_example"; // string | Restricts to incidents that belong to an execution with the given id.
$create_time_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to incidents that have a createTime date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$create_time_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to incidents that have a createTime date after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$end_time_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to incidents that have an endTimeBefore date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$end_time_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to incidents that have an endTimeAfter date after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$activity_id = "activity_id_example"; // string | Restricts to incidents that belong to an activity with the given id.
$failed_activity_id = "failed_activity_id_example"; // string | Restricts to incidents that were created due to the failure of an activity with the given id.
$cause_incident_id = "cause_incident_id_example"; // string | Restricts to incidents that have the given incident id as cause incident.
$root_cause_incident_id = "root_cause_incident_id_example"; // string | Restricts to incidents that have the given incident id as root cause incident.
$configuration = "configuration_example"; // string | Restricts to incidents that have the given parameter set as configuration.
$history_configuration = "history_configuration_example"; // string | Restricts to incidents that have the given parameter set as history configuration.
$open = true; // bool | Restricts to incidents that are open.
$resolved = true; // bool | Restricts to incidents that are resolved.
$deleted = true; // bool | Restricts to incidents that are deleted.
$tenant_id_in = "tenant_id_in_example"; // string | Restricts to incidents that have one of the given comma-separated tenant ids.
$without_tenant_id = true; // bool | Only include historic incidents that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$job_definition_id_in = "job_definition_id_in_example"; // string | Restricts to incidents that have one of the given comma-separated job definition ids.
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getHistoricIncidents($incident_id, $incident_type, $incident_message, $incident_message_like, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_instance_id, $execution_id, $create_time_before, $create_time_after, $end_time_before, $end_time_after, $activity_id, $failed_activity_id, $cause_incident_id, $root_cause_incident_id, $configuration, $history_configuration, $open, $resolved, $deleted, $tenant_id_in, $without_tenant_id, $job_definition_id_in, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricIncidentApi->getHistoricIncidents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **incident_id** | **string**| Restricts to incidents that have the given id. | [optional]
 **incident_type** | **string**| Restricts to incidents that belong to the given incident type. See the [User Guide](/manual/develop/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **incident_message** | **string**| Restricts to incidents that have the given incident message. | [optional]
 **incident_message_like** | **string**| Restricts to incidents that incidents message is a substring of the given value. The string can include the wildcard character &#x27;%&#x27; to express like-strategy: starts with (string%), ends with (%string) or contains (%string%). | [optional]
 **process_definition_id** | **string**| Restricts to incidents that belong to a process definition with the given id. | [optional]
 **process_definition_key** | **string**| Restricts to incidents that have the given processDefinitionKey. | [optional]
 **process_definition_key_in** | **string**| Restricts to incidents that have one of the given process definition keys. | [optional]
 **process_instance_id** | **string**| Restricts to incidents that belong to a process instance with the given id. | [optional]
 **execution_id** | **string**| Restricts to incidents that belong to an execution with the given id. | [optional]
 **create_time_before** | **\DateTime**| Restricts to incidents that have a createTime date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **create_time_after** | **\DateTime**| Restricts to incidents that have a createTime date after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **end_time_before** | **\DateTime**| Restricts to incidents that have an endTimeBefore date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **end_time_after** | **\DateTime**| Restricts to incidents that have an endTimeAfter date after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **activity_id** | **string**| Restricts to incidents that belong to an activity with the given id. | [optional]
 **failed_activity_id** | **string**| Restricts to incidents that were created due to the failure of an activity with the given id. | [optional]
 **cause_incident_id** | **string**| Restricts to incidents that have the given incident id as cause incident. | [optional]
 **root_cause_incident_id** | **string**| Restricts to incidents that have the given incident id as root cause incident. | [optional]
 **configuration** | **string**| Restricts to incidents that have the given parameter set as configuration. | [optional]
 **history_configuration** | **string**| Restricts to incidents that have the given parameter set as history configuration. | [optional]
 **open** | **bool**| Restricts to incidents that are open. | [optional]
 **resolved** | **bool**| Restricts to incidents that are resolved. | [optional]
 **deleted** | **bool**| Restricts to incidents that are deleted. | [optional]
 **tenant_id_in** | **string**| Restricts to incidents that have one of the given comma-separated tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic incidents that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **job_definition_id_in** | **string**| Restricts to incidents that have one of the given comma-separated job definition ids. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Swagger\Client\Model\HistoricIncidentDto[]**](../Model/HistoricIncidentDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricIncidentsCount**
> \Swagger\Client\Model\CountResultDto getHistoricIncidentsCount($incident_id, $incident_type, $incident_message, $incident_message_like, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_instance_id, $execution_id, $create_time_before, $create_time_after, $end_time_before, $end_time_after, $activity_id, $failed_activity_id, $cause_incident_id, $root_cause_incident_id, $configuration, $history_configuration, $open, $resolved, $deleted, $tenant_id_in, $without_tenant_id, $job_definition_id_in)

Get Incident Count

Queries for the number of historic incidents that fulfill the given parameters. Takes the same parameters as the [Get Incidents](https://docs.camunda.org/manual/7.21/reference/rest/history/incident/get-incident-query/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HistoricIncidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incident_id = "incident_id_example"; // string | Restricts to incidents that have the given id.
$incident_type = "incident_type_example"; // string | Restricts to incidents that belong to the given incident type. See the [User Guide](/manual/develop/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$incident_message = "incident_message_example"; // string | Restricts to incidents that have the given incident message.
$incident_message_like = "incident_message_like_example"; // string | Restricts to incidents that incidents message is a substring of the given value. The string can include the wildcard character '%' to express like-strategy: starts with (string%), ends with (%string) or contains (%string%).
$process_definition_id = "process_definition_id_example"; // string | Restricts to incidents that belong to a process definition with the given id.
$process_definition_key = "process_definition_key_example"; // string | Restricts to incidents that have the given processDefinitionKey.
$process_definition_key_in = "process_definition_key_in_example"; // string | Restricts to incidents that have one of the given process definition keys.
$process_instance_id = "process_instance_id_example"; // string | Restricts to incidents that belong to a process instance with the given id.
$execution_id = "execution_id_example"; // string | Restricts to incidents that belong to an execution with the given id.
$create_time_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to incidents that have a createTime date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$create_time_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to incidents that have a createTime date after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$end_time_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to incidents that have an endTimeBefore date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$end_time_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to incidents that have an endTimeAfter date after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$activity_id = "activity_id_example"; // string | Restricts to incidents that belong to an activity with the given id.
$failed_activity_id = "failed_activity_id_example"; // string | Restricts to incidents that were created due to the failure of an activity with the given id.
$cause_incident_id = "cause_incident_id_example"; // string | Restricts to incidents that have the given incident id as cause incident.
$root_cause_incident_id = "root_cause_incident_id_example"; // string | Restricts to incidents that have the given incident id as root cause incident.
$configuration = "configuration_example"; // string | Restricts to incidents that have the given parameter set as configuration.
$history_configuration = "history_configuration_example"; // string | Restricts to incidents that have the given parameter set as history configuration.
$open = true; // bool | Restricts to incidents that are open.
$resolved = true; // bool | Restricts to incidents that are resolved.
$deleted = true; // bool | Restricts to incidents that are deleted.
$tenant_id_in = "tenant_id_in_example"; // string | Restricts to incidents that have one of the given comma-separated tenant ids.
$without_tenant_id = true; // bool | Only include historic incidents that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$job_definition_id_in = "job_definition_id_in_example"; // string | Restricts to incidents that have one of the given comma-separated job definition ids.

try {
    $result = $apiInstance->getHistoricIncidentsCount($incident_id, $incident_type, $incident_message, $incident_message_like, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_instance_id, $execution_id, $create_time_before, $create_time_after, $end_time_before, $end_time_after, $activity_id, $failed_activity_id, $cause_incident_id, $root_cause_incident_id, $configuration, $history_configuration, $open, $resolved, $deleted, $tenant_id_in, $without_tenant_id, $job_definition_id_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricIncidentApi->getHistoricIncidentsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **incident_id** | **string**| Restricts to incidents that have the given id. | [optional]
 **incident_type** | **string**| Restricts to incidents that belong to the given incident type. See the [User Guide](/manual/develop/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **incident_message** | **string**| Restricts to incidents that have the given incident message. | [optional]
 **incident_message_like** | **string**| Restricts to incidents that incidents message is a substring of the given value. The string can include the wildcard character &#x27;%&#x27; to express like-strategy: starts with (string%), ends with (%string) or contains (%string%). | [optional]
 **process_definition_id** | **string**| Restricts to incidents that belong to a process definition with the given id. | [optional]
 **process_definition_key** | **string**| Restricts to incidents that have the given processDefinitionKey. | [optional]
 **process_definition_key_in** | **string**| Restricts to incidents that have one of the given process definition keys. | [optional]
 **process_instance_id** | **string**| Restricts to incidents that belong to a process instance with the given id. | [optional]
 **execution_id** | **string**| Restricts to incidents that belong to an execution with the given id. | [optional]
 **create_time_before** | **\DateTime**| Restricts to incidents that have a createTime date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **create_time_after** | **\DateTime**| Restricts to incidents that have a createTime date after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **end_time_before** | **\DateTime**| Restricts to incidents that have an endTimeBefore date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **end_time_after** | **\DateTime**| Restricts to incidents that have an endTimeAfter date after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **activity_id** | **string**| Restricts to incidents that belong to an activity with the given id. | [optional]
 **failed_activity_id** | **string**| Restricts to incidents that were created due to the failure of an activity with the given id. | [optional]
 **cause_incident_id** | **string**| Restricts to incidents that have the given incident id as cause incident. | [optional]
 **root_cause_incident_id** | **string**| Restricts to incidents that have the given incident id as root cause incident. | [optional]
 **configuration** | **string**| Restricts to incidents that have the given parameter set as configuration. | [optional]
 **history_configuration** | **string**| Restricts to incidents that have the given parameter set as history configuration. | [optional]
 **open** | **bool**| Restricts to incidents that are open. | [optional]
 **resolved** | **bool**| Restricts to incidents that are resolved. | [optional]
 **deleted** | **bool**| Restricts to incidents that are deleted. | [optional]
 **tenant_id_in** | **string**| Restricts to incidents that have one of the given comma-separated tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic incidents that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **job_definition_id_in** | **string**| Restricts to incidents that have one of the given comma-separated job definition ids. | [optional]

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

