# # RestartProcessInstanceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**process_instance_ids** | **string[]** | A list of process instance ids to restart. | [optional]
**historic_process_instance_query** | [**\OpenAPI\Client\Model\HistoricProcessInstanceQueryDto**](HistoricProcessInstanceQueryDto.md) |  | [optional]
**skip_custom_listeners** | **bool** | Skip execution listener invocation for activities that are started as part of this request. | [optional]
**skip_io_mappings** | **bool** | Skip execution of [input/output variable mappings](https://docs.camunda.org/manual/latest/user-guide/process-engine/variables/#input-output-variable-mapping) for activities that are started as part of this request. | [optional]
**initial_variables** | **bool** | Set the initial set of variables during restart. By default, the last set of variables is used. | [optional]
**without_business_key** | **bool** | Do not take over the business key of the historic process instance. | [optional]
**instructions** | [**\OpenAPI\Client\Model\RestartProcessInstanceModificationInstructionDto[]**](RestartProcessInstanceModificationInstructionDto.md) | **Optional**. A JSON array of instructions that specify which activities to start the process instance at. If this property is omitted, the process instance starts at its default blank start event. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
