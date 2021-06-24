# # JobDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the job. | [optional]
**job_definition_id** | **string** | The id of the associated job definition. | [optional]
**due_date** | [**\DateTime**](\DateTime.md) | The date on which this job is supposed to be processed. | [optional]
**process_instance_id** | **string** | The id of the process instance which execution created the job. | [optional]
**execution_id** | **string** | The specific execution id on which the job was created. | [optional]
**process_definition_id** | **string** | The id of the process definition which this job belongs to. | [optional]
**process_definition_key** | **string** | The key of the process definition which this job belongs to. | [optional]
**retries** | **int** | The number of retries this job has left. | [optional]
**exception_message** | **string** | The message of the exception that occurred, the last time the job was executed. Is null when no exception occurred. | [optional]
**failed_activity_id** | **string** | The id of the activity on which the last exception occurred, the last time the job was executed. Is null when no exception occurred. | [optional]
**suspended** | **bool** | A flag indicating whether the job is suspended or not. | [optional]
**priority** | **int** | The job&#39;s priority for execution. | [optional]
**tenant_id** | **string** | The id of the tenant which this job belongs to. | [optional]
**create_time** | [**\DateTime**](\DateTime.md) | The date on which this job has been created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
