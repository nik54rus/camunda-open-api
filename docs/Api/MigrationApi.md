# Camunda\Client\MigrationApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeMigrationPlan**](MigrationApi.md#executemigrationplan) | **POST** /migration/execute | Execute Migration Plan
[**executeMigrationPlanAsync**](MigrationApi.md#executemigrationplanasync) | **POST** /migration/executeAsync | Execute Migration Plan Async (Batch)
[**generateMigrationPlan**](MigrationApi.md#generatemigrationplan) | **POST** /migration/generate | Generate Migration Plan
[**validateMigrationPlan**](MigrationApi.md#validatemigrationplan) | **POST** /migration/validate | Validate Migration Plan

# **executeMigrationPlan**
> executeMigrationPlan($body)

Execute Migration Plan

Executes a migration plan synchronously for multiple process instances. To execute a migration plan asynchronously, use the [Execute Migration Plan Async(Batch)](https://docs.camunda.org/manual/7.21/reference/rest/migration/execute-migration-async/) method.  For more information about the difference between synchronous and asynchronous execution of a migration plan, please refer to the related section of [the user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/process-instance-migration/#executing-a-migration-plan).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\MigrationExecutionDto(); // \Camunda\Client\Model\MigrationExecutionDto | 

try {
    $apiInstance->executeMigrationPlan($body);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->executeMigrationPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\MigrationExecutionDto**](../Model/MigrationExecutionDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeMigrationPlanAsync**
> \Camunda\Client\Model\BatchDto executeMigrationPlanAsync($body)

Execute Migration Plan Async (Batch)

Executes a migration plan asynchronously (batch) for multiple process instances. To execute a migration plan synchronously, use the [Execute MigrationPlan](https://docs.camunda.org/manual/7.21/reference/rest/migration/execute-migration/) method.  For more information about the difference between synchronous and asynchronous execution of a migration plan, please refer to the related section of [the user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/process-instance-migration/#executing-a-migration-plan).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\MigrationExecutionDto(); // \Camunda\Client\Model\MigrationExecutionDto | 

try {
    $result = $apiInstance->executeMigrationPlanAsync($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->executeMigrationPlanAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\MigrationExecutionDto**](../Model/MigrationExecutionDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateMigrationPlan**
> \Camunda\Client\Model\MigrationPlanDto generateMigrationPlan($body)

Generate Migration Plan

Generates a migration plan for two process definitions. The generated migration plan contains migration instructions which map equal activities between the two process definitions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\MigrationPlanGenerationDto(); // \Camunda\Client\Model\MigrationPlanGenerationDto | 

try {
    $result = $apiInstance->generateMigrationPlan($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->generateMigrationPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\MigrationPlanGenerationDto**](../Model/MigrationPlanGenerationDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\MigrationPlanDto**](../Model/MigrationPlanDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateMigrationPlan**
> \Camunda\Client\Model\MigrationPlanReportDto validateMigrationPlan($body)

Validate Migration Plan

Validates a migration plan statically without executing it. This corresponds to the [creation time validation](https://docs.camunda.org/manual/7.21/user-guide/process-engine/process-instance-migration/#creation-time-validation) described in the user guide.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\MigrationPlanDto(); // \Camunda\Client\Model\MigrationPlanDto | 

try {
    $result = $apiInstance->validateMigrationPlan($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->validateMigrationPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\MigrationPlanDto**](../Model/MigrationPlanDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\MigrationPlanReportDto**](../Model/MigrationPlanReportDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

