# OpenAPI\Client\VariableInstanceApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVariableInstance()**](VariableInstanceApi.md#getVariableInstance) | **GET** /variable-instance/{id} | Get Variable Instance
[**getVariableInstanceBinary()**](VariableInstanceApi.md#getVariableInstanceBinary) | **GET** /variable-instance/{id}/data | Get Variable Instance (Binary)
[**getVariableInstances()**](VariableInstanceApi.md#getVariableInstances) | **GET** /variable-instance | Get Variable Instances
[**getVariableInstancesCount()**](VariableInstanceApi.md#getVariableInstancesCount) | **GET** /variable-instance/count | Get Variable Instance Count
[**queryVariableInstances()**](VariableInstanceApi.md#queryVariableInstances) | **POST** /variable-instance | Get Variable Instances (POST)
[**queryVariableInstancesCount()**](VariableInstanceApi.md#queryVariableInstancesCount) | **POST** /variable-instance/count | Get Variable Instance Count (POST)


## `getVariableInstance()`

```php
getVariableInstance($id, $deserialize_value): \OpenAPI\Client\Model\VariableInstanceDto
```

Get Variable Instance

Retrieves a variable by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VariableInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the variable instance.
$deserialize_value = True; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default `true`).  If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:**  While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getVariableInstance($id, $deserialize_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariableInstanceApi->getVariableInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the variable instance. |
 **deserialize_value** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default &#x60;true&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#39;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#39;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:**  While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional]

### Return type

[**\OpenAPI\Client\Model\VariableInstanceDto**](../Model/VariableInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVariableInstanceBinary()`

```php
getVariableInstanceBinary($id): \SplFileObject
```

Get Variable Instance (Binary)

Retrieves the content of a variable by id. Applicable for byte array and file variables.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VariableInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the variable instance.

try {
    $result = $apiInstance->getVariableInstanceBinary($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariableInstanceApi->getVariableInstanceBinary: ', $e->getMessage(), PHP_EOL;
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

## `getVariableInstances()`

```php
getVariableInstances($variable_name, $variable_name_like, $process_instance_id_in, $execution_id_in, $case_instance_id_in, $case_execution_id_in, $task_id_in, $batch_id_in, $activity_instance_id_in, $tenant_id_in, $variable_values, $variable_names_ignore_case, $variable_values_ignore_case, $sort_by, $sort_order, $first_result, $max_results, $deserialize_values): \OpenAPI\Client\Model\VariableInstanceDto[]
```

Get Variable Instances

Query for variable instances that fulfill given parameters. Parameters may be the properties of variable instances, such as the name or type. The size of the result set can be retrieved by using the [Get Variable Instance Count](https://docs.camunda.org/manual/7.15/reference/rest/variable-instance/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VariableInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$variable_name = 'variable_name_example'; // string | Filter by variable instance name.
$variable_name_like = 'variable_name_like_example'; // string | Filter by the variable instance name. The parameter can include the wildcard `%` to express like-strategy such as: starts with (`%`name), ends with (name`%`) or contains (`%`name`%`).
$process_instance_id_in = 'process_instance_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated process instance ids.
$execution_id_in = 'execution_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated execution ids.
$case_instance_id_in = 'case_instance_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated case instance ids.
$case_execution_id_in = 'case_execution_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated case execution ids.
$task_id_in = 'task_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated task ids.
$batch_id_in = 'batch_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated batch ids.
$activity_instance_id_in = 'activity_instance_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated activity instance ids.
$tenant_id_in = 'tenant_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated tenant ids.
$variable_values = 'variable_values_example'; // string | Only include variable instances that have the certain values. Value filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value.  **Note:** Values are always treated as `String` objects on server side.  Valid operator values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`. `key` and `value` may not contain underscore or comma characters.
$variable_names_ignore_case = True; // bool | Match all variable names provided in `variableValues` case-insensitively. If set to `true` **variableName** and **variablename** are treated as equal.
$variable_values_ignore_case = True; // bool | Match all variable values provided in `variableValues` case-insensitively. If set to `true` **variableValue** and **variablevalue** are treated as equal.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$deserialize_values = True; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default `true`).  If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getVariableInstances($variable_name, $variable_name_like, $process_instance_id_in, $execution_id_in, $case_instance_id_in, $case_execution_id_in, $task_id_in, $batch_id_in, $activity_instance_id_in, $tenant_id_in, $variable_values, $variable_names_ignore_case, $variable_values_ignore_case, $sort_by, $sort_order, $first_result, $max_results, $deserialize_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariableInstanceApi->getVariableInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_name** | **string**| Filter by variable instance name. | [optional]
 **variable_name_like** | **string**| Filter by the variable instance name. The parameter can include the wildcard &#x60;%&#x60; to express like-strategy such as: starts with (&#x60;%&#x60;name), ends with (name&#x60;%&#x60;) or contains (&#x60;%&#x60;name&#x60;%&#x60;). | [optional]
 **process_instance_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated process instance ids. | [optional]
 **execution_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated execution ids. | [optional]
 **case_instance_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated case instance ids. | [optional]
 **case_execution_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated case execution ids. | [optional]
 **task_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated task ids. | [optional]
 **batch_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated batch ids. | [optional]
 **activity_instance_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated activity instance ids. | [optional]
 **tenant_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated tenant ids. | [optional]
 **variable_values** | **string**| Only include variable instances that have the certain values. Value filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value.  **Note:** Values are always treated as &#x60;String&#x60; objects on server side.  Valid operator values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **variable_names_ignore_case** | **bool**| Match all variable names provided in &#x60;variableValues&#x60; case-insensitively. If set to &#x60;true&#x60; **variableName** and **variablename** are treated as equal. | [optional]
 **variable_values_ignore_case** | **bool**| Match all variable values provided in &#x60;variableValues&#x60; case-insensitively. If set to &#x60;true&#x60; **variableValue** and **variablevalue** are treated as equal. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default &#x60;true&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#39;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#39;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional]

### Return type

[**\OpenAPI\Client\Model\VariableInstanceDto[]**](../Model/VariableInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVariableInstancesCount()`

```php
getVariableInstancesCount($variable_name, $variable_name_like, $process_instance_id_in, $execution_id_in, $case_instance_id_in, $case_execution_id_in, $task_id_in, $batch_id_in, $activity_instance_id_in, $tenant_id_in, $variable_values, $variable_names_ignore_case, $variable_values_ignore_case, $sort_by, $sort_order): \OpenAPI\Client\Model\CountResultDto
```

Get Variable Instance Count

Query for the number of variable instances that fulfill given parameters. Takes the same parameters as the [Get Variable Instances](https://docs.camunda.org/manual/7.15/reference/rest/variable-instance/get-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VariableInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$variable_name = 'variable_name_example'; // string | Filter by variable instance name.
$variable_name_like = 'variable_name_like_example'; // string | Filter by the variable instance name. The parameter can include the wildcard `%` to express like-strategy such as: starts with (`%`name), ends with (name`%`) or contains (`%`name`%`).
$process_instance_id_in = 'process_instance_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated process instance ids.
$execution_id_in = 'execution_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated execution ids.
$case_instance_id_in = 'case_instance_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated case instance ids.
$case_execution_id_in = 'case_execution_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated case execution ids.
$task_id_in = 'task_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated task ids.
$batch_id_in = 'batch_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated batch ids.
$activity_instance_id_in = 'activity_instance_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated activity instance ids.
$tenant_id_in = 'tenant_id_in_example'; // string | Only include variable instances which belong to one of the passed and comma-separated tenant ids.
$variable_values = 'variable_values_example'; // string | Only include variable instances that have the certain values. Value filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value.  **Note:** Values are always treated as `String` objects on server side.  Valid operator values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`. `key` and `value` may not contain underscore or comma characters.
$variable_names_ignore_case = True; // bool | Match all variable names provided in `variableValues` case-insensitively. If set to `true` **variableName** and **variablename** are treated as equal.
$variable_values_ignore_case = True; // bool | Match all variable values provided in `variableValues` case-insensitively. If set to `true` **variableValue** and **variablevalue** are treated as equal.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.

try {
    $result = $apiInstance->getVariableInstancesCount($variable_name, $variable_name_like, $process_instance_id_in, $execution_id_in, $case_instance_id_in, $case_execution_id_in, $task_id_in, $batch_id_in, $activity_instance_id_in, $tenant_id_in, $variable_values, $variable_names_ignore_case, $variable_values_ignore_case, $sort_by, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariableInstanceApi->getVariableInstancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_name** | **string**| Filter by variable instance name. | [optional]
 **variable_name_like** | **string**| Filter by the variable instance name. The parameter can include the wildcard &#x60;%&#x60; to express like-strategy such as: starts with (&#x60;%&#x60;name), ends with (name&#x60;%&#x60;) or contains (&#x60;%&#x60;name&#x60;%&#x60;). | [optional]
 **process_instance_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated process instance ids. | [optional]
 **execution_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated execution ids. | [optional]
 **case_instance_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated case instance ids. | [optional]
 **case_execution_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated case execution ids. | [optional]
 **task_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated task ids. | [optional]
 **batch_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated batch ids. | [optional]
 **activity_instance_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated activity instance ids. | [optional]
 **tenant_id_in** | **string**| Only include variable instances which belong to one of the passed and comma-separated tenant ids. | [optional]
 **variable_values** | **string**| Only include variable instances that have the certain values. Value filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value.  **Note:** Values are always treated as &#x60;String&#x60; objects on server side.  Valid operator values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **variable_names_ignore_case** | **bool**| Match all variable names provided in &#x60;variableValues&#x60; case-insensitively. If set to &#x60;true&#x60; **variableName** and **variablename** are treated as equal. | [optional]
 **variable_values_ignore_case** | **bool**| Match all variable values provided in &#x60;variableValues&#x60; case-insensitively. If set to &#x60;true&#x60; **variableValue** and **variablevalue** are treated as equal. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]

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

## `queryVariableInstances()`

```php
queryVariableInstances($first_result, $max_results, $deserialize_values, $variable_instance_query_dto): \OpenAPI\Client\Model\VariableInstanceDto[]
```

Get Variable Instances (POST)

Query for variable instances that fulfill given parameters through a JSON object. This method is slightly more powerful than the [Get Variable Instances](https://docs.camunda.org/manual/7.15/reference/rest/variable- instance/get-query/) method because it allows filtering by multiple variable instances of types `String`, `Number` or `Boolean`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VariableInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$deserialize_values = True; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default `true`).  If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.
$variable_instance_query_dto = {"variableValues":[{"name":"amount","operator":"gteq","value":5},{"name":"amount","operator":"lteq","value":200}],"processInstanceIdIn":["aProcessInstanceId","anotherProcessInstanceId"],"sorting":[{"sortBy":"variableType","sortOrder":"asc"}]}; // \OpenAPI\Client\Model\VariableInstanceQueryDto

try {
    $result = $apiInstance->queryVariableInstances($first_result, $max_results, $deserialize_values, $variable_instance_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariableInstanceApi->queryVariableInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default &#x60;true&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#39;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#39;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional]
 **variable_instance_query_dto** | [**\OpenAPI\Client\Model\VariableInstanceQueryDto**](../Model/VariableInstanceQueryDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\VariableInstanceDto[]**](../Model/VariableInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryVariableInstancesCount()`

```php
queryVariableInstancesCount($variable_instance_query_dto): \OpenAPI\Client\Model\CountResultDto
```

Get Variable Instance Count (POST)

Query for the number of variable instances that fulfill given parameters. This method takes the same message body as the [Get Variable Instances POST](https://docs.camunda.org/manual/7.15/reference/rest/variable- instance/post-query/) method and therefore it is slightly more powerful than the [Get Variable Instance Count](https://docs.camunda.org/manual/7.15/reference/rest/variable-instance/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VariableInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$variable_instance_query_dto = {"variableValues":[{"name":"amount","operator":"gteq","value":"5"},{"name":"amount","operator":"lteq","value":200}],"processInstanceIdIn":["aProcessInstanceId","anotherProcessInstanceId"]}; // \OpenAPI\Client\Model\VariableInstanceQueryDto

try {
    $result = $apiInstance->queryVariableInstancesCount($variable_instance_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariableInstanceApi->queryVariableInstancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_instance_query_dto** | [**\OpenAPI\Client\Model\VariableInstanceQueryDto**](../Model/VariableInstanceQueryDto.md)|  | [optional]

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
