# HistoryCleanupConfigurationDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batch_window_start_time** | [**\DateTime**](\DateTime.md) | Start time of the current or next batch window. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional] 
**batch_window_end_time** | [**\DateTime**](\DateTime.md) | End time of the current or next batch window. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional] 
**enabled** | **bool** | Indicates whether the engine node participates in history cleanup or not. The default is &#x60;true&#x60;. Participation can be disabled via [Process Engine Configuration](https://docs.camunda.org/manual/7.21/reference/deployment-descriptors/tags/process-engine/#history-cleanup-enabled).  For more details, see [Cleanup Execution Participation per Node](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#cleanup-execution-participation-per-node). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

