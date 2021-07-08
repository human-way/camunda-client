# OpenAPI\Client\HistoricVariableInstanceApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteHistoricVariableInstance()**](HistoricVariableInstanceApi.md#deleteHistoricVariableInstance) | **DELETE** /history/variable-instance/{id} | Delete Variable Instance
[**getHistoricVariableInstance()**](HistoricVariableInstanceApi.md#getHistoricVariableInstance) | **GET** /history/variable-instance/{id} | Get Variable Instance
[**getHistoricVariableInstanceBinary()**](HistoricVariableInstanceApi.md#getHistoricVariableInstanceBinary) | **GET** /history/variable-instance/{id}/data | Get Variable Instance (Binary)
[**getHistoricVariableInstances()**](HistoricVariableInstanceApi.md#getHistoricVariableInstances) | **GET** /history/variable-instance | Get Variable Instances
[**getHistoricVariableInstancesCount()**](HistoricVariableInstanceApi.md#getHistoricVariableInstancesCount) | **GET** /history/variable-instance/count | Get Variable Instance Count
[**queryHistoricVariableInstances()**](HistoricVariableInstanceApi.md#queryHistoricVariableInstances) | **POST** /history/variable-instance | Get Variable Instances (POST)
[**queryHistoricVariableInstancesCount()**](HistoricVariableInstanceApi.md#queryHistoricVariableInstancesCount) | **POST** /history/variable-instance/count | Get Variable Instance Count (POST)


## `deleteHistoricVariableInstance()`

```php
deleteHistoricVariableInstance($id)
```

Delete Variable Instance

Deletes a historic variable instance by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricVariableInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the variable instance.

try {
    $apiInstance->deleteHistoricVariableInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling HistoricVariableInstanceApi->deleteHistoricVariableInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the variable instance. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricVariableInstance()`

```php
getHistoricVariableInstance($id, $deserialize_values): \OpenAPI\Client\Model\HistoricVariableInstanceDto
```

Get Variable Instance

Retrieves a historic variable by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricVariableInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the variable instance.
$deserialize_values = True; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default `true`).  If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getHistoricVariableInstance($id, $deserialize_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricVariableInstanceApi->getHistoricVariableInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the variable instance. |
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default &#x60;true&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#39;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#39;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional]

### Return type

[**\OpenAPI\Client\Model\HistoricVariableInstanceDto**](../Model/HistoricVariableInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricVariableInstanceBinary()`

```php
getHistoricVariableInstanceBinary($id): \SplFileObject
```

Get Variable Instance (Binary)

Retrieves the content of a historic variable by id. Applicable for variables that are serialized as binary data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricVariableInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the variable instance.

try {
    $result = $apiInstance->getHistoricVariableInstanceBinary($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricVariableInstanceApi->getHistoricVariableInstanceBinary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the variable instance. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricVariableInstances()`

```php
getHistoricVariableInstances($variable_name, $variable_name_like, $variable_value, $variable_names_ignore_case, $variable_values_ignore_case, $variable_type_in, $include_deleted, $process_instance_id, $process_instance_id_in, $process_definition_id, $process_definition_key, $execution_id_in, $case_instance_id, $case_execution_id_in, $case_activity_id_in, $task_id_in, $activity_instance_id_in, $tenant_id_in, $without_tenant_id, $sort_by, $sort_order, $first_result, $max_results, $deserialize_values): \OpenAPI\Client\Model\HistoricVariableInstanceDto[]
```

Get Variable Instances

Queries for historic variable instances that fulfill the given parameters. The size of the result set can be retrieved by using the [Get Variable Instance Count](https://docs.camunda.org/manual/latest/reference/rest/history/variable-instance/get-variable-instance-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricVariableInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$variable_name = 'variable_name_example'; // string | Filter by variable name.
$variable_name_like = 'variable_name_like_example'; // string | Restrict to variables with a name like the parameter.
$variable_value = new \stdClass; // object | Filter by variable value. Is treated as a `String` object on server side.
$variable_names_ignore_case = True; // bool | Match the variable name provided in `variableName` and `variableNameLike` case- insensitively. If set to `true` **variableName** and **variablename** are treated as equal.
$variable_values_ignore_case = True; // bool | Match the variable value provided in `variableValue` case-insensitively. If set to `true` **variableValue** and **variablevalue** are treated as equal.
$variable_type_in = 'variable_type_in_example'; // string | Only include historic variable instances which belong to one of the passed and comma- separated variable types. A list of all supported variable types can be found [here](https://docs.camunda.org/manual/latest/user-guide/process-engine/variables/#supported-variable-values). **Note:** All non-primitive variables are associated with the type 'serializable'.
$include_deleted = True; // bool | Include variables that has already been deleted during the execution.
$process_instance_id = 'process_instance_id_example'; // string | Filter by the process instance the variable belongs to.
$process_instance_id_in = 'process_instance_id_in_example'; // string | Only include historic variable instances which belong to one of the passed and comma-separated process instance ids.
$process_definition_id = 'process_definition_id_example'; // string | Filter by the process definition the variable belongs to.
$process_definition_key = 'process_definition_key_example'; // string | Filter by a key of the process definition the variable belongs to.
$execution_id_in = 'execution_id_in_example'; // string | Only include historic variable instances which belong to one of the passed and and comma-separated execution ids.
$case_instance_id = 'case_instance_id_example'; // string | Filter by the case instance the variable belongs to.
$case_execution_id_in = 'case_execution_id_in_example'; // string | Only include historic variable instances which belong to one of the passed and and comma-separated case execution ids.
$case_activity_id_in = 'case_activity_id_in_example'; // string | Only include historic variable instances which belong to one of the passed and and comma-separated case activity ids.
$task_id_in = 'task_id_in_example'; // string | Only include historic variable instances which belong to one of the passed and and comma-separated task ids.
$activity_instance_id_in = 'activity_instance_id_in_example'; // string | Only include historic variable instances which belong to one of the passed and and comma-separated activity instance ids.
$tenant_id_in = 'tenant_id_in_example'; // string | Only include historic variable instances which belong to one of the passed and comma- separated tenant ids.
$without_tenant_id = True; // bool | Only include historic variable instances that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$deserialize_values = True; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default `true`).  If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getHistoricVariableInstances($variable_name, $variable_name_like, $variable_value, $variable_names_ignore_case, $variable_values_ignore_case, $variable_type_in, $include_deleted, $process_instance_id, $process_instance_id_in, $process_definition_id, $process_definition_key, $execution_id_in, $case_instance_id, $case_execution_id_in, $case_activity_id_in, $task_id_in, $activity_instance_id_in, $tenant_id_in, $without_tenant_id, $sort_by, $sort_order, $first_result, $max_results, $deserialize_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricVariableInstanceApi->getHistoricVariableInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_name** | **string**| Filter by variable name. | [optional]
 **variable_name_like** | **string**| Restrict to variables with a name like the parameter. | [optional]
 **variable_value** | [**object**](../Model/.md)| Filter by variable value. Is treated as a &#x60;String&#x60; object on server side. | [optional]
 **variable_names_ignore_case** | **bool**| Match the variable name provided in &#x60;variableName&#x60; and &#x60;variableNameLike&#x60; case- insensitively. If set to &#x60;true&#x60; **variableName** and **variablename** are treated as equal. | [optional]
 **variable_values_ignore_case** | **bool**| Match the variable value provided in &#x60;variableValue&#x60; case-insensitively. If set to &#x60;true&#x60; **variableValue** and **variablevalue** are treated as equal. | [optional]
 **variable_type_in** | **string**| Only include historic variable instances which belong to one of the passed and comma- separated variable types. A list of all supported variable types can be found [here](https://docs.camunda.org/manual/latest/user-guide/process-engine/variables/#supported-variable-values). **Note:** All non-primitive variables are associated with the type &#39;serializable&#39;. | [optional]
 **include_deleted** | **bool**| Include variables that has already been deleted during the execution. | [optional]
 **process_instance_id** | **string**| Filter by the process instance the variable belongs to. | [optional]
 **process_instance_id_in** | **string**| Only include historic variable instances which belong to one of the passed and comma-separated process instance ids. | [optional]
 **process_definition_id** | **string**| Filter by the process definition the variable belongs to. | [optional]
 **process_definition_key** | **string**| Filter by a key of the process definition the variable belongs to. | [optional]
 **execution_id_in** | **string**| Only include historic variable instances which belong to one of the passed and and comma-separated execution ids. | [optional]
 **case_instance_id** | **string**| Filter by the case instance the variable belongs to. | [optional]
 **case_execution_id_in** | **string**| Only include historic variable instances which belong to one of the passed and and comma-separated case execution ids. | [optional]
 **case_activity_id_in** | **string**| Only include historic variable instances which belong to one of the passed and and comma-separated case activity ids. | [optional]
 **task_id_in** | **string**| Only include historic variable instances which belong to one of the passed and and comma-separated task ids. | [optional]
 **activity_instance_id_in** | **string**| Only include historic variable instances which belong to one of the passed and and comma-separated activity instance ids. | [optional]
 **tenant_id_in** | **string**| Only include historic variable instances which belong to one of the passed and comma- separated tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic variable instances that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default &#x60;true&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#39;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#39;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional]

### Return type

[**\OpenAPI\Client\Model\HistoricVariableInstanceDto[]**](../Model/HistoricVariableInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricVariableInstancesCount()`

```php
getHistoricVariableInstancesCount($variable_name, $variable_name_like, $variable_value, $variable_names_ignore_case, $variable_values_ignore_case, $variable_type_in, $include_deleted, $process_instance_id, $process_instance_id_in, $process_definition_id, $process_definition_key, $execution_id_in, $case_instance_id, $case_execution_id_in, $case_activity_id_in, $task_id_in, $activity_instance_id_in, $tenant_id_in, $without_tenant_id): \OpenAPI\Client\Model\CountResultDto
```

Get Variable Instance Count

Queries for the number of historic variable instances that fulfill the given parameters. Takes the same parameters as the [Get Variable Instances](https://docs.camunda.org/manual/latest/reference/rest/history/variable-instance/get-variable-instance-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricVariableInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$variable_name = 'variable_name_example'; // string | Filter by variable name.
$variable_name_like = 'variable_name_like_example'; // string | Restrict to variables with a name like the parameter.
$variable_value = new \stdClass; // object | Filter by variable value. Is treated as a `String` object on server side.
$variable_names_ignore_case = True; // bool | Match the variable name provided in `variableName` and `variableNameLike` case- insensitively. If set to `true` **variableName** and **variablename** are treated as equal.
$variable_values_ignore_case = True; // bool | Match the variable value provided in `variableValue` case-insensitively. If set to `true` **variableValue** and **variablevalue** are treated as equal.
$variable_type_in = 'variable_type_in_example'; // string | Only include historic variable instances which belong to one of the passed and comma- separated variable types. A list of all supported variable types can be found [here](https://docs.camunda.org/manual/latest/user-guide/process-engine/variables/#supported-variable-values). **Note:** All non-primitive variables are associated with the type 'serializable'.
$include_deleted = True; // bool | Include variables that has already been deleted during the execution.
$process_instance_id = 'process_instance_id_example'; // string | Filter by the process instance the variable belongs to.
$process_instance_id_in = 'process_instance_id_in_example'; // string | Only include historic variable instances which belong to one of the passed and comma-separated process instance ids.
$process_definition_id = 'process_definition_id_example'; // string | Filter by the process definition the variable belongs to.
$process_definition_key = 'process_definition_key_example'; // string | Filter by a key of the process definition the variable belongs to.
$execution_id_in = 'execution_id_in_example'; // string | Only include historic variable instances which belong to one of the passed and and comma-separated execution ids.
$case_instance_id = 'case_instance_id_example'; // string | Filter by the case instance the variable belongs to.
$case_execution_id_in = 'case_execution_id_in_example'; // string | Only include historic variable instances which belong to one of the passed and and comma-separated case execution ids.
$case_activity_id_in = 'case_activity_id_in_example'; // string | Only include historic variable instances which belong to one of the passed and and comma-separated case activity ids.
$task_id_in = 'task_id_in_example'; // string | Only include historic variable instances which belong to one of the passed and and comma-separated task ids.
$activity_instance_id_in = 'activity_instance_id_in_example'; // string | Only include historic variable instances which belong to one of the passed and and comma-separated activity instance ids.
$tenant_id_in = 'tenant_id_in_example'; // string | Only include historic variable instances which belong to one of the passed and comma- separated tenant ids.
$without_tenant_id = True; // bool | Only include historic variable instances that belong to no tenant. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getHistoricVariableInstancesCount($variable_name, $variable_name_like, $variable_value, $variable_names_ignore_case, $variable_values_ignore_case, $variable_type_in, $include_deleted, $process_instance_id, $process_instance_id_in, $process_definition_id, $process_definition_key, $execution_id_in, $case_instance_id, $case_execution_id_in, $case_activity_id_in, $task_id_in, $activity_instance_id_in, $tenant_id_in, $without_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricVariableInstanceApi->getHistoricVariableInstancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_name** | **string**| Filter by variable name. | [optional]
 **variable_name_like** | **string**| Restrict to variables with a name like the parameter. | [optional]
 **variable_value** | [**object**](../Model/.md)| Filter by variable value. Is treated as a &#x60;String&#x60; object on server side. | [optional]
 **variable_names_ignore_case** | **bool**| Match the variable name provided in &#x60;variableName&#x60; and &#x60;variableNameLike&#x60; case- insensitively. If set to &#x60;true&#x60; **variableName** and **variablename** are treated as equal. | [optional]
 **variable_values_ignore_case** | **bool**| Match the variable value provided in &#x60;variableValue&#x60; case-insensitively. If set to &#x60;true&#x60; **variableValue** and **variablevalue** are treated as equal. | [optional]
 **variable_type_in** | **string**| Only include historic variable instances which belong to one of the passed and comma- separated variable types. A list of all supported variable types can be found [here](https://docs.camunda.org/manual/latest/user-guide/process-engine/variables/#supported-variable-values). **Note:** All non-primitive variables are associated with the type &#39;serializable&#39;. | [optional]
 **include_deleted** | **bool**| Include variables that has already been deleted during the execution. | [optional]
 **process_instance_id** | **string**| Filter by the process instance the variable belongs to. | [optional]
 **process_instance_id_in** | **string**| Only include historic variable instances which belong to one of the passed and comma-separated process instance ids. | [optional]
 **process_definition_id** | **string**| Filter by the process definition the variable belongs to. | [optional]
 **process_definition_key** | **string**| Filter by a key of the process definition the variable belongs to. | [optional]
 **execution_id_in** | **string**| Only include historic variable instances which belong to one of the passed and and comma-separated execution ids. | [optional]
 **case_instance_id** | **string**| Filter by the case instance the variable belongs to. | [optional]
 **case_execution_id_in** | **string**| Only include historic variable instances which belong to one of the passed and and comma-separated case execution ids. | [optional]
 **case_activity_id_in** | **string**| Only include historic variable instances which belong to one of the passed and and comma-separated case activity ids. | [optional]
 **task_id_in** | **string**| Only include historic variable instances which belong to one of the passed and and comma-separated task ids. | [optional]
 **activity_instance_id_in** | **string**| Only include historic variable instances which belong to one of the passed and and comma-separated activity instance ids. | [optional]
 **tenant_id_in** | **string**| Only include historic variable instances which belong to one of the passed and comma- separated tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic variable instances that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

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

## `queryHistoricVariableInstances()`

```php
queryHistoricVariableInstances($first_result, $max_results, $deserialize_values, $historic_variable_instance_query_dto): \OpenAPI\Client\Model\HistoricVariableInstanceDto[]
```

Get Variable Instances (POST)

Queries for historic variable instances that fulfill the given parameters. This method is slightly more powerful than the [Get Variable Instances](https://docs.camunda.org/manual/latest/reference/rest/history/variable-instance/get-variable-instance-query/) method because it allows filtering by variable values of the different types `String`, `Number` or `Boolean`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricVariableInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$deserialize_values = True; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default `true`).  If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.
$historic_variable_instance_query_dto = {"variableName":"someVariable","variableValue":42,"sorting":[{"sortBy":"variableName","sortOrder":"asc"},{"sortBy":"instanceId","sortOrder":"desc"}]}; // \OpenAPI\Client\Model\HistoricVariableInstanceQueryDto

try {
    $result = $apiInstance->queryHistoricVariableInstances($first_result, $max_results, $deserialize_values, $historic_variable_instance_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricVariableInstanceApi->queryHistoricVariableInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default &#x60;true&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#39;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#39;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional]
 **historic_variable_instance_query_dto** | [**\OpenAPI\Client\Model\HistoricVariableInstanceQueryDto**](../Model/HistoricVariableInstanceQueryDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\HistoricVariableInstanceDto[]**](../Model/HistoricVariableInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryHistoricVariableInstancesCount()`

```php
queryHistoricVariableInstancesCount($historic_variable_instance_query_dto): \OpenAPI\Client\Model\CountResultDto
```

Get Variable Instance Count (POST)

Queries for historic variable instances that fulfill the given parameters. This method takes the same message body as the [Get Variable Instances (POST)](https://docs.camunda.org/manual/latest/reference/rest/history/variable-instance/post-variable-instance-query/) method and therefore it is more powerful regarding variable values than the [Get Variable Instance Count](https://docs.camunda.org/manual/latest/reference/rest/history/variable-instance/get-variable-instance-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricVariableInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$historic_variable_instance_query_dto = {"variableName":"someVariable","variableValue":42}; // \OpenAPI\Client\Model\HistoricVariableInstanceQueryDto

try {
    $result = $apiInstance->queryHistoricVariableInstancesCount($historic_variable_instance_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricVariableInstanceApi->queryHistoricVariableInstancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **historic_variable_instance_query_dto** | [**\OpenAPI\Client\Model\HistoricVariableInstanceQueryDto**](../Model/HistoricVariableInstanceQueryDto.md)|  | [optional]

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
