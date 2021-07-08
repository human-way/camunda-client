# # AuthorizationUpdateDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**permissions** | **string[]** | An array of Strings holding the permissions provided by this authorization. | [optional]
**user_id** | **string** | The id of the user this authorization has been created for. The value &#x60;*&#x60; represents a global authorization ranging over all users. | [optional]
**group_id** | **string** | The id of the group this authorization has been created for. | [optional]
**resource_type** | **int** | An integer representing the resource type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/authorization-service/#resources) for a list of integer representations of resource types. | [optional]
**resource_id** | **string** | The resource Id. The value &#x60;*&#x60; represents an authorization ranging over all instances of a resource. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
