# Camunda\Client\TaskApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**claim**](TaskApi.md#claim) | **POST** /task/{id}/claim | Claim
[**complete**](TaskApi.md#complete) | **POST** /task/{id}/complete | Complete
[**createTask**](TaskApi.md#createtask) | **POST** /task/create | Create
[**delegateTask**](TaskApi.md#delegatetask) | **POST** /task/{id}/delegate | Delegate
[**deleteTask**](TaskApi.md#deletetask) | **DELETE** /task/{id} | Delete
[**getDeployedForm**](TaskApi.md#getdeployedform) | **GET** /task/{id}/deployed-form | Get Deployed Form
[**getForm**](TaskApi.md#getform) | **GET** /task/{id}/form | Get Form Key
[**getFormVariables**](TaskApi.md#getformvariables) | **GET** /task/{id}/form-variables | Get Task Form Variables
[**getRenderedForm**](TaskApi.md#getrenderedform) | **GET** /task/{id}/rendered-form | Get Rendered Form
[**getTask**](TaskApi.md#gettask) | **GET** /task/{id} | Get
[**getTaskCountByCandidateGroup**](TaskApi.md#gettaskcountbycandidategroup) | **GET** /task/report/candidate-group-count | Get Task Count By Candidate Group
[**getTasks**](TaskApi.md#gettasks) | **GET** /task | Get List
[**getTasksCount**](TaskApi.md#gettaskscount) | **GET** /task/count | Get List Count
[**handleBpmnError**](TaskApi.md#handlebpmnerror) | **POST** /task/{id}/bpmnError | Handle BPMN Error
[**handleEscalation**](TaskApi.md#handleescalation) | **POST** /task/{id}/bpmnEscalation | Handle BPMN Escalation
[**queryTasks**](TaskApi.md#querytasks) | **POST** /task | Get List (POST)
[**queryTasksCount**](TaskApi.md#querytaskscount) | **POST** /task/count | Get List Count (POST)
[**resolve**](TaskApi.md#resolve) | **POST** /task/{id}/resolve | Resolve
[**setAssignee**](TaskApi.md#setassignee) | **POST** /task/{id}/assignee | Set Assignee
[**submit**](TaskApi.md#submit) | **POST** /task/{id}/submit-form | Submit Form
[**unclaim**](TaskApi.md#unclaim) | **POST** /task/{id}/unclaim | Unclaim
[**updateTask**](TaskApi.md#updatetask) | **PUT** /task/{id} | Update

# **claim**
> claim($id, $body)

Claim

Claims a task for a specific user.  **Note:** The difference with the [Set Assignee](https://docs.camunda.org/manual/7.21/reference/rest/task/post-assignee/) method is that here a check is performed to see if the task already has a user assigned to it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to claim.
$body = new \Camunda\Client\Model\UserIdDto(); // \Camunda\Client\Model\UserIdDto | Provide the id of the user that claims the task.

try {
    $apiInstance->claim($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->claim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to claim. |
 **body** | [**\Camunda\Client\Model\UserIdDto**](../Model/UserIdDto.md)| Provide the id of the user that claims the task. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **complete**
> map[string,\Camunda\Client\Model\VariableValueDto] complete($id, $body)

Complete

Completes a task and updates process variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to complete.
$body = new \Camunda\Client\Model\CompleteTaskDto(); // \Camunda\Client\Model\CompleteTaskDto | 

try {
    $result = $apiInstance->complete($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->complete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to complete. |
 **body** | [**\Camunda\Client\Model\CompleteTaskDto**](../Model/CompleteTaskDto.md)|  | [optional]

### Return type

[**map[string,\Camunda\Client\Model\VariableValueDto]**](../Model/VariableValueDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTask**
> createTask($body)

Create

Creates a new task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\TaskDto(); // \Camunda\Client\Model\TaskDto | 

try {
    $apiInstance->createTask($body);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->createTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\TaskDto**](../Model/TaskDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delegateTask**
> delegateTask($id, $body)

Delegate

Delegates a task to another user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to delegate.
$body = new \Camunda\Client\Model\UserIdDto(); // \Camunda\Client\Model\UserIdDto | Provide the id of the user that the task should be delegated to.

try {
    $apiInstance->delegateTask($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->delegateTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to delegate. |
 **body** | [**\Camunda\Client\Model\UserIdDto**](../Model/UserIdDto.md)| Provide the id of the user that the task should be delegated to. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTask**
> deleteTask($id)

Delete

Removes a task by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to be removed.

try {
    $apiInstance->deleteTask($id);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->deleteTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to be removed. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeployedForm**
> string getDeployedForm($id)

Get Deployed Form

Retrieves the deployed form that is referenced from a given task. For further information please refer to the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/task-forms/#embedded-task-forms).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to get the deployed form for.

try {
    $result = $apiInstance->getDeployedForm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getDeployedForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to get the deployed form for. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xhtml+xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getForm**
> \Camunda\Client\Model\FormDto getForm($id)

Get Form Key

Retrieves the form key for a task. The form key corresponds to the `FormData#formKey` property in the engine. This key can be used to do task-specific form rendering in client applications. Additionally, the context path of the containing process application is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to retrieve the form for.

try {
    $result = $apiInstance->getForm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the form for. |

### Return type

[**\Camunda\Client\Model\FormDto**](../Model/FormDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFormVariables**
> map[string,\Camunda\Client\Model\VariableValueDto] getFormVariables($id, $variable_names, $deserialize_values)

Get Task Form Variables

Retrieves the form variables for a task. The form variables take form data specified on the task into account. If form fields are defined, the variable types and default values of the form fields are taken into account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to retrieve the variables for.
$variable_names = "variable_names_example"; // string | A comma-separated list of variable names. Allows restricting the list of requested variables to the variable names in the list. It is best practice to restrict the list of variables to the variables actually required by the form in order to minimize fetching of data. If the query parameter is ommitted all variables are fetched. If the query parameter contains non-existent variable names, the variable names are ignored.
$deserialize_values = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](http://jackson.codehaus.org/) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getFormVariables($id, $variable_names, $deserialize_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getFormVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the variables for. |
 **variable_names** | **string**| A comma-separated list of variable names. Allows restricting the list of requested variables to the variable names in the list. It is best practice to restrict the list of variables to the variables actually required by the form in order to minimize fetching of data. If the query parameter is ommitted all variables are fetched. If the query parameter contains non-existent variable names, the variable names are ignored. | [optional]
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#x27;s](http://jackson.codehaus.org/) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#x27;s classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine. | [optional] [default to true]

### Return type

[**map[string,\Camunda\Client\Model\VariableValueDto]**](../Model/VariableValueDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRenderedForm**
> string getRenderedForm($id)

Get Rendered Form

Retrieves the rendered form for a task. This method can be used to get the HTML rendering of a [Generated Task Form](https://docs.camunda.org/manual/7.21/user-guide/task-forms/#generated-task-forms).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to get the rendered form for.

try {
    $result = $apiInstance->getRenderedForm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getRenderedForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to get the rendered form for. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xhtml+xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTask**
> \Camunda\Client\Model\TaskDto getTask($id)

Get

Retrieves a task by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to be retrieved.

try {
    $result = $apiInstance->getTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to be retrieved. |

### Return type

[**\Camunda\Client\Model\TaskDto**](../Model/TaskDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskCountByCandidateGroup**
> \Camunda\Client\Model\TaskCountByCandidateGroupResultDto[] getTaskCountByCandidateGroup()

Get Task Count By Candidate Group

Retrieves the number of tasks for each candidate group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTaskCountByCandidateGroup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskCountByCandidateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Camunda\Client\Model\TaskCountByCandidateGroupResultDto[]**](../Model/TaskCountByCandidateGroupResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/csv, text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasks**
> \Camunda\Client\Model\TaskDto[] getTasks($task_id, $task_id_in, $process_instance_id, $process_instance_id_in, $process_instance_business_key, $process_instance_business_key_expression, $process_instance_business_key_in, $process_instance_business_key_like, $process_instance_business_key_like_expression, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_name, $process_definition_name_like, $execution_id, $case_instance_id, $case_instance_business_key, $case_instance_business_key_like, $case_definition_id, $case_definition_key, $case_definition_name, $case_definition_name_like, $case_execution_id, $activity_instance_id_in, $tenant_id_in, $without_tenant_id, $assignee, $assignee_expression, $assignee_like, $assignee_like_expression, $assignee_in, $assignee_not_in, $owner, $owner_expression, $candidate_group, $candidate_group_expression, $candidate_user, $candidate_user_expression, $include_assigned_tasks, $involved_user, $involved_user_expression, $assigned, $unassigned, $task_definition_key, $task_definition_key_in, $task_definition_key_like, $name, $name_not_equal, $name_like, $name_not_like, $description, $description_like, $priority, $max_priority, $min_priority, $due_date, $due_date_expression, $due_after, $due_after_expression, $due_before, $due_before_expression, $without_due_date, $follow_up_date, $follow_up_date_expression, $follow_up_after, $follow_up_after_expression, $follow_up_before, $follow_up_before_expression, $follow_up_before_or_not_existent, $follow_up_before_or_not_existent_expression, $created_on, $created_on_expression, $created_after, $created_after_expression, $created_before, $created_before_expression, $updated_after, $updated_after_expression, $delegation_state, $candidate_groups, $candidate_groups_expression, $with_candidate_groups, $without_candidate_groups, $with_candidate_users, $without_candidate_users, $active, $suspended, $task_variables, $process_variables, $case_instance_variables, $variable_names_ignore_case, $variable_values_ignore_case, $parent_task_id, $sort_by, $sort_order, $first_result, $max_results)

Get List

Queries for tasks that fulfill a given filter. The size of the result set can be retrieved by using the Get Task Count method.  **Security Consideration:** There are several query parameters (such as assigneeExpression) for specifying an EL expression. These are disabled by default to prevent remote code execution. See the section on [security considerations](https://docs.camunda.org/manual/7.21/user-guide/process-engine/securing-custom-code/) for custom code in the user guide for details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = "task_id_example"; // string | Restrict to task with the given id.
$task_id_in = "task_id_in_example"; // string | Restrict to tasks with any of the given ids.
$process_instance_id = "process_instance_id_example"; // string | Restrict to tasks that belong to process instances with the given id.
$process_instance_id_in = "process_instance_id_in_example"; // string | Restrict to tasks that belong to process instances with the given ids.
$process_instance_business_key = "process_instance_business_key_example"; // string | Restrict to tasks that belong to process instances with the given business key.
$process_instance_business_key_expression = "process_instance_business_key_expression_example"; // string | Restrict to tasks that belong to process instances with the given business key which  is described by an expression. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions.
$process_instance_business_key_in = "process_instance_business_key_in_example"; // string | Restrict to tasks that belong to process instances with one of the give business keys.  The keys need to be in a comma-separated list.
$process_instance_business_key_like = "process_instance_business_key_like_example"; // string | Restrict to tasks that have a process instance business key that has the parameter  value as a substring.
$process_instance_business_key_like_expression = "process_instance_business_key_like_expression_example"; // string | Restrict to tasks that have a process instance business key that has the parameter  value as a substring and is described by an expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions.
$process_definition_id = "process_definition_id_example"; // string | Restrict to tasks that belong to a process definition with the given id.
$process_definition_key = "process_definition_key_example"; // string | Restrict to tasks that belong to a process definition with the given key.
$process_definition_key_in = "process_definition_key_in_example"; // string | Restrict to tasks that belong to a process definition with one of the given keys. The  keys need to be in a comma-separated list.
$process_definition_name = "process_definition_name_example"; // string | Restrict to tasks that belong to a process definition with the given name.
$process_definition_name_like = "process_definition_name_like_example"; // string | Restrict to tasks that have a process definition name that has the parameter value as  a substring.
$execution_id = "execution_id_example"; // string | Restrict to tasks that belong to an execution with the given id.
$case_instance_id = "case_instance_id_example"; // string | Restrict to tasks that belong to case instances with the given id.
$case_instance_business_key = "case_instance_business_key_example"; // string | Restrict to tasks that belong to case instances with the given business key.
$case_instance_business_key_like = "case_instance_business_key_like_example"; // string | Restrict to tasks that have a case instance business key that has the parameter value  as a substring.
$case_definition_id = "case_definition_id_example"; // string | Restrict to tasks that belong to a case definition with the given id.
$case_definition_key = "case_definition_key_example"; // string | Restrict to tasks that belong to a case definition with the given key.
$case_definition_name = "case_definition_name_example"; // string | Restrict to tasks that belong to a case definition with the given name.
$case_definition_name_like = "case_definition_name_like_example"; // string | Restrict to tasks that have a case definition name that has the parameter value as a  substring.
$case_execution_id = "case_execution_id_example"; // string | Restrict to tasks that belong to a case execution with the given id.
$activity_instance_id_in = "activity_instance_id_in_example"; // string | Only include tasks which belong to one of the passed and comma-separated activity  instance ids.
$tenant_id_in = "tenant_id_in_example"; // string | Only include tasks which belong to one of the passed and comma-separated  tenant ids.
$without_tenant_id = false; // bool | Only include tasks which belong to no tenant. Value may only be `true`,  as `false` is the default behavior.
$assignee = "assignee_example"; // string | Restrict to tasks that the given user is assigned to.
$assignee_expression = "assignee_expression_example"; // string | Restrict to tasks that the user described by the given expression is assigned to.  See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions.
$assignee_like = "assignee_like_example"; // string | Restrict to tasks that have an assignee that has the parameter  value as a substring.
$assignee_like_expression = "assignee_like_expression_example"; // string | Restrict to tasks that have an assignee that has the parameter value described by the  given expression as a substring. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions.
$assignee_in = "assignee_in_example"; // string | Only include tasks which are assigned to one of the passed and  comma-separated user ids.
$assignee_not_in = "assignee_not_in_example"; // string | Only include tasks which are not assigned to one of the passed and comma-separated user ids.
$owner = "owner_example"; // string | Restrict to tasks that the given user owns.
$owner_expression = "owner_expression_example"; // string | Restrict to tasks that the user described by the given expression owns. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions.
$candidate_group = "candidate_group_example"; // string | Only include tasks that are offered to the given group.
$candidate_group_expression = "candidate_group_expression_example"; // string | Only include tasks that are offered to the group described by the given expression.  See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions.
$candidate_user = "candidate_user_example"; // string | Only include tasks that are offered to the given user or to one of his groups.
$candidate_user_expression = "candidate_user_expression_example"; // string | Only include tasks that are offered to the user described by the given expression.  See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions.
$include_assigned_tasks = false; // bool | Also include tasks that are assigned to users in candidate queries. Default is to only  include tasks that are not assigned to any user if you query by candidate user or group(s).
$involved_user = "involved_user_example"; // string | Only include tasks that the given user is involved in. A user is involved in a task if  an identity link exists between task and user (e.g., the user is the assignee).
$involved_user_expression = "involved_user_expression_example"; // string | Only include tasks that the user described by the given expression is involved in. A user is involved in a task if an identity link exists between task and user (e.g., the user is the assignee). See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions.
$assigned = false; // bool | If set to `true`, restricts the query to all tasks that are assigned.
$unassigned = false; // bool | If set to `true`, restricts the query to all tasks that are unassigned.
$task_definition_key = "task_definition_key_example"; // string | Restrict to tasks that have the given key.
$task_definition_key_in = "task_definition_key_in_example"; // string | Restrict to tasks that have one of the given keys. The keys need to be in a comma-separated list.
$task_definition_key_like = "task_definition_key_like_example"; // string | Restrict to tasks that have a key that has the parameter value as a substring.
$name = "name_example"; // string | Restrict to tasks that have the given name.
$name_not_equal = "name_not_equal_example"; // string | Restrict to tasks that do not have the given name.
$name_like = "name_like_example"; // string | Restrict to tasks that have a name with the given parameter value as substring.
$name_not_like = "name_not_like_example"; // string | Restrict to tasks that do not have a name with the given parameter value as substring.
$description = "description_example"; // string | Restrict to tasks that have the given description.
$description_like = "description_like_example"; // string | Restrict to tasks that have a description that has the parameter value as a substring.
$priority = 56; // int | Restrict to tasks that have the given priority.
$max_priority = 56; // int | Restrict to tasks that have a lower or equal priority.
$min_priority = 56; // int | Restrict to tasks that have a higher or equal priority.
$due_date = "due_date_example"; // string | Restrict to tasks that are due on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.546+0200`.
$due_date_expression = "due_date_expression_example"; // string | Restrict to tasks that are due on the date described by the given expression. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$due_after = "due_after_example"; // string | Restrict to tasks that are due after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.435+0200`.
$due_after_expression = "due_after_expression_example"; // string | Restrict to tasks that are due after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$due_before = "due_before_example"; // string | Restrict to tasks that are due before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.243+0200`.
$due_before_expression = "due_before_expression_example"; // string | Restrict to tasks that are due before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$without_due_date = false; // bool | Only include tasks which have no due date. Value may only be `true`,  as `false` is the default behavior.
$follow_up_date = "follow_up_date_example"; // string | Restrict to tasks that have a followUp date on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.342+0200`.
$follow_up_date_expression = "follow_up_date_expression_example"; // string | Restrict to tasks that have a followUp date on the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$follow_up_after = "follow_up_after_example"; // string | Restrict to tasks that have a followUp date after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.542+0200`.
$follow_up_after_expression = "follow_up_after_expression_example"; // string | Restrict to tasks that have a followUp date after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$follow_up_before = "follow_up_before_example"; // string | Restrict to tasks that have a followUp date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.234+0200`.
$follow_up_before_expression = "follow_up_before_expression_example"; // string | Restrict to tasks that have a followUp date before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$follow_up_before_or_not_existent = "follow_up_before_or_not_existent_example"; // string | Restrict to tasks that have no followUp date or a followUp date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.432+0200`. The typical use case is to query all `active` tasks for a user for a given date.
$follow_up_before_or_not_existent_expression = "follow_up_before_or_not_existent_expression_example"; // string | Restrict to tasks that have no followUp date or a followUp date before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$created_on = "created_on_example"; // string | Restrict to tasks that were created on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.324+0200`.
$created_on_expression = "created_on_expression_example"; // string | Restrict to tasks that were created on the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$created_after = "created_after_example"; // string | Restrict to tasks that were created after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.342+0200`.
$created_after_expression = "created_after_expression_example"; // string | Restrict to tasks that were created after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$created_before = "created_before_example"; // string | Restrict to tasks that were created before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.332+0200`.
$created_before_expression = "created_before_expression_example"; // string | Restrict to tasks that were created before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$updated_after = "updated_after_example"; // string | Restrict to tasks that were updated after the given date. Every action that fires  a [task update event](https://docs.camunda.org/manual/7.21/user-guide/process-engine/delegation-code/#task-listener-event-lifecycle) is considered as updating the task. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.332+0200`.
$updated_after_expression = "updated_after_expression_example"; // string | Restrict to tasks that were updated after the date described by the given expression. Every action that fires  a [task update event](https://docs.camunda.org/manual/7.21/user-guide/process-engine/delegation-code/#task-listener-event-lifecycle) is considered as updating the task. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$delegation_state = "delegation_state_example"; // string | Restrict to tasks that are in the given delegation state. Valid values are `PENDING` and `RESOLVED`.
$candidate_groups = "candidate_groups_example"; // string | Restrict to tasks that are offered to any of the given candidate groups. Takes a comma-separated list of group names, so for example `developers,support,sales`.
$candidate_groups_expression = "candidate_groups_expression_example"; // string | Restrict to tasks that are offered to any of the candidate groups described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to `java.util.List` of Strings.
$with_candidate_groups = false; // bool | Only include tasks which have a candidate group. Value may only be `true`, as `false` is the default behavior.
$without_candidate_groups = false; // bool | Only include tasks which have no candidate group. Value may only be `true`, as `false` is the default behavior.
$with_candidate_users = false; // bool | Only include tasks which have a candidate user. Value may only be `true`, as `false` is the default behavior.
$without_candidate_users = false; // bool | Only include tasks which have no candidate users. Value may only be `true`, as `false` is the default behavior.
$active = false; // bool | Only include active tasks. Value may only be `true`, as `false` is the default behavior.
$suspended = false; // bool | Only include suspended tasks. Value may only be `true`, as `false` is the default behavior.
$task_variables = "task_variables_example"; // string | Only include tasks that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value.  **Note**: Values are always treated as String objects on server side.  Valid `operator` values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`. `key` and `value` may not contain underscore or comma characters.
$process_variables = "process_variables_example"; // string | Only include tasks that belong to process instances that have variables with certain  values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value.  **Note**: Values are always treated as String objects on server side.  Valid `operator` values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`; `notLike`. `key` and `value` may not contain underscore or comma characters.
$case_instance_variables = "case_instance_variables_example"; // string | Only include tasks that belong to case instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value.  **Note**: Values are always treated as String objects on server side.  Valid `operator` values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`. `key` and `value` may not contain underscore or comma characters.
$variable_names_ignore_case = false; // bool | Match all variable names in this query case-insensitively. If set `variableName` and `variablename` are treated as equal.
$variable_values_ignore_case = false; // bool | Match all variable values in this query case-insensitively. If set `variableValue` and `variablevalue` are treated as equal.
$parent_task_id = "parent_task_id_example"; // string | Restrict query to all tasks that are sub tasks of the given task. Takes a task id.
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getTasks($task_id, $task_id_in, $process_instance_id, $process_instance_id_in, $process_instance_business_key, $process_instance_business_key_expression, $process_instance_business_key_in, $process_instance_business_key_like, $process_instance_business_key_like_expression, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_name, $process_definition_name_like, $execution_id, $case_instance_id, $case_instance_business_key, $case_instance_business_key_like, $case_definition_id, $case_definition_key, $case_definition_name, $case_definition_name_like, $case_execution_id, $activity_instance_id_in, $tenant_id_in, $without_tenant_id, $assignee, $assignee_expression, $assignee_like, $assignee_like_expression, $assignee_in, $assignee_not_in, $owner, $owner_expression, $candidate_group, $candidate_group_expression, $candidate_user, $candidate_user_expression, $include_assigned_tasks, $involved_user, $involved_user_expression, $assigned, $unassigned, $task_definition_key, $task_definition_key_in, $task_definition_key_like, $name, $name_not_equal, $name_like, $name_not_like, $description, $description_like, $priority, $max_priority, $min_priority, $due_date, $due_date_expression, $due_after, $due_after_expression, $due_before, $due_before_expression, $without_due_date, $follow_up_date, $follow_up_date_expression, $follow_up_after, $follow_up_after_expression, $follow_up_before, $follow_up_before_expression, $follow_up_before_or_not_existent, $follow_up_before_or_not_existent_expression, $created_on, $created_on_expression, $created_after, $created_after_expression, $created_before, $created_before_expression, $updated_after, $updated_after_expression, $delegation_state, $candidate_groups, $candidate_groups_expression, $with_candidate_groups, $without_candidate_groups, $with_candidate_users, $without_candidate_users, $active, $suspended, $task_variables, $process_variables, $case_instance_variables, $variable_names_ignore_case, $variable_values_ignore_case, $parent_task_id, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Restrict to task with the given id. | [optional]
 **task_id_in** | **string**| Restrict to tasks with any of the given ids. | [optional]
 **process_instance_id** | **string**| Restrict to tasks that belong to process instances with the given id. | [optional]
 **process_instance_id_in** | **string**| Restrict to tasks that belong to process instances with the given ids. | [optional]
 **process_instance_business_key** | **string**| Restrict to tasks that belong to process instances with the given business key. | [optional]
 **process_instance_business_key_expression** | **string**| Restrict to tasks that belong to process instances with the given business key which  is described by an expression. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. | [optional]
 **process_instance_business_key_in** | **string**| Restrict to tasks that belong to process instances with one of the give business keys.  The keys need to be in a comma-separated list. | [optional]
 **process_instance_business_key_like** | **string**| Restrict to tasks that have a process instance business key that has the parameter  value as a substring. | [optional]
 **process_instance_business_key_like_expression** | **string**| Restrict to tasks that have a process instance business key that has the parameter  value as a substring and is described by an expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional]
 **process_definition_id** | **string**| Restrict to tasks that belong to a process definition with the given id. | [optional]
 **process_definition_key** | **string**| Restrict to tasks that belong to a process definition with the given key. | [optional]
 **process_definition_key_in** | **string**| Restrict to tasks that belong to a process definition with one of the given keys. The  keys need to be in a comma-separated list. | [optional]
 **process_definition_name** | **string**| Restrict to tasks that belong to a process definition with the given name. | [optional]
 **process_definition_name_like** | **string**| Restrict to tasks that have a process definition name that has the parameter value as  a substring. | [optional]
 **execution_id** | **string**| Restrict to tasks that belong to an execution with the given id. | [optional]
 **case_instance_id** | **string**| Restrict to tasks that belong to case instances with the given id. | [optional]
 **case_instance_business_key** | **string**| Restrict to tasks that belong to case instances with the given business key. | [optional]
 **case_instance_business_key_like** | **string**| Restrict to tasks that have a case instance business key that has the parameter value  as a substring. | [optional]
 **case_definition_id** | **string**| Restrict to tasks that belong to a case definition with the given id. | [optional]
 **case_definition_key** | **string**| Restrict to tasks that belong to a case definition with the given key. | [optional]
 **case_definition_name** | **string**| Restrict to tasks that belong to a case definition with the given name. | [optional]
 **case_definition_name_like** | **string**| Restrict to tasks that have a case definition name that has the parameter value as a  substring. | [optional]
 **case_execution_id** | **string**| Restrict to tasks that belong to a case execution with the given id. | [optional]
 **activity_instance_id_in** | **string**| Only include tasks which belong to one of the passed and comma-separated activity  instance ids. | [optional]
 **tenant_id_in** | **string**| Only include tasks which belong to one of the passed and comma-separated  tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include tasks which belong to no tenant. Value may only be &#x60;true&#x60;,  as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **assignee** | **string**| Restrict to tasks that the given user is assigned to. | [optional]
 **assignee_expression** | **string**| Restrict to tasks that the user described by the given expression is assigned to.  See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional]
 **assignee_like** | **string**| Restrict to tasks that have an assignee that has the parameter  value as a substring. | [optional]
 **assignee_like_expression** | **string**| Restrict to tasks that have an assignee that has the parameter value described by the  given expression as a substring. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional]
 **assignee_in** | **string**| Only include tasks which are assigned to one of the passed and  comma-separated user ids. | [optional]
 **assignee_not_in** | **string**| Only include tasks which are not assigned to one of the passed and comma-separated user ids. | [optional]
 **owner** | **string**| Restrict to tasks that the given user owns. | [optional]
 **owner_expression** | **string**| Restrict to tasks that the user described by the given expression owns. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional]
 **candidate_group** | **string**| Only include tasks that are offered to the given group. | [optional]
 **candidate_group_expression** | **string**| Only include tasks that are offered to the group described by the given expression.  See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional]
 **candidate_user** | **string**| Only include tasks that are offered to the given user or to one of his groups. | [optional]
 **candidate_user_expression** | **string**| Only include tasks that are offered to the user described by the given expression.  See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional]
 **include_assigned_tasks** | **bool**| Also include tasks that are assigned to users in candidate queries. Default is to only  include tasks that are not assigned to any user if you query by candidate user or group(s). | [optional] [default to false]
 **involved_user** | **string**| Only include tasks that the given user is involved in. A user is involved in a task if  an identity link exists between task and user (e.g., the user is the assignee). | [optional]
 **involved_user_expression** | **string**| Only include tasks that the user described by the given expression is involved in. A user is involved in a task if an identity link exists between task and user (e.g., the user is the assignee). See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. | [optional]
 **assigned** | **bool**| If set to &#x60;true&#x60;, restricts the query to all tasks that are assigned. | [optional] [default to false]
 **unassigned** | **bool**| If set to &#x60;true&#x60;, restricts the query to all tasks that are unassigned. | [optional] [default to false]
 **task_definition_key** | **string**| Restrict to tasks that have the given key. | [optional]
 **task_definition_key_in** | **string**| Restrict to tasks that have one of the given keys. The keys need to be in a comma-separated list. | [optional]
 **task_definition_key_like** | **string**| Restrict to tasks that have a key that has the parameter value as a substring. | [optional]
 **name** | **string**| Restrict to tasks that have the given name. | [optional]
 **name_not_equal** | **string**| Restrict to tasks that do not have the given name. | [optional]
 **name_like** | **string**| Restrict to tasks that have a name with the given parameter value as substring. | [optional]
 **name_not_like** | **string**| Restrict to tasks that do not have a name with the given parameter value as substring. | [optional]
 **description** | **string**| Restrict to tasks that have the given description. | [optional]
 **description_like** | **string**| Restrict to tasks that have a description that has the parameter value as a substring. | [optional]
 **priority** | **int**| Restrict to tasks that have the given priority. | [optional]
 **max_priority** | **int**| Restrict to tasks that have a lower or equal priority. | [optional]
 **min_priority** | **int**| Restrict to tasks that have a higher or equal priority. | [optional]
 **due_date** | **string**| Restrict to tasks that are due on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.546+0200&#x60;. | [optional]
 **due_date_expression** | **string**| Restrict to tasks that are due on the date described by the given expression. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **due_after** | **string**| Restrict to tasks that are due after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.435+0200&#x60;. | [optional]
 **due_after_expression** | **string**| Restrict to tasks that are due after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **due_before** | **string**| Restrict to tasks that are due before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.243+0200&#x60;. | [optional]
 **due_before_expression** | **string**| Restrict to tasks that are due before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **without_due_date** | **bool**| Only include tasks which have no due date. Value may only be &#x60;true&#x60;,  as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **follow_up_date** | **string**| Restrict to tasks that have a followUp date on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.342+0200&#x60;. | [optional]
 **follow_up_date_expression** | **string**| Restrict to tasks that have a followUp date on the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **follow_up_after** | **string**| Restrict to tasks that have a followUp date after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.542+0200&#x60;. | [optional]
 **follow_up_after_expression** | **string**| Restrict to tasks that have a followUp date after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **follow_up_before** | **string**| Restrict to tasks that have a followUp date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.234+0200&#x60;. | [optional]
 **follow_up_before_expression** | **string**| Restrict to tasks that have a followUp date before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **follow_up_before_or_not_existent** | **string**| Restrict to tasks that have no followUp date or a followUp date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.432+0200&#x60;. The typical use case is to query all &#x60;active&#x60; tasks for a user for a given date. | [optional]
 **follow_up_before_or_not_existent_expression** | **string**| Restrict to tasks that have no followUp date or a followUp date before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **created_on** | **string**| Restrict to tasks that were created on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.324+0200&#x60;. | [optional]
 **created_on_expression** | **string**| Restrict to tasks that were created on the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **created_after** | **string**| Restrict to tasks that were created after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.342+0200&#x60;. | [optional]
 **created_after_expression** | **string**| Restrict to tasks that were created after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **created_before** | **string**| Restrict to tasks that were created before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.332+0200&#x60;. | [optional]
 **created_before_expression** | **string**| Restrict to tasks that were created before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **updated_after** | **string**| Restrict to tasks that were updated after the given date. Every action that fires  a [task update event](https://docs.camunda.org/manual/7.21/user-guide/process-engine/delegation-code/#task-listener-event-lifecycle) is considered as updating the task. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.332+0200&#x60;. | [optional]
 **updated_after_expression** | **string**| Restrict to tasks that were updated after the date described by the given expression. Every action that fires  a [task update event](https://docs.camunda.org/manual/7.21/user-guide/process-engine/delegation-code/#task-listener-event-lifecycle) is considered as updating the task. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **delegation_state** | **string**| Restrict to tasks that are in the given delegation state. Valid values are &#x60;PENDING&#x60; and &#x60;RESOLVED&#x60;. | [optional]
 **candidate_groups** | **string**| Restrict to tasks that are offered to any of the given candidate groups. Takes a comma-separated list of group names, so for example &#x60;developers,support,sales&#x60;. | [optional]
 **candidate_groups_expression** | **string**| Restrict to tasks that are offered to any of the candidate groups described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to &#x60;java.util.List&#x60; of Strings. | [optional]
 **with_candidate_groups** | **bool**| Only include tasks which have a candidate group. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **without_candidate_groups** | **bool**| Only include tasks which have no candidate group. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **with_candidate_users** | **bool**| Only include tasks which have a candidate user. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **without_candidate_users** | **bool**| Only include tasks which have no candidate users. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **active** | **bool**| Only include active tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **suspended** | **bool**| Only include suspended tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **task_variables** | **string**| Only include tasks that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value.  **Note**: Values are always treated as String objects on server side.  Valid &#x60;operator&#x60; values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **process_variables** | **string**| Only include tasks that belong to process instances that have variables with certain  values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value.  **Note**: Values are always treated as String objects on server side.  Valid &#x60;operator&#x60; values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;; &#x60;notLike&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **case_instance_variables** | **string**| Only include tasks that belong to case instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value.  **Note**: Values are always treated as String objects on server side.  Valid &#x60;operator&#x60; values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **variable_names_ignore_case** | **bool**| Match all variable names in this query case-insensitively. If set &#x60;variableName&#x60; and &#x60;variablename&#x60; are treated as equal. | [optional] [default to false]
 **variable_values_ignore_case** | **bool**| Match all variable values in this query case-insensitively. If set &#x60;variableValue&#x60; and &#x60;variablevalue&#x60; are treated as equal. | [optional] [default to false]
 **parent_task_id** | **string**| Restrict query to all tasks that are sub tasks of the given task. Takes a task id. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Camunda\Client\Model\TaskDto[]**](../Model/TaskDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasksCount**
> \Camunda\Client\Model\CountResultDto getTasksCount($task_id, $task_id_in, $process_instance_id, $process_instance_id_in, $process_instance_business_key, $process_instance_business_key_expression, $process_instance_business_key_in, $process_instance_business_key_like, $process_instance_business_key_like_expression, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_name, $process_definition_name_like, $execution_id, $case_instance_id, $case_instance_business_key, $case_instance_business_key_like, $case_definition_id, $case_definition_key, $case_definition_name, $case_definition_name_like, $case_execution_id, $activity_instance_id_in, $tenant_id_in, $without_tenant_id, $assignee, $assignee_expression, $assignee_like, $assignee_like_expression, $assignee_in, $assignee_not_in, $owner, $owner_expression, $candidate_group, $candidate_group_expression, $candidate_user, $candidate_user_expression, $include_assigned_tasks, $involved_user, $involved_user_expression, $assigned, $unassigned, $task_definition_key, $task_definition_key_in, $task_definition_key_like, $name, $name_not_equal, $name_like, $name_not_like, $description, $description_like, $priority, $max_priority, $min_priority, $due_date, $due_date_expression, $due_after, $due_after_expression, $due_before, $due_before_expression, $without_due_date, $follow_up_date, $follow_up_date_expression, $follow_up_after, $follow_up_after_expression, $follow_up_before, $follow_up_before_expression, $follow_up_before_or_not_existent, $follow_up_before_or_not_existent_expression, $created_on, $created_on_expression, $created_after, $created_after_expression, $created_before, $created_before_expression, $updated_after, $updated_after_expression, $delegation_state, $candidate_groups, $candidate_groups_expression, $with_candidate_groups, $without_candidate_groups, $with_candidate_users, $without_candidate_users, $active, $suspended, $task_variables, $process_variables, $case_instance_variables, $variable_names_ignore_case, $variable_values_ignore_case, $parent_task_id)

Get List Count

Retrieves the number of tasks that fulfill a provided filter. Corresponds to the size of the result set when using the [Get Tasks](https://docs.camunda.org/manual/7.21/reference/rest/task/) method.  **Security Consideration:** There are several query parameters (such as assigneeExpression) for specifying an EL expression. These are disabled by default to prevent remote code execution. See the section on [security considerations](https://docs.camunda.org/manual/7.21/user-guide/process-engine/securing-custom-code/) for custom code in the user guide for details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = "task_id_example"; // string | Restrict to task with the given id.
$task_id_in = "task_id_in_example"; // string | Restrict to tasks with any of the given ids.
$process_instance_id = "process_instance_id_example"; // string | Restrict to tasks that belong to process instances with the given id.
$process_instance_id_in = "process_instance_id_in_example"; // string | Restrict to tasks that belong to process instances with the given ids.
$process_instance_business_key = "process_instance_business_key_example"; // string | Restrict to tasks that belong to process instances with the given business key.
$process_instance_business_key_expression = "process_instance_business_key_expression_example"; // string | Restrict to tasks that belong to process instances with the given business key which  is described by an expression. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions.
$process_instance_business_key_in = "process_instance_business_key_in_example"; // string | Restrict to tasks that belong to process instances with one of the give business keys.  The keys need to be in a comma-separated list.
$process_instance_business_key_like = "process_instance_business_key_like_example"; // string | Restrict to tasks that have a process instance business key that has the parameter  value as a substring.
$process_instance_business_key_like_expression = "process_instance_business_key_like_expression_example"; // string | Restrict to tasks that have a process instance business key that has the parameter  value as a substring and is described by an expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions.
$process_definition_id = "process_definition_id_example"; // string | Restrict to tasks that belong to a process definition with the given id.
$process_definition_key = "process_definition_key_example"; // string | Restrict to tasks that belong to a process definition with the given key.
$process_definition_key_in = "process_definition_key_in_example"; // string | Restrict to tasks that belong to a process definition with one of the given keys. The  keys need to be in a comma-separated list.
$process_definition_name = "process_definition_name_example"; // string | Restrict to tasks that belong to a process definition with the given name.
$process_definition_name_like = "process_definition_name_like_example"; // string | Restrict to tasks that have a process definition name that has the parameter value as  a substring.
$execution_id = "execution_id_example"; // string | Restrict to tasks that belong to an execution with the given id.
$case_instance_id = "case_instance_id_example"; // string | Restrict to tasks that belong to case instances with the given id.
$case_instance_business_key = "case_instance_business_key_example"; // string | Restrict to tasks that belong to case instances with the given business key.
$case_instance_business_key_like = "case_instance_business_key_like_example"; // string | Restrict to tasks that have a case instance business key that has the parameter value  as a substring.
$case_definition_id = "case_definition_id_example"; // string | Restrict to tasks that belong to a case definition with the given id.
$case_definition_key = "case_definition_key_example"; // string | Restrict to tasks that belong to a case definition with the given key.
$case_definition_name = "case_definition_name_example"; // string | Restrict to tasks that belong to a case definition with the given name.
$case_definition_name_like = "case_definition_name_like_example"; // string | Restrict to tasks that have a case definition name that has the parameter value as a  substring.
$case_execution_id = "case_execution_id_example"; // string | Restrict to tasks that belong to a case execution with the given id.
$activity_instance_id_in = "activity_instance_id_in_example"; // string | Only include tasks which belong to one of the passed and comma-separated activity  instance ids.
$tenant_id_in = "tenant_id_in_example"; // string | Only include tasks which belong to one of the passed and comma-separated  tenant ids.
$without_tenant_id = false; // bool | Only include tasks which belong to no tenant. Value may only be `true`,  as `false` is the default behavior.
$assignee = "assignee_example"; // string | Restrict to tasks that the given user is assigned to.
$assignee_expression = "assignee_expression_example"; // string | Restrict to tasks that the user described by the given expression is assigned to.  See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions.
$assignee_like = "assignee_like_example"; // string | Restrict to tasks that have an assignee that has the parameter  value as a substring.
$assignee_like_expression = "assignee_like_expression_example"; // string | Restrict to tasks that have an assignee that has the parameter value described by the  given expression as a substring. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions.
$assignee_in = "assignee_in_example"; // string | Only include tasks which are assigned to one of the passed and  comma-separated user ids.
$assignee_not_in = "assignee_not_in_example"; // string | Only include tasks which are not assigned to one of the passed and comma-separated user ids.
$owner = "owner_example"; // string | Restrict to tasks that the given user owns.
$owner_expression = "owner_expression_example"; // string | Restrict to tasks that the user described by the given expression owns. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions.
$candidate_group = "candidate_group_example"; // string | Only include tasks that are offered to the given group.
$candidate_group_expression = "candidate_group_expression_example"; // string | Only include tasks that are offered to the group described by the given expression.  See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions.
$candidate_user = "candidate_user_example"; // string | Only include tasks that are offered to the given user or to one of his groups.
$candidate_user_expression = "candidate_user_expression_example"; // string | Only include tasks that are offered to the user described by the given expression.  See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions.
$include_assigned_tasks = false; // bool | Also include tasks that are assigned to users in candidate queries. Default is to only  include tasks that are not assigned to any user if you query by candidate user or group(s).
$involved_user = "involved_user_example"; // string | Only include tasks that the given user is involved in. A user is involved in a task if  an identity link exists between task and user (e.g., the user is the assignee).
$involved_user_expression = "involved_user_expression_example"; // string | Only include tasks that the user described by the given expression is involved in. A user is involved in a task if an identity link exists between task and user (e.g., the user is the assignee). See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions.
$assigned = false; // bool | If set to `true`, restricts the query to all tasks that are assigned.
$unassigned = false; // bool | If set to `true`, restricts the query to all tasks that are unassigned.
$task_definition_key = "task_definition_key_example"; // string | Restrict to tasks that have the given key.
$task_definition_key_in = "task_definition_key_in_example"; // string | Restrict to tasks that have one of the given keys. The keys need to be in a comma-separated list.
$task_definition_key_like = "task_definition_key_like_example"; // string | Restrict to tasks that have a key that has the parameter value as a substring.
$name = "name_example"; // string | Restrict to tasks that have the given name.
$name_not_equal = "name_not_equal_example"; // string | Restrict to tasks that do not have the given name.
$name_like = "name_like_example"; // string | Restrict to tasks that have a name with the given parameter value as substring.
$name_not_like = "name_not_like_example"; // string | Restrict to tasks that do not have a name with the given parameter value as substring.
$description = "description_example"; // string | Restrict to tasks that have the given description.
$description_like = "description_like_example"; // string | Restrict to tasks that have a description that has the parameter value as a substring.
$priority = 56; // int | Restrict to tasks that have the given priority.
$max_priority = 56; // int | Restrict to tasks that have a lower or equal priority.
$min_priority = 56; // int | Restrict to tasks that have a higher or equal priority.
$due_date = "due_date_example"; // string | Restrict to tasks that are due on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.546+0200`.
$due_date_expression = "due_date_expression_example"; // string | Restrict to tasks that are due on the date described by the given expression. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$due_after = "due_after_example"; // string | Restrict to tasks that are due after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.435+0200`.
$due_after_expression = "due_after_expression_example"; // string | Restrict to tasks that are due after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$due_before = "due_before_example"; // string | Restrict to tasks that are due before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.243+0200`.
$due_before_expression = "due_before_expression_example"; // string | Restrict to tasks that are due before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$without_due_date = false; // bool | Only include tasks which have no due date. Value may only be `true`,  as `false` is the default behavior.
$follow_up_date = "follow_up_date_example"; // string | Restrict to tasks that have a followUp date on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.342+0200`.
$follow_up_date_expression = "follow_up_date_expression_example"; // string | Restrict to tasks that have a followUp date on the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$follow_up_after = "follow_up_after_example"; // string | Restrict to tasks that have a followUp date after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.542+0200`.
$follow_up_after_expression = "follow_up_after_expression_example"; // string | Restrict to tasks that have a followUp date after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$follow_up_before = "follow_up_before_example"; // string | Restrict to tasks that have a followUp date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.234+0200`.
$follow_up_before_expression = "follow_up_before_expression_example"; // string | Restrict to tasks that have a followUp date before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$follow_up_before_or_not_existent = "follow_up_before_or_not_existent_example"; // string | Restrict to tasks that have no followUp date or a followUp date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.432+0200`. The typical use case is to query all `active` tasks for a user for a given date.
$follow_up_before_or_not_existent_expression = "follow_up_before_or_not_existent_expression_example"; // string | Restrict to tasks that have no followUp date or a followUp date before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$created_on = "created_on_example"; // string | Restrict to tasks that were created on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.324+0200`.
$created_on_expression = "created_on_expression_example"; // string | Restrict to tasks that were created on the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$created_after = "created_after_example"; // string | Restrict to tasks that were created after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.342+0200`.
$created_after_expression = "created_after_expression_example"; // string | Restrict to tasks that were created after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$created_before = "created_before_example"; // string | Restrict to tasks that were created before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.332+0200`.
$created_before_expression = "created_before_expression_example"; // string | Restrict to tasks that were created before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$updated_after = "updated_after_example"; // string | Restrict to tasks that were updated after the given date. Every action that fires  a [task update event](https://docs.camunda.org/manual/7.21/user-guide/process-engine/delegation-code/#task-listener-event-lifecycle) is considered as updating the task. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.332+0200`.
$updated_after_expression = "updated_after_expression_example"; // string | Restrict to tasks that were updated after the date described by the given expression. Every action that fires  a [task update event](https://docs.camunda.org/manual/7.21/user-guide/process-engine/delegation-code/#task-listener-event-lifecycle) is considered as updating the task. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a `java.util.Date` or `org.joda.time.DateTime` object.
$delegation_state = "delegation_state_example"; // string | Restrict to tasks that are in the given delegation state. Valid values are `PENDING` and `RESOLVED`.
$candidate_groups = "candidate_groups_example"; // string | Restrict to tasks that are offered to any of the given candidate groups. Takes a comma-separated list of group names, so for example `developers,support,sales`.
$candidate_groups_expression = "candidate_groups_expression_example"; // string | Restrict to tasks that are offered to any of the candidate groups described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to `java.util.List` of Strings.
$with_candidate_groups = false; // bool | Only include tasks which have a candidate group. Value may only be `true`, as `false` is the default behavior.
$without_candidate_groups = false; // bool | Only include tasks which have no candidate group. Value may only be `true`, as `false` is the default behavior.
$with_candidate_users = false; // bool | Only include tasks which have a candidate user. Value may only be `true`, as `false` is the default behavior.
$without_candidate_users = false; // bool | Only include tasks which have no candidate users. Value may only be `true`, as `false` is the default behavior.
$active = false; // bool | Only include active tasks. Value may only be `true`, as `false` is the default behavior.
$suspended = false; // bool | Only include suspended tasks. Value may only be `true`, as `false` is the default behavior.
$task_variables = "task_variables_example"; // string | Only include tasks that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value.  **Note**: Values are always treated as String objects on server side.  Valid `operator` values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`. `key` and `value` may not contain underscore or comma characters.
$process_variables = "process_variables_example"; // string | Only include tasks that belong to process instances that have variables with certain  values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value.  **Note**: Values are always treated as String objects on server side.  Valid `operator` values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`; `notLike`. `key` and `value` may not contain underscore or comma characters.
$case_instance_variables = "case_instance_variables_example"; // string | Only include tasks that belong to case instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value.  **Note**: Values are always treated as String objects on server side.  Valid `operator` values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`. `key` and `value` may not contain underscore or comma characters.
$variable_names_ignore_case = false; // bool | Match all variable names in this query case-insensitively. If set `variableName` and `variablename` are treated as equal.
$variable_values_ignore_case = false; // bool | Match all variable values in this query case-insensitively. If set `variableValue` and `variablevalue` are treated as equal.
$parent_task_id = "parent_task_id_example"; // string | Restrict query to all tasks that are sub tasks of the given task. Takes a task id.

try {
    $result = $apiInstance->getTasksCount($task_id, $task_id_in, $process_instance_id, $process_instance_id_in, $process_instance_business_key, $process_instance_business_key_expression, $process_instance_business_key_in, $process_instance_business_key_like, $process_instance_business_key_like_expression, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_name, $process_definition_name_like, $execution_id, $case_instance_id, $case_instance_business_key, $case_instance_business_key_like, $case_definition_id, $case_definition_key, $case_definition_name, $case_definition_name_like, $case_execution_id, $activity_instance_id_in, $tenant_id_in, $without_tenant_id, $assignee, $assignee_expression, $assignee_like, $assignee_like_expression, $assignee_in, $assignee_not_in, $owner, $owner_expression, $candidate_group, $candidate_group_expression, $candidate_user, $candidate_user_expression, $include_assigned_tasks, $involved_user, $involved_user_expression, $assigned, $unassigned, $task_definition_key, $task_definition_key_in, $task_definition_key_like, $name, $name_not_equal, $name_like, $name_not_like, $description, $description_like, $priority, $max_priority, $min_priority, $due_date, $due_date_expression, $due_after, $due_after_expression, $due_before, $due_before_expression, $without_due_date, $follow_up_date, $follow_up_date_expression, $follow_up_after, $follow_up_after_expression, $follow_up_before, $follow_up_before_expression, $follow_up_before_or_not_existent, $follow_up_before_or_not_existent_expression, $created_on, $created_on_expression, $created_after, $created_after_expression, $created_before, $created_before_expression, $updated_after, $updated_after_expression, $delegation_state, $candidate_groups, $candidate_groups_expression, $with_candidate_groups, $without_candidate_groups, $with_candidate_users, $without_candidate_users, $active, $suspended, $task_variables, $process_variables, $case_instance_variables, $variable_names_ignore_case, $variable_values_ignore_case, $parent_task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTasksCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Restrict to task with the given id. | [optional]
 **task_id_in** | **string**| Restrict to tasks with any of the given ids. | [optional]
 **process_instance_id** | **string**| Restrict to tasks that belong to process instances with the given id. | [optional]
 **process_instance_id_in** | **string**| Restrict to tasks that belong to process instances with the given ids. | [optional]
 **process_instance_business_key** | **string**| Restrict to tasks that belong to process instances with the given business key. | [optional]
 **process_instance_business_key_expression** | **string**| Restrict to tasks that belong to process instances with the given business key which  is described by an expression. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. | [optional]
 **process_instance_business_key_in** | **string**| Restrict to tasks that belong to process instances with one of the give business keys.  The keys need to be in a comma-separated list. | [optional]
 **process_instance_business_key_like** | **string**| Restrict to tasks that have a process instance business key that has the parameter  value as a substring. | [optional]
 **process_instance_business_key_like_expression** | **string**| Restrict to tasks that have a process instance business key that has the parameter  value as a substring and is described by an expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional]
 **process_definition_id** | **string**| Restrict to tasks that belong to a process definition with the given id. | [optional]
 **process_definition_key** | **string**| Restrict to tasks that belong to a process definition with the given key. | [optional]
 **process_definition_key_in** | **string**| Restrict to tasks that belong to a process definition with one of the given keys. The  keys need to be in a comma-separated list. | [optional]
 **process_definition_name** | **string**| Restrict to tasks that belong to a process definition with the given name. | [optional]
 **process_definition_name_like** | **string**| Restrict to tasks that have a process definition name that has the parameter value as  a substring. | [optional]
 **execution_id** | **string**| Restrict to tasks that belong to an execution with the given id. | [optional]
 **case_instance_id** | **string**| Restrict to tasks that belong to case instances with the given id. | [optional]
 **case_instance_business_key** | **string**| Restrict to tasks that belong to case instances with the given business key. | [optional]
 **case_instance_business_key_like** | **string**| Restrict to tasks that have a case instance business key that has the parameter value  as a substring. | [optional]
 **case_definition_id** | **string**| Restrict to tasks that belong to a case definition with the given id. | [optional]
 **case_definition_key** | **string**| Restrict to tasks that belong to a case definition with the given key. | [optional]
 **case_definition_name** | **string**| Restrict to tasks that belong to a case definition with the given name. | [optional]
 **case_definition_name_like** | **string**| Restrict to tasks that have a case definition name that has the parameter value as a  substring. | [optional]
 **case_execution_id** | **string**| Restrict to tasks that belong to a case execution with the given id. | [optional]
 **activity_instance_id_in** | **string**| Only include tasks which belong to one of the passed and comma-separated activity  instance ids. | [optional]
 **tenant_id_in** | **string**| Only include tasks which belong to one of the passed and comma-separated  tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include tasks which belong to no tenant. Value may only be &#x60;true&#x60;,  as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **assignee** | **string**| Restrict to tasks that the given user is assigned to. | [optional]
 **assignee_expression** | **string**| Restrict to tasks that the user described by the given expression is assigned to.  See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional]
 **assignee_like** | **string**| Restrict to tasks that have an assignee that has the parameter  value as a substring. | [optional]
 **assignee_like_expression** | **string**| Restrict to tasks that have an assignee that has the parameter value described by the  given expression as a substring. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional]
 **assignee_in** | **string**| Only include tasks which are assigned to one of the passed and  comma-separated user ids. | [optional]
 **assignee_not_in** | **string**| Only include tasks which are not assigned to one of the passed and comma-separated user ids. | [optional]
 **owner** | **string**| Restrict to tasks that the given user owns. | [optional]
 **owner_expression** | **string**| Restrict to tasks that the user described by the given expression owns. See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional]
 **candidate_group** | **string**| Only include tasks that are offered to the given group. | [optional]
 **candidate_group_expression** | **string**| Only include tasks that are offered to the group described by the given expression.  See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional]
 **candidate_user** | **string**| Only include tasks that are offered to the given user or to one of his groups. | [optional]
 **candidate_user_expression** | **string**| Only include tasks that are offered to the user described by the given expression.  See the  [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions)  for more information on available functions. | [optional]
 **include_assigned_tasks** | **bool**| Also include tasks that are assigned to users in candidate queries. Default is to only  include tasks that are not assigned to any user if you query by candidate user or group(s). | [optional] [default to false]
 **involved_user** | **string**| Only include tasks that the given user is involved in. A user is involved in a task if  an identity link exists between task and user (e.g., the user is the assignee). | [optional]
 **involved_user_expression** | **string**| Only include tasks that the user described by the given expression is involved in. A user is involved in a task if an identity link exists between task and user (e.g., the user is the assignee). See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. | [optional]
 **assigned** | **bool**| If set to &#x60;true&#x60;, restricts the query to all tasks that are assigned. | [optional] [default to false]
 **unassigned** | **bool**| If set to &#x60;true&#x60;, restricts the query to all tasks that are unassigned. | [optional] [default to false]
 **task_definition_key** | **string**| Restrict to tasks that have the given key. | [optional]
 **task_definition_key_in** | **string**| Restrict to tasks that have one of the given keys. The keys need to be in a comma-separated list. | [optional]
 **task_definition_key_like** | **string**| Restrict to tasks that have a key that has the parameter value as a substring. | [optional]
 **name** | **string**| Restrict to tasks that have the given name. | [optional]
 **name_not_equal** | **string**| Restrict to tasks that do not have the given name. | [optional]
 **name_like** | **string**| Restrict to tasks that have a name with the given parameter value as substring. | [optional]
 **name_not_like** | **string**| Restrict to tasks that do not have a name with the given parameter value as substring. | [optional]
 **description** | **string**| Restrict to tasks that have the given description. | [optional]
 **description_like** | **string**| Restrict to tasks that have a description that has the parameter value as a substring. | [optional]
 **priority** | **int**| Restrict to tasks that have the given priority. | [optional]
 **max_priority** | **int**| Restrict to tasks that have a lower or equal priority. | [optional]
 **min_priority** | **int**| Restrict to tasks that have a higher or equal priority. | [optional]
 **due_date** | **string**| Restrict to tasks that are due on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.546+0200&#x60;. | [optional]
 **due_date_expression** | **string**| Restrict to tasks that are due on the date described by the given expression. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **due_after** | **string**| Restrict to tasks that are due after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.435+0200&#x60;. | [optional]
 **due_after_expression** | **string**| Restrict to tasks that are due after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **due_before** | **string**| Restrict to tasks that are due before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.243+0200&#x60;. | [optional]
 **due_before_expression** | **string**| Restrict to tasks that are due before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **without_due_date** | **bool**| Only include tasks which have no due date. Value may only be &#x60;true&#x60;,  as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **follow_up_date** | **string**| Restrict to tasks that have a followUp date on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.342+0200&#x60;. | [optional]
 **follow_up_date_expression** | **string**| Restrict to tasks that have a followUp date on the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **follow_up_after** | **string**| Restrict to tasks that have a followUp date after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.542+0200&#x60;. | [optional]
 **follow_up_after_expression** | **string**| Restrict to tasks that have a followUp date after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **follow_up_before** | **string**| Restrict to tasks that have a followUp date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.234+0200&#x60;. | [optional]
 **follow_up_before_expression** | **string**| Restrict to tasks that have a followUp date before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **follow_up_before_or_not_existent** | **string**| Restrict to tasks that have no followUp date or a followUp date before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.432+0200&#x60;. The typical use case is to query all &#x60;active&#x60; tasks for a user for a given date. | [optional]
 **follow_up_before_or_not_existent_expression** | **string**| Restrict to tasks that have no followUp date or a followUp date before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **created_on** | **string**| Restrict to tasks that were created on the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.324+0200&#x60;. | [optional]
 **created_on_expression** | **string**| Restrict to tasks that were created on the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **created_after** | **string**| Restrict to tasks that were created after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.342+0200&#x60;. | [optional]
 **created_after_expression** | **string**| Restrict to tasks that were created after the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **created_before** | **string**| Restrict to tasks that were created before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.332+0200&#x60;. | [optional]
 **created_before_expression** | **string**| Restrict to tasks that were created before the date described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **updated_after** | **string**| Restrict to tasks that were updated after the given date. Every action that fires  a [task update event](https://docs.camunda.org/manual/7.21/user-guide/process-engine/delegation-code/#task-listener-event-lifecycle) is considered as updating the task. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.332+0200&#x60;. | [optional]
 **updated_after_expression** | **string**| Restrict to tasks that were updated after the date described by the given expression. Every action that fires  a [task update event](https://docs.camunda.org/manual/7.21/user-guide/process-engine/delegation-code/#task-listener-event-lifecycle) is considered as updating the task. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to a &#x60;java.util.Date&#x60; or &#x60;org.joda.time.DateTime&#x60; object. | [optional]
 **delegation_state** | **string**| Restrict to tasks that are in the given delegation state. Valid values are &#x60;PENDING&#x60; and &#x60;RESOLVED&#x60;. | [optional]
 **candidate_groups** | **string**| Restrict to tasks that are offered to any of the given candidate groups. Takes a comma-separated list of group names, so for example &#x60;developers,support,sales&#x60;. | [optional]
 **candidate_groups_expression** | **string**| Restrict to tasks that are offered to any of the candidate groups described by the given expression. See the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/expression-language/#internal-context-functions) for more information on available functions. The expression must evaluate to &#x60;java.util.List&#x60; of Strings. | [optional]
 **with_candidate_groups** | **bool**| Only include tasks which have a candidate group. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **without_candidate_groups** | **bool**| Only include tasks which have no candidate group. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **with_candidate_users** | **bool**| Only include tasks which have a candidate user. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **without_candidate_users** | **bool**| Only include tasks which have no candidate users. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **active** | **bool**| Only include active tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **suspended** | **bool**| Only include suspended tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **task_variables** | **string**| Only include tasks that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value.  **Note**: Values are always treated as String objects on server side.  Valid &#x60;operator&#x60; values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **process_variables** | **string**| Only include tasks that belong to process instances that have variables with certain  values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value.  **Note**: Values are always treated as String objects on server side.  Valid &#x60;operator&#x60; values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;; &#x60;notLike&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **case_instance_variables** | **string**| Only include tasks that belong to case instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value.  **Note**: Values are always treated as String objects on server side.  Valid &#x60;operator&#x60; values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **variable_names_ignore_case** | **bool**| Match all variable names in this query case-insensitively. If set &#x60;variableName&#x60; and &#x60;variablename&#x60; are treated as equal. | [optional] [default to false]
 **variable_values_ignore_case** | **bool**| Match all variable values in this query case-insensitively. If set &#x60;variableValue&#x60; and &#x60;variablevalue&#x60; are treated as equal. | [optional] [default to false]
 **parent_task_id** | **string**| Restrict query to all tasks that are sub tasks of the given task. Takes a task id. | [optional]

### Return type

[**\Camunda\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **handleBpmnError**
> handleBpmnError($id, $body)

Handle BPMN Error

Reports a business error in the context of a running task by id. The error code must be specified to identify the BPMN error handler. See the documentation for [Reporting Bpmn Error](https://docs.camunda.org/manual/7.21/reference/bpmn20/tasks/user-task/#reporting-bpmn-error) in User Tasks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task a BPMN error is reported for.
$body = new \Camunda\Client\Model\TaskBpmnErrorDto(); // \Camunda\Client\Model\TaskBpmnErrorDto | 

try {
    $apiInstance->handleBpmnError($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->handleBpmnError: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task a BPMN error is reported for. |
 **body** | [**\Camunda\Client\Model\TaskBpmnErrorDto**](../Model/TaskBpmnErrorDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **handleEscalation**
> handleEscalation($id, $body)

Handle BPMN Escalation

Reports an escalation in the context of a running task by id. The escalation code must be specified to identify the escalation handler. See the documentation for [Reporting Bpmn Escalation](https://docs.camunda.org/manual/7.21/reference/bpmn20/tasks/user-task/#reporting-bpmn-escalation) in User Tasks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task in which context a BPMN escalation is reported.
$body = new \Camunda\Client\Model\TaskEscalationDto(); // \Camunda\Client\Model\TaskEscalationDto | 

try {
    $apiInstance->handleEscalation($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->handleEscalation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task in which context a BPMN escalation is reported. |
 **body** | [**\Camunda\Client\Model\TaskEscalationDto**](../Model/TaskEscalationDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryTasks**
> \Camunda\Client\Model\TaskDto[] queryTasks($body, $first_result, $max_results)

Get List (POST)

Queries for tasks that fulfill a given filter. This method is slightly more powerful than the [Get Tasks](https://docs.camunda.org/manual/7.21/reference/rest/task/get-query/) method because it allows filtering by multiple process or task variables of types `String`, `Number` or `Boolean`. The size of the result set can be retrieved by using the [Get Task Count (POST)](https://docs.camunda.org/manual/7.21/reference/rest/task/post-query-count/) method.  **Security Consideration**: There are several parameters (such as `assigneeExpression`) for specifying an EL expression. These are disabled by default to prevent remote code execution. See the section on [security considerations for custom code](https://docs.camunda.org/manual/7.21/user-guide/process-engine/securing-custom-code/) in the user guide for details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\TaskQueryDto(); // \Camunda\Client\Model\TaskQueryDto | 
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->queryTasks($body, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->queryTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\TaskQueryDto**](../Model/TaskQueryDto.md)|  | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Camunda\Client\Model\TaskDto[]**](../Model/TaskDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryTasksCount**
> \Camunda\Client\Model\CountResultDto queryTasksCount($body)

Get List Count (POST)

Retrieves the number of tasks that fulfill the given filter. Corresponds to the size of the result set of the [Get Tasks (POST)](https://docs.camunda.org/manual/7.21/reference/rest/task/post-query/) method and takes the same parameters.  **Security Consideration**: There are several parameters (such as `assigneeExpression`) for specifying an EL expression. These are disabled by default to prevent remote code execution. See the section on [security considerations for custom code](https://docs.camunda.org/manual/7.21/user-guide/process-engine/securing-custom-code/) in the user guide for details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\TaskQueryDto(); // \Camunda\Client\Model\TaskQueryDto | 

try {
    $result = $apiInstance->queryTasksCount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->queryTasksCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\TaskQueryDto**](../Model/TaskQueryDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolve**
> resolve($id, $body)

Resolve

Resolves a task and updates execution variables.  Resolving a task marks that the assignee is done with the task delegated to them, and that it can be sent back to the owner. Can only be executed when the task has been delegated. The assignee will be set to the owner, who performed the delegation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to resolve.
$body = new \Camunda\Client\Model\CompleteTaskDto(); // \Camunda\Client\Model\CompleteTaskDto | 

try {
    $apiInstance->resolve($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->resolve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to resolve. |
 **body** | [**\Camunda\Client\Model\CompleteTaskDto**](../Model/CompleteTaskDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAssignee**
> setAssignee($id, $body)

Set Assignee

Changes the assignee of a task to a specific user.  **Note:** The difference with the [Claim Task](https://docs.camunda.org/manual/7.21/reference/rest/task/post-claim/) method is that this method does not check if the task already has a user assigned to it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to set the assignee for.
$body = new \Camunda\Client\Model\UserIdDto(); // \Camunda\Client\Model\UserIdDto | Provide the id of the user that will be the assignee of the task.

try {
    $apiInstance->setAssignee($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->setAssignee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to set the assignee for. |
 **body** | [**\Camunda\Client\Model\UserIdDto**](../Model/UserIdDto.md)| Provide the id of the user that will be the assignee of the task. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submit**
> map[string,\Camunda\Client\Model\VariableValueDto] submit($id, $body)

Submit Form

Completes a task and updates process variables using a form submit. There are two difference between this method and the `complete` method:  * If the task is in state `PENDING` - i.e., has been delegated before, it is not completed but resolved. Otherwise it will be completed. * If the task has Form Field Metadata defined, the process engine will perform backend validation for any form fields which have validators defined. See the [Generated Task Forms](https://docs.camunda.org/manual/7.21/user-guide/task-forms/_index/#generated-task-forms) section of the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/) for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to submit the form for.
$body = new \Camunda\Client\Model\CompleteTaskDto(); // \Camunda\Client\Model\CompleteTaskDto | 

try {
    $result = $apiInstance->submit($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->submit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to submit the form for. |
 **body** | [**\Camunda\Client\Model\CompleteTaskDto**](../Model/CompleteTaskDto.md)|  | [optional]

### Return type

[**map[string,\Camunda\Client\Model\VariableValueDto]**](../Model/VariableValueDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unclaim**
> unclaim($id)

Unclaim

Resets a task's assignee. If successful, the task is not assigned to a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to unclaim.

try {
    $apiInstance->unclaim($id);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->unclaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to unclaim. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTask**
> updateTask($id, $body)

Update

Updates a task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to be updated.
$body = new \Camunda\Client\Model\TaskDto(); // \Camunda\Client\Model\TaskDto | 

try {
    $apiInstance->updateTask($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->updateTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to be updated. |
 **body** | [**\Camunda\Client\Model\TaskDto**](../Model/TaskDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

