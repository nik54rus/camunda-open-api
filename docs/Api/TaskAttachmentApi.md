# Swagger\Client\TaskAttachmentApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAttachment**](TaskAttachmentApi.md#addattachment) | **POST** /task/{id}/attachment/create | Create
[**deleteAttachment**](TaskAttachmentApi.md#deleteattachment) | **DELETE** /task/{id}/attachment/{attachmentId} | Delete
[**getAttachment**](TaskAttachmentApi.md#getattachment) | **GET** /task/{id}/attachment/{attachmentId} | Get
[**getAttachmentData**](TaskAttachmentApi.md#getattachmentdata) | **GET** /task/{id}/attachment/{attachmentId}/data | Get (Binary)
[**getAttachments**](TaskAttachmentApi.md#getattachments) | **GET** /task/{id}/attachment | Get List

# **addAttachment**
> \Swagger\Client\Model\AttachmentDto addAttachment($id, $attachment_name, $attachment_description, $attachment_type, $url, $content)

Create

Creates an attachment for a task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TaskAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to add the attachment to.
$attachment_name = "attachment_name_example"; // string | 
$attachment_description = "attachment_description_example"; // string | 
$attachment_type = "attachment_type_example"; // string | 
$url = "url_example"; // string | 
$content = "content_example"; // string | 

try {
    $result = $apiInstance->addAttachment($id, $attachment_name, $attachment_description, $attachment_type, $url, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskAttachmentApi->addAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to add the attachment to. |
 **attachment_name** | **string**|  | [optional]
 **attachment_description** | **string**|  | [optional]
 **attachment_type** | **string**|  | [optional]
 **url** | **string**|  | [optional]
 **content** | **string****string**|  | [optional]

### Return type

[**\Swagger\Client\Model\AttachmentDto**](../Model/AttachmentDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAttachment**
> deleteAttachment($id, $attachment_id)

Delete

Removes an attachment from a task by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TaskAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task.
$attachment_id = "attachment_id_example"; // string | The id of the attachment to be removed.

try {
    $apiInstance->deleteAttachment($id, $attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskAttachmentApi->deleteAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **attachment_id** | **string**| The id of the attachment to be removed. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttachment**
> \Swagger\Client\Model\AttachmentDto getAttachment($id, $attachment_id)

Get

Retrieves a task attachment by task id and attachment id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TaskAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task.
$attachment_id = "attachment_id_example"; // string | The id of the attachment to be retrieved.

try {
    $result = $apiInstance->getAttachment($id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskAttachmentApi->getAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **attachment_id** | **string**| The id of the attachment to be retrieved. |

### Return type

[**\Swagger\Client\Model\AttachmentDto**](../Model/AttachmentDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttachmentData**
> string getAttachmentData($id, $attachment_id)

Get (Binary)

Retrieves the binary content of a task attachment by task id and attachment id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TaskAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task.
$attachment_id = "attachment_id_example"; // string | The id of the attachment to be retrieved.

try {
    $result = $apiInstance->getAttachmentData($id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskAttachmentApi->getAttachmentData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **attachment_id** | **string**| The id of the attachment to be retrieved. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttachments**
> \Swagger\Client\Model\AttachmentDto[] getAttachments($id)

Get List

Gets the attachments for a task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TaskAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to retrieve the attachments for.

try {
    $result = $apiInstance->getAttachments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskAttachmentApi->getAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the attachments for. |

### Return type

[**\Swagger\Client\Model\AttachmentDto[]**](../Model/AttachmentDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

