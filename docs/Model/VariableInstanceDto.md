# # VariableInstanceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the variable instance. | [optional]
**name** | **string** | The name of the variable instance. | [optional]
**process_definition_id** | **string** | The id of the process definition that this variable instance belongs to. | [optional]
**process_instance_id** | **string** | The id of the process instance that this variable instance belongs to. | [optional]
**execution_id** | **string** | The id of the execution that this variable instance belongs to. | [optional]
**case_instance_id** | **string** | The id of the case instance that this variable instance belongs to. | [optional]
**case_execution_id** | **string** | The id of the case execution that this variable instance belongs to. | [optional]
**task_id** | **string** | The id of the task that this variable instance belongs to. | [optional]
**batch_id** | **string** | The id of the batch that this variable instance belongs to.&lt; | [optional]
**activity_instance_id** | **string** | The id of the activity instance that this variable instance belongs to. | [optional]
**tenant_id** | **string** | The id of the tenant that this variable instance belongs to. | [optional]
**error_message** | **string** | An error message in case a Java Serialized Object could not be de-serialized. | [optional]
**value** | **object** | The variable&#39;s value. Value differs depending on the variable&#39;s type and on the deserializeValues parameter. | [optional]
**type** | **string** | The value type of the variable. | [optional]
**value_info** | **array<string,object>** | A JSON object containing additional, value-type-dependent properties. For serialized variables of type Object, the following properties can be provided:  * &#x60;objectTypeName&#x60;: A string representation of the object&#39;s type name. * &#x60;serializationDataFormat&#x60;: The serialization format used to store the variable.  For serialized variables of type File, the following properties can be provided:  * &#x60;filename&#x60;: The name of the file. This is not the variable name but the name that will be used when downloading the file again. * &#x60;mimetype&#x60;: The MIME type of the file that is being uploaded. * &#x60;encoding&#x60;: The encoding of the file that is being uploaded.  The following property can be provided for all value types:  * &#x60;transient&#x60;: Indicates whether the variable should be transient or not. See [documentation](https://docs.camunda.org/manual/7.15/user-guide/process-engine/variables#transient-variables) for more informations. (Not applicable for &#x60;decision-definition&#x60; and &#x60; /process-instance/variables-async&#x60; endpoints) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
