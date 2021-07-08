# # MigrationPlanDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_process_definition_id** | **string** | The id of the source process definition for the migration. | [optional]
**target_process_definition_id** | **string** | The id of the target process definition for the migration. | [optional]
**instructions** | [**\OpenAPI\Client\Model\MigrationInstructionDto[]**](MigrationInstructionDto.md) | A list of migration instructions which map equal activities. Each migration instruction is a JSON object with the following properties: | [optional]
**variables** | [**array<string,\OpenAPI\Client\Model\VariableValueDto>**](VariableValueDto.md) | A map of variables which will be set into the process instances&#39; scope. Each key is a variable name and each value a JSON variable value object. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
