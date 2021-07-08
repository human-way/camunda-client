# OpenAPI\Client\ExternalTaskApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**completeExternalTaskResource()**](ExternalTaskApi.md#completeExternalTaskResource) | **POST** /external-task/{id}/complete | Complete
[**extendLock()**](ExternalTaskApi.md#extendLock) | **POST** /external-task/{id}/extendLock | Extend Lock
[**fetchAndLock()**](ExternalTaskApi.md#fetchAndLock) | **POST** /external-task/fetchAndLock | Fetch and Lock
[**getExternalTask()**](ExternalTaskApi.md#getExternalTask) | **GET** /external-task/{id} | Get
[**getExternalTaskErrorDetails()**](ExternalTaskApi.md#getExternalTaskErrorDetails) | **GET** /external-task/{id}/errorDetails | Get Error Details
[**getExternalTasks()**](ExternalTaskApi.md#getExternalTasks) | **GET** /external-task | Get List
[**getExternalTasksCount()**](ExternalTaskApi.md#getExternalTasksCount) | **GET** /external-task/count | Get List Count
[**getTopicNames()**](ExternalTaskApi.md#getTopicNames) | **GET** /external-task/topic-names | Get External Task Topic Names
[**handleExternalTaskBpmnError()**](ExternalTaskApi.md#handleExternalTaskBpmnError) | **POST** /external-task/{id}/bpmnError | Handle BPMN Error
[**handleFailure()**](ExternalTaskApi.md#handleFailure) | **POST** /external-task/{id}/failure | Handle Failure
[**lock()**](ExternalTaskApi.md#lock) | **POST** /external-task/{id}/lock | 
[**queryExternalTasks()**](ExternalTaskApi.md#queryExternalTasks) | **POST** /external-task | Get List (POST)
[**queryExternalTasksCount()**](ExternalTaskApi.md#queryExternalTasksCount) | **POST** /external-task/count | Get List Count (POST)
[**setExternalTaskResourcePriority()**](ExternalTaskApi.md#setExternalTaskResourcePriority) | **PUT** /external-task/{id}/priority | Set Priority
[**setExternalTaskResourceRetries()**](ExternalTaskApi.md#setExternalTaskResourceRetries) | **PUT** /external-task/{id}/retries | Set Retries
[**setExternalTaskRetries()**](ExternalTaskApi.md#setExternalTaskRetries) | **PUT** /external-task/retries | Set Retries Sync
[**setExternalTaskRetriesAsyncOperation()**](ExternalTaskApi.md#setExternalTaskRetriesAsyncOperation) | **POST** /external-task/retries-async | Set Retries Async
[**unlock()**](ExternalTaskApi.md#unlock) | **POST** /external-task/{id}/unlock | Unlock


## `completeExternalTaskResource()`

```php
completeExternalTaskResource($id, $complete_external_task_dto)
```

Complete

Completes an external task by id and updates process variables.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task to complete.
$complete_external_task_dto = {"workerId":"aWorker","variables":{"aVariable":{"value":"aStringValue"},"anotherVariable":{"value":42},"aThirdVariable":{"value":true}},"localVariables":{"aLocalVariable":{"value":"aStringValue"}}}; // \OpenAPI\Client\Model\CompleteExternalTaskDto

try {
    $apiInstance->completeExternalTaskResource($id, $complete_external_task_dto);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->completeExternalTaskResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to complete. |
 **complete_external_task_dto** | [**\OpenAPI\Client\Model\CompleteExternalTaskDto**](../Model/CompleteExternalTaskDto.md)|  | [optional]

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

## `extendLock()`

```php
extendLock($id, $extend_lock_on_external_task_dto)
```

Extend Lock

Extends the timeout of the lock by a given amount of time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the external task.
$extend_lock_on_external_task_dto = {"workerId":"anId","newDuration":100000}; // \OpenAPI\Client\Model\ExtendLockOnExternalTaskDto

try {
    $apiInstance->extendLock($id, $extend_lock_on_external_task_dto);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->extendLock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task. |
 **extend_lock_on_external_task_dto** | [**\OpenAPI\Client\Model\ExtendLockOnExternalTaskDto**](../Model/ExtendLockOnExternalTaskDto.md)|  | [optional]

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

## `fetchAndLock()`

```php
fetchAndLock($fetch_external_tasks_dto): \OpenAPI\Client\Model\LockedExternalTaskDto[]
```

Fetch and Lock

Fetches and locks a specific number of external tasks for execution by a worker. Query can be restricted to specific task topics and for each task topic an individual lock time can be provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fetch_external_tasks_dto = {"workerId":"aWorkerId","maxTasks":2,"usePriority":true,"topics":[{"topicName":"createOrder","lockDuration":10000,"variables":["orderId"]}]}; // \OpenAPI\Client\Model\FetchExternalTasksDto

try {
    $result = $apiInstance->fetchAndLock($fetch_external_tasks_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->fetchAndLock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fetch_external_tasks_dto** | [**\OpenAPI\Client\Model\FetchExternalTasksDto**](../Model/FetchExternalTasksDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\LockedExternalTaskDto[]**](../Model/LockedExternalTaskDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExternalTask()`

```php
getExternalTask($id): \OpenAPI\Client\Model\ExternalTaskDto
```

Get

Retrieves an external task by id, corresponding to the `ExternalTask` interface in the engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the external task to be retrieved.

try {
    $result = $apiInstance->getExternalTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->getExternalTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\ExternalTaskDto**](../Model/ExternalTaskDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExternalTaskErrorDetails()`

```php
getExternalTaskErrorDetails($id): string
```

Get Error Details

Retrieves the error details in the context of a running external task by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the external task for which the error details should be retrieved.

try {
    $result = $apiInstance->getExternalTaskErrorDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->getExternalTaskErrorDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task for which the error details should be retrieved. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExternalTasks()`

```php
getExternalTasks($external_task_id, $external_task_id_in, $topic_name, $worker_id, $locked, $not_locked, $with_retries_left, $no_retries_left, $lock_expiration_after, $lock_expiration_before, $activity_id, $activity_id_in, $execution_id, $process_instance_id, $process_instance_id_in, $process_definition_id, $tenant_id_in, $active, $suspended, $priority_higher_than_or_equals, $priority_lower_than_or_equals, $sort_by, $sort_order, $first_result, $max_results): \OpenAPI\Client\Model\ExternalTaskDto[]
```

Get List

Queries for the external tasks that fulfill given parameters. Parameters may be static as well as dynamic runtime properties of executions. The size of the result set can be retrieved by using the [Get External Task Count](https://docs.camunda.org/manual/latest/reference/rest/external-task/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_task_id = 'external_task_id_example'; // string | Filter by an external task's id.
$external_task_id_in = 'external_task_id_in_example'; // string | Filter by the comma-separated list of external task ids.
$topic_name = 'topic_name_example'; // string | Filter by an external task topic.
$worker_id = 'worker_id_example'; // string | Filter by the id of the worker that the task was most recently locked by.
$locked = True; // bool | Only include external tasks that are currently locked (i.e., they have a lock time and it has not expired). Value may only be `true`, as `false` matches any external task.
$not_locked = True; // bool | Only include external tasks that are currently not locked (i.e., they have no lock or it has expired). Value may only be `true`, as `false` matches any external task.
$with_retries_left = True; // bool | Only include external tasks that have a positive (&gt; 0) number of retries (or `null`). Value may only be `true`, as `false` matches any external task.
$no_retries_left = True; // bool | Only include external tasks that have 0 retries. Value may only be `true`, as `false` matches any external task.
$lock_expiration_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to external tasks that have a lock that expires after a given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$lock_expiration_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to external tasks that have a lock that expires before a given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$activity_id = 'activity_id_example'; // string | Filter by the id of the activity that an external task is created for.
$activity_id_in = 'activity_id_in_example'; // string | Filter by the comma-separated list of ids of the activities that an external task is created for.
$execution_id = 'execution_id_example'; // string | Filter by the id of the execution that an external task belongs to.
$process_instance_id = 'process_instance_id_example'; // string | Filter by the id of the process instance that an external task belongs to.
$process_instance_id_in = 'process_instance_id_in_example'; // string | Filter by a comma-separated list of process instance ids that an external task may belong to.
$process_definition_id = 'process_definition_id_example'; // string | Filter by the id of the process definition that an external task belongs to.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids. An external task must have one of the given tenant ids.
$active = True; // bool | Only include active tasks. Value may only be `true`, as `false` matches any external task.
$suspended = True; // bool | Only include suspended tasks. Value may only be `true`, as `false` matches any external task.
$priority_higher_than_or_equals = 56; // int | Only include jobs with a priority higher than or equal to the given value. Value must be a valid `long` value.
$priority_lower_than_or_equals = 56; // int | Only include jobs with a priority lower than or equal to the given value. Value must be a valid `long` value.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getExternalTasks($external_task_id, $external_task_id_in, $topic_name, $worker_id, $locked, $not_locked, $with_retries_left, $no_retries_left, $lock_expiration_after, $lock_expiration_before, $activity_id, $activity_id_in, $execution_id, $process_instance_id, $process_instance_id_in, $process_definition_id, $tenant_id_in, $active, $suspended, $priority_higher_than_or_equals, $priority_lower_than_or_equals, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->getExternalTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_task_id** | **string**| Filter by an external task&#39;s id. | [optional]
 **external_task_id_in** | **string**| Filter by the comma-separated list of external task ids. | [optional]
 **topic_name** | **string**| Filter by an external task topic. | [optional]
 **worker_id** | **string**| Filter by the id of the worker that the task was most recently locked by. | [optional]
 **locked** | **bool**| Only include external tasks that are currently locked (i.e., they have a lock time and it has not expired). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **not_locked** | **bool**| Only include external tasks that are currently not locked (i.e., they have no lock or it has expired). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **with_retries_left** | **bool**| Only include external tasks that have a positive (&amp;gt; 0) number of retries (or &#x60;null&#x60;). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **no_retries_left** | **bool**| Only include external tasks that have 0 retries. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **lock_expiration_after** | **\DateTime**| Restrict to external tasks that have a lock that expires after a given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **lock_expiration_before** | **\DateTime**| Restrict to external tasks that have a lock that expires before a given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **activity_id** | **string**| Filter by the id of the activity that an external task is created for. | [optional]
 **activity_id_in** | **string**| Filter by the comma-separated list of ids of the activities that an external task is created for. | [optional]
 **execution_id** | **string**| Filter by the id of the execution that an external task belongs to. | [optional]
 **process_instance_id** | **string**| Filter by the id of the process instance that an external task belongs to. | [optional]
 **process_instance_id_in** | **string**| Filter by a comma-separated list of process instance ids that an external task may belong to. | [optional]
 **process_definition_id** | **string**| Filter by the id of the process definition that an external task belongs to. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. An external task must have one of the given tenant ids. | [optional]
 **active** | **bool**| Only include active tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **suspended** | **bool**| Only include suspended tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **priority_higher_than_or_equals** | **int**| Only include jobs with a priority higher than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **priority_lower_than_or_equals** | **int**| Only include jobs with a priority lower than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\OpenAPI\Client\Model\ExternalTaskDto[]**](../Model/ExternalTaskDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExternalTasksCount()`

```php
getExternalTasksCount($external_task_id, $external_task_id_in, $topic_name, $worker_id, $locked, $not_locked, $with_retries_left, $no_retries_left, $lock_expiration_after, $lock_expiration_before, $activity_id, $activity_id_in, $execution_id, $process_instance_id, $process_instance_id_in, $process_definition_id, $tenant_id_in, $active, $suspended, $priority_higher_than_or_equals, $priority_lower_than_or_equals): \OpenAPI\Client\Model\CountResultDto
```

Get List Count

Queries for the number of external tasks that fulfill given parameters. Takes the same parameters as the [Get External Tasks](https://docs.camunda.org/manual/latest/reference/rest/external-task/get-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_task_id = 'external_task_id_example'; // string | Filter by an external task's id.
$external_task_id_in = 'external_task_id_in_example'; // string | Filter by the comma-separated list of external task ids.
$topic_name = 'topic_name_example'; // string | Filter by an external task topic.
$worker_id = 'worker_id_example'; // string | Filter by the id of the worker that the task was most recently locked by.
$locked = True; // bool | Only include external tasks that are currently locked (i.e., they have a lock time and it has not expired). Value may only be `true`, as `false` matches any external task.
$not_locked = True; // bool | Only include external tasks that are currently not locked (i.e., they have no lock or it has expired). Value may only be `true`, as `false` matches any external task.
$with_retries_left = True; // bool | Only include external tasks that have a positive (&gt; 0) number of retries (or `null`). Value may only be `true`, as `false` matches any external task.
$no_retries_left = True; // bool | Only include external tasks that have 0 retries. Value may only be `true`, as `false` matches any external task.
$lock_expiration_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to external tasks that have a lock that expires after a given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$lock_expiration_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to external tasks that have a lock that expires before a given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$activity_id = 'activity_id_example'; // string | Filter by the id of the activity that an external task is created for.
$activity_id_in = 'activity_id_in_example'; // string | Filter by the comma-separated list of ids of the activities that an external task is created for.
$execution_id = 'execution_id_example'; // string | Filter by the id of the execution that an external task belongs to.
$process_instance_id = 'process_instance_id_example'; // string | Filter by the id of the process instance that an external task belongs to.
$process_instance_id_in = 'process_instance_id_in_example'; // string | Filter by a comma-separated list of process instance ids that an external task may belong to.
$process_definition_id = 'process_definition_id_example'; // string | Filter by the id of the process definition that an external task belongs to.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids. An external task must have one of the given tenant ids.
$active = True; // bool | Only include active tasks. Value may only be `true`, as `false` matches any external task.
$suspended = True; // bool | Only include suspended tasks. Value may only be `true`, as `false` matches any external task.
$priority_higher_than_or_equals = 56; // int | Only include jobs with a priority higher than or equal to the given value. Value must be a valid `long` value.
$priority_lower_than_or_equals = 56; // int | Only include jobs with a priority lower than or equal to the given value. Value must be a valid `long` value.

try {
    $result = $apiInstance->getExternalTasksCount($external_task_id, $external_task_id_in, $topic_name, $worker_id, $locked, $not_locked, $with_retries_left, $no_retries_left, $lock_expiration_after, $lock_expiration_before, $activity_id, $activity_id_in, $execution_id, $process_instance_id, $process_instance_id_in, $process_definition_id, $tenant_id_in, $active, $suspended, $priority_higher_than_or_equals, $priority_lower_than_or_equals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->getExternalTasksCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_task_id** | **string**| Filter by an external task&#39;s id. | [optional]
 **external_task_id_in** | **string**| Filter by the comma-separated list of external task ids. | [optional]
 **topic_name** | **string**| Filter by an external task topic. | [optional]
 **worker_id** | **string**| Filter by the id of the worker that the task was most recently locked by. | [optional]
 **locked** | **bool**| Only include external tasks that are currently locked (i.e., they have a lock time and it has not expired). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **not_locked** | **bool**| Only include external tasks that are currently not locked (i.e., they have no lock or it has expired). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **with_retries_left** | **bool**| Only include external tasks that have a positive (&amp;gt; 0) number of retries (or &#x60;null&#x60;). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **no_retries_left** | **bool**| Only include external tasks that have 0 retries. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **lock_expiration_after** | **\DateTime**| Restrict to external tasks that have a lock that expires after a given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **lock_expiration_before** | **\DateTime**| Restrict to external tasks that have a lock that expires before a given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **activity_id** | **string**| Filter by the id of the activity that an external task is created for. | [optional]
 **activity_id_in** | **string**| Filter by the comma-separated list of ids of the activities that an external task is created for. | [optional]
 **execution_id** | **string**| Filter by the id of the execution that an external task belongs to. | [optional]
 **process_instance_id** | **string**| Filter by the id of the process instance that an external task belongs to. | [optional]
 **process_instance_id_in** | **string**| Filter by a comma-separated list of process instance ids that an external task may belong to. | [optional]
 **process_definition_id** | **string**| Filter by the id of the process definition that an external task belongs to. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. An external task must have one of the given tenant ids. | [optional]
 **active** | **bool**| Only include active tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **suspended** | **bool**| Only include suspended tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **priority_higher_than_or_equals** | **int**| Only include jobs with a priority higher than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **priority_lower_than_or_equals** | **int**| Only include jobs with a priority lower than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]

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

## `getTopicNames()`

```php
getTopicNames($with_locked_tasks, $with_unlocked_tasks, $with_retries_left): string[]
```

Get External Task Topic Names

Queries for distinct topic names of external tasks that fulfill given parameters. Query can be restricted to only tasks with retries left, tasks that are locked, or tasks that are unlocked. The parameters withLockedTasks and withUnlockedTasks are exclusive. Setting them both to true will return an empty list. Providing no parameters will return a list of all distinct topic names with external tasks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$with_locked_tasks = True; // bool | Only include external tasks that are currently locked (i.e., they have a lock time and it has not expired). Value may only be `true`, as `false` matches any external task.
$with_unlocked_tasks = True; // bool | Only include external tasks that are currently not locked (i.e., they have no lock or it has expired). Value may only be `true`, as `false` matches any external task.
$with_retries_left = True; // bool | Only include external tasks that have a positive (&gt; 0) number of retries (or `null`). Value may only be `true`, as `false` matches any external task.

try {
    $result = $apiInstance->getTopicNames($with_locked_tasks, $with_unlocked_tasks, $with_retries_left);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->getTopicNames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with_locked_tasks** | **bool**| Only include external tasks that are currently locked (i.e., they have a lock time and it has not expired). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **with_unlocked_tasks** | **bool**| Only include external tasks that are currently not locked (i.e., they have no lock or it has expired). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **with_retries_left** | **bool**| Only include external tasks that have a positive (&amp;gt; 0) number of retries (or &#x60;null&#x60;). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleExternalTaskBpmnError()`

```php
handleExternalTaskBpmnError($id, $external_task_bpmn_error)
```

Handle BPMN Error

Reports a business error in the context of a running external task by id. The error code must be specified to identify the BPMN error handler.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the external task in which context a BPMN error is reported.
$external_task_bpmn_error = {"workerId":"aWorker","errorCode":"bpmn-error","errorMessage":"anErrorMessage","variables":{"aVariable":{"value":"aStringValue","type":"String"},"anotherVariable":{"value":true,"type":"Boolean"}}}; // \OpenAPI\Client\Model\ExternalTaskBpmnError

try {
    $apiInstance->handleExternalTaskBpmnError($id, $external_task_bpmn_error);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->handleExternalTaskBpmnError: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task in which context a BPMN error is reported. |
 **external_task_bpmn_error** | [**\OpenAPI\Client\Model\ExternalTaskBpmnError**](../Model/ExternalTaskBpmnError.md)|  | [optional]

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

## `handleFailure()`

```php
handleFailure($id, $external_task_failure_dto)
```

Handle Failure

Reports a failure to execute an external task by id. A number of retries and a timeout until the task can be retried can be specified. If retries are set to 0, an incident for this task is created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the external task to report a failure for.
$external_task_failure_dto = {"workerId":"aWorker","errorMessage":"Does not compute","retries":3,"retryTimeout":60000}; // \OpenAPI\Client\Model\ExternalTaskFailureDto

try {
    $apiInstance->handleFailure($id, $external_task_failure_dto);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->handleFailure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task to report a failure for. |
 **external_task_failure_dto** | [**\OpenAPI\Client\Model\ExternalTaskFailureDto**](../Model/ExternalTaskFailureDto.md)|  | [optional]

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

## `lock()`

```php
lock($id, $lock_external_task_dto)
```



Lock an external task by a given id for a specified worker and amount of time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the external task.
$lock_external_task_dto = {"workerId":"anId","lockDuration":100000}; // \OpenAPI\Client\Model\LockExternalTaskDto

try {
    $apiInstance->lock($id, $lock_external_task_dto);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->lock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task. |
 **lock_external_task_dto** | [**\OpenAPI\Client\Model\LockExternalTaskDto**](../Model/LockExternalTaskDto.md)|  | [optional]

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

## `queryExternalTasks()`

```php
queryExternalTasks($first_result, $max_results, $external_task_query_dto): \OpenAPI\Client\Model\ExternalTaskDto[]
```

Get List (POST)

Queries for external tasks that fulfill given parameters in the form of a JSON object.  This method is slightly more powerful than the [Get External Tasks](https://docs.camunda.org/manual/latest/reference/rest/external-task/get-query/) method because it allows to specify a hierarchical result sorting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$external_task_query_dto = {"processDefinitionId":"aProcessDefinitionId","sorting":[{"sortBy":"processDefinitionKey","sortOrder":"asc"},{"sortBy":"lockExpirationTime","sortOrder":"desc"}]}; // \OpenAPI\Client\Model\ExternalTaskQueryDto

try {
    $result = $apiInstance->queryExternalTasks($first_result, $max_results, $external_task_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->queryExternalTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **external_task_query_dto** | [**\OpenAPI\Client\Model\ExternalTaskQueryDto**](../Model/ExternalTaskQueryDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ExternalTaskDto[]**](../Model/ExternalTaskDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryExternalTasksCount()`

```php
queryExternalTasksCount($external_task_query_dto): \OpenAPI\Client\Model\CountResultDto
```

Get List Count (POST)

Queries for the number of external tasks that fulfill given parameters. This method takes the same message body as the [Get External Tasks (POST)](https://docs.camunda.org/manual/latest/reference/rest/external-task/post-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_task_query_dto = {"topicName":"aTopicName","withRetriesLeft":true}; // \OpenAPI\Client\Model\ExternalTaskQueryDto

try {
    $result = $apiInstance->queryExternalTasksCount($external_task_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->queryExternalTasksCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_task_query_dto** | [**\OpenAPI\Client\Model\ExternalTaskQueryDto**](../Model/ExternalTaskQueryDto.md)|  | [optional]

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

## `setExternalTaskResourcePriority()`

```php
setExternalTaskResourcePriority($id, $priority_dto)
```

Set Priority

Sets the priority of an existing external task by id. The default value of a priority is 0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the external task to set the priority for.
$priority_dto = {"priority":5}; // \OpenAPI\Client\Model\PriorityDto

try {
    $apiInstance->setExternalTaskResourcePriority($id, $priority_dto);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->setExternalTaskResourcePriority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task to set the priority for. |
 **priority_dto** | [**\OpenAPI\Client\Model\PriorityDto**](../Model/PriorityDto.md)|  | [optional]

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

## `setExternalTaskResourceRetries()`

```php
setExternalTaskResourceRetries($id, $retries_dto)
```

Set Retries

Sets the number of retries left to execute an external task by id. If retries are set to 0, an  incident is created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the external task to set the number of retries for.
$retries_dto = {"retries":123}; // \OpenAPI\Client\Model\RetriesDto

try {
    $apiInstance->setExternalTaskResourceRetries($id, $retries_dto);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->setExternalTaskResourceRetries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task to set the number of retries for. |
 **retries_dto** | [**\OpenAPI\Client\Model\RetriesDto**](../Model/RetriesDto.md)|  | [optional]

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

## `setExternalTaskRetries()`

```php
setExternalTaskRetries($set_retries_for_external_tasks_dto)
```

Set Retries Sync

Sets the number of retries left to execute external tasks by id synchronously. If retries are set to 0,  an incident is created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$set_retries_for_external_tasks_dto = {"retries":123,"externalTaskIds":["anExternalTask","anotherExternalTask"]}; // \OpenAPI\Client\Model\SetRetriesForExternalTasksDto

try {
    $apiInstance->setExternalTaskRetries($set_retries_for_external_tasks_dto);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->setExternalTaskRetries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_retries_for_external_tasks_dto** | [**\OpenAPI\Client\Model\SetRetriesForExternalTasksDto**](../Model/SetRetriesForExternalTasksDto.md)|  | [optional]

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

## `setExternalTaskRetriesAsyncOperation()`

```php
setExternalTaskRetriesAsyncOperation($set_retries_for_external_tasks_dto): \OpenAPI\Client\Model\BatchDto
```

Set Retries Async

Sets the number of retries left to execute external tasks by id asynchronously. If retries are set to 0, an incident is created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$set_retries_for_external_tasks_dto = {"retries":123,"externalTaskIds":["anExternalTask","anotherExternalTask"]}; // \OpenAPI\Client\Model\SetRetriesForExternalTasksDto

try {
    $result = $apiInstance->setExternalTaskRetriesAsyncOperation($set_retries_for_external_tasks_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->setExternalTaskRetriesAsyncOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_retries_for_external_tasks_dto** | [**\OpenAPI\Client\Model\SetRetriesForExternalTasksDto**](../Model/SetRetriesForExternalTasksDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlock()`

```php
unlock($id)
```

Unlock

Unlocks an external task by id. Clears the task's lock expiration time and worker id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the external task to unlock.

try {
    $apiInstance->unlock($id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->unlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task to unlock. |

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
