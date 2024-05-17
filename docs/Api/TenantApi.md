# Camunda\Client\TenantApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**availableTenantGroupMembersOperations**](TenantApi.md#availabletenantgroupmembersoperations) | **OPTIONS** /tenant/{id}/group-members | Tenant Group Membership Resource Options
[**availableTenantInstanceOperations**](TenantApi.md#availabletenantinstanceoperations) | **OPTIONS** /tenant/{id} | Tenant Resource Options
[**availableTenantResourceOperations**](TenantApi.md#availabletenantresourceoperations) | **OPTIONS** /tenant | Tenant Resource Options
[**availableTenantUserMembersOperations**](TenantApi.md#availabletenantusermembersoperations) | **OPTIONS** /tenant/{id}/user-members | Tenant User Membership Resource Options
[**createGroupMembership**](TenantApi.md#creategroupmembership) | **PUT** /tenant/{id}/group-members/{groupId} | Create Tenant Group Membership
[**createTenant**](TenantApi.md#createtenant) | **POST** /tenant/create | Create Tenant
[**createUserMembership**](TenantApi.md#createusermembership) | **PUT** /tenant/{id}/user-members/{userId} | Create Tenant User Membership
[**deleteGroupMembership**](TenantApi.md#deletegroupmembership) | **DELETE** /tenant/{id}/group-members/{groupId} | Create Tenant Group Membership
[**deleteTenant**](TenantApi.md#deletetenant) | **DELETE** /tenant/{id} | Delete Tenant
[**deleteUserMembership**](TenantApi.md#deleteusermembership) | **DELETE** /tenant/{id}/user-members/{userId} | Delete a Tenant User Membership
[**getTenant**](TenantApi.md#gettenant) | **GET** /tenant/{id} | Get Tenant
[**getTenantCount**](TenantApi.md#gettenantcount) | **GET** /tenant/count | Get Tenant Count
[**queryTenants**](TenantApi.md#querytenants) | **GET** /tenant | Get Tenants
[**updateTenant**](TenantApi.md#updatetenant) | **PUT** /tenant/{id} | Update Tenant

# **availableTenantGroupMembersOperations**
> \Camunda\Client\Model\ResourceOptionsDto availableTenantGroupMembersOperations($id)

Tenant Group Membership Resource Options

The OPTIONS request allows checking for the set of available operations that the currently authenticated user can perform on the resource. If the user can perform an operation or not may depend on various things, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the tenant

try {
    $result = $apiInstance->availableTenantGroupMembersOperations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->availableTenantGroupMembersOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant |

### Return type

[**\Camunda\Client\Model\ResourceOptionsDto**](../Model/ResourceOptionsDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availableTenantInstanceOperations**
> \Camunda\Client\Model\ResourceOptionsDto availableTenantInstanceOperations($id)

Tenant Resource Options

The `/tenant` resource supports two custom OPTIONS requests, one for the resource as such and this one for individual tenant instances. The OPTIONS request allows checking for the set of available operations that the currently authenticated user can perform on the `/tenant/{id}` resource. If the user can perform an operation or not may depend on various things, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the tenant

try {
    $result = $apiInstance->availableTenantInstanceOperations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->availableTenantInstanceOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant |

### Return type

[**\Camunda\Client\Model\ResourceOptionsDto**](../Model/ResourceOptionsDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availableTenantResourceOperations**
> \Camunda\Client\Model\ResourceOptionsDto availableTenantResourceOperations()

Tenant Resource Options

The `/tenant` resource supports two custom OPTIONS requests, this one for the resource as such and one for individual tenant instances. The OPTIONS request allows checking for the set of available operations that the currently authenticated user can perform on the `/tenant` resource. If the user can perform an operation or not may depend on various things, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->availableTenantResourceOperations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->availableTenantResourceOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Camunda\Client\Model\ResourceOptionsDto**](../Model/ResourceOptionsDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availableTenantUserMembersOperations**
> \Camunda\Client\Model\ResourceOptionsDto availableTenantUserMembersOperations($id)

Tenant User Membership Resource Options

The OPTIONS request allows checking for the set of available operations that the currently authenticated user can perform on the resource. If the user can perform an operation or not may depend on various things, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the tenant

try {
    $result = $apiInstance->availableTenantUserMembersOperations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->availableTenantUserMembersOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant |

### Return type

[**\Camunda\Client\Model\ResourceOptionsDto**](../Model/ResourceOptionsDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroupMembership**
> createGroupMembership($id, $group_id)

Create Tenant Group Membership

Creates a membership between a tenant and a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the tenant.
$group_id = "group_id_example"; // string | The id of the group.

try {
    $apiInstance->createGroupMembership($id, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->createGroupMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant. |
 **group_id** | **string**| The id of the group. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTenant**
> createTenant($body)

Create Tenant

Create a new tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\TenantDto(); // \Camunda\Client\Model\TenantDto | 

try {
    $apiInstance->createTenant($body);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->createTenant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\TenantDto**](../Model/TenantDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUserMembership**
> createUserMembership($id, $user_id)

Create Tenant User Membership

Creates a membership between a tenant and an user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the tenant.
$user_id = "user_id_example"; // string | The id of the user.

try {
    $apiInstance->createUserMembership($id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->createUserMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant. |
 **user_id** | **string**| The id of the user. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupMembership**
> deleteGroupMembership($id, $group_id)

Create Tenant Group Membership

Creates a membership between a tenant and a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the tenant.
$group_id = "group_id_example"; // string | The id of the group.

try {
    $apiInstance->deleteGroupMembership($id, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->deleteGroupMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant. |
 **group_id** | **string**| The id of the group. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTenant**
> deleteTenant($id)

Delete Tenant

Deletes a tenant by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the tenant to be deleted.

try {
    $apiInstance->deleteTenant($id);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->deleteTenant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant to be deleted. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserMembership**
> deleteUserMembership($id, $user_id)

Delete a Tenant User Membership

Deletes a membership between a tenant and an user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the tenant.
$user_id = "user_id_example"; // string | The id of the user.

try {
    $apiInstance->deleteUserMembership($id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->deleteUserMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant. |
 **user_id** | **string**| The id of the user. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTenant**
> \Camunda\Client\Model\TenantDto getTenant($id)

Get Tenant

Retrieves a tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the tenant to be retrieved.

try {
    $result = $apiInstance->getTenant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->getTenant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant to be retrieved. |

### Return type

[**\Camunda\Client\Model\TenantDto**](../Model/TenantDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTenantCount**
> \Camunda\Client\Model\CountResultDto getTenantCount($id, $name, $name_like, $user_member, $group_member, $including_groups_of_user)

Get Tenant Count

Query for tenants using a list of parameters and retrieves the count.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Filter by the id of the tenant.
$name = "name_example"; // string | Filter by the name of the tenant.
$name_like = "name_like_example"; // string | Filter by the name that the parameter is a substring of.
$user_member = "user_member_example"; // string | Select only tenants where the given user is a member of.
$group_member = "group_member_example"; // string | Select only tenants where the given group is a member of.
$including_groups_of_user = true; // bool | Select only tenants where the user or one of his groups is a member of. Can only be used in combination with the `userMember` parameter. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getTenantCount($id, $name, $name_like, $user_member, $group_member, $including_groups_of_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->getTenantCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Filter by the id of the tenant. | [optional]
 **name** | **string**| Filter by the name of the tenant. | [optional]
 **name_like** | **string**| Filter by the name that the parameter is a substring of. | [optional]
 **user_member** | **string**| Select only tenants where the given user is a member of. | [optional]
 **group_member** | **string**| Select only tenants where the given group is a member of. | [optional]
 **including_groups_of_user** | **bool**| Select only tenants where the user or one of his groups is a member of. Can only be used in combination with the &#x60;userMember&#x60; parameter. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

### Return type

[**\Camunda\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryTenants**
> \Camunda\Client\Model\TenantDto[] queryTenants($sort_by, $sort_order, $first_result, $max_results, $id, $name, $name_like, $user_member, $group_member, $including_groups_of_user)

Get Tenants

Query for a list of tenants using a list of parameters. The size of the result set can be retrieved by using the [Get Tenant Count](https://docs.camunda.org/manual/7.21/reference/rest/tenant/get-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$id = "id_example"; // string | Filter by the id of the tenant.
$name = "name_example"; // string | Filter by the name of the tenant.
$name_like = "name_like_example"; // string | Filter by the name that the parameter is a substring of.
$user_member = "user_member_example"; // string | Select only tenants where the given user is a member of.
$group_member = "group_member_example"; // string | Select only tenants where the given group is a member of.
$including_groups_of_user = true; // bool | Select only tenants where the user or one of his groups is a member of. Can only be used in combination with the `userMember` parameter. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->queryTenants($sort_by, $sort_order, $first_result, $max_results, $id, $name, $name_like, $user_member, $group_member, $including_groups_of_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->queryTenants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **id** | **string**| Filter by the id of the tenant. | [optional]
 **name** | **string**| Filter by the name of the tenant. | [optional]
 **name_like** | **string**| Filter by the name that the parameter is a substring of. | [optional]
 **user_member** | **string**| Select only tenants where the given user is a member of. | [optional]
 **group_member** | **string**| Select only tenants where the given group is a member of. | [optional]
 **including_groups_of_user** | **bool**| Select only tenants where the user or one of his groups is a member of. Can only be used in combination with the &#x60;userMember&#x60; parameter. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

### Return type

[**\Camunda\Client\Model\TenantDto[]**](../Model/TenantDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTenant**
> updateTenant($id, $body)

Update Tenant

Updates a given tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the tenant.
$body = new \Camunda\Client\Model\TenantDto(); // \Camunda\Client\Model\TenantDto | 

try {
    $apiInstance->updateTenant($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->updateTenant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant. |
 **body** | [**\Camunda\Client\Model\TenantDto**](../Model/TenantDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

