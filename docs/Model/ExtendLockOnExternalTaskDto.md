# # ExtendLockOnExternalTaskDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**new_duration** | **int** | An amount of time (in milliseconds). This is the new lock duration starting from the current moment. | [optional]
**worker_id** | **string** | **Mandatory.** The ID of the worker who is performing the operation on the external task. If the task is already locked, must match the id of the worker who has most recently locked the task. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
