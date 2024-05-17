# GroupQueryDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Filter by the id of the group. | [optional] 
**id_in** | **string[]** | Filter by a JSON string array of group ids. | [optional] 
**name** | **string** | Filter by the name of the group. | [optional] 
**name_like** | **string** | Filter by the name that the parameter is a substring of. | [optional] 
**type** | **string** | Filter by the type of the group. | [optional] 
**member** | **string** | Only retrieve groups where the given user id is a member of. | [optional] 
**member_of_tenant** | **string** | Only retrieve groups which are members of the given tenant. | [optional] 
**sorting** | [**\Camunda\Client\Model\GroupQueryDtoSorting[]**](GroupQueryDtoSorting.md) | Apply sorting of the result | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

