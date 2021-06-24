# # ExternalTaskFailureDtoAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_message** | **string** | An message indicating the reason of the failure. | [optional]
**error_details** | **string** | A detailed error description. | [optional]
**retries** | **int** | A number of how often the task should be retried. Must be &gt;&#x3D; 0. If this is 0, an incident is created and the task cannot be fetched anymore unless the retries are increased again. The incident&#39;s message is set to the &#x60;errorMessage&#x60; parameter. | [optional]
**retry_timeout** | **int** | A timeout in milliseconds before the external task becomes available again for fetching. Must be &gt;&#x3D; 0. | [optional]
**variables** | [**array<string,\OpenAPI\Client\Model\VariableValueDto>**](VariableValueDto.md) | A JSON object containing variable key-value pairs. Each key is a variable name and each value a JSON variable value object with the following properties: | [optional]
**local_variables** | [**array<string,\OpenAPI\Client\Model\VariableValueDto>**](VariableValueDto.md) | A JSON object containing local variable key-value pairs. Local variables are set only in the scope of external task. Each key is a variable name and each value a JSON variable value object with the following properties: | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
