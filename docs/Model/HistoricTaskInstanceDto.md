# # HistoricTaskInstanceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The task id. | [optional]
**process_definition_key** | **string** | The key of the process definition the task belongs to. | [optional]
**process_definition_id** | **string** | The id of the process definition the task belongs to. | [optional]
**process_instance_id** | **string** | The id of the process instance the task belongs to. | [optional]
**execution_id** | **string** | The id of the execution the task belongs to. | [optional]
**case_definition_key** | **string** | The key of the case definition the task belongs to. | [optional]
**case_definition_id** | **string** | The id of the case definition the task belongs to. | [optional]
**case_instance_id** | **string** | The id of the case instance the task belongs to. | [optional]
**case_execution_id** | **string** | The id of the case execution the task belongs to. | [optional]
**activity_instance_id** | **string** | The id of the activity that this object is an instance of. | [optional]
**name** | **string** | The task name. | [optional]
**description** | **string** | The task&#39;s description. | [optional]
**delete_reason** | **string** | The task&#39;s delete reason. | [optional]
**owner** | **string** | The owner&#39;s id. | [optional]
**assignee** | **string** | The assignee&#39;s id. | [optional]
**start_time** | [**\DateTime**](\DateTime.md) | The time the task was started. Default [format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**end_time** | [**\DateTime**](\DateTime.md) | The time the task ended. Default [format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**duration** | **int** | The time the task took to finish (in milliseconds). | [optional]
**task_definition_key** | **string** | The task&#39;s key. | [optional]
**priority** | **int** | The task&#39;s priority. | [optional]
**due** | [**\DateTime**](\DateTime.md) | The task&#39;s due date. Default [format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**parent_task_id** | **string** | The id of the parent task, if this task is a subtask. | [optional]
**follow_up** | [**\DateTime**](\DateTime.md) | The follow-up date for the task. Default [format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**tenant_id** | **string** | The tenant id of the task instance. | [optional]
**removal_time** | [**\DateTime**](\DateTime.md) | The time after which the task should be removed by the History Cleanup job. Default [format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**root_process_instance_id** | **string** | The process instance id of the root process instance that initiated the process containing this task. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
