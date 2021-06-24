# # BatchDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the batch. | [optional]
**type** | **string** | The type of the batch. See the [User Guide](https://docs.camunda.org/manual/7.15/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types. | [optional]
**total_jobs** | **int** | The total jobs of a batch is the number of batch execution jobs required to complete the batch. | [optional]
**jobs_created** | **int** | The number of batch execution jobs already created by the seed job. | [optional]
**batch_jobs_per_seed** | **int** | The number of batch execution jobs created per seed job invocation. The batch seed job is invoked until it has created all batch execution jobs required by the batch (see &#x60;totalJobs&#x60; property). | [optional]
**invocations_per_batch_job** | **int** | Every batch execution job invokes the command executed by the batch &#x60;invocationsPerBatchJob&#x60; times. E.g., for a process instance migration batch this specifies the number of process instances which are migrated per batch execution job. | [optional]
**seed_job_definition_id** | **string** | The job definition id for the seed jobs of this batch. | [optional]
**monitor_job_definition_id** | **string** | The job definition id for the monitor jobs of this batch. | [optional]
**batch_job_definition_id** | **string** | The job definition id for the batch execution jobs of this batch. | [optional]
**suspended** | **bool** | Indicates whether this batch is suspended or not. | [optional]
**tenant_id** | **string** | The tenant id of the batch. | [optional]
**create_user_id** | **string** | The id of the user that created the batch. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
