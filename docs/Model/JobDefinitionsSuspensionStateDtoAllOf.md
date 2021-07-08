# # JobDefinitionsSuspensionStateDtoAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**process_definition_id** | **string** | The process definition id of the job definitions to activate or suspend. | [optional]
**process_definition_key** | **string** | The process definition key of the job definitions to activate or suspend. | [optional]
**process_definition_tenant_id** | **string** | Only activate or suspend job definitions of a process definition which belongs to a tenant with the given id.  Note that this parameter will only be considered  in combination with &#x60;processDefinitionKey&#x60;. | [optional]
**process_definition_without_tenant_id** | **string** | Only activate or suspend job definitions of a process definition which belongs to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior.  Note that this parameter will only be considered  in combination with &#x60;processDefinitionKey&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
