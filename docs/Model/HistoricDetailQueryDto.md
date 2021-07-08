# # HistoricDetailQueryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**process_instance_id** | **string** | Filter by process instance id. | [optional]
**process_instance_id_in** | **string[]** | Only include historic details which belong to one of the passed  process instance ids. | [optional]
**execution_id** | **string** | Filter by execution id. | [optional]
**task_id** | **string** | Filter by task id. | [optional]
**activity_instance_id** | **string** | Filter by activity instance id. | [optional]
**case_instance_id** | **string** | Filter by case instance id. | [optional]
**case_execution_id** | **string** | Filter by case execution id. | [optional]
**variable_instance_id** | **string** | Filter by variable instance id. | [optional]
**variable_type_in** | **string[]** | Only include historic details where the variable updates belong to one of the passed  list of variable types. A list of all supported variable types can be found [here](https://docs.camunda.org/manual/latest/user-guide/process-engine/variables/#supported-variable-values). **Note:** All non-primitive variables are associated with the type &#x60;serializable&#x60;. | [optional]
**tenant_id_in** | **string[]** | Filter by a  list of tenant ids. | [optional]
**without_tenant_id** | **bool** | Only include historic details that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**user_operation_id** | **string** | Filter by a user operation id. | [optional]
**form_fields** | **bool** | Only include &#x60;HistoricFormFields&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**variable_updates** | **bool** | Only include &#x60;HistoricVariableUpdates&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**exclude_task_details** | **bool** | Excludes all task-related &#x60;HistoricDetails&#x60;, so only items which have no task id set will be selected. When this parameter is used together with &#x60;taskId&#x60;, this call is ignored and task details are not excluded. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**initial** | **bool** | Restrict to historic variable updates that contain only initial variable values. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**occurred_before** | [**\DateTime**](\DateTime.md) | Restrict to historic details that occured before the given date (including the date). Default [format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., 2013-01-23T14:42:45.000+0200. | [optional]
**occurred_after** | [**\DateTime**](\DateTime.md) | Restrict to historic details that occured after the given date (including the date). Default [format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., 2013-01-23T14:42:45.000+0200. | [optional]
**sorting** | [**\OpenAPI\Client\Model\HistoricDetailQueryDtoSorting[]**](HistoricDetailQueryDtoSorting.md) | A JSON array of criteria to sort the result by. Each element of the array is                     a JSON object that specifies one ordering. The position in the array                     identifies the rank of an ordering, i.e., whether it is primary, secondary,                     etc. Does not have an effect for the &#x60;count&#x60; endpoint. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
