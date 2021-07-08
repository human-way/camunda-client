# OpenAPI\Client\JobApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeJob()**](JobApi.md#executeJob) | **POST** /job/{id}/execute | Execute Job
[**getJob()**](JobApi.md#getJob) | **GET** /job/{id} | Get Job
[**getJobs()**](JobApi.md#getJobs) | **GET** /job | Get Jobs
[**getJobsCount()**](JobApi.md#getJobsCount) | **GET** /job/count | Get Job Count
[**getStacktrace()**](JobApi.md#getStacktrace) | **GET** /job/{id}/stacktrace | Get Exception Stacktrace
[**queryJobs()**](JobApi.md#queryJobs) | **POST** /job | Get Jobs (POST)
[**queryJobsCount()**](JobApi.md#queryJobsCount) | **POST** /job/count | Get Job Count (POST)
[**recalculateDuedate()**](JobApi.md#recalculateDuedate) | **POST** /job/{id}/duedate/recalculate | Recalculate Job Due Date
[**setJobDuedate()**](JobApi.md#setJobDuedate) | **PUT** /job/{id}/duedate | Set Job Due Date
[**setJobPriority()**](JobApi.md#setJobPriority) | **PUT** /job/{id}/priority | Set Job Priority
[**setJobRetries()**](JobApi.md#setJobRetries) | **PUT** /job/{id}/retries | Set Job Retries
[**setJobRetriesAsyncOperation()**](JobApi.md#setJobRetriesAsyncOperation) | **POST** /job/retries | Set Job Retries Async (POST)
[**updateJobSuspensionState()**](JobApi.md#updateJobSuspensionState) | **PUT** /job/{id}/suspended | Activate/Suspend Job By Id
[**updateSuspensionStateBy()**](JobApi.md#updateSuspensionStateBy) | **PUT** /job/suspended | Activate/Suspend Jobs


## `executeJob()`

```php
executeJob($id)
```

Execute Job

Executes a job by id. **Note:** The execution of the job happens synchronously in the same thread.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the job to be executed.

try {
    $apiInstance->executeJob($id);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->executeJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to be executed. |

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

## `getJob()`

```php
getJob($id): \OpenAPI\Client\Model\JobDto
```

Get Job

Retrieves a job by id, according to the `Job` interface in the engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the job to be retrieved.

try {
    $result = $apiInstance->getJob($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\JobDto**](../Model/JobDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobs()`

```php
getJobs($job_id, $job_ids, $job_definition_id, $process_instance_id, $process_instance_ids, $execution_id, $process_definition_id, $process_definition_key, $activity_id, $with_retries_left, $executable, $timers, $messages, $due_dates, $create_times, $with_exception, $exception_message, $failed_activity_id, $no_retries_left, $active, $suspended, $priority_lower_than_or_equals, $priority_higher_than_or_equals, $tenant_id_in, $without_tenant_id, $include_jobs_without_tenant_id, $sort_by, $sort_order, $first_result, $max_results): \OpenAPI\Client\Model\JobDto[]
```

Get Jobs

Queries for jobs that fulfill given parameters. The size of the result set can be retrieved by using the [Get Job Count](https://docs.camunda.org/manual/latest/reference/rest/job/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$job_id = 'job_id_example'; // string | Filter by job id.
$job_ids = 'job_ids_example'; // string | Filter by a comma-separated list of job ids.
$job_definition_id = 'job_definition_id_example'; // string | Only select jobs which exist for the given job definition.
$process_instance_id = 'process_instance_id_example'; // string | Only select jobs which exist for the given process instance.
$process_instance_ids = 'process_instance_ids_example'; // string | Only select jobs which exist for the given comma-separated list of process instance ids.
$execution_id = 'execution_id_example'; // string | Only select jobs which exist for the given execution.
$process_definition_id = 'process_definition_id_example'; // string | Filter by the id of the process definition the jobs run on.
$process_definition_key = 'process_definition_key_example'; // string | Filter by the key of the process definition the jobs run on.
$activity_id = 'activity_id_example'; // string | Only select jobs which exist for an activity with the given id.
$with_retries_left = True; // bool | Only select jobs which have retries left. Value may only be `true`, as `false` is the default behavior.
$executable = True; // bool | Only select jobs which are executable, i.e., retries > 0 and due date is `null` or due date is in the past. Value may only be `true`, as `false` is the default behavior.
$timers = True; // bool | Only select jobs that are timers. Cannot be used together with `messages`. Value may only be `true`, as `false` is the default behavior.
$messages = True; // bool | Only select jobs that are messages. Cannot be used together with `timers`. Value may only be `true`, as `false` is the default behavior.
$due_dates = 'due_dates_example'; // string | Only select jobs where the due date is lower or higher than the given date. Due date expressions are comma-separated and are structured as follows:  A valid condition value has the form `operator_value`. `operator` is the comparison operator to be used and `value` the date value as string.  Valid operator values are: `gt` - greater than; `lt` - lower than. `value` may not contain underscore or comma characters.
$create_times = 'create_times_example'; // string | Only select jobs created before or after the given date.  Create time expressions are comma-separated and are structured as follows:  A valid condition value has the form `operator_value`. `operator` is the comparison operator to be used and `value` the date value as string.  Valid operator values are: `gt` - greater than; `lt` - lower than. `value` may not contain underscore or comma characters.
$with_exception = True; // bool | Only select jobs that failed due to an exception. Value may only be `true`, as `false` is the default behavior.
$exception_message = 'exception_message_example'; // string | Only select jobs that failed due to an exception with the given message.
$failed_activity_id = 'failed_activity_id_example'; // string | Only select jobs that failed due to an exception at an activity with the given id.
$no_retries_left = True; // bool | Only select jobs which have no retries left. Value may only be `true`, as `false` is the default behavior.
$active = True; // bool | Only include active jobs. Value may only be `true`, as `false` is the default behavior.
$suspended = True; // bool | Only include suspended jobs. Value may only be `true`, as `false` is the default behavior.
$priority_lower_than_or_equals = 56; // int | Only include jobs with a priority lower than or equal to the given value. Value must be a valid `long` value.
$priority_higher_than_or_equals = 56; // int | Only include jobs with a priority higher than or equal to the given value. Value must be a valid `long` value.
$tenant_id_in = 'tenant_id_in_example'; // string | Only include jobs which belong to one of the passed comma-separated tenant ids.
$without_tenant_id = True; // bool | Only include jobs which belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$include_jobs_without_tenant_id = True; // bool | Include jobs which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getJobs($job_id, $job_ids, $job_definition_id, $process_instance_id, $process_instance_ids, $execution_id, $process_definition_id, $process_definition_key, $activity_id, $with_retries_left, $executable, $timers, $messages, $due_dates, $create_times, $with_exception, $exception_message, $failed_activity_id, $no_retries_left, $active, $suspended, $priority_lower_than_or_equals, $priority_higher_than_or_equals, $tenant_id_in, $without_tenant_id, $include_jobs_without_tenant_id, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| Filter by job id. | [optional]
 **job_ids** | **string**| Filter by a comma-separated list of job ids. | [optional]
 **job_definition_id** | **string**| Only select jobs which exist for the given job definition. | [optional]
 **process_instance_id** | **string**| Only select jobs which exist for the given process instance. | [optional]
 **process_instance_ids** | **string**| Only select jobs which exist for the given comma-separated list of process instance ids. | [optional]
 **execution_id** | **string**| Only select jobs which exist for the given execution. | [optional]
 **process_definition_id** | **string**| Filter by the id of the process definition the jobs run on. | [optional]
 **process_definition_key** | **string**| Filter by the key of the process definition the jobs run on. | [optional]
 **activity_id** | **string**| Only select jobs which exist for an activity with the given id. | [optional]
 **with_retries_left** | **bool**| Only select jobs which have retries left. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **executable** | **bool**| Only select jobs which are executable, i.e., retries &gt; 0 and due date is &#x60;null&#x60; or due date is in the past. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **timers** | **bool**| Only select jobs that are timers. Cannot be used together with &#x60;messages&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **messages** | **bool**| Only select jobs that are messages. Cannot be used together with &#x60;timers&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **due_dates** | **string**| Only select jobs where the due date is lower or higher than the given date. Due date expressions are comma-separated and are structured as follows:  A valid condition value has the form &#x60;operator_value&#x60;. &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the date value as string.  Valid operator values are: &#x60;gt&#x60; - greater than; &#x60;lt&#x60; - lower than. &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **create_times** | **string**| Only select jobs created before or after the given date.  Create time expressions are comma-separated and are structured as follows:  A valid condition value has the form &#x60;operator_value&#x60;. &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the date value as string.  Valid operator values are: &#x60;gt&#x60; - greater than; &#x60;lt&#x60; - lower than. &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **with_exception** | **bool**| Only select jobs that failed due to an exception. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **exception_message** | **string**| Only select jobs that failed due to an exception with the given message. | [optional]
 **failed_activity_id** | **string**| Only select jobs that failed due to an exception at an activity with the given id. | [optional]
 **no_retries_left** | **bool**| Only select jobs which have no retries left. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **active** | **bool**| Only include active jobs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| Only include suspended jobs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **priority_lower_than_or_equals** | **int**| Only include jobs with a priority lower than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **priority_higher_than_or_equals** | **int**| Only include jobs with a priority higher than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **tenant_id_in** | **string**| Only include jobs which belong to one of the passed comma-separated tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include jobs which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_jobs_without_tenant_id** | **bool**| Include jobs which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\OpenAPI\Client\Model\JobDto[]**](../Model/JobDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobsCount()`

```php
getJobsCount($job_id, $job_ids, $job_definition_id, $process_instance_id, $process_instance_ids, $execution_id, $process_definition_id, $process_definition_key, $activity_id, $with_retries_left, $executable, $timers, $messages, $due_dates, $create_times, $with_exception, $exception_message, $failed_activity_id, $no_retries_left, $active, $suspended, $priority_lower_than_or_equals, $priority_higher_than_or_equals, $tenant_id_in, $without_tenant_id, $include_jobs_without_tenant_id): \OpenAPI\Client\Model\CountResultDto
```

Get Job Count

Queries for the number of jobs that fulfill given parameters. Takes the same parameters as the [Get Jobs](https://docs.camunda.org/manual/latest/reference/rest/job/get-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$job_id = 'job_id_example'; // string | Filter by job id.
$job_ids = 'job_ids_example'; // string | Filter by a comma-separated list of job ids.
$job_definition_id = 'job_definition_id_example'; // string | Only select jobs which exist for the given job definition.
$process_instance_id = 'process_instance_id_example'; // string | Only select jobs which exist for the given process instance.
$process_instance_ids = 'process_instance_ids_example'; // string | Only select jobs which exist for the given comma-separated list of process instance ids.
$execution_id = 'execution_id_example'; // string | Only select jobs which exist for the given execution.
$process_definition_id = 'process_definition_id_example'; // string | Filter by the id of the process definition the jobs run on.
$process_definition_key = 'process_definition_key_example'; // string | Filter by the key of the process definition the jobs run on.
$activity_id = 'activity_id_example'; // string | Only select jobs which exist for an activity with the given id.
$with_retries_left = True; // bool | Only select jobs which have retries left. Value may only be `true`, as `false` is the default behavior.
$executable = True; // bool | Only select jobs which are executable, i.e., retries > 0 and due date is `null` or due date is in the past. Value may only be `true`, as `false` is the default behavior.
$timers = True; // bool | Only select jobs that are timers. Cannot be used together with `messages`. Value may only be `true`, as `false` is the default behavior.
$messages = True; // bool | Only select jobs that are messages. Cannot be used together with `timers`. Value may only be `true`, as `false` is the default behavior.
$due_dates = 'due_dates_example'; // string | Only select jobs where the due date is lower or higher than the given date. Due date expressions are comma-separated and are structured as follows:  A valid condition value has the form `operator_value`. `operator` is the comparison operator to be used and `value` the date value as string.  Valid operator values are: `gt` - greater than; `lt` - lower than. `value` may not contain underscore or comma characters.
$create_times = 'create_times_example'; // string | Only select jobs created before or after the given date.  Create time expressions are comma-separated and are structured as follows:  A valid condition value has the form `operator_value`. `operator` is the comparison operator to be used and `value` the date value as string.  Valid operator values are: `gt` - greater than; `lt` - lower than. `value` may not contain underscore or comma characters.
$with_exception = True; // bool | Only select jobs that failed due to an exception. Value may only be `true`, as `false` is the default behavior.
$exception_message = 'exception_message_example'; // string | Only select jobs that failed due to an exception with the given message.
$failed_activity_id = 'failed_activity_id_example'; // string | Only select jobs that failed due to an exception at an activity with the given id.
$no_retries_left = True; // bool | Only select jobs which have no retries left. Value may only be `true`, as `false` is the default behavior.
$active = True; // bool | Only include active jobs. Value may only be `true`, as `false` is the default behavior.
$suspended = True; // bool | Only include suspended jobs. Value may only be `true`, as `false` is the default behavior.
$priority_lower_than_or_equals = 56; // int | Only include jobs with a priority lower than or equal to the given value. Value must be a valid `long` value.
$priority_higher_than_or_equals = 56; // int | Only include jobs with a priority higher than or equal to the given value. Value must be a valid `long` value.
$tenant_id_in = 'tenant_id_in_example'; // string | Only include jobs which belong to one of the passed comma-separated tenant ids.
$without_tenant_id = True; // bool | Only include jobs which belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$include_jobs_without_tenant_id = True; // bool | Include jobs which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getJobsCount($job_id, $job_ids, $job_definition_id, $process_instance_id, $process_instance_ids, $execution_id, $process_definition_id, $process_definition_key, $activity_id, $with_retries_left, $executable, $timers, $messages, $due_dates, $create_times, $with_exception, $exception_message, $failed_activity_id, $no_retries_left, $active, $suspended, $priority_lower_than_or_equals, $priority_higher_than_or_equals, $tenant_id_in, $without_tenant_id, $include_jobs_without_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| Filter by job id. | [optional]
 **job_ids** | **string**| Filter by a comma-separated list of job ids. | [optional]
 **job_definition_id** | **string**| Only select jobs which exist for the given job definition. | [optional]
 **process_instance_id** | **string**| Only select jobs which exist for the given process instance. | [optional]
 **process_instance_ids** | **string**| Only select jobs which exist for the given comma-separated list of process instance ids. | [optional]
 **execution_id** | **string**| Only select jobs which exist for the given execution. | [optional]
 **process_definition_id** | **string**| Filter by the id of the process definition the jobs run on. | [optional]
 **process_definition_key** | **string**| Filter by the key of the process definition the jobs run on. | [optional]
 **activity_id** | **string**| Only select jobs which exist for an activity with the given id. | [optional]
 **with_retries_left** | **bool**| Only select jobs which have retries left. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **executable** | **bool**| Only select jobs which are executable, i.e., retries &gt; 0 and due date is &#x60;null&#x60; or due date is in the past. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **timers** | **bool**| Only select jobs that are timers. Cannot be used together with &#x60;messages&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **messages** | **bool**| Only select jobs that are messages. Cannot be used together with &#x60;timers&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **due_dates** | **string**| Only select jobs where the due date is lower or higher than the given date. Due date expressions are comma-separated and are structured as follows:  A valid condition value has the form &#x60;operator_value&#x60;. &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the date value as string.  Valid operator values are: &#x60;gt&#x60; - greater than; &#x60;lt&#x60; - lower than. &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **create_times** | **string**| Only select jobs created before or after the given date.  Create time expressions are comma-separated and are structured as follows:  A valid condition value has the form &#x60;operator_value&#x60;. &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the date value as string.  Valid operator values are: &#x60;gt&#x60; - greater than; &#x60;lt&#x60; - lower than. &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **with_exception** | **bool**| Only select jobs that failed due to an exception. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **exception_message** | **string**| Only select jobs that failed due to an exception with the given message. | [optional]
 **failed_activity_id** | **string**| Only select jobs that failed due to an exception at an activity with the given id. | [optional]
 **no_retries_left** | **bool**| Only select jobs which have no retries left. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **active** | **bool**| Only include active jobs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| Only include suspended jobs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **priority_lower_than_or_equals** | **int**| Only include jobs with a priority lower than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **priority_higher_than_or_equals** | **int**| Only include jobs with a priority higher than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **tenant_id_in** | **string**| Only include jobs which belong to one of the passed comma-separated tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include jobs which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_jobs_without_tenant_id** | **bool**| Include jobs which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

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

## `getStacktrace()`

```php
getStacktrace($id): mixed
```

Get Exception Stacktrace

Retrieves the exception stacktrace corresponding to the passed job id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the job to get the exception stacktrace for.

try {
    $result = $apiInstance->getStacktrace($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getStacktrace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to get the exception stacktrace for. |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryJobs()`

```php
queryJobs($first_result, $max_results, $job_query_dto): \OpenAPI\Client\Model\JobDto[]
```

Get Jobs (POST)

Queries for jobs that fulfill given parameters. This method is slightly more powerful than the [Get Jobs](https://docs.camunda.org/manual/latest/reference/rest/job/get-query/) method because it allows filtering by multiple jobs of types `String`, `Number` or `Boolean`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$job_query_dto = {"dueDates":[{"operator":"gt","value":"2018-07-17T17:00:00.000+0200"},{"operator":"lt","value":"2018-07-17T18:00:00.000+0200"}],"createTimes":[{"operator":"gt","value":"2012-05-05T10:00:00.000+0200"},{"operator":"lt","value":"2012-07-16T15:00:00.000+0200"}],"sorting":[{"sortBy":"jobDueDate","sortOrder":"asc"},{"sortBy":"jobRetries","sortOrder":"asc"}]}; // \OpenAPI\Client\Model\JobQueryDto

try {
    $result = $apiInstance->queryJobs($first_result, $max_results, $job_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->queryJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **job_query_dto** | [**\OpenAPI\Client\Model\JobQueryDto**](../Model/JobQueryDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\JobDto[]**](../Model/JobDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryJobsCount()`

```php
queryJobsCount($job_query_dto): \OpenAPI\Client\Model\CountResultDto
```

Get Job Count (POST)

Queries for jobs that fulfill given parameters. This method takes the same message body as the [Get Jobs POST](https://docs.camunda.org/manual/latest/reference/rest/job/post- query/) method and therefore it is slightly more powerful than the [Get Job Count](https://docs.camunda.org/manual/latest/reference/rest/job/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$job_query_dto = {"dueDates":[{"operator":"gt","value":"2012-07-17T17:00:00.000+0200"},{"operator":"lt","value":"2012-07-17T18:00:00.000+0200"}],"createTimes":[{"operator":"gt","value":"2012-05-05T10:00:00.000+0200"},{"operator":"lt","value":"2012-07-16T15:00:00.000+0200"}]}; // \OpenAPI\Client\Model\JobQueryDto

try {
    $result = $apiInstance->queryJobsCount($job_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->queryJobsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_query_dto** | [**\OpenAPI\Client\Model\JobQueryDto**](../Model/JobQueryDto.md)|  | [optional]

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

## `recalculateDuedate()`

```php
recalculateDuedate($id, $creation_date_based)
```

Recalculate Job Due Date

Recalculates the due date of a job by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the job to be updated.
$creation_date_based = True; // bool | Recalculate the due date based on the creation date of the job or the current date. Value may only be `false`, as `true` is the default behavior.

try {
    $apiInstance->recalculateDuedate($id, $creation_date_based);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->recalculateDuedate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to be updated. |
 **creation_date_based** | **bool**| Recalculate the due date based on the creation date of the job or the current date. Value may only be &#x60;false&#x60;, as &#x60;true&#x60; is the default behavior. | [optional]

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

## `setJobDuedate()`

```php
setJobDuedate($id, $job_duedate_dto)
```

Set Job Due Date

Updates the due date of a job by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the job to be updated.
$job_duedate_dto = {"duedate":"2013-08-13T18:43:28.000+0200","cascade":false}; // \OpenAPI\Client\Model\JobDuedateDto

try {
    $apiInstance->setJobDuedate($id, $job_duedate_dto);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->setJobDuedate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to be updated. |
 **job_duedate_dto** | [**\OpenAPI\Client\Model\JobDuedateDto**](../Model/JobDuedateDto.md)|  | [optional]

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

## `setJobPriority()`

```php
setJobPriority($id, $priority_dto)
```

Set Job Priority

Sets the execution priority of a job by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the job to be updated.
$priority_dto = {"priority":10}; // \OpenAPI\Client\Model\PriorityDto

try {
    $apiInstance->setJobPriority($id, $priority_dto);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->setJobPriority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to be updated. |
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

## `setJobRetries()`

```php
setJobRetries($id, $retries_dto)
```

Set Job Retries

Sets the retries of the job to the given number of retries by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the job to be updated.
$retries_dto = {"retries":3}; // \OpenAPI\Client\Model\RetriesDto

try {
    $apiInstance->setJobRetries($id, $retries_dto);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->setJobRetries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to be updated. |
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

## `setJobRetriesAsyncOperation()`

```php
setJobRetriesAsyncOperation($set_job_retries_dto): \OpenAPI\Client\Model\BatchDto
```

Set Job Retries Async (POST)

Create a batch to set retries of jobs asynchronously.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$set_job_retries_dto = {"retries":5,"jobIds":["aJob","secondJob"],"jobQuery":{"dueDates":[{"operator":"gt","value":"2012-07-17T17:00:00.000+0200"},{"operator":"lt","value":"2012-07-17T18:00:00.000+0200"}]}}; // \OpenAPI\Client\Model\SetJobRetriesDto

try {
    $result = $apiInstance->setJobRetriesAsyncOperation($set_job_retries_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->setJobRetriesAsyncOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_job_retries_dto** | [**\OpenAPI\Client\Model\SetJobRetriesDto**](../Model/SetJobRetriesDto.md)|  | [optional]

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

## `updateJobSuspensionState()`

```php
updateJobSuspensionState($id, $suspension_state_dto)
```

Activate/Suspend Job By Id

Activates or suspends a given job by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the job to activate or suspend.
$suspension_state_dto = {"suspended":true}; // \OpenAPI\Client\Model\SuspensionStateDto

try {
    $apiInstance->updateJobSuspensionState($id, $suspension_state_dto);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->updateJobSuspensionState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to activate or suspend. |
 **suspension_state_dto** | [**\OpenAPI\Client\Model\SuspensionStateDto**](../Model/SuspensionStateDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSuspensionStateBy()`

```php
updateSuspensionStateBy($job_suspension_state_dto)
```

Activate/Suspend Jobs

Activates or suspends jobs matching the given criterion. This can only be on of: * `jobDefinitionId` * `processDefinitionId` * `processInstanceId` * `processDefinitionKey`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$job_suspension_state_dto = {"jobDefinitionId":"aJobDefinitionId","suspended":true}; // \OpenAPI\Client\Model\JobSuspensionStateDto

try {
    $apiInstance->updateSuspensionStateBy($job_suspension_state_dto);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->updateSuspensionStateBy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_suspension_state_dto** | [**\OpenAPI\Client\Model\JobSuspensionStateDto**](../Model/JobSuspensionStateDto.md)|  | [optional]

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
