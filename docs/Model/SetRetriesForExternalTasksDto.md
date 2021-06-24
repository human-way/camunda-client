# # SetRetriesForExternalTasksDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retries** | **int** | The number of retries to set for the external task.  Must be &gt;&#x3D; 0. If this is 0, an incident is created and the task cannot be fetched anymore unless the retries are increased again. Can not be null. | [optional]
**external_task_ids** | **string[]** | The ids of the external tasks to set the number of retries for. | [optional]
**process_instance_ids** | **string[]** | The ids of process instances containing the tasks to set the number of retries for. | [optional]
**external_task_query** | [**\OpenAPI\Client\Model\ExternalTaskQueryDto**](ExternalTaskQueryDto.md) |  | [optional]
**process_instance_query** | [**\OpenAPI\Client\Model\ProcessInstanceQueryDto**](ProcessInstanceQueryDto.md) |  | [optional]
**historic_process_instance_query** | [**\OpenAPI\Client\Model\HistoricProcessInstanceQueryDto**](HistoricProcessInstanceQueryDto.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
