# # SetVariablesAsyncDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**process_instance_ids** | **string[]** | A list of process instance ids that define a group of process instances to which the operation will set variables.  Please note that if &#x60;processInstanceIds&#x60;, &#x60;processInstanceQuery&#x60; and &#x60;historicProcessInstanceQuery&#x60; are defined, the resulting operation will be performed on the union of these sets. | [optional]
**process_instance_query** | [**\OpenAPI\Client\Model\ProcessInstanceQueryDto**](ProcessInstanceQueryDto.md) |  | [optional]
**historic_process_instance_query** | [**\OpenAPI\Client\Model\HistoricProcessInstanceQueryDto**](HistoricProcessInstanceQueryDto.md) |  | [optional]
**variables** | [**array<string,\OpenAPI\Client\Model\VariableValueDto>**](VariableValueDto.md) | A variables the operation will set in the root scope of the process instances. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
