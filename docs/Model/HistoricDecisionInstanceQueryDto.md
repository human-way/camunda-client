# # HistoricDecisionInstanceQueryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**decision_instance_id** | **string** | Filter by decision instance id. | [optional]
**decision_instance_id_in** | **string[]** | Filter by decision instance ids. Must be a comma-separated list of decision instance ids. | [optional]
**decision_definition_id** | **string** | Filter by the decision definition the instances belongs to. | [optional]
**decision_definition_id_in** | **string[]** | Filter by the decision definitions the instances belongs to. Must be a comma-separated list of decision definition ids. | [optional]
**decision_definition_key** | **string** | Filter by the key of the decision definition the instances belongs to. | [optional]
**decision_definition_key_in** | **string[]** | Filter by the keys of the decision definition the instances belongs to. Must be a comma- separated list of decision definition keys. | [optional]
**decision_definition_name** | **string** | Filter by the name of the decision definition the instances belongs to. | [optional]
**decision_definition_name_like** | **string** | Filter by the name of the decision definition the instances belongs to, that the parameter is a substring of. | [optional]
**process_definition_id** | **string** | Filter by the process definition the instances belongs to. | [optional]
**process_definition_key** | **string** | Filter by the key of the process definition the instances belongs to. | [optional]
**process_instance_id** | **string** | Filter by the process instance the instances belongs to. | [optional]
**case_definition_id** | **string** | Filter by the case definition the instances belongs to. | [optional]
**case_definition_key** | **string** | Filter by the key of the case definition the instances belongs to. | [optional]
**case_instance_id** | **string** | Filter by the case instance the instances belongs to. | [optional]
**activity_id_in** | **string[]** | Filter by the activity ids the instances belongs to. Must be a comma-separated list of acitvity ids. | [optional]
**activity_instance_id_in** | **string[]** | Filter by the activity instance ids the instances belongs to. Must be a comma-separated list of acitvity instance ids. | [optional]
**tenant_id_in** | **string[]** | Filter by a comma-separated list of tenant ids. A historic decision instance must have one of the given tenant ids. | [optional]
**without_tenant_id** | **bool** | Only include historic decision instances that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**evaluated_before** | [**\DateTime**](\DateTime.md) | Restrict to instances that were evaluated before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM- dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
**evaluated_after** | [**\DateTime**](\DateTime.md) | Restrict to instances that were evaluated after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM- dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
**user_id** | **string** | Restrict to instances that were evaluated by the given user. | [optional]
**root_decision_instance_id** | **string** | Restrict to instances that have a given root decision instance id. This also includes the decision instance with the given id. | [optional]
**root_decision_instances_only** | **bool** | Restrict to instances those are the root decision instance of an evaluation. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**decision_requirements_definition_id** | **string** | Filter by the decision requirements definition the instances belongs to. | [optional]
**decision_requirements_definition_key** | **string** | Filter by the key of the decision requirements definition the instances belongs to. | [optional]
**include_inputs** | **bool** | Include input values in the result. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**include_outputs** | **bool** | Include output values in the result. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**disable_binary_fetching** | **bool** | Disables fetching of byte array input and output values. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**disable_custom_object_deserialization** | **bool** | Disables deserialization of input and output values that are custom objects. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
