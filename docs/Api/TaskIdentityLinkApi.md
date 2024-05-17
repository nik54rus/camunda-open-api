# Swagger\Client\TaskIdentityLinkApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addIdentityLink**](TaskIdentityLinkApi.md#addidentitylink) | **POST** /task/{id}/identity-links | Add
[**deleteIdentityLink**](TaskIdentityLinkApi.md#deleteidentitylink) | **POST** /task/{id}/identity-links/delete | Delete
[**getIdentityLinks**](TaskIdentityLinkApi.md#getidentitylinks) | **GET** /task/{id}/identity-links | Get List

# **addIdentityLink**
> addIdentityLink($id, $body)

Add

Adds an identity link to a task by id. Can be used to link any user or group to a task and specify a relation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TaskIdentityLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to add a link to.
$body = new \Swagger\Client\Model\IdentityLinkDto(); // \Swagger\Client\Model\IdentityLinkDto | 

try {
    $apiInstance->addIdentityLink($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TaskIdentityLinkApi->addIdentityLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to add a link to. |
 **body** | [**\Swagger\Client\Model\IdentityLinkDto**](../Model/IdentityLinkDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIdentityLink**
> deleteIdentityLink($id, $body)

Delete

Removes an identity link from a task by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TaskIdentityLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to remove a link from.
$body = new \Swagger\Client\Model\IdentityLinkDto(); // \Swagger\Client\Model\IdentityLinkDto | 

try {
    $apiInstance->deleteIdentityLink($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TaskIdentityLinkApi->deleteIdentityLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to remove a link from. |
 **body** | [**\Swagger\Client\Model\IdentityLinkDto**](../Model/IdentityLinkDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdentityLinks**
> \Swagger\Client\Model\IdentityLinkDto[] getIdentityLinks($id, $type)

Get List

Gets the identity links for a task by id, which are the users and groups that are in *some* relation to it (including assignee and owner).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TaskIdentityLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to retrieve the identity links for.
$type = "type_example"; // string | Filter by the type of links to include.

try {
    $result = $apiInstance->getIdentityLinks($id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskIdentityLinkApi->getIdentityLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the identity links for. |
 **type** | **string**| Filter by the type of links to include. | [optional]

### Return type

[**\Swagger\Client\Model\IdentityLinkDto[]**](../Model/IdentityLinkDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

