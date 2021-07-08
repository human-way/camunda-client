# OpenAPI\Client\HistoricProcessInstanceApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteHistoricProcessInstance()**](HistoricProcessInstanceApi.md#deleteHistoricProcessInstance) | **DELETE** /history/process-instance/{id} | Delete
[**deleteHistoricProcessInstancesAsync()**](HistoricProcessInstanceApi.md#deleteHistoricProcessInstancesAsync) | **POST** /history/process-instance/delete | Delete Async (POST)
[**deleteHistoricVariableInstancesOfHistoricProcessInstance()**](HistoricProcessInstanceApi.md#deleteHistoricVariableInstancesOfHistoricProcessInstance) | **DELETE** /history/process-instance/{id}/variable-instances | Delete Variable Instances
[**getHistoricProcessInstance()**](HistoricProcessInstanceApi.md#getHistoricProcessInstance) | **GET** /history/process-instance/{id} | Get
[**getHistoricProcessInstanceDurationReport()**](HistoricProcessInstanceApi.md#getHistoricProcessInstanceDurationReport) | **GET** /history/process-instance/report | Get Duration Report
[**getHistoricProcessInstances()**](HistoricProcessInstanceApi.md#getHistoricProcessInstances) | **GET** /history/process-instance | Get List
[**getHistoricProcessInstancesCount()**](HistoricProcessInstanceApi.md#getHistoricProcessInstancesCount) | **GET** /history/process-instance/count | Get List Count
[**queryHistoricProcessInstances()**](HistoricProcessInstanceApi.md#queryHistoricProcessInstances) | **POST** /history/process-instance | Get List (POST)
[**queryHistoricProcessInstancesCount()**](HistoricProcessInstanceApi.md#queryHistoricProcessInstancesCount) | **POST** /history/process-instance/count | Get List Count (POST)
[**setRemovalTimeAsync()**](HistoricProcessInstanceApi.md#setRemovalTimeAsync) | **POST** /history/process-instance/set-removal-time | Set Removal Time Async (POST)


## `deleteHistoricProcessInstance()`

```php
deleteHistoricProcessInstance($id, $fail_if_not_exists)
```

Delete

Deletes a process instance from the history by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the historic process instance to be deleted.
$fail_if_not_exists = True; // bool | If set to `false`, the request will still be successful if the process id is not found.

try {
    $apiInstance->deleteHistoricProcessInstance($id, $fail_if_not_exists);
} catch (Exception $e) {
    echo 'Exception when calling HistoricProcessInstanceApi->deleteHistoricProcessInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the historic process instance to be deleted. |
 **fail_if_not_exists** | **bool**| If set to &#x60;false&#x60;, the request will still be successful if the process id is not found. | [optional]

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

## `deleteHistoricProcessInstancesAsync()`

```php
deleteHistoricProcessInstancesAsync($delete_historic_process_instances_dto): \OpenAPI\Client\Model\BatchDto
```

Delete Async (POST)

Delete multiple historic process instances asynchronously (batch). At least `historicProcessInstanceIds` or `historicProcessInstanceQuery` has to be provided. If both are provided then all instances matching query criterion and instances from the list will be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_historic_process_instances_dto = {"deleteReason":"aReason","historicProcessInstanceIds":["aProcess","secondProcess"],"historicProcessInstanceQuery":{"startedAfter":"2016-10-11T11:44:13.000+0200","finishedBefore":"2016-10-13T11:44:17.000+0200"}}; // \OpenAPI\Client\Model\DeleteHistoricProcessInstancesDto

try {
    $result = $apiInstance->deleteHistoricProcessInstancesAsync($delete_historic_process_instances_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricProcessInstanceApi->deleteHistoricProcessInstancesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_historic_process_instances_dto** | [**\OpenAPI\Client\Model\DeleteHistoricProcessInstancesDto**](../Model/DeleteHistoricProcessInstancesDto.md)|  | [optional]

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

## `deleteHistoricVariableInstancesOfHistoricProcessInstance()`

```php
deleteHistoricVariableInstancesOfHistoricProcessInstance($id)
```

Delete Variable Instances

Deletes all variables of a process instance from the history by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the process instance for which all historic variables are to be deleted.

try {
    $apiInstance->deleteHistoricVariableInstancesOfHistoricProcessInstance($id);
} catch (Exception $e) {
    echo 'Exception when calling HistoricProcessInstanceApi->deleteHistoricVariableInstancesOfHistoricProcessInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance for which all historic variables are to be deleted. |

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

## `getHistoricProcessInstance()`

```php
getHistoricProcessInstance($id): \OpenAPI\Client\Model\HistoricProcessInstanceDto
```

Get

Retrieves a historic process instance by id, according to the `HistoricProcessInstance` interface in the engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the historic process instance to be retrieved.

try {
    $result = $apiInstance->getHistoricProcessInstance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricProcessInstanceApi->getHistoricProcessInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the historic process instance to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\HistoricProcessInstanceDto**](../Model/HistoricProcessInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricProcessInstanceDurationReport()`

```php
getHistoricProcessInstanceDurationReport($report_type, $period_unit, $process_definition_id_in, $process_definition_key_in, $started_before, $started_after): \OpenAPI\Client\Model\DurationReportResultDto[]
```

Get Duration Report

Retrieves a report about the duration of completed process instances, grouped by a period. These reports include the maximum, minimum and average duration of all completed process instances which were started in a given period.  **Note:** This only includes historic data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_type = 'report_type_example'; // string | **Mandatory.** Specifies the type of the report to retrieve. To retrieve a report about the duration of process instances, the value must be set to `duration`.
$period_unit = 'period_unit_example'; // string | **Mandatory.** Specifies the granularity of the report. Valid values are `month` and `quarter`.
$process_definition_id_in = 'process_definition_id_in_example'; // string | Filter by process definition ids. Must be a comma-separated list of process definition ids.
$process_definition_key_in = 'process_definition_key_in_example'; // string | Filter by process definition keys. Must be a comma-separated list of process definition keys.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were started before the given date. By [default](), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2016-01-23T14:42:45.000+0200`.
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were started after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2016-01-23T14:42:45.000+0200`.

try {
    $result = $apiInstance->getHistoricProcessInstanceDurationReport($report_type, $period_unit, $process_definition_id_in, $process_definition_key_in, $started_before, $started_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricProcessInstanceApi->getHistoricProcessInstanceDurationReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_type** | **string**| **Mandatory.** Specifies the type of the report to retrieve. To retrieve a report about the duration of process instances, the value must be set to &#x60;duration&#x60;. |
 **period_unit** | **string**| **Mandatory.** Specifies the granularity of the report. Valid values are &#x60;month&#x60; and &#x60;quarter&#x60;. |
 **process_definition_id_in** | **string**| Filter by process definition ids. Must be a comma-separated list of process definition ids. | [optional]
 **process_definition_key_in** | **string**| Filter by process definition keys. Must be a comma-separated list of process definition keys. | [optional]
 **started_before** | **\DateTime**| Restrict to instances that were started before the given date. By [default](), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2016-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_after** | **\DateTime**| Restrict to instances that were started after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2016-01-23T14:42:45.000+0200&#x60;. | [optional]

### Return type

[**\OpenAPI\Client\Model\DurationReportResultDto[]**](../Model/DurationReportResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/csv`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricProcessInstances()`

```php
getHistoricProcessInstances($sort_by, $sort_order, $first_result, $max_results, $process_instance_id, $process_instance_ids, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_name, $process_definition_name_like, $process_definition_key_not_in, $process_instance_business_key, $process_instance_business_key_like, $root_process_instances, $finished, $unfinished, $with_incidents, $with_root_incidents, $incident_type, $incident_status, $incident_message, $incident_message_like, $started_before, $started_after, $finished_before, $finished_after, $executed_activity_after, $executed_activity_before, $executed_job_after, $executed_job_before, $started_by, $super_process_instance_id, $sub_process_instance_id, $super_case_instance_id, $sub_case_instance_id, $case_instance_id, $tenant_id_in, $without_tenant_id, $executed_activity_id_in, $active_activity_id_in, $active, $suspended, $completed, $externally_terminated, $internally_terminated, $variables, $variable_names_ignore_case, $variable_values_ignore_case): \OpenAPI\Client\Model\HistoricProcessInstanceDto[]
```

Get List

Queries for historic process instances that fulfill the given parameters. The size of the result set can be retrieved by using the [Get Process Instance Count](https://docs.camunda.org/manual/latest/reference/rest/history/process-instance/get-process-instance-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$process_instance_id = 'process_instance_id_example'; // string | Filter by process instance id.
$process_instance_ids = 'process_instance_ids_example'; // string | Filter by process instance ids. Filter by a comma-separated list of `Strings`.
$process_definition_id = 'process_definition_id_example'; // string | Filter by the process definition the instances run on.
$process_definition_key = 'process_definition_key_example'; // string | Filter by the key of the process definition the instances run on.
$process_definition_key_in = 'process_definition_key_in_example'; // string | Filter by a list of process definition keys. A process instance must have one of the given process definition keys. Filter by a comma-separated list of `Strings`.
$process_definition_name = 'process_definition_name_example'; // string | Filter by the name of the process definition the instances run on.
$process_definition_name_like = 'process_definition_name_like_example'; // string | Filter by process definition names that the parameter is a substring of.
$process_definition_key_not_in = 'process_definition_key_not_in_example'; // string | Exclude instances that belong to a set of process definitions. Filter by a comma-separated list of `Strings`.
$process_instance_business_key = 'process_instance_business_key_example'; // string | Filter by process instance business key.
$process_instance_business_key_like = 'process_instance_business_key_like_example'; // string | Filter by process instance business key that the parameter is a substring of.
$root_process_instances = True; // bool | Restrict the query to all process instances that are top level process instances.
$finished = True; // bool | Only include finished process instances. This flag includes all process instances that are completed or terminated. Value may only be `true`, as `false` is the default behavior.
$unfinished = True; // bool | Only include unfinished process instances. Value may only be `true`, as `false` is the default behavior.
$with_incidents = True; // bool | Only include process instances which have an incident. Value may only be `true`, as `false` is the default behavior.
$with_root_incidents = True; // bool | Only include process instances which have a root incident. Value may only be `true`, as `false` is the default behavior.
$incident_type = 'incident_type_example'; // string | Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$incident_status = 'incident_status_example'; // string | Only include process instances which have an incident in status either open or resolved. To get all process instances, use the query parameter withIncidents.
$incident_message = 'incident_message_example'; // string | Filter by the incident message. Exact match.
$incident_message_like = 'incident_message_like_example'; // string | Filter by the incident message that the parameter is a substring of.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were started before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were started after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$finished_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were finished before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$finished_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were finished after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$executed_activity_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that executed an activity after the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$executed_activity_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that executed an activity before the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$executed_job_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that executed an job after the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$executed_job_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that executed an job before the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$started_by = 'started_by_example'; // string | Only include process instances that were started by the given user.
$super_process_instance_id = 'super_process_instance_id_example'; // string | Restrict query to all process instances that are sub process instances of the given process instance. Takes a process instance id.
$sub_process_instance_id = 'sub_process_instance_id_example'; // string | Restrict query to one process instance that has a sub process instance with the given id.
$super_case_instance_id = 'super_case_instance_id_example'; // string | Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id.
$sub_case_instance_id = 'sub_case_instance_id_example'; // string | Restrict query to one process instance that has a sub case instance with the given id.
$case_instance_id = 'case_instance_id_example'; // string | Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a list of tenant ids. A process instance must have one of the given tenant ids. Filter by a comma-separated list of `Strings`
$without_tenant_id = True; // bool | Only include historic process instances which belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$executed_activity_id_in = 'executed_activity_id_in_example'; // string | Restrict to instances that executed an activity with one of given ids. Filter by a comma-separated list of `Strings`
$active_activity_id_in = 'active_activity_id_in_example'; // string | Restrict to instances that have an active activity with one of given ids. Filter by a comma-separated list of `Strings`
$active = True; // bool | Restrict to instances that are active.
$suspended = True; // bool | Restrict to instances that are suspended.
$completed = True; // bool | Restrict to instances that are completed.
$externally_terminated = True; // bool | Restrict to instances that are externallyTerminated.
$internally_terminated = True; // bool | Restrict to instances that are internallyTerminated.
$variables = 'variables_example'; // string | Only include process instances that have/had variables with certain values. Variable filtering expressions are comma-separated and are structured as follows: A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value.  **Note:** Values are always treated as String objects on server side.  Valid operator values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`.  Key and value may not contain underscore or comma characters.
$variable_names_ignore_case = True; // bool | Match all variable names provided in variables case-insensitively. If set to `true` variableName and variablename are treated as equal.
$variable_values_ignore_case = True; // bool | Match all variable values provided in variables case-insensitively. If set to `true` variableValue and variablevalue are treated as equal.

try {
    $result = $apiInstance->getHistoricProcessInstances($sort_by, $sort_order, $first_result, $max_results, $process_instance_id, $process_instance_ids, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_name, $process_definition_name_like, $process_definition_key_not_in, $process_instance_business_key, $process_instance_business_key_like, $root_process_instances, $finished, $unfinished, $with_incidents, $with_root_incidents, $incident_type, $incident_status, $incident_message, $incident_message_like, $started_before, $started_after, $finished_before, $finished_after, $executed_activity_after, $executed_activity_before, $executed_job_after, $executed_job_before, $started_by, $super_process_instance_id, $sub_process_instance_id, $super_case_instance_id, $sub_case_instance_id, $case_instance_id, $tenant_id_in, $without_tenant_id, $executed_activity_id_in, $active_activity_id_in, $active, $suspended, $completed, $externally_terminated, $internally_terminated, $variables, $variable_names_ignore_case, $variable_values_ignore_case);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricProcessInstanceApi->getHistoricProcessInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **process_instance_id** | **string**| Filter by process instance id. | [optional]
 **process_instance_ids** | **string**| Filter by process instance ids. Filter by a comma-separated list of &#x60;Strings&#x60;. | [optional]
 **process_definition_id** | **string**| Filter by the process definition the instances run on. | [optional]
 **process_definition_key** | **string**| Filter by the key of the process definition the instances run on. | [optional]
 **process_definition_key_in** | **string**| Filter by a list of process definition keys. A process instance must have one of the given process definition keys. Filter by a comma-separated list of &#x60;Strings&#x60;. | [optional]
 **process_definition_name** | **string**| Filter by the name of the process definition the instances run on. | [optional]
 **process_definition_name_like** | **string**| Filter by process definition names that the parameter is a substring of. | [optional]
 **process_definition_key_not_in** | **string**| Exclude instances that belong to a set of process definitions. Filter by a comma-separated list of &#x60;Strings&#x60;. | [optional]
 **process_instance_business_key** | **string**| Filter by process instance business key. | [optional]
 **process_instance_business_key_like** | **string**| Filter by process instance business key that the parameter is a substring of. | [optional]
 **root_process_instances** | **bool**| Restrict the query to all process instances that are top level process instances. | [optional]
 **finished** | **bool**| Only include finished process instances. This flag includes all process instances that are completed or terminated. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **unfinished** | **bool**| Only include unfinished process instances. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **with_incidents** | **bool**| Only include process instances which have an incident. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **with_root_incidents** | **bool**| Only include process instances which have a root incident. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **incident_type** | **string**| Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **incident_status** | **string**| Only include process instances which have an incident in status either open or resolved. To get all process instances, use the query parameter withIncidents. | [optional]
 **incident_message** | **string**| Filter by the incident message. Exact match. | [optional]
 **incident_message_like** | **string**| Filter by the incident message that the parameter is a substring of. | [optional]
 **started_before** | **\DateTime**| Restrict to instances that were started before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_after** | **\DateTime**| Restrict to instances that were started after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **finished_before** | **\DateTime**| Restrict to instances that were finished before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **finished_after** | **\DateTime**| Restrict to instances that were finished after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **executed_activity_after** | **\DateTime**| Restrict to instances that executed an activity after the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **executed_activity_before** | **\DateTime**| Restrict to instances that executed an activity before the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **executed_job_after** | **\DateTime**| Restrict to instances that executed an job after the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **executed_job_before** | **\DateTime**| Restrict to instances that executed an job before the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_by** | **string**| Only include process instances that were started by the given user. | [optional]
 **super_process_instance_id** | **string**| Restrict query to all process instances that are sub process instances of the given process instance. Takes a process instance id. | [optional]
 **sub_process_instance_id** | **string**| Restrict query to one process instance that has a sub process instance with the given id. | [optional]
 **super_case_instance_id** | **string**| Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id. | [optional]
 **sub_case_instance_id** | **string**| Restrict query to one process instance that has a sub case instance with the given id. | [optional]
 **case_instance_id** | **string**| Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id. | [optional]
 **tenant_id_in** | **string**| Filter by a list of tenant ids. A process instance must have one of the given tenant ids. Filter by a comma-separated list of &#x60;Strings&#x60; | [optional]
 **without_tenant_id** | **bool**| Only include historic process instances which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **executed_activity_id_in** | **string**| Restrict to instances that executed an activity with one of given ids. Filter by a comma-separated list of &#x60;Strings&#x60; | [optional]
 **active_activity_id_in** | **string**| Restrict to instances that have an active activity with one of given ids. Filter by a comma-separated list of &#x60;Strings&#x60; | [optional]
 **active** | **bool**| Restrict to instances that are active. | [optional]
 **suspended** | **bool**| Restrict to instances that are suspended. | [optional]
 **completed** | **bool**| Restrict to instances that are completed. | [optional]
 **externally_terminated** | **bool**| Restrict to instances that are externallyTerminated. | [optional]
 **internally_terminated** | **bool**| Restrict to instances that are internallyTerminated. | [optional]
 **variables** | **string**| Only include process instances that have/had variables with certain values. Variable filtering expressions are comma-separated and are structured as follows: A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value.  **Note:** Values are always treated as String objects on server side.  Valid operator values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;.  Key and value may not contain underscore or comma characters. | [optional]
 **variable_names_ignore_case** | **bool**| Match all variable names provided in variables case-insensitively. If set to &#x60;true&#x60; variableName and variablename are treated as equal. | [optional]
 **variable_values_ignore_case** | **bool**| Match all variable values provided in variables case-insensitively. If set to &#x60;true&#x60; variableValue and variablevalue are treated as equal. | [optional]

### Return type

[**\OpenAPI\Client\Model\HistoricProcessInstanceDto[]**](../Model/HistoricProcessInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricProcessInstancesCount()`

```php
getHistoricProcessInstancesCount($process_instance_id, $process_instance_ids, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_name, $process_definition_name_like, $process_definition_key_not_in, $process_instance_business_key, $process_instance_business_key_like, $root_process_instances, $finished, $unfinished, $with_incidents, $with_root_incidents, $incident_type, $incident_status, $incident_message, $incident_message_like, $started_before, $started_after, $finished_before, $finished_after, $executed_activity_after, $executed_activity_before, $executed_job_after, $executed_job_before, $started_by, $super_process_instance_id, $sub_process_instance_id, $super_case_instance_id, $sub_case_instance_id, $case_instance_id, $tenant_id_in, $without_tenant_id, $executed_activity_id_in, $active_activity_id_in, $active, $suspended, $completed, $externally_terminated, $internally_terminated, $variables, $variable_names_ignore_case, $variable_values_ignore_case): \OpenAPI\Client\Model\CountResultDto
```

Get List Count

Queries for the number of historic process instances that fulfill the given parameters. Takes the same parameters as the [Get Process Instances](https://docs.camunda.org/manual/latest/reference/rest/history/process-instance/get-process-instance-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$process_instance_id = 'process_instance_id_example'; // string | Filter by process instance id.
$process_instance_ids = 'process_instance_ids_example'; // string | Filter by process instance ids. Filter by a comma-separated list of `Strings`.
$process_definition_id = 'process_definition_id_example'; // string | Filter by the process definition the instances run on.
$process_definition_key = 'process_definition_key_example'; // string | Filter by the key of the process definition the instances run on.
$process_definition_key_in = 'process_definition_key_in_example'; // string | Filter by a list of process definition keys. A process instance must have one of the given process definition keys. Filter by a comma-separated list of `Strings`.
$process_definition_name = 'process_definition_name_example'; // string | Filter by the name of the process definition the instances run on.
$process_definition_name_like = 'process_definition_name_like_example'; // string | Filter by process definition names that the parameter is a substring of.
$process_definition_key_not_in = 'process_definition_key_not_in_example'; // string | Exclude instances that belong to a set of process definitions. Filter by a comma-separated list of `Strings`.
$process_instance_business_key = 'process_instance_business_key_example'; // string | Filter by process instance business key.
$process_instance_business_key_like = 'process_instance_business_key_like_example'; // string | Filter by process instance business key that the parameter is a substring of.
$root_process_instances = True; // bool | Restrict the query to all process instances that are top level process instances.
$finished = True; // bool | Only include finished process instances. This flag includes all process instances that are completed or terminated. Value may only be `true`, as `false` is the default behavior.
$unfinished = True; // bool | Only include unfinished process instances. Value may only be `true`, as `false` is the default behavior.
$with_incidents = True; // bool | Only include process instances which have an incident. Value may only be `true`, as `false` is the default behavior.
$with_root_incidents = True; // bool | Only include process instances which have a root incident. Value may only be `true`, as `false` is the default behavior.
$incident_type = 'incident_type_example'; // string | Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$incident_status = 'incident_status_example'; // string | Only include process instances which have an incident in status either open or resolved. To get all process instances, use the query parameter withIncidents.
$incident_message = 'incident_message_example'; // string | Filter by the incident message. Exact match.
$incident_message_like = 'incident_message_like_example'; // string | Filter by the incident message that the parameter is a substring of.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were started before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were started after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$finished_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were finished before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$finished_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were finished after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$executed_activity_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that executed an activity after the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$executed_activity_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that executed an activity before the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$executed_job_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that executed an job after the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$executed_job_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that executed an job before the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$started_by = 'started_by_example'; // string | Only include process instances that were started by the given user.
$super_process_instance_id = 'super_process_instance_id_example'; // string | Restrict query to all process instances that are sub process instances of the given process instance. Takes a process instance id.
$sub_process_instance_id = 'sub_process_instance_id_example'; // string | Restrict query to one process instance that has a sub process instance with the given id.
$super_case_instance_id = 'super_case_instance_id_example'; // string | Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id.
$sub_case_instance_id = 'sub_case_instance_id_example'; // string | Restrict query to one process instance that has a sub case instance with the given id.
$case_instance_id = 'case_instance_id_example'; // string | Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a list of tenant ids. A process instance must have one of the given tenant ids. Filter by a comma-separated list of `Strings`
$without_tenant_id = True; // bool | Only include historic process instances which belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$executed_activity_id_in = 'executed_activity_id_in_example'; // string | Restrict to instances that executed an activity with one of given ids. Filter by a comma-separated list of `Strings`
$active_activity_id_in = 'active_activity_id_in_example'; // string | Restrict to instances that have an active activity with one of given ids. Filter by a comma-separated list of `Strings`
$active = True; // bool | Restrict to instances that are active.
$suspended = True; // bool | Restrict to instances that are suspended.
$completed = True; // bool | Restrict to instances that are completed.
$externally_terminated = True; // bool | Restrict to instances that are externallyTerminated.
$internally_terminated = True; // bool | Restrict to instances that are internallyTerminated.
$variables = 'variables_example'; // string | Only include process instances that have/had variables with certain values. Variable filtering expressions are comma-separated and are structured as follows: A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value.  **Note:** Values are always treated as String objects on server side.  Valid operator values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`.  Key and value may not contain underscore or comma characters.
$variable_names_ignore_case = True; // bool | Match all variable names provided in variables case-insensitively. If set to `true` variableName and variablename are treated as equal.
$variable_values_ignore_case = True; // bool | Match all variable values provided in variables case-insensitively. If set to `true` variableValue and variablevalue are treated as equal.

try {
    $result = $apiInstance->getHistoricProcessInstancesCount($process_instance_id, $process_instance_ids, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_name, $process_definition_name_like, $process_definition_key_not_in, $process_instance_business_key, $process_instance_business_key_like, $root_process_instances, $finished, $unfinished, $with_incidents, $with_root_incidents, $incident_type, $incident_status, $incident_message, $incident_message_like, $started_before, $started_after, $finished_before, $finished_after, $executed_activity_after, $executed_activity_before, $executed_job_after, $executed_job_before, $started_by, $super_process_instance_id, $sub_process_instance_id, $super_case_instance_id, $sub_case_instance_id, $case_instance_id, $tenant_id_in, $without_tenant_id, $executed_activity_id_in, $active_activity_id_in, $active, $suspended, $completed, $externally_terminated, $internally_terminated, $variables, $variable_names_ignore_case, $variable_values_ignore_case);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricProcessInstanceApi->getHistoricProcessInstancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_instance_id** | **string**| Filter by process instance id. | [optional]
 **process_instance_ids** | **string**| Filter by process instance ids. Filter by a comma-separated list of &#x60;Strings&#x60;. | [optional]
 **process_definition_id** | **string**| Filter by the process definition the instances run on. | [optional]
 **process_definition_key** | **string**| Filter by the key of the process definition the instances run on. | [optional]
 **process_definition_key_in** | **string**| Filter by a list of process definition keys. A process instance must have one of the given process definition keys. Filter by a comma-separated list of &#x60;Strings&#x60;. | [optional]
 **process_definition_name** | **string**| Filter by the name of the process definition the instances run on. | [optional]
 **process_definition_name_like** | **string**| Filter by process definition names that the parameter is a substring of. | [optional]
 **process_definition_key_not_in** | **string**| Exclude instances that belong to a set of process definitions. Filter by a comma-separated list of &#x60;Strings&#x60;. | [optional]
 **process_instance_business_key** | **string**| Filter by process instance business key. | [optional]
 **process_instance_business_key_like** | **string**| Filter by process instance business key that the parameter is a substring of. | [optional]
 **root_process_instances** | **bool**| Restrict the query to all process instances that are top level process instances. | [optional]
 **finished** | **bool**| Only include finished process instances. This flag includes all process instances that are completed or terminated. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **unfinished** | **bool**| Only include unfinished process instances. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **with_incidents** | **bool**| Only include process instances which have an incident. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **with_root_incidents** | **bool**| Only include process instances which have a root incident. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **incident_type** | **string**| Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **incident_status** | **string**| Only include process instances which have an incident in status either open or resolved. To get all process instances, use the query parameter withIncidents. | [optional]
 **incident_message** | **string**| Filter by the incident message. Exact match. | [optional]
 **incident_message_like** | **string**| Filter by the incident message that the parameter is a substring of. | [optional]
 **started_before** | **\DateTime**| Restrict to instances that were started before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_after** | **\DateTime**| Restrict to instances that were started after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **finished_before** | **\DateTime**| Restrict to instances that were finished before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **finished_after** | **\DateTime**| Restrict to instances that were finished after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **executed_activity_after** | **\DateTime**| Restrict to instances that executed an activity after the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **executed_activity_before** | **\DateTime**| Restrict to instances that executed an activity before the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **executed_job_after** | **\DateTime**| Restrict to instances that executed an job after the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **executed_job_before** | **\DateTime**| Restrict to instances that executed an job before the given date (inclusive). By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_by** | **string**| Only include process instances that were started by the given user. | [optional]
 **super_process_instance_id** | **string**| Restrict query to all process instances that are sub process instances of the given process instance. Takes a process instance id. | [optional]
 **sub_process_instance_id** | **string**| Restrict query to one process instance that has a sub process instance with the given id. | [optional]
 **super_case_instance_id** | **string**| Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id. | [optional]
 **sub_case_instance_id** | **string**| Restrict query to one process instance that has a sub case instance with the given id. | [optional]
 **case_instance_id** | **string**| Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id. | [optional]
 **tenant_id_in** | **string**| Filter by a list of tenant ids. A process instance must have one of the given tenant ids. Filter by a comma-separated list of &#x60;Strings&#x60; | [optional]
 **without_tenant_id** | **bool**| Only include historic process instances which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **executed_activity_id_in** | **string**| Restrict to instances that executed an activity with one of given ids. Filter by a comma-separated list of &#x60;Strings&#x60; | [optional]
 **active_activity_id_in** | **string**| Restrict to instances that have an active activity with one of given ids. Filter by a comma-separated list of &#x60;Strings&#x60; | [optional]
 **active** | **bool**| Restrict to instances that are active. | [optional]
 **suspended** | **bool**| Restrict to instances that are suspended. | [optional]
 **completed** | **bool**| Restrict to instances that are completed. | [optional]
 **externally_terminated** | **bool**| Restrict to instances that are externallyTerminated. | [optional]
 **internally_terminated** | **bool**| Restrict to instances that are internallyTerminated. | [optional]
 **variables** | **string**| Only include process instances that have/had variables with certain values. Variable filtering expressions are comma-separated and are structured as follows: A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value.  **Note:** Values are always treated as String objects on server side.  Valid operator values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;.  Key and value may not contain underscore or comma characters. | [optional]
 **variable_names_ignore_case** | **bool**| Match all variable names provided in variables case-insensitively. If set to &#x60;true&#x60; variableName and variablename are treated as equal. | [optional]
 **variable_values_ignore_case** | **bool**| Match all variable values provided in variables case-insensitively. If set to &#x60;true&#x60; variableValue and variablevalue are treated as equal. | [optional]

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

## `queryHistoricProcessInstances()`

```php
queryHistoricProcessInstances($first_result, $max_results, $historic_process_instance_query_dto): \OpenAPI\Client\Model\HistoricProcessInstanceDto[]
```

Get List (POST)

Queries for historic process instances that fulfill the given parameters. This method is slightly more powerful than the [Get Process Instance](https://docs.camunda.org/manual/latest/reference/rest/history/process-instance/get-process-instance-query/) because it allows filtering by multiple process variables of types `String`, `Number` or `Boolean`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$historic_process_instance_query_dto = {"finishedAfter":"2013-01-01T00:00:00.000+0200","finishedBefore":"2013-04-01T23:59:59.000+0200","executedActivityAfter":"2013-03-23T13:42:44.000+0200","variables":[{"name":"myVariable","operator":"eq","value":"camunda"},{"name":"mySecondVariable","operator":"neq","value":124}],"sorting":[{"sortBy":"businessKey","sortOrder":"asc"},{"sortBy":"startTime","sortOrder":"desc"}]}; // \OpenAPI\Client\Model\HistoricProcessInstanceQueryDto

try {
    $result = $apiInstance->queryHistoricProcessInstances($first_result, $max_results, $historic_process_instance_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricProcessInstanceApi->queryHistoricProcessInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **historic_process_instance_query_dto** | [**\OpenAPI\Client\Model\HistoricProcessInstanceQueryDto**](../Model/HistoricProcessInstanceQueryDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\HistoricProcessInstanceDto[]**](../Model/HistoricProcessInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryHistoricProcessInstancesCount()`

```php
queryHistoricProcessInstancesCount($historic_process_instance_query_dto): \OpenAPI\Client\Model\CountResultDto
```

Get List Count (POST)

Queries for the number of historic process instances that fulfill the given parameters. This method takes the same message body as the [Get Process Instances (POST)](https://docs.camunda.org/manual/latest/reference/rest/history/process-instance/get-process-instance-query/) method and therefore it is slightly more powerful than the [Get Process Instance Count](https://docs.camunda.org/manual/latest/reference/rest/history/process-instance/post-process-instance-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$historic_process_instance_query_dto = {"finishedAfter":"2013-01-01T00:00:00.000+0200","finishedBefore":"2013-04-01T23:59:59.000+0200","executedActivityAfter":"2013-03-23T13:42:44.000+0200","variables":[{"name":"myVariable","operator":"eq","value":"camunda"},{"name":"mySecondVariable","operator":"neq","value":124}]}; // \OpenAPI\Client\Model\HistoricProcessInstanceQueryDto

try {
    $result = $apiInstance->queryHistoricProcessInstancesCount($historic_process_instance_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricProcessInstanceApi->queryHistoricProcessInstancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **historic_process_instance_query_dto** | [**\OpenAPI\Client\Model\HistoricProcessInstanceQueryDto**](../Model/HistoricProcessInstanceQueryDto.md)|  | [optional]

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

## `setRemovalTimeAsync()`

```php
setRemovalTimeAsync($set_removal_time_to_historic_process_instances_dto): \OpenAPI\Client\Model\BatchDto
```

Set Removal Time Async (POST)

Sets the removal time to multiple historic process instances asynchronously (batch).  At least `historicProcessInstanceIds` or `historicProcessInstanceQuery` has to be provided. If both are provided, all instances matching query criterion and instances from the list will be updated with a removal time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$set_removal_time_to_historic_process_instances_dto = {"absoluteRemovalTime":"2019-05-05T11:56:24.725+0200","hierarchical":true,"historicProcessInstanceQuery":{"unfinished":true},"historicProcessInstanceIds":["b4d2ad98-7240-11e9-98b7-be5e0f7575b7","b4d2ad94-7240-11e9-98b7-be5e0f7575b7"]}; // \OpenAPI\Client\Model\SetRemovalTimeToHistoricProcessInstancesDto

try {
    $result = $apiInstance->setRemovalTimeAsync($set_removal_time_to_historic_process_instances_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricProcessInstanceApi->setRemovalTimeAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_removal_time_to_historic_process_instances_dto** | [**\OpenAPI\Client\Model\SetRemovalTimeToHistoricProcessInstancesDto**](../Model/SetRemovalTimeToHistoricProcessInstancesDto.md)|  | [optional]

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
