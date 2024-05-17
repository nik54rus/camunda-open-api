# Camunda\Client\HistoricDecisionRequirementsDefinitionApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDecisionStatistics**](HistoricDecisionRequirementsDefinitionApi.md#getdecisionstatistics) | **GET** /history/decision-requirements-definition/{id}/statistics | Get DRD Statistics

# **getDecisionStatistics**
> \Camunda\Client\Model\HistoricDecisionInstanceStatisticsDto[] getDecisionStatistics($id, $decision_instance_id)

Get DRD Statistics

Retrieves evaluation statistics of a given decision requirements definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricDecisionRequirementsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the decision requirements definition.
$decision_instance_id = "decision_instance_id_example"; // string | Restrict query results to be based only on specific evaluation instance of a given decision requirements definition.

try {
    $result = $apiInstance->getDecisionStatistics($id, $decision_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricDecisionRequirementsDefinitionApi->getDecisionStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the decision requirements definition. |
 **decision_instance_id** | **string**| Restrict query results to be based only on specific evaluation instance of a given decision requirements definition. | [optional]

### Return type

[**\Camunda\Client\Model\HistoricDecisionInstanceStatisticsDto[]**](../Model/HistoricDecisionInstanceStatisticsDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

