# # HistoricVariableInstanceQueryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**variable_name** | **string** | Filter by variable name. | [optional]
**variable_name_like** | **string** | Restrict to variables with a name like the parameter. | [optional]
**variable_value** | **object** | Filter by variable value. May be &#x60;String&#x60;, &#x60;Number&#x60; or &#x60;Boolean&#x60;. | [optional]
**variable_names_ignore_case** | **bool** | Match the variable name provided in &#x60;variableName&#x60; and &#x60;variableNameLike&#x60; case- insensitively. If set to &#x60;true&#x60; **variableName** and **variablename** are treated as equal. | [optional]
**variable_values_ignore_case** | **bool** | Match the variable value provided in &#x60;variableValue&#x60; case-insensitively. If set to &#x60;true&#x60; **variableValue** and **variablevalue** are treated as equal. | [optional]
**variable_type_in** | **string[]** | Only include historic variable instances which belong to one of the passed and comma- separated variable types. A list of all supported variable types can be found [here](https://docs.camunda.org/manual/latest/user-guide/process-engine/variables/#supported-variable-values). **Note:** All non-primitive variables are associated with the type &#39;serializable&#39;. | [optional]
**include_deleted** | **bool** | Include variables that has already been deleted during the execution. | [optional]
**process_instance_id** | **string** | Filter by the process instance the variable belongs to. | [optional]
**process_instance_id_in** | **string[]** | Only include historic variable instances which belong to one of the passed  process instance ids. | [optional]
**process_definition_id** | **string** | Filter by the process definition the variable belongs to. | [optional]
**process_definition_key** | **string** | Filter by a key of the process definition the variable belongs to. | [optional]
**execution_id_in** | **string[]** | Only include historic variable instances which belong to one of the passed and  execution ids. | [optional]
**case_instance_id** | **string** | Filter by the case instance the variable belongs to. | [optional]
**case_execution_id_in** | **string[]** | Only include historic variable instances which belong to one of the passed and  case execution ids. | [optional]
**case_activity_id_in** | **string[]** | Only include historic variable instances which belong to one of the passed and  case activity ids. | [optional]
**task_id_in** | **string[]** | Only include historic variable instances which belong to one of the passed and  task ids. | [optional]
**activity_instance_id_in** | **string[]** | Only include historic variable instances which belong to one of the passed and  activity instance ids. | [optional]
**tenant_id_in** | **string[]** | Only include historic variable instances which belong to one of the passed and comma- separated tenant ids. | [optional]
**without_tenant_id** | **bool** | Only include historic variable instances that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**sorting** | [**\OpenAPI\Client\Model\HistoricVariableInstanceQueryDtoSorting[]**](HistoricVariableInstanceQueryDtoSorting.md) | An array of criteria to sort the result by. Each element of the array is                      an object that specifies one ordering. The position in the array                      identifies the rank of an ordering, i.e., whether it is primary, secondary,                      etc. Sorting has no effect for &#x60;count&#x60; endpoints | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
