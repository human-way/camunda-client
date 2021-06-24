# # JobSuspensionStateDtoAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**job_definition_id** | **string** | The job definition id of the jobs to activate or suspend. | [optional]
**process_definition_id** | **string** | The process definition id of the jobs to activate or suspend. | [optional]
**process_instance_id** | **string** | The process instance id of the jobs to activate or suspend. | [optional]
**process_definition_key** | **string** | The process definition key of the jobs to activate or suspend. | [optional]
**process_definition_tenant_id** | **string** | Only activate or suspend jobs of a process definition which belongs to a tenant with the given id. Works only when selecting with &#x60;processDefinitionKey&#x60;. | [optional]
**process_definition_without_tenant_id** | **bool** | Only activate or suspend jobs of a process definition which belongs to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. Works only when selecting with &#x60;processDefinitionKey&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
