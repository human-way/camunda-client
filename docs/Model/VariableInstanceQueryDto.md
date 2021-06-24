# # VariableInstanceQueryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**variable_name** | **string** | Filter by variable instance name. | [optional]
**variable_name_like** | **string** | Filter by the variable instance name. The parameter can include the wildcard &#x60;%&#x60; to express like-strategy such as: starts with (&#x60;%&#x60;name), ends with (name&#x60;%&#x60;) or contains (&#x60;%&#x60;name&#x60;%&#x60;). | [optional]
**process_instance_id_in** | **string[]** | Only include variable instances which belong to one of the passed  process instance ids. | [optional]
**execution_id_in** | **string[]** | Only include variable instances which belong to one of the passed  execution ids. | [optional]
**case_instance_id_in** | **string[]** | Only include variable instances which belong to one of the passed  case instance ids. | [optional]
**case_execution_id_in** | **string[]** | Only include variable instances which belong to one of the passed  case execution ids. | [optional]
**task_id_in** | **string[]** | Only include variable instances which belong to one of the passed  task ids. | [optional]
**batch_id_in** | **string[]** | Only include variable instances which belong to one of the passed  batch ids. | [optional]
**activity_instance_id_in** | **string[]** | Only include variable instances which belong to one of the passed  activity instance ids. | [optional]
**tenant_id_in** | **string[]** | Only include variable instances which belong to one of the passed  tenant ids. | [optional]
**variable_values** | [**\OpenAPI\Client\Model\VariableQueryParameterDto[]**](VariableQueryParameterDto.md) | An array to only include variable instances that have the certain values. The array consists of objects with the three properties &#x60;name&#x60;, &#x60;operator&#x60; and &#x60;value&#x60;. &#x60;name (String)&#x60; is the variable name, &#x60;operator (String)&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value. &#x60;value&#x60; may be &#x60;String&#x60;, &#x60;Number&#x60; or &#x60;Boolean&#x60;.  Valid operator values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60; | [optional]
**variable_names_ignore_case** | **bool** | Match all variable names provided in &#x60;variableValues&#x60; case-insensitively. If set to &#x60;true&#x60; **variableName** and **variablename** are treated as equal. | [optional]
**variable_values_ignore_case** | **bool** | Match all variable values provided in &#x60;variableValues&#x60; case-insensitively. If set to &#x60;true&#x60; **variableValue** and **variablevalue** are treated as equal. | [optional]
**sorting** | [**\OpenAPI\Client\Model\VariableInstanceQueryDtoSorting[]**](VariableInstanceQueryDtoSorting.md) | An array of criteria to sort the result by. Each element of the array is an object that specifies one ordering.                       The position in the array identifies the rank of an ordering, i.e., whether it is primary, secondary, etc.                       Sorting has no effect for &#x60;count&#x60; endpoints | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
