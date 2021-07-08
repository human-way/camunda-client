# OpenAPI\Client\ExecutionApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createIncident()**](ExecutionApi.md#createIncident) | **POST** /execution/{id}/create-incident | Create Incident
[**deleteLocalExecutionVariable()**](ExecutionApi.md#deleteLocalExecutionVariable) | **DELETE** /execution/{id}/localVariables/{varName} | Delete Local Execution Variable
[**getExecution()**](ExecutionApi.md#getExecution) | **GET** /execution/{id} | Get Execution
[**getExecutions()**](ExecutionApi.md#getExecutions) | **GET** /execution | Get Executions
[**getExecutionsCount()**](ExecutionApi.md#getExecutionsCount) | **GET** /execution/count | Get Execution Count
[**getLocalExecutionVariable()**](ExecutionApi.md#getLocalExecutionVariable) | **GET** /execution/{id}/localVariables/{varName} | Get Local Execution Variable
[**getLocalExecutionVariableBinary()**](ExecutionApi.md#getLocalExecutionVariableBinary) | **GET** /execution/{id}/localVariables/{varName}/data | Get Local Execution Variable (Binary)
[**getLocalExecutionVariables()**](ExecutionApi.md#getLocalExecutionVariables) | **GET** /execution/{id}/localVariables | Get Local Execution Variables
[**getMessageEventSubscription()**](ExecutionApi.md#getMessageEventSubscription) | **GET** /execution/{id}/messageSubscriptions/{messageName} | Get Message Event Subscription
[**modifyLocalExecutionVariables()**](ExecutionApi.md#modifyLocalExecutionVariables) | **POST** /execution/{id}/localVariables | Update/Delete Local Execution Variables
[**putLocalExecutionVariable()**](ExecutionApi.md#putLocalExecutionVariable) | **PUT** /execution/{id}/localVariables/{varName} | Put Local Execution Variable
[**queryExecutions()**](ExecutionApi.md#queryExecutions) | **POST** /execution | Get Executions (POST)
[**queryExecutionsCount()**](ExecutionApi.md#queryExecutionsCount) | **POST** /execution/count | Get Execution Count (POST)
[**setLocalExecutionVariableBinary()**](ExecutionApi.md#setLocalExecutionVariableBinary) | **POST** /execution/{id}/localVariables/{varName}/data | Post Local Execution Variable (Binary)
[**signalExecution()**](ExecutionApi.md#signalExecution) | **POST** /execution/{id}/signal | Trigger Execution
[**triggerEvent()**](ExecutionApi.md#triggerEvent) | **POST** /execution/{id}/messageSubscriptions/{messageName}/trigger | Trigger Message Event Subscription


## `createIncident()`

```php
createIncident($id, $create_incident_dto): \OpenAPI\Client\Model\IncidentDto
```

Create Incident

Creates a custom incident with given properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the execution to create a new incident for.
$create_incident_dto = {"incidentType":"aType","configuration":"aConfiguration"}; // \OpenAPI\Client\Model\CreateIncidentDto

try {
    $result = $apiInstance->createIncident($id, $create_incident_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->createIncident: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the execution to create a new incident for. |
 **create_incident_dto** | [**\OpenAPI\Client\Model\CreateIncidentDto**](../Model/CreateIncidentDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\IncidentDto**](../Model/IncidentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLocalExecutionVariable()`

```php
deleteLocalExecutionVariable($id, $var_name)
```

Delete Local Execution Variable

Deletes a variable in the context of a given execution by id. Deletion does not propagate upwards in the execution hierarchy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the execution to delete the variable from.
$var_name = 'var_name_example'; // string | The name of the variable to delete.

try {
    $apiInstance->deleteLocalExecutionVariable($id, $var_name);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->deleteLocalExecutionVariable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the execution to delete the variable from. |
 **var_name** | **string**| The name of the variable to delete. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExecution()`

```php
getExecution($id): \OpenAPI\Client\Model\ExecutionDto
```

Get Execution

Retrieves an execution by id, according to the `Execution` interface in the engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the execution to be retrieved.

try {
    $result = $apiInstance->getExecution($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->getExecution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the execution to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\ExecutionDto**](../Model/ExecutionDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExecutions()`

```php
getExecutions($business_key, $process_definition_id, $process_definition_key, $process_instance_id, $activity_id, $signal_event_subscription_name, $message_event_subscription_name, $active, $suspended, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $variables, $process_variables, $variable_names_ignore_case, $variable_values_ignore_case, $sort_by, $sort_order, $first_result, $max_results): \OpenAPI\Client\Model\ExecutionDto[]
```

Get Executions

Queries for the executions that fulfill given parameters. Parameters may be static as well as dynamic runtime properties of executions. The size of the result set can be retrieved by using the [Get Execution Count](https://docs.camunda.org/manual/latest/reference/rest/execution/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$business_key = 'business_key_example'; // string | Filter by the business key of the process instances the executions belong to.
$process_definition_id = 'process_definition_id_example'; // string | Filter by the process definition the executions run on.
$process_definition_key = 'process_definition_key_example'; // string | Filter by the key of the process definition the executions run on.
$process_instance_id = 'process_instance_id_example'; // string | Filter by the id of the process instance the execution belongs to.
$activity_id = 'activity_id_example'; // string | Filter by the id of the activity the execution currently executes.
$signal_event_subscription_name = 'signal_event_subscription_name_example'; // string | Select only those executions that expect a signal of the given name.
$message_event_subscription_name = 'message_event_subscription_name_example'; // string | Select only those executions that expect a message of the given name.
$active = True; // bool | Only include active executions. Value may only be `true`, as `false` is the default behavior.
$suspended = True; // bool | Only include suspended executions. Value may only be `true`, as `false` is the default behavior.
$incident_id = 'incident_id_example'; // string | Filter by the incident id.
$incident_type = 'incident_type_example'; // string | Filter by the incident type. See the [User Guide](/manual/develop/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$incident_message = 'incident_message_example'; // string | Filter by the incident message. Exact match.
$incident_message_like = 'incident_message_like_example'; // string | Filter by the incident message that the parameter is a substring of.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids. An execution must have one of the given tenant ids.
$variables = 'variables_example'; // string | Only include executions that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value. **Note:** Values are always treated as `String` objects on server side.  Valid operator values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`. `key` and `value` may not contain underscore or comma characters.
$process_variables = 'process_variables_example'; // string | Only include executions that belong to a process instance with variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value. **Note:** Values are always treated as `String` objects on server side.  Valid operator values are: `eq` - equal to; `neq` - not equal to. `key` and `value` may not contain underscore or comma characters.
$variable_names_ignore_case = True; // bool | Match all variable names provided in `variables` and `processVariables` case- insensitively. If set to `true` **variableName** and **variablename** are treated as equal.
$variable_values_ignore_case = True; // bool | Match all variable values provided in `variables` and `processVariables` case- insensitively. If set to `true` **variableValue** and **variablevalue** are treated as equal.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getExecutions($business_key, $process_definition_id, $process_definition_key, $process_instance_id, $activity_id, $signal_event_subscription_name, $message_event_subscription_name, $active, $suspended, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $variables, $process_variables, $variable_names_ignore_case, $variable_values_ignore_case, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->getExecutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_key** | **string**| Filter by the business key of the process instances the executions belong to. | [optional]
 **process_definition_id** | **string**| Filter by the process definition the executions run on. | [optional]
 **process_definition_key** | **string**| Filter by the key of the process definition the executions run on. | [optional]
 **process_instance_id** | **string**| Filter by the id of the process instance the execution belongs to. | [optional]
 **activity_id** | **string**| Filter by the id of the activity the execution currently executes. | [optional]
 **signal_event_subscription_name** | **string**| Select only those executions that expect a signal of the given name. | [optional]
 **message_event_subscription_name** | **string**| Select only those executions that expect a message of the given name. | [optional]
 **active** | **bool**| Only include active executions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| Only include suspended executions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **incident_id** | **string**| Filter by the incident id. | [optional]
 **incident_type** | **string**| Filter by the incident type. See the [User Guide](/manual/develop/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **incident_message** | **string**| Filter by the incident message. Exact match. | [optional]
 **incident_message_like** | **string**| Filter by the incident message that the parameter is a substring of. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. An execution must have one of the given tenant ids. | [optional]
 **variables** | **string**| Only include executions that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value. **Note:** Values are always treated as &#x60;String&#x60; objects on server side.  Valid operator values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **process_variables** | **string**| Only include executions that belong to a process instance with variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value. **Note:** Values are always treated as &#x60;String&#x60; objects on server side.  Valid operator values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **variable_names_ignore_case** | **bool**| Match all variable names provided in &#x60;variables&#x60; and &#x60;processVariables&#x60; case- insensitively. If set to &#x60;true&#x60; **variableName** and **variablename** are treated as equal. | [optional]
 **variable_values_ignore_case** | **bool**| Match all variable values provided in &#x60;variables&#x60; and &#x60;processVariables&#x60; case- insensitively. If set to &#x60;true&#x60; **variableValue** and **variablevalue** are treated as equal. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\OpenAPI\Client\Model\ExecutionDto[]**](../Model/ExecutionDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExecutionsCount()`

```php
getExecutionsCount($business_key, $process_definition_id, $process_definition_key, $process_instance_id, $activity_id, $signal_event_subscription_name, $message_event_subscription_name, $active, $suspended, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $variables, $process_variables, $variable_names_ignore_case, $variable_values_ignore_case): \OpenAPI\Client\Model\CountResultDto
```

Get Execution Count

Queries for the number of executions that fulfill given parameters. Takes the same parameters as the [Get Executions](https://docs.camunda.org/manual/latest/reference/rest/execution/get-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$business_key = 'business_key_example'; // string | Filter by the business key of the process instances the executions belong to.
$process_definition_id = 'process_definition_id_example'; // string | Filter by the process definition the executions run on.
$process_definition_key = 'process_definition_key_example'; // string | Filter by the key of the process definition the executions run on.
$process_instance_id = 'process_instance_id_example'; // string | Filter by the id of the process instance the execution belongs to.
$activity_id = 'activity_id_example'; // string | Filter by the id of the activity the execution currently executes.
$signal_event_subscription_name = 'signal_event_subscription_name_example'; // string | Select only those executions that expect a signal of the given name.
$message_event_subscription_name = 'message_event_subscription_name_example'; // string | Select only those executions that expect a message of the given name.
$active = True; // bool | Only include active executions. Value may only be `true`, as `false` is the default behavior.
$suspended = True; // bool | Only include suspended executions. Value may only be `true`, as `false` is the default behavior.
$incident_id = 'incident_id_example'; // string | Filter by the incident id.
$incident_type = 'incident_type_example'; // string | Filter by the incident type. See the [User Guide](/manual/develop/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$incident_message = 'incident_message_example'; // string | Filter by the incident message. Exact match.
$incident_message_like = 'incident_message_like_example'; // string | Filter by the incident message that the parameter is a substring of.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids. An execution must have one of the given tenant ids.
$variables = 'variables_example'; // string | Only include executions that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value. **Note:** Values are always treated as `String` objects on server side.  Valid operator values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`. `key` and `value` may not contain underscore or comma characters.
$process_variables = 'process_variables_example'; // string | Only include executions that belong to a process instance with variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value. **Note:** Values are always treated as `String` objects on server side.  Valid operator values are: `eq` - equal to; `neq` - not equal to. `key` and `value` may not contain underscore or comma characters.
$variable_names_ignore_case = True; // bool | Match all variable names provided in `variables` and `processVariables` case- insensitively. If set to `true` **variableName** and **variablename** are treated as equal.
$variable_values_ignore_case = True; // bool | Match all variable values provided in `variables` and `processVariables` case- insensitively. If set to `true` **variableValue** and **variablevalue** are treated as equal.

try {
    $result = $apiInstance->getExecutionsCount($business_key, $process_definition_id, $process_definition_key, $process_instance_id, $activity_id, $signal_event_subscription_name, $message_event_subscription_name, $active, $suspended, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $variables, $process_variables, $variable_names_ignore_case, $variable_values_ignore_case);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->getExecutionsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_key** | **string**| Filter by the business key of the process instances the executions belong to. | [optional]
 **process_definition_id** | **string**| Filter by the process definition the executions run on. | [optional]
 **process_definition_key** | **string**| Filter by the key of the process definition the executions run on. | [optional]
 **process_instance_id** | **string**| Filter by the id of the process instance the execution belongs to. | [optional]
 **activity_id** | **string**| Filter by the id of the activity the execution currently executes. | [optional]
 **signal_event_subscription_name** | **string**| Select only those executions that expect a signal of the given name. | [optional]
 **message_event_subscription_name** | **string**| Select only those executions that expect a message of the given name. | [optional]
 **active** | **bool**| Only include active executions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| Only include suspended executions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **incident_id** | **string**| Filter by the incident id. | [optional]
 **incident_type** | **string**| Filter by the incident type. See the [User Guide](/manual/develop/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **incident_message** | **string**| Filter by the incident message. Exact match. | [optional]
 **incident_message_like** | **string**| Filter by the incident message that the parameter is a substring of. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. An execution must have one of the given tenant ids. | [optional]
 **variables** | **string**| Only include executions that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value. **Note:** Values are always treated as &#x60;String&#x60; objects on server side.  Valid operator values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **process_variables** | **string**| Only include executions that belong to a process instance with variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value. **Note:** Values are always treated as &#x60;String&#x60; objects on server side.  Valid operator values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **variable_names_ignore_case** | **bool**| Match all variable names provided in &#x60;variables&#x60; and &#x60;processVariables&#x60; case- insensitively. If set to &#x60;true&#x60; **variableName** and **variablename** are treated as equal. | [optional]
 **variable_values_ignore_case** | **bool**| Match all variable values provided in &#x60;variables&#x60; and &#x60;processVariables&#x60; case- insensitively. If set to &#x60;true&#x60; **variableValue** and **variablevalue** are treated as equal. | [optional]

### Return type

[**\OpenAPI\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocalExecutionVariable()`

```php
getLocalExecutionVariable($id, $var_name, $deserialize_value): \OpenAPI\Client\Model\VariableValueDto
```

Get Local Execution Variable

Retrieves a variable from the context of a given execution by id. Does not traverse the parent execution hierarchy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the execution to retrieve the variable from.
$var_name = 'var_name_example'; // string | The name of the variable to get.
$deserialize_value = True; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default `true`).  If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath. If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getLocalExecutionVariable($id, $var_name, $deserialize_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->getLocalExecutionVariable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the execution to retrieve the variable from. |
 **var_name** | **string**| The name of the variable to get. |
 **deserialize_value** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default &#x60;true&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#39;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#39;s classpath. If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional]

### Return type

[**\OpenAPI\Client\Model\VariableValueDto**](../Model/VariableValueDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocalExecutionVariableBinary()`

```php
getLocalExecutionVariableBinary($id, $var_name): \SplFileObject
```

Get Local Execution Variable (Binary)

Retrieves a binary variable from the context of a given execution by id. Does not traverse the parent execution hierarchy. Applicable for byte array and file variables.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the execution to retrieve the variable from.
$var_name = 'var_name_example'; // string | The name of the variable to get.

try {
    $result = $apiInstance->getLocalExecutionVariableBinary($id, $var_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->getLocalExecutionVariableBinary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the execution to retrieve the variable from. |
 **var_name** | **string**| The name of the variable to get. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocalExecutionVariables()`

```php
getLocalExecutionVariables($id, $deserialize_values): array<string,\OpenAPI\Client\Model\VariableValueDto>
```

Get Local Execution Variables

Retrieves all variables of a given execution by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the execution to retrieve the variables from.
$deserialize_values = True; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default `true`).  If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getLocalExecutionVariables($id, $deserialize_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->getLocalExecutionVariables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the execution to retrieve the variables from. |
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default &#x60;true&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#39;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#39;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional]

### Return type

[**array<string,\OpenAPI\Client\Model\VariableValueDto>**](../Model/VariableValueDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessageEventSubscription()`

```php
getMessageEventSubscription($id, $message_name): \OpenAPI\Client\Model\EventSubscriptionDto
```

Get Message Event Subscription

Retrieves a message event subscription for a given execution by id and a message name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the execution that holds the subscription.
$message_name = 'message_name_example'; // string | The name of the message that the subscription corresponds to.

try {
    $result = $apiInstance->getMessageEventSubscription($id, $message_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->getMessageEventSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the execution that holds the subscription. |
 **message_name** | **string**| The name of the message that the subscription corresponds to. |

### Return type

[**\OpenAPI\Client\Model\EventSubscriptionDto**](../Model/EventSubscriptionDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyLocalExecutionVariables()`

```php
modifyLocalExecutionVariables($id, $patch_variables_dto)
```

Update/Delete Local Execution Variables

Updates or deletes the variables in the context of an execution by id. The updates do not propagate upwards in the execution hierarchy. Updates precede deletions. So, if a variable is updated AND deleted, the deletion overrides the update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the execution to set variables for.
$patch_variables_dto = {"modifications":{"aVariable":{"value":"aValue","type":"String"},"anotherVariable":{"value":42,"type":"Integer"}},"deletions":["aThirdVariable","FourthVariable"]}; // \OpenAPI\Client\Model\PatchVariablesDto

try {
    $apiInstance->modifyLocalExecutionVariables($id, $patch_variables_dto);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->modifyLocalExecutionVariables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the execution to set variables for. |
 **patch_variables_dto** | [**\OpenAPI\Client\Model\PatchVariablesDto**](../Model/PatchVariablesDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putLocalExecutionVariable()`

```php
putLocalExecutionVariable($id, $var_name, $variable_value_dto)
```

Put Local Execution Variable

Sets a variable in the context of a given execution by id. Update does not propagate upwards in the execution hierarchy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the execution to set the variable for.
$var_name = 'var_name_example'; // string | The name of the variable to set.
$variable_value_dto = {"value":"someValue","type":"String"}; // \OpenAPI\Client\Model\VariableValueDto

try {
    $apiInstance->putLocalExecutionVariable($id, $var_name, $variable_value_dto);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->putLocalExecutionVariable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the execution to set the variable for. |
 **var_name** | **string**| The name of the variable to set. |
 **variable_value_dto** | [**\OpenAPI\Client\Model\VariableValueDto**](../Model/VariableValueDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryExecutions()`

```php
queryExecutions($first_result, $max_results, $execution_query_dto): \OpenAPI\Client\Model\ExecutionDto[]
```

Get Executions (POST)

Queries for executions that fulfill given parameters through a JSON object. This method is slightly more powerful than the [Get Executions](https://docs.camunda.org/manual/latest/reference/rest/execution/get-query/) method because it allows to filter by multiple instance and execution variables of types `String`, `Number` or `Boolean`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$execution_query_dto = {"variables":[{"name":"myVariable","operator":"eq","value":"camunda"},{"name":"mySecondVariable","operator":"neq","value":124}],"processDefinitionId":"aProcessDefinitionId","sorting":[{"sortBy":"definitionKey","sortOrder":"asc"},{"sortBy":"instanceId","sortOrder":"desc"}]}; // \OpenAPI\Client\Model\ExecutionQueryDto

try {
    $result = $apiInstance->queryExecutions($first_result, $max_results, $execution_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->queryExecutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **execution_query_dto** | [**\OpenAPI\Client\Model\ExecutionQueryDto**](../Model/ExecutionQueryDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ExecutionDto[]**](../Model/ExecutionDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryExecutionsCount()`

```php
queryExecutionsCount($execution_query_dto): \OpenAPI\Client\Model\CountResultDto
```

Get Execution Count (POST)

Queries for the number of executions that fulfill given parameters. This method takes the same message body as the [Get Executions POST](https://docs.camunda.org/manual/latest/reference/rest/execution/post-query/) method and therefore it is slightly more powerful than the [Get Execution Count](https://docs.camunda.org/manual/latest/reference/rest/execution/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$execution_query_dto = {"variables":[{"name":"myVariable","operator":"eq","value":"camunda"},{"name":"mySecondVariable","operator":"neq","value":124}],"processDefinitionId":"aProcessDefinitionId"}; // \OpenAPI\Client\Model\ExecutionQueryDto

try {
    $result = $apiInstance->queryExecutionsCount($execution_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->queryExecutionsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **execution_query_dto** | [**\OpenAPI\Client\Model\ExecutionQueryDto**](../Model/ExecutionQueryDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setLocalExecutionVariableBinary()`

```php
setLocalExecutionVariableBinary($id, $var_name, $data, $value_type)
```

Post Local Execution Variable (Binary)

Sets the serialized value for a binary variable or the binary value for a file variable in the context of a given execution by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the execution to set the variable for.
$var_name = 'var_name_example'; // string | The name of the variable to set.
$data = "/path/to/file.txt"; // \SplFileObject | The binary data to be set. For File variables, this multipart can contain the filename, binary value and MIME type of the file variable to be set Only the filename is mandatory.
$value_type = 'value_type_example'; // string | The name of the variable type. Either Bytes for a byte array variable or File for a file variable.

try {
    $apiInstance->setLocalExecutionVariableBinary($id, $var_name, $data, $value_type);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->setLocalExecutionVariableBinary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the execution to set the variable for. |
 **var_name** | **string**| The name of the variable to set. |
 **data** | **\SplFileObject****\SplFileObject**| The binary data to be set. For File variables, this multipart can contain the filename, binary value and MIME type of the file variable to be set Only the filename is mandatory. | [optional]
 **value_type** | **string**| The name of the variable type. Either Bytes for a byte array variable or File for a file variable. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signalExecution()`

```php
signalExecution($id, $execution_trigger_dto)
```

Trigger Execution

Signals an execution by id. Can for example be used to explicitly skip user tasks or signal asynchronous continuations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the execution to signal.
$execution_trigger_dto = {"variables":{"myVariable":{"value":"camunda","type":"String"},"mySecondVariable":{"value":124,"type":"Integer"}}}; // \OpenAPI\Client\Model\ExecutionTriggerDto

try {
    $apiInstance->signalExecution($id, $execution_trigger_dto);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->signalExecution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the execution to signal. |
 **execution_trigger_dto** | [**\OpenAPI\Client\Model\ExecutionTriggerDto**](../Model/ExecutionTriggerDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `triggerEvent()`

```php
triggerEvent($id, $message_name, $execution_trigger_dto)
```

Trigger Message Event Subscription

Delivers a message to a specific execution by id, to trigger an existing message event subscription. Inject process variables as the message's payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExecutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the execution to submit the message to.
$message_name = 'message_name_example'; // string | The name of the message that the addressed subscription corresponds to.
$execution_trigger_dto = {"variables":{"aVariable":{"value":true,"type":"Boolean"},"anotherVariable":{"value":42,"type":"Integer"}}}; // \OpenAPI\Client\Model\ExecutionTriggerDto

try {
    $apiInstance->triggerEvent($id, $message_name, $execution_trigger_dto);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionApi->triggerEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the execution to submit the message to. |
 **message_name** | **string**| The name of the message that the addressed subscription corresponds to. |
 **execution_trigger_dto** | [**\OpenAPI\Client\Model\ExecutionTriggerDto**](../Model/ExecutionTriggerDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
