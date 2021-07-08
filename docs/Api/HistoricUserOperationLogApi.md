# OpenAPI\Client\HistoricUserOperationLogApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**clearAnnotationUserOperationLog()**](HistoricUserOperationLogApi.md#clearAnnotationUserOperationLog) | **PUT** /history/user-operation/{operationId}/clear-annotation | Clear Annotation of an User Operation Log (Historic)
[**queryUserOperationCount()**](HistoricUserOperationLogApi.md#queryUserOperationCount) | **GET** /history/user-operation/count | Get User Operation Log Count
[**queryUserOperationEntries()**](HistoricUserOperationLogApi.md#queryUserOperationEntries) | **GET** /history/user-operation | Get User Operation Log (Historic)
[**setAnnotationUserOperationLog()**](HistoricUserOperationLogApi.md#setAnnotationUserOperationLog) | **PUT** /history/user-operation/{operationId}/set-annotation | Set Annotation to an User Operation Log (Historic)


## `clearAnnotationUserOperationLog()`

```php
clearAnnotationUserOperationLog($operation_id)
```

Clear Annotation of an User Operation Log (Historic)

Clear the annotation which was previously set for auditing reasons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricUserOperationLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$operation_id = 'operation_id_example'; // string | The operation id of the operation log to be updated.

try {
    $apiInstance->clearAnnotationUserOperationLog($operation_id);
} catch (Exception $e) {
    echo 'Exception when calling HistoricUserOperationLogApi->clearAnnotationUserOperationLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operation_id** | **string**| The operation id of the operation log to be updated. |

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

## `queryUserOperationCount()`

```php
queryUserOperationCount($deployment_id, $process_definition_id, $process_definition_key, $process_instance_id, $execution_id, $case_definition_id, $case_instance_id, $case_execution_id, $task_id, $external_task_id, $batch_id, $job_id, $job_definition_id, $user_id, $operation_id, $operation_type, $entity_type, $entity_type_in, $category, $category_in, $property, $after_timestamp, $before_timestamp): \OpenAPI\Client\Model\CountResultDto
```

Get User Operation Log Count

Queries for the number of user operation log entries that fulfill the given parameters. Takes the same parameters as the [Get User Operation Log (Historic)](https://docs.camunda.org/manual/latest/reference/rest/history/user-operation-log/get-user-operation-log-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricUserOperationLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$deployment_id = 'deployment_id_example'; // string | Filter by deployment id.
$process_definition_id = 'process_definition_id_example'; // string | Filter by process definition id.
$process_definition_key = 'process_definition_key_example'; // string | Filter by process definition key.
$process_instance_id = 'process_instance_id_example'; // string | Filter by process instance id.
$execution_id = 'execution_id_example'; // string | Filter by execution id.
$case_definition_id = 'case_definition_id_example'; // string | Filter by case definition id.
$case_instance_id = 'case_instance_id_example'; // string | Filter by case instance id.
$case_execution_id = 'case_execution_id_example'; // string | Filter by case execution id.
$task_id = 'task_id_example'; // string | Only include operations on this task.
$external_task_id = 'external_task_id_example'; // string | Only include operations on this external task.
$batch_id = 'batch_id_example'; // string | Only include operations on this batch.
$job_id = 'job_id_example'; // string | Filter by job id.
$job_definition_id = 'job_definition_id_example'; // string | Filter by job definition id.
$user_id = 'user_id_example'; // string | Only include operations of this user.
$operation_id = 'operation_id_example'; // string | Filter by the id of the operation. This allows fetching of multiple entries which are part of a composite operation.
$operation_type = 'operation_type_example'; // string | Filter by the type of the operation like `Claim` or `Delegate`. See the [Javadoc](https://docs.camunda.org/manual/latest/reference/javadoc/?org/camunda/bpm/engine/history/UserOperationLogEntry.html) for a list of available operation types.
$entity_type = 'entity_type_example'; // string | Filter by the type of the entity that was affected by this operation, possible values are `Task`, `Attachment` or `IdentityLink`.
$entity_type_in = 'entity_type_in_example'; // string | Filter by a comma-separated list of types of the entities that was affected by this operation, possible values are `Task`, `Attachment` or `IdentityLink`.
$category = 'category_example'; // string | Filter by the category that this operation is associated with, possible values are `TaskWorker`, `Admin` or `Operator`.
$category_in = 'category_in_example'; // string | Filter by a comma-separated list of categories that this operation is associated with, possible values are `TaskWorker`, `Admin` or `Operator`.
$property = 'property_example'; // string | Only include operations that changed this property, e.g., `owner` or `assignee`.
$after_timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to entries that were created after the given timestamp. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the timestamp must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., 2013-01-23T14:42:45.000+0200.
$before_timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to entries that were created before the given timestamp. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the timestamp must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., 2013-01-23T14:42:45.000+0200.

try {
    $result = $apiInstance->queryUserOperationCount($deployment_id, $process_definition_id, $process_definition_key, $process_instance_id, $execution_id, $case_definition_id, $case_instance_id, $case_execution_id, $task_id, $external_task_id, $batch_id, $job_id, $job_definition_id, $user_id, $operation_id, $operation_type, $entity_type, $entity_type_in, $category, $category_in, $property, $after_timestamp, $before_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricUserOperationLogApi->queryUserOperationCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_id** | **string**| Filter by deployment id. | [optional]
 **process_definition_id** | **string**| Filter by process definition id. | [optional]
 **process_definition_key** | **string**| Filter by process definition key. | [optional]
 **process_instance_id** | **string**| Filter by process instance id. | [optional]
 **execution_id** | **string**| Filter by execution id. | [optional]
 **case_definition_id** | **string**| Filter by case definition id. | [optional]
 **case_instance_id** | **string**| Filter by case instance id. | [optional]
 **case_execution_id** | **string**| Filter by case execution id. | [optional]
 **task_id** | **string**| Only include operations on this task. | [optional]
 **external_task_id** | **string**| Only include operations on this external task. | [optional]
 **batch_id** | **string**| Only include operations on this batch. | [optional]
 **job_id** | **string**| Filter by job id. | [optional]
 **job_definition_id** | **string**| Filter by job definition id. | [optional]
 **user_id** | **string**| Only include operations of this user. | [optional]
 **operation_id** | **string**| Filter by the id of the operation. This allows fetching of multiple entries which are part of a composite operation. | [optional]
 **operation_type** | **string**| Filter by the type of the operation like &#x60;Claim&#x60; or &#x60;Delegate&#x60;. See the [Javadoc](https://docs.camunda.org/manual/latest/reference/javadoc/?org/camunda/bpm/engine/history/UserOperationLogEntry.html) for a list of available operation types. | [optional]
 **entity_type** | **string**| Filter by the type of the entity that was affected by this operation, possible values are &#x60;Task&#x60;, &#x60;Attachment&#x60; or &#x60;IdentityLink&#x60;. | [optional]
 **entity_type_in** | **string**| Filter by a comma-separated list of types of the entities that was affected by this operation, possible values are &#x60;Task&#x60;, &#x60;Attachment&#x60; or &#x60;IdentityLink&#x60;. | [optional]
 **category** | **string**| Filter by the category that this operation is associated with, possible values are &#x60;TaskWorker&#x60;, &#x60;Admin&#x60; or &#x60;Operator&#x60;. | [optional]
 **category_in** | **string**| Filter by a comma-separated list of categories that this operation is associated with, possible values are &#x60;TaskWorker&#x60;, &#x60;Admin&#x60; or &#x60;Operator&#x60;. | [optional]
 **property** | **string**| Only include operations that changed this property, e.g., &#x60;owner&#x60; or &#x60;assignee&#x60;. | [optional]
 **after_timestamp** | **\DateTime**| Restrict to entries that were created after the given timestamp. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the timestamp must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., 2013-01-23T14:42:45.000+0200. | [optional]
 **before_timestamp** | **\DateTime**| Restrict to entries that were created before the given timestamp. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the timestamp must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., 2013-01-23T14:42:45.000+0200. | [optional]

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

## `queryUserOperationEntries()`

```php
queryUserOperationEntries($deployment_id, $process_definition_id, $process_definition_key, $process_instance_id, $execution_id, $case_definition_id, $case_instance_id, $case_execution_id, $task_id, $external_task_id, $batch_id, $job_id, $job_definition_id, $user_id, $operation_id, $operation_type, $entity_type, $entity_type_in, $category, $category_in, $property, $after_timestamp, $before_timestamp, $sort_by, $sort_order, $first_result, $max_results): \OpenAPI\Client\Model\UserOperationLogEntryDto[]
```

Get User Operation Log (Historic)

Queries for user operation log entries that fulfill the given parameters. The size of the result set can be retrieved by using the [Get User Operation Log Count](https://docs.camunda.org/manual/latest/reference/rest/history/user-operation-log/get-user-operation-log-query-count/) method.  Note that the properties of operation log entries are interpreted as restrictions on the entities they apply to. That means, if a single process instance is updated, the field `processInstanceId` is populated. If a single operation updates all process instances of the same process definition, the field `processInstanceId` is `null` (a `null` restriction is viewed as a wildcard, i.e., matches a process instance with any id) and the field `processDefinitionId` is populated. This way, which entities were changed by a user operation can easily be reconstructed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricUserOperationLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$deployment_id = 'deployment_id_example'; // string | Filter by deployment id.
$process_definition_id = 'process_definition_id_example'; // string | Filter by process definition id.
$process_definition_key = 'process_definition_key_example'; // string | Filter by process definition key.
$process_instance_id = 'process_instance_id_example'; // string | Filter by process instance id.
$execution_id = 'execution_id_example'; // string | Filter by execution id.
$case_definition_id = 'case_definition_id_example'; // string | Filter by case definition id.
$case_instance_id = 'case_instance_id_example'; // string | Filter by case instance id.
$case_execution_id = 'case_execution_id_example'; // string | Filter by case execution id.
$task_id = 'task_id_example'; // string | Only include operations on this task.
$external_task_id = 'external_task_id_example'; // string | Only include operations on this external task.
$batch_id = 'batch_id_example'; // string | Only include operations on this batch.
$job_id = 'job_id_example'; // string | Filter by job id.
$job_definition_id = 'job_definition_id_example'; // string | Filter by job definition id.
$user_id = 'user_id_example'; // string | Only include operations of this user.
$operation_id = 'operation_id_example'; // string | Filter by the id of the operation. This allows fetching of multiple entries which are part of a composite operation.
$operation_type = 'operation_type_example'; // string | Filter by the type of the operation like `Claim` or `Delegate`. See the [Javadoc](https://docs.camunda.org/manual/latest/reference/javadoc/?org/camunda/bpm/engine/history/UserOperationLogEntry.html) for a list of available operation types.
$entity_type = 'entity_type_example'; // string | Filter by the type of the entity that was affected by this operation, possible values are `Task`, `Attachment` or `IdentityLink`.
$entity_type_in = 'entity_type_in_example'; // string | Filter by a comma-separated list of types of the entities that was affected by this operation, possible values are `Task`, `Attachment` or `IdentityLink`.
$category = 'category_example'; // string | Filter by the category that this operation is associated with, possible values are `TaskWorker`, `Admin` or `Operator`.
$category_in = 'category_in_example'; // string | Filter by a comma-separated list of categories that this operation is associated with, possible values are `TaskWorker`, `Admin` or `Operator`.
$property = 'property_example'; // string | Only include operations that changed this property, e.g., `owner` or `assignee`.
$after_timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to entries that were created after the given timestamp. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the timestamp must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., 2013-01-23T14:42:45.000+0200.
$before_timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to entries that were created before the given timestamp. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the timestamp must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., 2013-01-23T14:42:45.000+0200.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->queryUserOperationEntries($deployment_id, $process_definition_id, $process_definition_key, $process_instance_id, $execution_id, $case_definition_id, $case_instance_id, $case_execution_id, $task_id, $external_task_id, $batch_id, $job_id, $job_definition_id, $user_id, $operation_id, $operation_type, $entity_type, $entity_type_in, $category, $category_in, $property, $after_timestamp, $before_timestamp, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricUserOperationLogApi->queryUserOperationEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deployment_id** | **string**| Filter by deployment id. | [optional]
 **process_definition_id** | **string**| Filter by process definition id. | [optional]
 **process_definition_key** | **string**| Filter by process definition key. | [optional]
 **process_instance_id** | **string**| Filter by process instance id. | [optional]
 **execution_id** | **string**| Filter by execution id. | [optional]
 **case_definition_id** | **string**| Filter by case definition id. | [optional]
 **case_instance_id** | **string**| Filter by case instance id. | [optional]
 **case_execution_id** | **string**| Filter by case execution id. | [optional]
 **task_id** | **string**| Only include operations on this task. | [optional]
 **external_task_id** | **string**| Only include operations on this external task. | [optional]
 **batch_id** | **string**| Only include operations on this batch. | [optional]
 **job_id** | **string**| Filter by job id. | [optional]
 **job_definition_id** | **string**| Filter by job definition id. | [optional]
 **user_id** | **string**| Only include operations of this user. | [optional]
 **operation_id** | **string**| Filter by the id of the operation. This allows fetching of multiple entries which are part of a composite operation. | [optional]
 **operation_type** | **string**| Filter by the type of the operation like &#x60;Claim&#x60; or &#x60;Delegate&#x60;. See the [Javadoc](https://docs.camunda.org/manual/latest/reference/javadoc/?org/camunda/bpm/engine/history/UserOperationLogEntry.html) for a list of available operation types. | [optional]
 **entity_type** | **string**| Filter by the type of the entity that was affected by this operation, possible values are &#x60;Task&#x60;, &#x60;Attachment&#x60; or &#x60;IdentityLink&#x60;. | [optional]
 **entity_type_in** | **string**| Filter by a comma-separated list of types of the entities that was affected by this operation, possible values are &#x60;Task&#x60;, &#x60;Attachment&#x60; or &#x60;IdentityLink&#x60;. | [optional]
 **category** | **string**| Filter by the category that this operation is associated with, possible values are &#x60;TaskWorker&#x60;, &#x60;Admin&#x60; or &#x60;Operator&#x60;. | [optional]
 **category_in** | **string**| Filter by a comma-separated list of categories that this operation is associated with, possible values are &#x60;TaskWorker&#x60;, &#x60;Admin&#x60; or &#x60;Operator&#x60;. | [optional]
 **property** | **string**| Only include operations that changed this property, e.g., &#x60;owner&#x60; or &#x60;assignee&#x60;. | [optional]
 **after_timestamp** | **\DateTime**| Restrict to entries that were created after the given timestamp. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the timestamp must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., 2013-01-23T14:42:45.000+0200. | [optional]
 **before_timestamp** | **\DateTime**| Restrict to entries that were created before the given timestamp. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the timestamp must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., 2013-01-23T14:42:45.000+0200. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\OpenAPI\Client\Model\UserOperationLogEntryDto[]**](../Model/UserOperationLogEntryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAnnotationUserOperationLog()`

```php
setAnnotationUserOperationLog($operation_id, $annotation_dto)
```

Set Annotation to an User Operation Log (Historic)

Set an annotation for auditing reasons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricUserOperationLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$operation_id = 'operation_id_example'; // string | The operation id of the operation log to be updated.
$annotation_dto = {"annotation":"Instances restarted due to wrong turn"}; // \OpenAPI\Client\Model\AnnotationDto

try {
    $apiInstance->setAnnotationUserOperationLog($operation_id, $annotation_dto);
} catch (Exception $e) {
    echo 'Exception when calling HistoricUserOperationLogApi->setAnnotationUserOperationLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operation_id** | **string**| The operation id of the operation log to be updated. |
 **annotation_dto** | [**\OpenAPI\Client\Model\AnnotationDto**](../Model/AnnotationDto.md)|  | [optional]

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
