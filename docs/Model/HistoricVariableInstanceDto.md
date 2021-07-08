# # HistoricVariableInstanceDto

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
**value** | **object** | The variable&#39;s value. Value differs depending on the variable&#39;s type and on the deserializeValues parameter. | [optional]
**type** | **string** | The value type of the variable. | [optional]
**value_info** | **array<string,object>** | A JSON object containing additional, value-type-dependent properties. For serialized variables of type Object, the following properties can be provided:  * &#x60;objectTypeName&#x60;: A string representation of the object&#39;s type name. * &#x60;serializationDataFormat&#x60;: The serialization format used to store the variable.  For serialized variables of type File, the following properties can be provided:  * &#x60;filename&#x60;: The name of the file. This is not the variable name but the name that will be used when downloading the file again. * &#x60;mimetype&#x60;: The MIME type of the file that is being uploaded. * &#x60;encoding&#x60;: The encoding of the file that is being uploaded.  The following property can be provided for all value types:  * &#x60;transient&#x60;: Indicates whether the variable should be transient or not. See [documentation](https://docs.camunda.org/manual/latest/user-guide/process-engine/variables#transient-variables) for more informations. (Not applicable for &#x60;decision-definition&#x60;, &#x60; /process-instance/variables-async&#x60;, and &#x60;/migration/executeAsync&#x60; endpoints) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
