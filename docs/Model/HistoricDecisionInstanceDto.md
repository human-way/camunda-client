# # HistoricDecisionInstanceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the decision instance. | [optional]
**decision_definition_id** | **string** | The id of the decision definition that this decision instance belongs to. | [optional]
**decision_definition_key** | **string** | The key of the decision definition that this decision instance belongs to. | [optional]
**decision_definition_name** | **string** | The name of the decision definition that this decision instance belongs to. | [optional]
**evaluation_time** | [**\DateTime**](\DateTime.md) | The time the instance was evaluated.  [Default format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**removal_time** | [**\DateTime**](\DateTime.md) | The time after which the instance should be removed by the History Cleanup job. [Default format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**process_definition_id** | **string** | The id of the process definition that this decision instance belongs to. | [optional]
**process_definition_key** | **string** | The key of the process definition that this decision instance belongs to. | [optional]
**process_instance_id** | **string** | The id of the process instance that this decision instance belongs to. | [optional]
**case_definition_id** | **string** | The id of the case definition that this decision instance belongs to. | [optional]
**case_definition_key** | **string** | The key of the case definition that this decision instance belongs to. | [optional]
**case_instance_id** | **string** | The id of the case instance that this decision instance belongs to. | [optional]
**activity_id** | **string** | The id of the activity that this decision instance belongs to. | [optional]
**activity_instance_id** | **string** | The id of the activity instance that this decision instance belongs to. | [optional]
**tenant_id** | **string** | The tenant id of the historic decision instance. | [optional]
**user_id** | **string** | The id of the authenticated user that has evaluated this decision instance without a process or case instance. | [optional]
**inputs** | [**\OpenAPI\Client\Model\HistoricDecisionInputInstanceDto[]**](HistoricDecisionInputInstanceDto.md) | The list of decision input values. **Only exists** if &#x60;includeInputs&#x60; was set to &#x60;true&#x60; in the query. | [optional]
**ouputs** | [**\OpenAPI\Client\Model\HistoricDecisionOutputInstanceDto[]**](HistoricDecisionOutputInstanceDto.md) | The list of decision output values. **Only exists** if &#x60;includeOutputs&#x60; was set to &#x60;true&#x60; in the query. | [optional]
**collect_result_value** | **double** | The result of the collect aggregation of the decision result if used. &#x60;null&#x60; if no aggregation was used. | [optional]
**root_decision_instance_id** | **string** | The decision instance id of the evaluated root decision. Can be &#x60;null&#x60; if this instance is the root decision instance of the evaluation. | [optional]
**root_process_instance_id** | **string** | The process instance id of the root process instance that initiated the evaluation of this decision. Can be &#x60;null&#x60; if this decision instance is not evaluated as part of a BPMN process. | [optional]
**decision_requirements_definition_id** | **string** | The id of the decision requirements definition that this decision instance belongs to. | [optional]
**decision_requirements_definition_key** | **string** | The key of the decision requirements definition that this decision instance belongs to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
