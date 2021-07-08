# # HistoricJobLogQueryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**log_id** | **string** | Filter by historic job log id. | [optional]
**job_id** | **string** | Filter by job id. | [optional]
**job_exception_message** | **string** | Filter by job exception message. | [optional]
**job_definition_id** | **string** | Filter by job definition id. | [optional]
**job_definition_type** | **string** | Filter by job definition type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/the-job-executor/#job-creation) for more information about job definition types. | [optional]
**job_definition_configuration** | **string** | Filter by job definition configuration. | [optional]
**activity_id_in** | **string[]** | Only include historic job logs which belong to one of the passed activity ids. | [optional]
**failed_activity_id_in** | **string[]** | Only include historic job logs which belong to failures of one of the passed activity ids. | [optional]
**execution_id_in** | **string[]** | Only include historic job logs which belong to one of the passed execution ids. | [optional]
**process_instance_id** | **string** | Filter by process instance id. | [optional]
**process_definition_id** | **string** | Filter by process definition id. | [optional]
**process_definition_key** | **string** | Filter by process definition key. | [optional]
**deployment_id** | **string** | Filter by deployment id. | [optional]
**tenant_id_in** | **string[]** | Only include historic job log entries which belong to one of the passed and comma- separated tenant ids. | [optional]
**without_tenant_id** | **bool** | Only include historic job log entries that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**hostname** | **string** | Filter by hostname. | [optional]
**job_priority_lower_than_or_equals** | **int** | Only include logs for which the associated job had a priority lower than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
**job_priority_higher_than_or_equals** | **int** | Only include logs for which the associated job had a priority higher than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
**creation_log** | **bool** | Only include creation logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**failure_log** | **bool** | Only include failure logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**success_log** | **bool** | Only include success logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**deletion_log** | **bool** | Only include deletion logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**sorting** | [**\OpenAPI\Client\Model\HistoricJobLogQueryDtoSorting[]**](HistoricJobLogQueryDtoSorting.md) | An array of criteria to sort the result by. Each element of the array is                        an object that specifies one ordering. The position in the array                        identifies the rank of an ordering, i.e., whether it is primary, secondary,                        etc. Sorting has no effect for &#x60;count&#x60; endpoints | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
