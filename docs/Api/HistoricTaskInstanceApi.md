# OpenAPI\Client\HistoricTaskInstanceApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistoricTaskInstanceReport()**](HistoricTaskInstanceApi.md#getHistoricTaskInstanceReport) | **GET** /history/task/report | Get Task Report (Historic)
[**getHistoricTaskInstances()**](HistoricTaskInstanceApi.md#getHistoricTaskInstances) | **GET** /history/task | Get Tasks (Historic)
[**getHistoricTaskInstancesCount()**](HistoricTaskInstanceApi.md#getHistoricTaskInstancesCount) | **GET** /history/task/count | Get Task Count
[**queryHistoricTaskInstances()**](HistoricTaskInstanceApi.md#queryHistoricTaskInstances) | **POST** /history/task | Get Tasks (Historic) (POST)
[**queryHistoricTaskInstancesCount()**](HistoricTaskInstanceApi.md#queryHistoricTaskInstancesCount) | **POST** /history/task/count | Get Task Count (POST)


## `getHistoricTaskInstanceReport()`

```php
getHistoricTaskInstanceReport($report_type, $period_unit, $completed_before, $completed_after, $group_by): \OpenAPI\Client\Model\HistoricTaskInstanceReportResultDto[]
```

Get Task Report (Historic)

Retrieves a report of completed tasks. When the report type is set to `count`, the report contains a list of completed task counts where an entry contains the task name, the definition key of the task, the process definition id, the process definition key, the process definition name and the count of how many tasks were completed for the specified key in a given period. When the report type is set to `duration`, the report contains a minimum, maximum and average duration value of all completed task instances in a given period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricTaskInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$report_type = 'report_type_example'; // string | **Mandatory.** Specifies the kind of the report to execute. To retrieve a report about the duration of process instances the value must be set to `duration`. For a report of the completed tasks in a specific timespan the value must be set to `count`.
$period_unit = 'period_unit_example'; // string | When the report type is set to `duration`, this parameter is **mandatory**. Specifies the granularity of the report. Valid values are `month` and `quarter`.
$completed_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that were completed before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$completed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that were completed after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$group_by = 'group_by_example'; // string | When the report type is set to `count`, this parameter is **mandatory**. Groups the tasks report by a given criterion. Valid values are `taskName` and `processDefinition`.

try {
    $result = $apiInstance->getHistoricTaskInstanceReport($report_type, $period_unit, $completed_before, $completed_after, $group_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricTaskInstanceApi->getHistoricTaskInstanceReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_type** | **string**| **Mandatory.** Specifies the kind of the report to execute. To retrieve a report about the duration of process instances the value must be set to &#x60;duration&#x60;. For a report of the completed tasks in a specific timespan the value must be set to &#x60;count&#x60;. | [optional]
 **period_unit** | **string**| When the report type is set to &#x60;duration&#x60;, this parameter is **mandatory**. Specifies the granularity of the report. Valid values are &#x60;month&#x60; and &#x60;quarter&#x60;. | [optional]
 **completed_before** | **\DateTime**| Restrict to tasks that were completed before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **completed_after** | **\DateTime**| Restrict to tasks that were completed after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **group_by** | **string**| When the report type is set to &#x60;count&#x60;, this parameter is **mandatory**. Groups the tasks report by a given criterion. Valid values are &#x60;taskName&#x60; and &#x60;processDefinition&#x60;. | [optional]

### Return type

[**\OpenAPI\Client\Model\HistoricTaskInstanceReportResultDto[]**](../Model/HistoricTaskInstanceReportResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricTaskInstances()`

```php
getHistoricTaskInstances($task_id, $task_parent_task_id, $process_instance_id, $process_instance_business_key, $process_instance_business_key_in, $process_instance_business_key_like, $execution_id, $process_definition_id, $process_definition_key, $process_definition_name, $case_instance_id, $case_execution_id, $case_definition_id, $case_definition_key, $case_definition_name, $activity_instance_id_in, $task_name, $task_name_like, $task_description, $task_description_like, $task_definition_key, $task_definition_key_in, $task_delete_reason, $task_delete_reason_like, $task_assignee, $task_assignee_like, $task_owner, $task_owner_like, $task_priority, $assigned, $unassigned, $finished, $unfinished, $process_finished, $process_unfinished, $task_due_date, $task_due_date_before, $task_due_date_after, $without_task_due_date, $task_follow_up_date, $task_follow_up_date_before, $task_follow_up_date_after, $started_before, $started_after, $finished_before, $finished_after, $tenant_id_in, $without_tenant_id, $task_variables, $process_variables, $variable_names_ignore_case, $variable_values_ignore_case, $task_involved_user, $task_involved_group, $task_had_candidate_user, $task_had_candidate_group, $with_candidate_groups, $without_candidate_groups, $sort_by, $sort_order, $first_result, $max_results): \OpenAPI\Client\Model\HistoricTaskInstanceDto[]
```

Get Tasks (Historic)

Queries for historic tasks that fulfill the given parameters. The size of the result set can be retrieved by using the [Get Task Count](https://docs.camunda.org/manual/latest/reference/rest/history/task/get-task-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricTaskInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = 'task_id_example'; // string | Filter by task id.
$task_parent_task_id = 'task_parent_task_id_example'; // string | Filter by parent task id.
$process_instance_id = 'process_instance_id_example'; // string | Filter by process instance id.
$process_instance_business_key = 'process_instance_business_key_example'; // string | Filter by process instance business key.
$process_instance_business_key_in = 'process_instance_business_key_in_example'; // string | Filter by process instances with one of the give business keys. The keys need to be in a comma-separated list.
$process_instance_business_key_like = 'process_instance_business_key_like_example'; // string | Filter by  process instance business key that has the parameter value as a substring.
$execution_id = 'execution_id_example'; // string | Filter by the id of the execution that executed the task.
$process_definition_id = 'process_definition_id_example'; // string | Filter by process definition id.
$process_definition_key = 'process_definition_key_example'; // string | Restrict to tasks that belong to a process definition with the given key.
$process_definition_name = 'process_definition_name_example'; // string | Restrict to tasks that belong to a process definition with the given name.
$case_instance_id = 'case_instance_id_example'; // string | Filter by case instance id.
$case_execution_id = 'case_execution_id_example'; // string | Filter by the id of the case execution that executed the task.
$case_definition_id = 'case_definition_id_example'; // string | Filter by case definition id.
$case_definition_key = 'case_definition_key_example'; // string | Restrict to tasks that belong to a case definition with the given key.
$case_definition_name = 'case_definition_name_example'; // string | Restrict to tasks that belong to a case definition with the given name.
$activity_instance_id_in = 'activity_instance_id_in_example'; // string | Only include tasks which belong to one of the passed comma-separated activity instance ids.
$task_name = 'task_name_example'; // string | Restrict to tasks that have the given name.
$task_name_like = 'task_name_like_example'; // string | Restrict to tasks that have a name with the given parameter value as substring.
$task_description = 'task_description_example'; // string | Restrict to tasks that have the given description.
$task_description_like = 'task_description_like_example'; // string | Restrict to tasks that have a description that has the parameter value as a substring.
$task_definition_key = 'task_definition_key_example'; // string | Restrict to tasks that have the given key.
$task_definition_key_in = 'task_definition_key_in_example'; // string | Restrict to tasks that have one of the passed comma-separated task definition keys.
$task_delete_reason = 'task_delete_reason_example'; // string | Restrict to tasks that have the given delete reason.
$task_delete_reason_like = 'task_delete_reason_like_example'; // string | Restrict to tasks that have a delete reason that has the parameter value as a substring.
$task_assignee = 'task_assignee_example'; // string | Restrict to tasks that the given user is assigned to.
$task_assignee_like = 'task_assignee_like_example'; // string | Restrict to tasks that are assigned to users with the parameter value as a substring.
$task_owner = 'task_owner_example'; // string | Restrict to tasks that the given user owns.
$task_owner_like = 'task_owner_like_example'; // string | Restrict to tasks that are owned by users with the parameter value as a substring.
$task_priority = 56; // int | Restrict to tasks that have the given priority.
$assigned = True; // bool | If set to `true`, restricts the query to all tasks that are assigned.
$unassigned = True; // bool | If set to `true`, restricts the query to all tasks that are unassigned.
$finished = True; // bool | Only include finished tasks. Value may only be `true`, as `false` is the default behavior.
$unfinished = True; // bool | Only include unfinished tasks. Value may only be `true`, as `false` is the default behavior.
$process_finished = True; // bool | Only include tasks of finished processes. Value may only be `true`, as `false` is the default behavior.
$process_unfinished = True; // bool | Only include tasks of unfinished processes. Value may only be `true`, as `false` is the default behavior.
$task_due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that are due on the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$task_due_date_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that are due before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$task_due_date_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that are due after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$without_task_due_date = True; // bool | Only include tasks which have no due date. Value may only be `true`, as `false` is the default behavior.
$task_follow_up_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that have a followUp date on the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$task_follow_up_date_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that have a followUp date before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$task_follow_up_date_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that have a followUp date after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that were started before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that were started after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$finished_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that were finished before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$finished_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that were finished after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids. A task instance must have one of the given tenant ids.
$without_tenant_id = True; // bool | Only include historic task instances that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$task_variables = 'task_variables_example'; // string | Only include tasks that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value. **Note:** Values are always treated as `String` objects on server side.   Valid operator values are: * `eq` - equal to; * `neq` - not equal to; * `gt` - greater than; * `gteq` - greater than or equal to; * `lt` - lower than; * `lteq` - lower than or equal to; * `like`.  `key` and `value` may not contain underscore or comma characters.
$process_variables = 'process_variables_example'; // string | Only include tasks that belong to process instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value. **Note:** Values are always treated as `String` objects on server side.   Valid operator values are: * `eq` - equal to; * `neq` - not equal to; * `gt` - greater than; * `gteq` - greater than or equal to; * `lt` - lower than; * `lteq` - lower than or equal to; * `like`; * `notLike`.  `key` and `value` may not contain underscore or comma characters.
$variable_names_ignore_case = True; // bool | Match the variable name provided in `taskVariables` and `processVariables` case- insensitively. If set to `true` **variableName** and **variablename** are treated as equal.
$variable_values_ignore_case = True; // bool | Match the variable value provided in `taskVariables` and `processVariables` case- insensitively. If set to `true` **variableValue** and **variablevalue** are treated as equal.
$task_involved_user = 'task_involved_user_example'; // string | Restrict to tasks with a historic identity link to the given user.
$task_involved_group = 'task_involved_group_example'; // string | Restrict to tasks with a historic identity link to the given group.
$task_had_candidate_user = 'task_had_candidate_user_example'; // string | Restrict to tasks with a historic identity link to the given candidate user.
$task_had_candidate_group = 'task_had_candidate_group_example'; // string | Restrict to tasks with a historic identity link to the given candidate group.
$with_candidate_groups = True; // bool | Only include tasks which have a candidate group. Value may only be `true`, as `false` is the default behavior.
$without_candidate_groups = True; // bool | Only include tasks which have no candidate group. Value may only be `true`, as `false` is the default behavior.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getHistoricTaskInstances($task_id, $task_parent_task_id, $process_instance_id, $process_instance_business_key, $process_instance_business_key_in, $process_instance_business_key_like, $execution_id, $process_definition_id, $process_definition_key, $process_definition_name, $case_instance_id, $case_execution_id, $case_definition_id, $case_definition_key, $case_definition_name, $activity_instance_id_in, $task_name, $task_name_like, $task_description, $task_description_like, $task_definition_key, $task_definition_key_in, $task_delete_reason, $task_delete_reason_like, $task_assignee, $task_assignee_like, $task_owner, $task_owner_like, $task_priority, $assigned, $unassigned, $finished, $unfinished, $process_finished, $process_unfinished, $task_due_date, $task_due_date_before, $task_due_date_after, $without_task_due_date, $task_follow_up_date, $task_follow_up_date_before, $task_follow_up_date_after, $started_before, $started_after, $finished_before, $finished_after, $tenant_id_in, $without_tenant_id, $task_variables, $process_variables, $variable_names_ignore_case, $variable_values_ignore_case, $task_involved_user, $task_involved_group, $task_had_candidate_user, $task_had_candidate_group, $with_candidate_groups, $without_candidate_groups, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricTaskInstanceApi->getHistoricTaskInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Filter by task id. | [optional]
 **task_parent_task_id** | **string**| Filter by parent task id. | [optional]
 **process_instance_id** | **string**| Filter by process instance id. | [optional]
 **process_instance_business_key** | **string**| Filter by process instance business key. | [optional]
 **process_instance_business_key_in** | **string**| Filter by process instances with one of the give business keys. The keys need to be in a comma-separated list. | [optional]
 **process_instance_business_key_like** | **string**| Filter by  process instance business key that has the parameter value as a substring. | [optional]
 **execution_id** | **string**| Filter by the id of the execution that executed the task. | [optional]
 **process_definition_id** | **string**| Filter by process definition id. | [optional]
 **process_definition_key** | **string**| Restrict to tasks that belong to a process definition with the given key. | [optional]
 **process_definition_name** | **string**| Restrict to tasks that belong to a process definition with the given name. | [optional]
 **case_instance_id** | **string**| Filter by case instance id. | [optional]
 **case_execution_id** | **string**| Filter by the id of the case execution that executed the task. | [optional]
 **case_definition_id** | **string**| Filter by case definition id. | [optional]
 **case_definition_key** | **string**| Restrict to tasks that belong to a case definition with the given key. | [optional]
 **case_definition_name** | **string**| Restrict to tasks that belong to a case definition with the given name. | [optional]
 **activity_instance_id_in** | **string**| Only include tasks which belong to one of the passed comma-separated activity instance ids. | [optional]
 **task_name** | **string**| Restrict to tasks that have the given name. | [optional]
 **task_name_like** | **string**| Restrict to tasks that have a name with the given parameter value as substring. | [optional]
 **task_description** | **string**| Restrict to tasks that have the given description. | [optional]
 **task_description_like** | **string**| Restrict to tasks that have a description that has the parameter value as a substring. | [optional]
 **task_definition_key** | **string**| Restrict to tasks that have the given key. | [optional]
 **task_definition_key_in** | **string**| Restrict to tasks that have one of the passed comma-separated task definition keys. | [optional]
 **task_delete_reason** | **string**| Restrict to tasks that have the given delete reason. | [optional]
 **task_delete_reason_like** | **string**| Restrict to tasks that have a delete reason that has the parameter value as a substring. | [optional]
 **task_assignee** | **string**| Restrict to tasks that the given user is assigned to. | [optional]
 **task_assignee_like** | **string**| Restrict to tasks that are assigned to users with the parameter value as a substring. | [optional]
 **task_owner** | **string**| Restrict to tasks that the given user owns. | [optional]
 **task_owner_like** | **string**| Restrict to tasks that are owned by users with the parameter value as a substring. | [optional]
 **task_priority** | **int**| Restrict to tasks that have the given priority. | [optional]
 **assigned** | **bool**| If set to &#x60;true&#x60;, restricts the query to all tasks that are assigned. | [optional]
 **unassigned** | **bool**| If set to &#x60;true&#x60;, restricts the query to all tasks that are unassigned. | [optional]
 **finished** | **bool**| Only include finished tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **unfinished** | **bool**| Only include unfinished tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **process_finished** | **bool**| Only include tasks of finished processes. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **process_unfinished** | **bool**| Only include tasks of unfinished processes. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **task_due_date** | **\DateTime**| Restrict to tasks that are due on the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **task_due_date_before** | **\DateTime**| Restrict to tasks that are due before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **task_due_date_after** | **\DateTime**| Restrict to tasks that are due after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **without_task_due_date** | **bool**| Only include tasks which have no due date. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **task_follow_up_date** | **\DateTime**| Restrict to tasks that have a followUp date on the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **task_follow_up_date_before** | **\DateTime**| Restrict to tasks that have a followUp date before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **task_follow_up_date_after** | **\DateTime**| Restrict to tasks that have a followUp date after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_before** | **\DateTime**| Restrict to tasks that were started before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_after** | **\DateTime**| Restrict to tasks that were started after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **finished_before** | **\DateTime**| Restrict to tasks that were finished before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **finished_after** | **\DateTime**| Restrict to tasks that were finished after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A task instance must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic task instances that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **task_variables** | **string**| Only include tasks that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value. **Note:** Values are always treated as &#x60;String&#x60; objects on server side.   Valid operator values are: * &#x60;eq&#x60; - equal to; * &#x60;neq&#x60; - not equal to; * &#x60;gt&#x60; - greater than; * &#x60;gteq&#x60; - greater than or equal to; * &#x60;lt&#x60; - lower than; * &#x60;lteq&#x60; - lower than or equal to; * &#x60;like&#x60;.  &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **process_variables** | **string**| Only include tasks that belong to process instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value. **Note:** Values are always treated as &#x60;String&#x60; objects on server side.   Valid operator values are: * &#x60;eq&#x60; - equal to; * &#x60;neq&#x60; - not equal to; * &#x60;gt&#x60; - greater than; * &#x60;gteq&#x60; - greater than or equal to; * &#x60;lt&#x60; - lower than; * &#x60;lteq&#x60; - lower than or equal to; * &#x60;like&#x60;; * &#x60;notLike&#x60;.  &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **variable_names_ignore_case** | **bool**| Match the variable name provided in &#x60;taskVariables&#x60; and &#x60;processVariables&#x60; case- insensitively. If set to &#x60;true&#x60; **variableName** and **variablename** are treated as equal. | [optional]
 **variable_values_ignore_case** | **bool**| Match the variable value provided in &#x60;taskVariables&#x60; and &#x60;processVariables&#x60; case- insensitively. If set to &#x60;true&#x60; **variableValue** and **variablevalue** are treated as equal. | [optional]
 **task_involved_user** | **string**| Restrict to tasks with a historic identity link to the given user. | [optional]
 **task_involved_group** | **string**| Restrict to tasks with a historic identity link to the given group. | [optional]
 **task_had_candidate_user** | **string**| Restrict to tasks with a historic identity link to the given candidate user. | [optional]
 **task_had_candidate_group** | **string**| Restrict to tasks with a historic identity link to the given candidate group. | [optional]
 **with_candidate_groups** | **bool**| Only include tasks which have a candidate group. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **without_candidate_groups** | **bool**| Only include tasks which have no candidate group. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\OpenAPI\Client\Model\HistoricTaskInstanceDto[]**](../Model/HistoricTaskInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricTaskInstancesCount()`

```php
getHistoricTaskInstancesCount($task_id, $task_parent_task_id, $process_instance_id, $process_instance_business_key, $process_instance_business_key_in, $process_instance_business_key_like, $execution_id, $process_definition_id, $process_definition_key, $process_definition_name, $case_instance_id, $case_execution_id, $case_definition_id, $case_definition_key, $case_definition_name, $activity_instance_id_in, $task_name, $task_name_like, $task_description, $task_description_like, $task_definition_key, $task_definition_key_in, $task_delete_reason, $task_delete_reason_like, $task_assignee, $task_assignee_like, $task_owner, $task_owner_like, $task_priority, $assigned, $unassigned, $finished, $unfinished, $process_finished, $process_unfinished, $task_due_date, $task_due_date_before, $task_due_date_after, $without_task_due_date, $task_follow_up_date, $task_follow_up_date_before, $task_follow_up_date_after, $started_before, $started_after, $finished_before, $finished_after, $tenant_id_in, $without_tenant_id, $task_variables, $process_variables, $variable_names_ignore_case, $variable_values_ignore_case, $task_involved_user, $task_involved_group, $task_had_candidate_user, $task_had_candidate_group, $with_candidate_groups, $without_candidate_groups): \OpenAPI\Client\Model\CountResultDto
```

Get Task Count

Queries for the number of historic tasks that fulfill the given parameters. Takes the same parameters as the [Get Tasks (Historic)](https://docs.camunda.org/manual/latest/reference/rest/history/task/get-task-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricTaskInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_id = 'task_id_example'; // string | Filter by task id.
$task_parent_task_id = 'task_parent_task_id_example'; // string | Filter by parent task id.
$process_instance_id = 'process_instance_id_example'; // string | Filter by process instance id.
$process_instance_business_key = 'process_instance_business_key_example'; // string | Filter by process instance business key.
$process_instance_business_key_in = 'process_instance_business_key_in_example'; // string | Filter by process instances with one of the give business keys. The keys need to be in a comma-separated list.
$process_instance_business_key_like = 'process_instance_business_key_like_example'; // string | Filter by  process instance business key that has the parameter value as a substring.
$execution_id = 'execution_id_example'; // string | Filter by the id of the execution that executed the task.
$process_definition_id = 'process_definition_id_example'; // string | Filter by process definition id.
$process_definition_key = 'process_definition_key_example'; // string | Restrict to tasks that belong to a process definition with the given key.
$process_definition_name = 'process_definition_name_example'; // string | Restrict to tasks that belong to a process definition with the given name.
$case_instance_id = 'case_instance_id_example'; // string | Filter by case instance id.
$case_execution_id = 'case_execution_id_example'; // string | Filter by the id of the case execution that executed the task.
$case_definition_id = 'case_definition_id_example'; // string | Filter by case definition id.
$case_definition_key = 'case_definition_key_example'; // string | Restrict to tasks that belong to a case definition with the given key.
$case_definition_name = 'case_definition_name_example'; // string | Restrict to tasks that belong to a case definition with the given name.
$activity_instance_id_in = 'activity_instance_id_in_example'; // string | Only include tasks which belong to one of the passed comma-separated activity instance ids.
$task_name = 'task_name_example'; // string | Restrict to tasks that have the given name.
$task_name_like = 'task_name_like_example'; // string | Restrict to tasks that have a name with the given parameter value as substring.
$task_description = 'task_description_example'; // string | Restrict to tasks that have the given description.
$task_description_like = 'task_description_like_example'; // string | Restrict to tasks that have a description that has the parameter value as a substring.
$task_definition_key = 'task_definition_key_example'; // string | Restrict to tasks that have the given key.
$task_definition_key_in = 'task_definition_key_in_example'; // string | Restrict to tasks that have one of the passed comma-separated task definition keys.
$task_delete_reason = 'task_delete_reason_example'; // string | Restrict to tasks that have the given delete reason.
$task_delete_reason_like = 'task_delete_reason_like_example'; // string | Restrict to tasks that have a delete reason that has the parameter value as a substring.
$task_assignee = 'task_assignee_example'; // string | Restrict to tasks that the given user is assigned to.
$task_assignee_like = 'task_assignee_like_example'; // string | Restrict to tasks that are assigned to users with the parameter value as a substring.
$task_owner = 'task_owner_example'; // string | Restrict to tasks that the given user owns.
$task_owner_like = 'task_owner_like_example'; // string | Restrict to tasks that are owned by users with the parameter value as a substring.
$task_priority = 56; // int | Restrict to tasks that have the given priority.
$assigned = True; // bool | If set to `true`, restricts the query to all tasks that are assigned.
$unassigned = True; // bool | If set to `true`, restricts the query to all tasks that are unassigned.
$finished = True; // bool | Only include finished tasks. Value may only be `true`, as `false` is the default behavior.
$unfinished = True; // bool | Only include unfinished tasks. Value may only be `true`, as `false` is the default behavior.
$process_finished = True; // bool | Only include tasks of finished processes. Value may only be `true`, as `false` is the default behavior.
$process_unfinished = True; // bool | Only include tasks of unfinished processes. Value may only be `true`, as `false` is the default behavior.
$task_due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that are due on the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$task_due_date_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that are due before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$task_due_date_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that are due after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$without_task_due_date = True; // bool | Only include tasks which have no due date. Value may only be `true`, as `false` is the default behavior.
$task_follow_up_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that have a followUp date on the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$task_follow_up_date_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that have a followUp date before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$task_follow_up_date_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that have a followUp date after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that were started before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that were started after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$finished_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that were finished before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$finished_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to tasks that were finished after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids. A task instance must have one of the given tenant ids.
$without_tenant_id = True; // bool | Only include historic task instances that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$task_variables = 'task_variables_example'; // string | Only include tasks that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value. **Note:** Values are always treated as `String` objects on server side.   Valid operator values are: * `eq` - equal to; * `neq` - not equal to; * `gt` - greater than; * `gteq` - greater than or equal to; * `lt` - lower than; * `lteq` - lower than or equal to; * `like`.  `key` and `value` may not contain underscore or comma characters.
$process_variables = 'process_variables_example'; // string | Only include tasks that belong to process instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value. **Note:** Values are always treated as `String` objects on server side.   Valid operator values are: * `eq` - equal to; * `neq` - not equal to; * `gt` - greater than; * `gteq` - greater than or equal to; * `lt` - lower than; * `lteq` - lower than or equal to; * `like`; * `notLike`.  `key` and `value` may not contain underscore or comma characters.
$variable_names_ignore_case = True; // bool | Match the variable name provided in `taskVariables` and `processVariables` case- insensitively. If set to `true` **variableName** and **variablename** are treated as equal.
$variable_values_ignore_case = True; // bool | Match the variable value provided in `taskVariables` and `processVariables` case- insensitively. If set to `true` **variableValue** and **variablevalue** are treated as equal.
$task_involved_user = 'task_involved_user_example'; // string | Restrict to tasks with a historic identity link to the given user.
$task_involved_group = 'task_involved_group_example'; // string | Restrict to tasks with a historic identity link to the given group.
$task_had_candidate_user = 'task_had_candidate_user_example'; // string | Restrict to tasks with a historic identity link to the given candidate user.
$task_had_candidate_group = 'task_had_candidate_group_example'; // string | Restrict to tasks with a historic identity link to the given candidate group.
$with_candidate_groups = True; // bool | Only include tasks which have a candidate group. Value may only be `true`, as `false` is the default behavior.
$without_candidate_groups = True; // bool | Only include tasks which have no candidate group. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getHistoricTaskInstancesCount($task_id, $task_parent_task_id, $process_instance_id, $process_instance_business_key, $process_instance_business_key_in, $process_instance_business_key_like, $execution_id, $process_definition_id, $process_definition_key, $process_definition_name, $case_instance_id, $case_execution_id, $case_definition_id, $case_definition_key, $case_definition_name, $activity_instance_id_in, $task_name, $task_name_like, $task_description, $task_description_like, $task_definition_key, $task_definition_key_in, $task_delete_reason, $task_delete_reason_like, $task_assignee, $task_assignee_like, $task_owner, $task_owner_like, $task_priority, $assigned, $unassigned, $finished, $unfinished, $process_finished, $process_unfinished, $task_due_date, $task_due_date_before, $task_due_date_after, $without_task_due_date, $task_follow_up_date, $task_follow_up_date_before, $task_follow_up_date_after, $started_before, $started_after, $finished_before, $finished_after, $tenant_id_in, $without_tenant_id, $task_variables, $process_variables, $variable_names_ignore_case, $variable_values_ignore_case, $task_involved_user, $task_involved_group, $task_had_candidate_user, $task_had_candidate_group, $with_candidate_groups, $without_candidate_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricTaskInstanceApi->getHistoricTaskInstancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| Filter by task id. | [optional]
 **task_parent_task_id** | **string**| Filter by parent task id. | [optional]
 **process_instance_id** | **string**| Filter by process instance id. | [optional]
 **process_instance_business_key** | **string**| Filter by process instance business key. | [optional]
 **process_instance_business_key_in** | **string**| Filter by process instances with one of the give business keys. The keys need to be in a comma-separated list. | [optional]
 **process_instance_business_key_like** | **string**| Filter by  process instance business key that has the parameter value as a substring. | [optional]
 **execution_id** | **string**| Filter by the id of the execution that executed the task. | [optional]
 **process_definition_id** | **string**| Filter by process definition id. | [optional]
 **process_definition_key** | **string**| Restrict to tasks that belong to a process definition with the given key. | [optional]
 **process_definition_name** | **string**| Restrict to tasks that belong to a process definition with the given name. | [optional]
 **case_instance_id** | **string**| Filter by case instance id. | [optional]
 **case_execution_id** | **string**| Filter by the id of the case execution that executed the task. | [optional]
 **case_definition_id** | **string**| Filter by case definition id. | [optional]
 **case_definition_key** | **string**| Restrict to tasks that belong to a case definition with the given key. | [optional]
 **case_definition_name** | **string**| Restrict to tasks that belong to a case definition with the given name. | [optional]
 **activity_instance_id_in** | **string**| Only include tasks which belong to one of the passed comma-separated activity instance ids. | [optional]
 **task_name** | **string**| Restrict to tasks that have the given name. | [optional]
 **task_name_like** | **string**| Restrict to tasks that have a name with the given parameter value as substring. | [optional]
 **task_description** | **string**| Restrict to tasks that have the given description. | [optional]
 **task_description_like** | **string**| Restrict to tasks that have a description that has the parameter value as a substring. | [optional]
 **task_definition_key** | **string**| Restrict to tasks that have the given key. | [optional]
 **task_definition_key_in** | **string**| Restrict to tasks that have one of the passed comma-separated task definition keys. | [optional]
 **task_delete_reason** | **string**| Restrict to tasks that have the given delete reason. | [optional]
 **task_delete_reason_like** | **string**| Restrict to tasks that have a delete reason that has the parameter value as a substring. | [optional]
 **task_assignee** | **string**| Restrict to tasks that the given user is assigned to. | [optional]
 **task_assignee_like** | **string**| Restrict to tasks that are assigned to users with the parameter value as a substring. | [optional]
 **task_owner** | **string**| Restrict to tasks that the given user owns. | [optional]
 **task_owner_like** | **string**| Restrict to tasks that are owned by users with the parameter value as a substring. | [optional]
 **task_priority** | **int**| Restrict to tasks that have the given priority. | [optional]
 **assigned** | **bool**| If set to &#x60;true&#x60;, restricts the query to all tasks that are assigned. | [optional]
 **unassigned** | **bool**| If set to &#x60;true&#x60;, restricts the query to all tasks that are unassigned. | [optional]
 **finished** | **bool**| Only include finished tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **unfinished** | **bool**| Only include unfinished tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **process_finished** | **bool**| Only include tasks of finished processes. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **process_unfinished** | **bool**| Only include tasks of unfinished processes. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **task_due_date** | **\DateTime**| Restrict to tasks that are due on the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **task_due_date_before** | **\DateTime**| Restrict to tasks that are due before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **task_due_date_after** | **\DateTime**| Restrict to tasks that are due after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **without_task_due_date** | **bool**| Only include tasks which have no due date. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **task_follow_up_date** | **\DateTime**| Restrict to tasks that have a followUp date on the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **task_follow_up_date_before** | **\DateTime**| Restrict to tasks that have a followUp date before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **task_follow_up_date_after** | **\DateTime**| Restrict to tasks that have a followUp date after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_before** | **\DateTime**| Restrict to tasks that were started before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_after** | **\DateTime**| Restrict to tasks that were started after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **finished_before** | **\DateTime**| Restrict to tasks that were finished before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **finished_after** | **\DateTime**| Restrict to tasks that were finished after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A task instance must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic task instances that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **task_variables** | **string**| Only include tasks that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value. **Note:** Values are always treated as &#x60;String&#x60; objects on server side.   Valid operator values are: * &#x60;eq&#x60; - equal to; * &#x60;neq&#x60; - not equal to; * &#x60;gt&#x60; - greater than; * &#x60;gteq&#x60; - greater than or equal to; * &#x60;lt&#x60; - lower than; * &#x60;lteq&#x60; - lower than or equal to; * &#x60;like&#x60;.  &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **process_variables** | **string**| Only include tasks that belong to process instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value. **Note:** Values are always treated as &#x60;String&#x60; objects on server side.   Valid operator values are: * &#x60;eq&#x60; - equal to; * &#x60;neq&#x60; - not equal to; * &#x60;gt&#x60; - greater than; * &#x60;gteq&#x60; - greater than or equal to; * &#x60;lt&#x60; - lower than; * &#x60;lteq&#x60; - lower than or equal to; * &#x60;like&#x60;; * &#x60;notLike&#x60;.  &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **variable_names_ignore_case** | **bool**| Match the variable name provided in &#x60;taskVariables&#x60; and &#x60;processVariables&#x60; case- insensitively. If set to &#x60;true&#x60; **variableName** and **variablename** are treated as equal. | [optional]
 **variable_values_ignore_case** | **bool**| Match the variable value provided in &#x60;taskVariables&#x60; and &#x60;processVariables&#x60; case- insensitively. If set to &#x60;true&#x60; **variableValue** and **variablevalue** are treated as equal. | [optional]
 **task_involved_user** | **string**| Restrict to tasks with a historic identity link to the given user. | [optional]
 **task_involved_group** | **string**| Restrict to tasks with a historic identity link to the given group. | [optional]
 **task_had_candidate_user** | **string**| Restrict to tasks with a historic identity link to the given candidate user. | [optional]
 **task_had_candidate_group** | **string**| Restrict to tasks with a historic identity link to the given candidate group. | [optional]
 **with_candidate_groups** | **bool**| Only include tasks which have a candidate group. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **without_candidate_groups** | **bool**| Only include tasks which have no candidate group. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

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

## `queryHistoricTaskInstances()`

```php
queryHistoricTaskInstances($first_result, $max_results, $historic_task_instance_query_dto): \OpenAPI\Client\Model\HistoricTaskInstanceDto[]
```

Get Tasks (Historic) (POST)

Queries for historic tasks that fulfill the given parameters. This method is slightly more powerful than the [Get Tasks (Historic)](https://docs.camunda.org/manual/latest/reference/rest/history/task/get-task-query/) method because it allows filtering by multiple process or task variables of types `String`, `Number` or `Boolean`. The size of the result set can be retrieved by using the [Get Task Count (POST)](https://docs.camunda.org/manual/latest/reference/rest/history/task/post-task-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricTaskInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$historic_task_instance_query_dto = {"taskVariables":[{"name":"varName","value":"varValue","operator":"eq"},{"name":"anotherVarName","value":30,"operator":"neq"}],"priority":10,"sorting":[{"sortBy":"priority","sortOrder":"asc"},{"sortBy":"duration","sortOrder":"desc"}]}; // \OpenAPI\Client\Model\HistoricTaskInstanceQueryDto

try {
    $result = $apiInstance->queryHistoricTaskInstances($first_result, $max_results, $historic_task_instance_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricTaskInstanceApi->queryHistoricTaskInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **historic_task_instance_query_dto** | [**\OpenAPI\Client\Model\HistoricTaskInstanceQueryDto**](../Model/HistoricTaskInstanceQueryDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\HistoricTaskInstanceDto[]**](../Model/HistoricTaskInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryHistoricTaskInstancesCount()`

```php
queryHistoricTaskInstancesCount($historic_task_instance_query_dto): \OpenAPI\Client\Model\CountResultDto
```

Get Task Count (POST)

Queries for the number of historic tasks that fulfill the given parameters. Takes the same parameters as the [Get Tasks (Historic)](https://docs.camunda.org/manual/latest/reference/rest/history/task/get-task-query/) method. Corresponds to the size of the result set of the [Get Tasks (Historic) (POST)](https://docs.camunda.org/manual/latest/reference/rest/history/task/post-task-query/) method and takes the same parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricTaskInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$historic_task_instance_query_dto = {"taskVariables":[{"name":"varName","value":"varValue","operator":"eq"},{"name":"anotherVarName","value":30,"operator":"neq"}],"priority":10}; // \OpenAPI\Client\Model\HistoricTaskInstanceQueryDto

try {
    $result = $apiInstance->queryHistoricTaskInstancesCount($historic_task_instance_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricTaskInstanceApi->queryHistoricTaskInstancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **historic_task_instance_query_dto** | [**\OpenAPI\Client\Model\HistoricTaskInstanceQueryDto**](../Model/HistoricTaskInstanceQueryDto.md)|  | [optional]

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
