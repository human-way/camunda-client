# # JobDefinitionQueryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**job_definition_id** | **string** | Filter by job definition id. | [optional]
**activity_id_in** | **string[]** | Only include job definitions which belong to one of the passed activity ids. | [optional]
**process_definition_id** | **string** | Only include job definitions which exist for the given process definition id. | [optional]
**process_definition_key** | **string** | Only include job definitions which exist for the given process definition key. | [optional]
**job_type** | **string** | Only include job definitions which exist for the given job type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/the-job-executor/#job-creation) for more information about job types. | [optional]
**job_configuration** | **string** | Only include job definitions which exist for the given job configuration. For example: for timer jobs it is the timer configuration. | [optional]
**active** | **bool** | Only include active job definitions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**suspended** | **bool** | Only include suspended job definitions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**with_overriding_job_priority** | **bool** | Only include job definitions that have an overriding job priority defined. The only effective value is &#x60;true&#x60;. If set to &#x60;false&#x60;, this filter is not applied. | [optional]
**tenant_id_in** | **string[]** | Only include job definitions which belong to one of the passed tenant ids. | [optional]
**without_tenant_id** | **bool** | Only include job definitions which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**include_job_definitions_without_tenant_id** | **bool** | Include job definitions which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**sorting** | [**\OpenAPI\Client\Model\JobDefinitionQueryDtoSorting[]**](JobDefinitionQueryDtoSorting.md) | An array of criteria to sort the result by. Each element of the array is                        an object that specifies one ordering. The position in the array                        identifies the rank of an ordering, i.e., whether it is primary, secondary,                        etc. Sorting has no effect for &#x60;count&#x60; endpoints. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
