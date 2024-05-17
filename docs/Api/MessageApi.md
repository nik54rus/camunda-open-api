# Camunda\Client\MessageApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deliverMessage**](MessageApi.md#delivermessage) | **POST** /message | Correlate

# **deliverMessage**
> \Camunda\Client\Model\MessageCorrelationResultWithVariableDto[] deliverMessage($body)

Correlate

Correlates a message to the process engine to either trigger a message start event or an intermediate message  catching event. Internally this maps to the engine's message correlation builder methods `MessageCorrelationBuilder#correlateWithResult()` and `MessageCorrelationBuilder#correlateAllWithResult()`. For more information about the correlation behavior, see the [Message Events](https://docs.camunda.org/manual/7.21/bpmn20/events/message-events/) section of the [BPMN 2.0 Implementation Reference](https://docs.camunda.org/manual/7.21/reference/bpmn20/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\CorrelationMessageDto(); // \Camunda\Client\Model\CorrelationMessageDto | 

try {
    $result = $apiInstance->deliverMessage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->deliverMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\CorrelationMessageDto**](../Model/CorrelationMessageDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\MessageCorrelationResultWithVariableDto[]**](../Model/MessageCorrelationResultWithVariableDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

