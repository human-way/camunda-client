# # JobDefinitionDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the job definition. | [optional]
**process_definition_id** | **string** | The id of the process definition this job definition is associated with. | [optional]
**process_definition_key** | **string** | The key of the process definition this job definition is associated with. | [optional]
**activity_id** | **string** | The id of the activity this job definition is associated with. | [optional]
**job_type** | **string** | The type of the job which is running for this job definition. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/the-job-executor/#job-creation) for more information about job types. | [optional]
**job_configuration** | **string** | The configuration of a job definition provides details about the jobs which will be created. For example: for timer jobs it is the timer configuration. | [optional]
**overriding_job_priority** | **int** | The execution priority defined for jobs that are created based on this definition. May be &#x60;null&#x60; when the priority has not been overridden on the job definition level. | [optional]
**suspended** | **bool** | Indicates whether this job definition is suspended or not. | [optional]
**tenant_id** | **string** | The id of the tenant this job definition is associated with. | [optional]
**deployment_id** | **string** | The id of the deployment this job definition is related to. In a deployment-aware setup, this leads to all jobs of the same definition being executed on the same node. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
