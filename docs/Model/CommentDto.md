# CommentDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the task comment. | [optional] 
**user_id** | **string** | The id of the user who created the comment. | [optional] 
**task_id** | **string** | The id of the task to which the comment belongs. | [optional] 
**process_instance_id** | **string** | The id of the process instance the comment is related to. | [optional] 
**time** | [**\DateTime**](\DateTime.md) | The time when the comment was created. [Default format]($(docsUrl)/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;. | [optional] 
**message** | **string** | The content of the comment. | [optional] 
**removal_time** | [**\DateTime**](\DateTime.md) | The time after which the comment should be removed by the History Cleanup job. [Default format]($(docsUrl)/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;. | [optional] 
**root_process_instance_id** | **string** | The process instance id of the root process instance that initiated the process containing the task. | [optional] 
**links** | [**\Swagger\Client\Model\AtomLink[]**](AtomLink.md) | The links associated to this resource, with &#x60;method&#x60;, &#x60;href&#x60; and &#x60;rel&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

