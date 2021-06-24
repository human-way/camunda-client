# # JobQueryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**job_id** | **string** | Filter by job id. | [optional]
**job_ids** | **string[]** | Filter by a  list of job ids. | [optional]
**job_definition_id** | **string** | Only select jobs which exist for the given job definition. | [optional]
**process_instance_id** | **string** | Only select jobs which exist for the given process instance. | [optional]
**process_instance_ids** | **string[]** | Only select jobs which exist for the given  list of process instance ids. | [optional]
**execution_id** | **string** | Only select jobs which exist for the given execution. | [optional]
**process_definition_id** | **string** | Filter by the id of the process definition the jobs run on. | [optional]
**process_definition_key** | **string** | Filter by the key of the process definition the jobs run on. | [optional]
**activity_id** | **string** | Only select jobs which exist for an activity with the given id. | [optional]
**with_retries_left** | **bool** | Only select jobs which have retries left. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**executable** | **bool** | Only select jobs which are executable, i.e., retries &gt; 0 and due date is &#x60;null&#x60; or due date is in the past. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**timers** | **bool** | Only select jobs that are timers. Cannot be used together with &#x60;messages&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**messages** | **bool** | Only select jobs that are messages. Cannot be used together with &#x60;timers&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**due_dates** | [**\OpenAPI\Client\Model\JobConditionQueryParameterDto[]**](JobConditionQueryParameterDto.md) | Only select jobs where the due date is lower or higher than the given date. | [optional]
**create_times** | [**\OpenAPI\Client\Model\JobConditionQueryParameterDto[]**](JobConditionQueryParameterDto.md) | Only select jobs created before or after the given date. | [optional]
**with_exception** | **bool** | Only select jobs that failed due to an exception. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**exception_message** | **string** | Only select jobs that failed due to an exception with the given message. | [optional]
**failed_activity_id** | **string** | Only select jobs that failed due to an exception at an activity with the given id. | [optional]
**no_retries_left** | **bool** | Only select jobs which have no retries left. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**active** | **bool** | Only include active jobs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**suspended** | **bool** | Only include suspended jobs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**priority_lower_than_or_equals** | **int** | Only include jobs with a priority lower than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
**priority_higher_than_or_equals** | **int** | Only include jobs with a priority higher than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
**tenant_id_in** | **string[]** | Only include jobs which belong to one of the passed  tenant ids. | [optional]
**without_tenant_id** | **bool** | Only include jobs which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**include_jobs_without_tenant_id** | **bool** | Include jobs which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**sorting** | [**\OpenAPI\Client\Model\JobQueryDtoSorting[]**](JobQueryDtoSorting.md) | An array of criteria to sort the result by. Each element of the array is                        an object that specifies one ordering. The position in the array                        identifies the rank of an ordering, i.e., whether it is primary, secondary,                        etc. Does not have an effect for the &#x60;count&#x60; endpoint. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
