# # AuthorizationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the authorization. | [optional]
**type** | **int** | The type of the authorization (0&#x3D;global, 1&#x3D;grant, 2&#x3D;revoke). See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/authorization-service.md#authorization-type) for more information about authorization types. | [optional]
**permissions** | **string[]** | An array of Strings holding the permissions provided by this authorization. | [optional]
**user_id** | **string** | The id of the user this authorization has been created for. The value &#x60;*&#x60; represents a global authorization ranging over all users. | [optional]
**group_id** | **string** | The id of the group this authorization has been created for. | [optional]
**resource_type** | **int** | An integer representing the resource type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/authorization-service/#resources) for a list of integer representations of resource types. | [optional]
**resource_id** | **string** | The resource Id. The value &#x60;*&#x60; represents an authorization ranging over all instances of a resource. | [optional]
**removal_time** | [**\DateTime**](\DateTime.md) | The removal time indicates the date a historic instance authorization is cleaned up. A removal time can only be assigned to a historic instance authorization. Can be &#x60;null&#x60; when not related to a historic instance resource or when the removal time strategy is end and the root process instance is not finished. Default format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**root_process_instance_id** | **string** | The process instance id of the root process instance the historic instance authorization is related to. Can be &#x60;null&#x60; if not related to a historic instance resource. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
