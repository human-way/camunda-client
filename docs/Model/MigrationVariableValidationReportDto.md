# # MigrationVariableValidationReportDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**failures** | **string[]** | A list of variable validation report messages. | [optional]
**value** | **object** | The variable&#39;s value. Value differs depending on the variable&#39;s type and on the deserializeValues parameter. | [optional]
**type** | **string** | The value type of the variable. | [optional]
**value_info** | **array<string,object>** | A JSON object containing additional, value-type-dependent properties. For serialized variables of type Object, the following properties can be provided:  * &#x60;objectTypeName&#x60;: A string representation of the object&#39;s type name. * &#x60;serializationDataFormat&#x60;: The serialization format used to store the variable.  For serialized variables of type File, the following properties can be provided:  * &#x60;filename&#x60;: The name of the file. This is not the variable name but the name that will be used when downloading the file again. * &#x60;mimetype&#x60;: The MIME type of the file that is being uploaded. * &#x60;encoding&#x60;: The encoding of the file that is being uploaded.  The following property can be provided for all value types:  * &#x60;transient&#x60;: Indicates whether the variable should be transient or not. See [documentation](https://docs.camunda.org/manual/latest/user-guide/process-engine/variables#transient-variables) for more informations. (Not applicable for &#x60;decision-definition&#x60;, &#x60; /process-instance/variables-async&#x60;, and &#x60;/migration/executeAsync&#x60; endpoints) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
