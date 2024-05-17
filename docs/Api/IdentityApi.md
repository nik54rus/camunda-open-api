# Camunda\Client\IdentityApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkPassword**](IdentityApi.md#checkpassword) | **POST** /identity/password-policy | Validate Password
[**getGroupInfo**](IdentityApi.md#getgroupinfo) | **GET** /identity/groups | Get a User&#x27;s Groups
[**getPasswordPolicy**](IdentityApi.md#getpasswordpolicy) | **GET** /identity/password-policy | Get Password Policy
[**verifyUser**](IdentityApi.md#verifyuser) | **POST** /identity/verify | Verify User

# **checkPassword**
> \Camunda\Client\Model\CheckPasswordPolicyResultDto checkPassword($body)

Validate Password

A password policy consists of a list of rules that new passwords must follow to be policy compliant. A password can be checked for compliancy via this end point. More information on password policies in Camunda can be found in the password policy [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/password-policy/) and in the [security instructions](https://docs.camunda.org/manual/7.21/user-guide/security/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\PasswordPolicyRequestDto(); // \Camunda\Client\Model\PasswordPolicyRequestDto | 

try {
    $result = $apiInstance->checkPassword($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->checkPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\PasswordPolicyRequestDto**](../Model/PasswordPolicyRequestDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\CheckPasswordPolicyResultDto**](../Model/CheckPasswordPolicyResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupInfo**
> \Camunda\Client\Model\IdentityServiceGroupInfoDto getGroupInfo($user_id)

Get a User's Groups

Gets the groups of a user by id and includes all users that share a group with the given user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The id of the user to get the groups for.

try {
    $result = $apiInstance->getGroupInfo($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->getGroupInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user to get the groups for. |

### Return type

[**\Camunda\Client\Model\IdentityServiceGroupInfoDto**](../Model/IdentityServiceGroupInfoDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPasswordPolicy**
> \Camunda\Client\Model\PasswordPolicyDto getPasswordPolicy()

Get Password Policy

A password policy consists of a list of rules that new passwords must follow to be policy compliant. This end point returns a JSON representation of the list of policy rules. More information on password policies in Camunda can be found in the password policy [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/password-policy/) and in the [security instructions](https://docs.camunda.org/manual/7.21/user-guide/security/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPasswordPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->getPasswordPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Camunda\Client\Model\PasswordPolicyDto**](../Model/PasswordPolicyDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyUser**
> \Camunda\Client\Model\AuthenticationResult verifyUser($body)

Verify User

Verifies that user credentials are valid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\BasicUserCredentialsDto(); // \Camunda\Client\Model\BasicUserCredentialsDto | 

try {
    $result = $apiInstance->verifyUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->verifyUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\BasicUserCredentialsDto**](../Model/BasicUserCredentialsDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\AuthenticationResult**](../Model/AuthenticationResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

