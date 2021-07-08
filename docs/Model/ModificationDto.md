# # ModificationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**process_definition_id** | **string** | The id of the process definition for the modification | [optional]
**skip_custom_listeners** | **bool** | Skip execution listener invocation for activities that are started or ended as part of this request. | [optional]
**skip_io_mappings** | **bool** | Skip execution of [input/output variable mappings](https://docs.camunda.org/manual/latest/user-guide/process-engine/variables/#input-output-variable-mapping) for activities that are started or ended as part of this request. | [optional]
**process_instance_ids** | **string[]** | A list of process instance ids to modify. | [optional]
**process_instance_query** | [**\OpenAPI\Client\Model\ProcessInstanceQueryDto**](ProcessInstanceQueryDto.md) |  | [optional]
**instructions** | [**\OpenAPI\Client\Model\MultipleProcessInstanceModificationInstructionDto[]**](MultipleProcessInstanceModificationInstructionDto.md) | An array of modification instructions. The instructions are executed in the order they are in. | [optional]
**annotation** | **string** | An arbitrary text annotation set by a user for auditing reasons. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
