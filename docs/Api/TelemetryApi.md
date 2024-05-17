# Swagger\Client\TelemetryApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configureTelemetry**](TelemetryApi.md#configuretelemetry) | **POST** /telemetry/configuration | Configure Telemetry
[**getTelemetryConfiguration**](TelemetryApi.md#gettelemetryconfiguration) | **GET** /telemetry/configuration | Fetch Telemetry Configuration
[**getTelemetryData**](TelemetryApi.md#gettelemetrydata) | **GET** /telemetry/data | Fetch Telemetry Data

# **configureTelemetry**
> configureTelemetry($body)

Configure Telemetry

Configures whether Camunda receives data collection of the process engine setup and usage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TelemetryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TelemetryConfigurationDto(); // \Swagger\Client\Model\TelemetryConfigurationDto | 

try {
    $apiInstance->configureTelemetry($body);
} catch (Exception $e) {
    echo 'Exception when calling TelemetryApi->configureTelemetry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TelemetryConfigurationDto**](../Model/TelemetryConfigurationDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelemetryConfiguration**
> \Swagger\Client\Model\TelemetryConfigurationDto getTelemetryConfiguration()

Fetch Telemetry Configuration

Fetches Telemetry Configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TelemetryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTelemetryConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelemetryApi->getTelemetryConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TelemetryConfigurationDto**](../Model/TelemetryConfigurationDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelemetryData**
> \Swagger\Client\Model\TelemetryDataDto getTelemetryData()

Fetch Telemetry Data

Fetches Telemetry Data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TelemetryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTelemetryData();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelemetryApi->getTelemetryData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TelemetryDataDto**](../Model/TelemetryDataDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

