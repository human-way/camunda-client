# # HistoricDecisionInputInstanceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the decision input value. | [optional]
**decision_instance_id** | **string** | The id of the decision instance the input value belongs to. | [optional]
**clause_id** | **string** | The id of the clause the input value belongs to. | [optional]
**clause_name** | **string** | The name of the clause the input value belongs to. | [optional]
**error_message** | **string** | An error message in case a Java Serialized Object could not be de-serialized. | [optional]
**type** | **string** | The value type of the variable. | [optional]
**create_time** | [**\DateTime**](\DateTime.md) | The time the variable was inserted.  [Default format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**removal_time** | [**\DateTime**](\DateTime.md) | The time after which the entry should be removed by the History Cleanup job. [Default format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**root_process_instance_id** | **string** | The process instance id of the root process instance that initiated the process containing this entry. | [optional]
**value** | **object** | The variable&#39;s value. Value differs depending on the variable&#39;s type and on the &#x60;disableCustomObjectDeserialization&#x60; parameter. | [optional]
**value_info** | **array<string,object>** | A JSON object containing additional, value-type-dependent properties.  For variables of type &#x60;Object&#x60;, the following properties are returned:  * &#x60;objectTypeName&#x60;: A string representation of the object&#39;s type name.  * &#x60;serializationDataFormat&#x60;: The serialization format used to store the variable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
