# Swagger\Client\SignalApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**throwSignal**](SignalApi.md#throwsignal) | **POST** /signal | Event

# **throwSignal**
> throwSignal($body)

Event

A signal is an event of global scope (broadcast semantics) and is delivered to all active handlers. Internally this maps to the engine's signal event received builder method `RuntimeService#createSignalEvent()`. For more information about the signal behavior, see the [Signal Events](https://docs.camunda.org/manual/7.21/reference/bpmn20/events/signal-events/) section of the [BPMN 2.0 Implementation Reference](https://docs.camunda.org/manual/7.21/reference/bpmn20/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SignalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SignalDto(); // \Swagger\Client\Model\SignalDto | 

try {
    $apiInstance->throwSignal($body);
} catch (Exception $e) {
    echo 'Exception when calling SignalApi->throwSignal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SignalDto**](../Model/SignalDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

