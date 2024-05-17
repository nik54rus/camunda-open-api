# Swagger\Client\HistoricDecisionDefinitionApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCleanableHistoricDecisionInstanceReport**](HistoricDecisionDefinitionApi.md#getcleanablehistoricdecisioninstancereport) | **GET** /history/decision-definition/cleanable-decision-instance-report | Get Cleanable Decision Instance Report
[**getCleanableHistoricDecisionInstanceReportCount**](HistoricDecisionDefinitionApi.md#getcleanablehistoricdecisioninstancereportcount) | **GET** /history/decision-definition/cleanable-decision-instance-report/count | Get Cleanable Decision Instance Report Count

# **getCleanableHistoricDecisionInstanceReport**
> \Swagger\Client\Model\CleanableHistoricDecisionInstanceReportResultDto[] getCleanableHistoricDecisionInstanceReport($decision_definition_id_in, $decision_definition_key_in, $tenant_id_in, $without_tenant_id, $compact, $sort_by, $sort_order, $first_result, $max_results)

Get Cleanable Decision Instance Report

Retrieves a report about a decision definition and finished decision instances relevant to history cleanup (see [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup)),  so that you can tune the history time to live. These reports include the count of the finished historic decision instances, cleanable decision instances and basic decision definition data - id, key, name and version. The size of the result set can be retrieved by using the  [Get Cleanable Decision Instance Report Count](https://docs.camunda.org/manual/7.21/reference/rest/history/decision-definition/get-cleanable-decision-instance-report-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HistoricDecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$decision_definition_id_in = "decision_definition_id_in_example"; // string | Filter by decision definition ids. Must be a comma-separated list of decision definition ids.
$decision_definition_key_in = "decision_definition_key_in_example"; // string | Filter by decision definition keys. Must be a comma-separated list of decision definition keys.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids. A decision definition must have one of the given tenant  ids.
$without_tenant_id = true; // bool | Only include decision definitions which belong to no tenant. Value may only be `true`, as `false`  is the default behavior.
$compact = true; // bool | Only include decision instances which have more than zero finished instances. Value may only be `true`,  as `false` is the default behavior.
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getCleanableHistoricDecisionInstanceReport($decision_definition_id_in, $decision_definition_key_in, $tenant_id_in, $without_tenant_id, $compact, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricDecisionDefinitionApi->getCleanableHistoricDecisionInstanceReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **decision_definition_id_in** | **string**| Filter by decision definition ids. Must be a comma-separated list of decision definition ids. | [optional]
 **decision_definition_key_in** | **string**| Filter by decision definition keys. Must be a comma-separated list of decision definition keys. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A decision definition must have one of the given tenant  ids. | [optional]
 **without_tenant_id** | **bool**| Only include decision definitions which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60;  is the default behavior. | [optional]
 **compact** | **bool**| Only include decision instances which have more than zero finished instances. Value may only be &#x60;true&#x60;,  as &#x60;false&#x60; is the default behavior. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Swagger\Client\Model\CleanableHistoricDecisionInstanceReportResultDto[]**](../Model/CleanableHistoricDecisionInstanceReportResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCleanableHistoricDecisionInstanceReportCount**
> \Swagger\Client\Model\CountResultDto getCleanableHistoricDecisionInstanceReportCount($decision_definition_id_in, $decision_definition_key_in, $tenant_id_in, $without_tenant_id, $compact)

Get Cleanable Decision Instance Report Count

Queries for the number of report results about a decision definition and finished decision instances relevant to history cleanup (see [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup)). Takes the same parameters as the [Get Cleanable Decision Instance Report](https://docs.camunda.org/manual/7.21/reference/rest/history/decision-definition/get-cleanable-decision-instance-report/)  method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HistoricDecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$decision_definition_id_in = "decision_definition_id_in_example"; // string | Filter by decision definition ids. Must be a comma-separated list of decision definition ids.
$decision_definition_key_in = "decision_definition_key_in_example"; // string | Filter by decision definition keys. Must be a comma-separated list of decision definition keys.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids. A decision definition must have one of the given tenant  ids.
$without_tenant_id = true; // bool | Only include decision definitions which belong to no tenant. Value may only be `true`, as `false`  is the default behavior.
$compact = true; // bool | Only include decision instances which have more than zero finished instances. Value may only be `true`,  as `false` is the default behavior.

try {
    $result = $apiInstance->getCleanableHistoricDecisionInstanceReportCount($decision_definition_id_in, $decision_definition_key_in, $tenant_id_in, $without_tenant_id, $compact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricDecisionDefinitionApi->getCleanableHistoricDecisionInstanceReportCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **decision_definition_id_in** | **string**| Filter by decision definition ids. Must be a comma-separated list of decision definition ids. | [optional]
 **decision_definition_key_in** | **string**| Filter by decision definition keys. Must be a comma-separated list of decision definition keys. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A decision definition must have one of the given tenant  ids. | [optional]
 **without_tenant_id** | **bool**| Only include decision definitions which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60;  is the default behavior. | [optional]
 **compact** | **bool**| Only include decision instances which have more than zero finished instances. Value may only be &#x60;true&#x60;,  as &#x60;false&#x60; is the default behavior. | [optional]

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

