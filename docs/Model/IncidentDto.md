# IncidentDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the incident. | [optional] 
**process_definition_id** | **string** | The id of the process definition this incident is associated with. | [optional] 
**process_instance_id** | **string** | The id of the process instance this incident is associated with. | [optional] 
**execution_id** | **string** | The id of the execution this incident is associated with. | [optional] 
**incident_timestamp** | [**\DateTime**](\DateTime.md) | The time this incident happened. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional] 
**incident_type** | **string** | The type of incident, for example: &#x60;failedJobs&#x60; will be returned in case of an incident which identified a failed job during the execution of a process instance. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional] 
**activity_id** | **string** | The id of the activity this incident is associated with. | [optional] 
**failed_activity_id** | **string** | The id of the activity on which the last exception occurred. | [optional] 
**cause_incident_id** | **string** | The id of the associated cause incident which has been triggered. | [optional] 
**root_cause_incident_id** | **string** | The id of the associated root cause incident which has been triggered. | [optional] 
**configuration** | **string** | The payload of this incident. | [optional] 
**tenant_id** | **string** | The id of the tenant this incident is associated with. | [optional] 
**incident_message** | **string** | The message of this incident. | [optional] 
**job_definition_id** | **string** | The job definition id the incident is associated with. | [optional] 
**annotation** | **string** | The annotation set to the incident. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

