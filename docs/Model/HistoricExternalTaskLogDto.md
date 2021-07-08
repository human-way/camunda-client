# # HistoricExternalTaskLogDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the log entry. | [optional]
**external_task_id** | **string** | The id of the external task. | [optional]
**timestamp** | [**\DateTime**](\DateTime.md) | The time when the log entry has been written. | [optional]
**topic_name** | **string** | The topic name of the associated external task. | [optional]
**worker_id** | **string** | The id of the worker that posessed the most recent lock. | [optional]
**retries** | **int** | The number of retries the associated external task has left. | [optional]
**priority** | **int** | The execution priority the external task had when the log entry was created. | [optional]
**error_message** | **string** | The message of the error that occurred by executing the associated external task. | [optional]
**activity_id** | **string** | The id of the activity on which the associated external task was created. | [optional]
**activity_instance_id** | **string** | The id of the activity instance on which the associated external task was created. | [optional]
**execution_id** | **string** | The execution id on which the associated external task was created. | [optional]
**process_instance_id** | **string** | The id of the process instance on which the associated external task was created. | [optional]
**process_definition_id** | **string** | The id of the process definition which the associated external task belongs to. | [optional]
**process_definition_key** | **string** | The key of the process definition which the associated external task belongs to. | [optional]
**tenant_id** | **string** | The id of the tenant that this historic external task log entry belongs to. | [optional]
**creation_log** | **bool** | A flag indicating whether this log represents the creation of the associated external task. | [optional]
**failure_log** | **bool** | A flag indicating whether this log represents the failed execution of the associated external task. | [optional]
**success_log** | **bool** | A flag indicating whether this log represents the successful execution of the associated external task. | [optional]
**deletion_log** | **bool** | A flag indicating whether this log represents the deletion of the associated external task. | [optional]
**removal_time** | [**\DateTime**](\DateTime.md) | The time after which this log should be removed by the History Cleanup job. Default format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;.  For further information, please see the [documentation](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) | [optional]
**root_process_instance_id** | **string** | The process instance id of the root process instance that initiated the process containing this log. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
