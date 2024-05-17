# Swagger\Client\ConditionApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**evaluateCondition**](ConditionApi.md#evaluatecondition) | **POST** /condition | Evaluate

# **evaluateCondition**
> \Swagger\Client\Model\ProcessInstanceDto[] evaluateCondition($body)

Evaluate

Triggers evaluation of conditions for conditional start event(s).  Internally this maps to the engines condition evaluation builder method ConditionEvaluationBuilder#evaluateStartConditions().  For more information see the [Conditional Start Events](https://docs.camunda.org/manual/7.21/reference/bpmn20/events/conditional-events/#conditional-start-event) section of the [BPMN 2.0 Implementation Reference](https://docs.camunda.org/manual/7.21/reference/bpmn20/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ConditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EvaluationConditionDto(); // \Swagger\Client\Model\EvaluationConditionDto | 

try {
    $result = $apiInstance->evaluateCondition($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConditionApi->evaluateCondition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EvaluationConditionDto**](../Model/EvaluationConditionDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProcessInstanceDto[]**](../Model/ProcessInstanceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

