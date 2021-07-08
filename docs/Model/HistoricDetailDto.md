# # HistoricDetailDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the historic detail. | [optional]
**type** | **string** | The type of the historic detail. Either &#x60;formField&#x60; for a submitted form field value or &#x60;variableUpdate&#x60; for variable updates. | [optional]
**process_definition_key** | **string** | The key of the process definition that this historic detail belongs to. | [optional]
**process_definition_id** | **string** | The id of the process definition that this historic detail belongs to. | [optional]
**process_instance_id** | **string** | The id of the process instance the historic detail belongs to. | [optional]
**activity_instance_id** | **string** | The id of the activity instance the historic detail belongs to. | [optional]
**execution_id** | **string** | The id of the execution the historic detail belongs to. | [optional]
**case_definition_key** | **string** | The key of the case definition that this historic detail belongs to. | [optional]
**case_definition_id** | **string** | The id of the case definition that this historic detail belongs to. | [optional]
**case_instance_id** | **string** | The id of the case instance the historic detail belongs to. | [optional]
**case_execution_id** | **string** | The id of the case execution the historic detail belongs to. | [optional]
**task_id** | **string** | The id of the task the historic detail belongs to. | [optional]
**tenant_id** | **string** | The id of the tenant that this historic detail belongs to. | [optional]
**user_operation_id** | **string** | The id of user operation which links historic detail with [user operation log](https://docs.camunda.org/manual/latest/reference/rest/history/user-operation-log/) entries. | [optional]
**time** | [**\DateTime**](\DateTime.md) | The time when this historic detail occurred. Default [format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**removal_time** | [**\DateTime**](\DateTime.md) | The time after which the historic detail should be removed by the History Cleanup job. Default [format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**root_process_instance_id** | **string** | The process instance id of the root process instance that initiated the process containing this historic detail. | [optional]
**field_id** | **string** | The id of the form field.  **Note:** This property is only set for a &#x60;HistoricVariableUpdate&#x60; historic details. In these cases, the value of the &#x60;type&#x60; property is &#x60;formField&#x60;. | [optional]
**field_value** | **object** | The submitted form field value. The value differs depending on the form field&#39;s type and on the &#x60;deserializeValue&#x60; parameter.  **Note:** This property is only set for a &#x60;HistoricVariableUpdate&#x60; historic details. In these cases, the value of the &#x60;type&#x60; property is &#x60;formField&#x60;. | [optional]
**variable_name** | **string** | The name of the variable which has been updated.  **Note:** This property is only set for a &#x60;HistoricVariableUpdate&#x60; historic details. In these cases, the value of the &#x60;type&#x60; property is &#x60;variableUpdate&#x60;. | [optional]
**variable_instance_id** | **string** | The id of the associated variable instance.  **Note:** This property is only set for a &#x60;HistoricVariableUpdate&#x60; historic details. In these cases, the value of the &#x60;type&#x60; property is &#x60;variableUpdate&#x60;. | [optional]
**variable_type** | **string** | The value type of the variable.  **Note:** This property is only set for a &#x60;HistoricVariableUpdate&#x60; historic details. In these cases, the value of the &#x60;type&#x60; property is &#x60;variableUpdate&#x60;. | [optional]
**value** | **object** | The variable&#39;s value. Value differs depending on the variable&#39;s type and on the deserializeValues parameter.  **Note:** This property is only set for a &#x60;HistoricVariableUpdate&#x60; historic details. In these cases, the value of the &#x60;type&#x60; property is &#x60;variableUpdate&#x60;. | [optional]
**value_info** | **array<string,object>** | A JSON object containing additional, value-type-dependent properties. For variables of type &#x60;Object&#x60;, the following properties are returned:  * &#x60;objectTypeName&#x60;: A string representation of the object&#39;s type name. * &#x60;serializationDataFormat&#x60;: The serialization format used to store the variable.  **Note:** This property is only set for a &#x60;HistoricVariableUpdate&#x60; historic details. In these cases, the value of the &#x60;type&#x60; property is &#x60;variableUpdate&#x60;. | [optional]
**initial** | **bool** | Returns &#x60;true&#x60; for variable updates that contains the initial values of the variables.  **Note:** This property is only set for a &#x60;HistoricVariableUpdate&#x60; historic details. In these cases, the value of the &#x60;type&#x60; property is &#x60;variableUpdate&#x60;. | [optional]
**revision** | **int** | The revision of the historic variable update.  **Note:** This property is only set for a &#x60;HistoricVariableUpdate&#x60; historic details. In these cases, the value of the &#x60;type&#x60; property is &#x60;variableUpdate&#x60;. | [optional]
**error_message** | **string** | An error message in case a Java Serialized Object could not be de-serialized.  **Note:** This property is only set for a &#x60;HistoricVariableUpdate&#x60; historic details. In these cases, the value of the &#x60;type&#x60; property is &#x60;variableUpdate&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
