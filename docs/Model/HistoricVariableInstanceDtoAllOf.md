# # HistoricVariableInstanceDtoAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the variable instance. | [optional]
**name** | **string** | The name of the variable instance. | [optional]
**process_definition_key** | **string** | The key of the process definition the variable instance belongs to. | [optional]
**process_definition_id** | **string** | The id of the process definition the variable instance belongs to. | [optional]
**process_instance_id** | **string** | The process instance id the variable instance belongs to. | [optional]
**execution_id** | **string** | The execution id the variable instance belongs to. | [optional]
**activity_instance_id** | **string** | The id of the activity instance in which the variable is valid. | [optional]
**case_definition_key** | **string** | The key of the case definition the variable instance belongs to. | [optional]
**case_definition_id** | **string** | The id of the case definition the variable instance belongs to. | [optional]
**case_instance_id** | **string** | The case instance id the variable instance belongs to. | [optional]
**case_execution_id** | **string** | The case execution id the variable instance belongs to. | [optional]
**task_id** | **string** | The id of the task the variable instance belongs to. | [optional]
**tenant_id** | **string** | The id of the tenant that this variable instance belongs to. | [optional]
**error_message** | **string** | An error message in case a Java Serialized Object could not be de-serialized. | [optional]
**state** | **string** | The current state of the variable. Can be &#39;CREATED&#39; or &#39;DELETED&#39;. | [optional]
**create_time** | [**\DateTime**](\DateTime.md) | The time the variable was inserted. [Default format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**removal_time** | [**\DateTime**](\DateTime.md) | The time after which the variable should be removed by the History Cleanup job. [Default format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**root_process_instance_id** | **string** | The process instance id of the root process instance that initiated the process containing this variable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
