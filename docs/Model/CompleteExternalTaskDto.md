# # CompleteExternalTaskDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**variables** | [**array<string,\OpenAPI\Client\Model\VariableValueDto>**](VariableValueDto.md) | A JSON object containing variable key-value pairs. Each key is a variable name and each value a JSON variable value object with the following properties: | [optional]
**local_variables** | [**array<string,\OpenAPI\Client\Model\VariableValueDto>**](VariableValueDto.md) | A JSON object containing local variable key-value pairs. Local variables are set only in the scope of external task. Each key is a variable name and each value a JSON variable value object with the following properties: | [optional]
**worker_id** | **string** | **Mandatory.** The ID of the worker who is performing the operation on the external task. If the task is already locked, must match the id of the worker who has most recently locked the task. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
