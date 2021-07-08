# # UserOperationLogEntryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of this log entry. | [optional]
**user_id** | **string** | The user who performed this operation. | [optional]
**timestamp** | [**\DateTime**](\DateTime.md) | Timestamp of this operation. | [optional]
**operation_id** | **string** | The unique identifier of this operation. A composite operation that changes multiple properties has a common &#x60;operationId&#x60;. | [optional]
**operation_type** | **string** | The type of this operation, e.g., &#x60;Assign&#x60;, &#x60;Claim&#x60; and so on. | [optional]
**entity_type** | **string** | The type of the entity on which this operation was executed, e.g., &#x60;Task&#x60; or &#x60;Attachment&#x60;. | [optional]
**category** | **string** | The name of the category this operation was associated with, e.g., &#x60;TaskWorker&#x60; or &#x60;Admin&#x60;. | [optional]
**annotation** | **string** | An arbitrary annotation set by a user for auditing reasons. | [optional]
**property** | **string** | The property changed by this operation. | [optional]
**org_value** | **string** | The original value of the changed property. | [optional]
**new_value** | **string** | The new value of the changed property. | [optional]
**deployment_id** | **string** | If not &#x60;null&#x60;, the operation is restricted to entities in relation to this deployment. | [optional]
**process_definition_id** | **string** | If not &#x60;null&#x60;, the operation is restricted to entities in relation to this process definition. | [optional]
**process_definition_key** | **string** | If not &#x60;null&#x60;, the operation is restricted to entities in relation to process definitions with this key. | [optional]
**process_instance_id** | **string** | If not &#x60;null&#x60;, the operation is restricted to entities in relation to this process instance. | [optional]
**execution_id** | **string** | If not &#x60;null&#x60;, the operation is restricted to entities in relation to this execution. | [optional]
**case_definition_id** | **string** | If not &#x60;null&#x60;, the operation is restricted to entities in relation to this case definition. | [optional]
**case_instance_id** | **string** | If not &#x60;null&#x60;, the operation is restricted to entities in relation to this case instance. | [optional]
**case_execution_id** | **string** | If not &#x60;null&#x60;, the operation is restricted to entities in relation to this case execution. | [optional]
**task_id** | **string** | If not &#x60;null&#x60;, the operation is restricted to entities in relation to this task. | [optional]
**external_task_id** | **string** | If not &#x60;null&#x60;, the operation is restricted to entities in relation to this external task. | [optional]
**batch_id** | **string** | If not &#x60;null&#x60;, the operation is restricted to entities in relation to this batch. | [optional]
**job_id** | **string** | If not &#x60;null&#x60;, the operation is restricted to entities in relation to this job. | [optional]
**job_definition_id** | **string** | If not &#x60;null&#x60;, the operation is restricted to entities in relation to this job definition. | [optional]
**removal_time** | [**\DateTime**](\DateTime.md) | The time after which the entry should be removed by the History Cleanup job. [Default format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**root_process_instance_id** | **string** | The process instance id of the root process instance that initiated the process containing this entry. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
