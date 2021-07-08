# # HistoricJobLogDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the log entry. | [optional]
**timestamp** | [**\DateTime**](\DateTime.md) | The time when the log entry has been written. | [optional]
**removal_time** | [**\DateTime**](\DateTime.md) | The time after which the log entry should be removed by the History Cleanup job. Default format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. For further info see the [docs](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) | [optional]
**job_id** | **string** | The id of the associated job. | [optional]
**job_due_date** | [**\DateTime**](\DateTime.md) | The date on which the associated job is supposed to be processed. | [optional]
**job_retries** | **int** | The number of retries the associated job has left. | [optional]
**job_priority** | **int** | The execution priority the job had when the log entry was created. | [optional]
**job_exception_message** | **string** | The message of the exception that occurred by executing the associated job. | [optional]
**failed_activity_id** | **string** | The id of the activity on which the last exception occurred by executing the associated job. | [optional]
**job_definition_id** | **string** | The id of the job definition on which the associated job was created. | [optional]
**job_definition_type** | **string** | The job definition type of the associated job. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/the-job-executor/#job-creation) for more information about job definition types. | [optional]
**job_definition_configuration** | **string** | The job definition configuration type of the associated job. | [optional]
**activity_id** | **string** | The id of the activity on which the associated job was created. | [optional]
**execution_id** | **string** | The execution id on which the associated job was created. | [optional]
**process_instance_id** | **string** | The id of the process instance on which the associated job was created. | [optional]
**process_definition_id** | **string** | The id of the process definition which the associated job belongs to. | [optional]
**process_definition_key** | **string** | The key of the process definition which the associated job belongs to. | [optional]
**deployment_id** | **string** | The id of the deployment which the associated job belongs to. | [optional]
**root_process_instance_id** | **string** | The process instance id of the root process instance that initiated the process which the associated job belongs to. | [optional]
**tenant_id** | **string** | The id of the tenant that this historic job log entry belongs to. | [optional]
**hostname** | **string** | The name of the host of the Process Engine where the job of this historic job log entry was executed. | [optional]
**creation_log** | **bool** | A flag indicating whether this log represents the creation of the associated job. | [optional]
**failure_log** | **bool** | A flag indicating whether this log represents the failed execution of the associated job. | [optional]
**success_log** | **bool** | A flag indicating whether this log represents the successful execution of the associated job. | [optional]
**deletion_log** | **bool** | A flag indicating whether this log represents the deletion of the associated job. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
