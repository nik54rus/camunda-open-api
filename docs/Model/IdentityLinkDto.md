# IdentityLinkDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | The id of the user participating in this link. Either &#x60;userId&#x60; or &#x60;groupId&#x60; is set. | [optional] 
**group_id** | **string** | The id of the group participating in this link. Either &#x60;groupId&#x60; or &#x60;userId&#x60; is set. | [optional] 
**type** | **string** | The type of the identity link. The value of the this property can be user-defined. The Process Engine provides three pre-defined Identity Link &#x60;type&#x60;s:  * &#x60;candidate&#x60; * &#x60;assignee&#x60; - reserved for the task assignee * &#x60;owner&#x60; - reserved for the task owner  **Note**: When adding or removing an Identity Link, the &#x60;type&#x60; property must be defined. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

