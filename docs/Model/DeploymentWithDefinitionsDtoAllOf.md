# # DeploymentWithDefinitionsDtoAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deployed_process_definitions** | [**array<string,\OpenAPI\Client\Model\ProcessDefinitionDto>**](ProcessDefinitionDto.md) | A JSON Object containing a property for each of the process definitions, which are successfully deployed with that deployment. The key is the process definition id, the value is a JSON Object corresponding to the process definition. | [optional]
**deployed_decision_definitions** | [**array<string,\OpenAPI\Client\Model\DecisionDefinitionDto>**](DecisionDefinitionDto.md) | A JSON Object containing a property for each of the decision definitions, which are successfully deployed with that deployment. The key is the decision definition id, the value is a JSON Object corresponding to the decision definition. | [optional]
**deployed_decision_requirements_definitions** | [**array<string,\OpenAPI\Client\Model\DecisionRequirementsDefinitionDto>**](DecisionRequirementsDefinitionDto.md) | A JSON Object containing a property for each of the decision requirements definitions, which are successfully deployed with that deployment. The key is the decision requirements definition id, the value is a JSON Object corresponding to the decision requirements definition. | [optional]
**deployed_case_definitions** | [**array<string,\OpenAPI\Client\Model\CaseDefinitionDto>**](CaseDefinitionDto.md) | A JSON Object containing a property for each of the case definitions, which are successfully deployed with that deployment. The key is the case definition id, the value is a JSON Object corresponding to the case definition. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
