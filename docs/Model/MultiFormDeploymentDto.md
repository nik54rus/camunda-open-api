# MultiFormDeploymentDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tenant_id** | **string** | The tenant id for the deployment to be created. | [optional] 
**deployment_source** | **string** | The source for the deployment to be created. | [optional] 
**deploy_changed_only** | **bool** | A flag indicating whether the process engine should perform duplicate checking on a per-resource basis. If set to true, only those resources that have actually changed are deployed. Checks are made against resources included previous deployments of the same name and only against the latest versions of those resources. If set to true, the option enable-duplicate-filtering is overridden and set to true. | [optional] [default to false]
**enable_duplicate_filtering** | **bool** | A flag indicating whether the process engine should perform duplicate checking for the deployment or not. This allows you to check if a deployment with the same name and the same resouces already exists and if true, not create a new deployment but instead return the existing deployment. The default value is false. | [optional] [default to false]
**deployment_name** | **string** | The name for the deployment to be created. | [optional] 
**deployment_activation_time** | [**\DateTime**](\DateTime.md) | Sets the date on which the process definitions contained in this deployment will be activated. This means that all process definitions will be deployed as usual, but they will be suspended from the start until the given activation date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional] 
**data** | **string** | The binary data to create the deployment resource. It is possible to have more than one form part with different form part names for the binary data to create a deployment. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

