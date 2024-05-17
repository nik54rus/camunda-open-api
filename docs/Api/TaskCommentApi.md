# Camunda\Client\TaskCommentApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createComment**](TaskCommentApi.md#createcomment) | **POST** /task/{id}/comment/create | Create
[**getComment**](TaskCommentApi.md#getcomment) | **GET** /task/{id}/comment/{commentId} | Get
[**getComments**](TaskCommentApi.md#getcomments) | **GET** /task/{id}/comment | Get List

# **createComment**
> \Camunda\Client\Model\CommentDto createComment($id, $body)

Create

Creates a comment for a task by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskCommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to add the comment to.
$body = new \Camunda\Client\Model\CommentDto(); // \Camunda\Client\Model\CommentDto | **Note:** Only the `message` and `processInstanceId` properties will be used. Every other property passed to this endpoint will be ignored.

try {
    $result = $apiInstance->createComment($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCommentApi->createComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to add the comment to. |
 **body** | [**\Camunda\Client\Model\CommentDto**](../Model/CommentDto.md)| **Note:** Only the &#x60;message&#x60; and &#x60;processInstanceId&#x60; properties will be used. Every other property passed to this endpoint will be ignored. | [optional]

### Return type

[**\Camunda\Client\Model\CommentDto**](../Model/CommentDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComment**
> \Camunda\Client\Model\CommentDto getComment($id, $comment_id)

Get

Retrieves a task comment by task id and comment id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskCommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task.
$comment_id = "comment_id_example"; // string | The id of the comment to be retrieved.

try {
    $result = $apiInstance->getComment($id, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCommentApi->getComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **comment_id** | **string**| The id of the comment to be retrieved. |

### Return type

[**\Camunda\Client\Model\CommentDto**](../Model/CommentDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComments**
> \Camunda\Client\Model\CommentDto[] getComments($id)

Get List

Gets the comments for a task by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskCommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to retrieve the comments for.

try {
    $result = $apiInstance->getComments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCommentApi->getComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the comments for. |

### Return type

[**\Camunda\Client\Model\CommentDto[]**](../Model/CommentDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

