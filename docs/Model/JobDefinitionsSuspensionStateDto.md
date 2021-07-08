# # JobDefinitionsSuspensionStateDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**process_definition_id** | **string** | The process definition id of the job definitions to activate or suspend. | [optional]
**process_definition_key** | **string** | The process definition key of the job definitions to activate or suspend. | [optional]
**process_definition_tenant_id** | **string** | Only activate or suspend job definitions of a process definition which belongs to a tenant with the given id.  Note that this parameter will only be considered  in combination with &#x60;processDefinitionKey&#x60;. | [optional]
**process_definition_without_tenant_id** | **string** | Only activate or suspend job definitions of a process definition which belongs to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior.  Note that this parameter will only be considered  in combination with &#x60;processDefinitionKey&#x60;. | [optional]
**include_jobs** | **bool** | A &#x60;Boolean&#x60; value which indicates whether to activate or suspend also all jobs of the referenced job definitions. When the value is set to &#x60;true&#x60;, all jobs of the provided job definitions will be activated or suspended and when the value is set to &#x60;false&#x60;, the suspension state of all jobs of the provided job definitions will not be updated. | [optional]
**execution_date** | **string** | The date on which the referenced job definitions will be activated or suspended. If null, the suspension state of the given job definitions is updated immediately. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM- dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
**suspended** | **bool** | A Boolean value which indicates whether to activate or suspend a given instance  (e.g. process instance, job, job definition, or batch). When the value is set to true,  the given instance will be suspended and when the value is set to false,  the given instance will be activated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
