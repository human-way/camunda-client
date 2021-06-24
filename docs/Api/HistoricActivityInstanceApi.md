# OpenAPI\Client\HistoricActivityInstanceApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistoricActivityInstance()**](HistoricActivityInstanceApi.md#getHistoricActivityInstance) | **GET** /history/activity-instance/{id} | Get
[**getHistoricActivityInstances()**](HistoricActivityInstanceApi.md#getHistoricActivityInstances) | **GET** /history/activity-instance | Get List
[**getHistoricActivityInstancesCount()**](HistoricActivityInstanceApi.md#getHistoricActivityInstancesCount) | **GET** /history/activity-instance/count | Get List Count
[**queryHistoricActivityInstances()**](HistoricActivityInstanceApi.md#queryHistoricActivityInstances) | **POST** /history/activity-instance | Get List (POST)
[**queryHistoricActivityInstancesCount()**](HistoricActivityInstanceApi.md#queryHistoricActivityInstancesCount) | **POST** /history/activity-instance/count | Get List Count (POST)


## `getHistoricActivityInstance()`

```php
getHistoricActivityInstance($id): \OpenAPI\Client\Model\HistoricActivityInstanceDto
```

Get

Retrieves a historic activity instance by id, according to the `HistoricActivityInstance` interface in the engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricActivityInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the historic activity instance to be retrieved.

try {
    $result = $apiInstance->getHistoricActivityInstance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricActivityInstanceApi->getHistoricActivityInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the historic activity instance to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\HistoricActivityInstanceDto**](../Model/HistoricActivityInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricActivityInstances()`

```php
getHistoricActivityInstances($sort_by, $sort_order, $first_result, $max_results, $activity_instance_id, $process_instance_id, $process_definition_id, $execution_id, $activity_id, $activity_name, $activity_type, $task_assignee, $finished, $unfinished, $canceled, $complete_scope, $started_before, $started_after, $finished_before, $finished_after, $tenant_id_in, $without_tenant_id): \OpenAPI\Client\Model\HistoricActivityInstanceDto[]
```

Get List

Queries for historic activity instances that fulfill the given parameters. The size of the result set can be retrieved by using the [Get Historic Activity Instance Count](https://docs.camunda.org/manual/7.15/reference/rest/history/activity-instance/get-activity-instance-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricActivityInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$activity_instance_id = 'activity_instance_id_example'; // string | Filter by activity instance id.
$process_instance_id = 'process_instance_id_example'; // string | Filter by process instance id.
$process_definition_id = 'process_definition_id_example'; // string | Filter by process definition id.
$execution_id = 'execution_id_example'; // string | Filter by the id of the execution that executed the activity instance.
$activity_id = 'activity_id_example'; // string | Filter by the activity id (according to BPMN 2.0 XML).
$activity_name = 'activity_name_example'; // string | Filter by the activity name (according to BPMN 2.0 XML).
$activity_type = 'activity_type_example'; // string | Filter by activity type.
$task_assignee = 'task_assignee_example'; // string | Only include activity instances that are user tasks and assigned to a given user.
$finished = True; // bool | Only include finished activity instances. Value may only be `true`, as `false` behaves the same as when the property is not set.
$unfinished = True; // bool | Only include unfinished activity instances. Value may only be `true`, as `false` behaves the same as when the property is not set.
$canceled = True; // bool | Only include canceled activity instances. Value may only be `true`, as `false` behaves the same as when the property is not set.
$complete_scope = True; // bool | Only include activity instances which completed a scope. Value may only be `true`, as `false` behaves the same as when the property is not set.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were started before the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were started after the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$finished_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were finished before the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$finished_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were finished after the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of ids. An activity instance must have one of the given tenant ids.
$without_tenant_id = True; // bool | Only include historic activity instances that belong to no tenant. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getHistoricActivityInstances($sort_by, $sort_order, $first_result, $max_results, $activity_instance_id, $process_instance_id, $process_definition_id, $execution_id, $activity_id, $activity_name, $activity_type, $task_assignee, $finished, $unfinished, $canceled, $complete_scope, $started_before, $started_after, $finished_before, $finished_after, $tenant_id_in, $without_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricActivityInstanceApi->getHistoricActivityInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **activity_instance_id** | **string**| Filter by activity instance id. | [optional]
 **process_instance_id** | **string**| Filter by process instance id. | [optional]
 **process_definition_id** | **string**| Filter by process definition id. | [optional]
 **execution_id** | **string**| Filter by the id of the execution that executed the activity instance. | [optional]
 **activity_id** | **string**| Filter by the activity id (according to BPMN 2.0 XML). | [optional]
 **activity_name** | **string**| Filter by the activity name (according to BPMN 2.0 XML). | [optional]
 **activity_type** | **string**| Filter by activity type. | [optional]
 **task_assignee** | **string**| Only include activity instances that are user tasks and assigned to a given user. | [optional]
 **finished** | **bool**| Only include finished activity instances. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; behaves the same as when the property is not set. | [optional]
 **unfinished** | **bool**| Only include unfinished activity instances. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; behaves the same as when the property is not set. | [optional]
 **canceled** | **bool**| Only include canceled activity instances. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; behaves the same as when the property is not set. | [optional]
 **complete_scope** | **bool**| Only include activity instances which completed a scope. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; behaves the same as when the property is not set. | [optional]
 **started_before** | **\DateTime**| Restrict to instances that were started before the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_after** | **\DateTime**| Restrict to instances that were started after the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **finished_before** | **\DateTime**| Restrict to instances that were finished before the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **finished_after** | **\DateTime**| Restrict to instances that were finished after the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of ids. An activity instance must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic activity instances that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

### Return type

[**\OpenAPI\Client\Model\HistoricActivityInstanceDto[]**](../Model/HistoricActivityInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricActivityInstancesCount()`

```php
getHistoricActivityInstancesCount($activity_instance_id, $process_instance_id, $process_definition_id, $execution_id, $activity_id, $activity_name, $activity_type, $task_assignee, $finished, $unfinished, $canceled, $complete_scope, $started_before, $started_after, $finished_before, $finished_after, $tenant_id_in, $without_tenant_id): \OpenAPI\Client\Model\CountResultDto
```

Get List Count

Queries for the number of historic activity instances that fulfill the given parameters. Takes the same parameters as the [Get Historic Activity Instance](https://docs.camunda.org/manual/7.15/reference/rest/history/activity-instance/get-activity-instance-query/)  method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricActivityInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$activity_instance_id = 'activity_instance_id_example'; // string | Filter by activity instance id.
$process_instance_id = 'process_instance_id_example'; // string | Filter by process instance id.
$process_definition_id = 'process_definition_id_example'; // string | Filter by process definition id.
$execution_id = 'execution_id_example'; // string | Filter by the id of the execution that executed the activity instance.
$activity_id = 'activity_id_example'; // string | Filter by the activity id (according to BPMN 2.0 XML).
$activity_name = 'activity_name_example'; // string | Filter by the activity name (according to BPMN 2.0 XML).
$activity_type = 'activity_type_example'; // string | Filter by activity type.
$task_assignee = 'task_assignee_example'; // string | Only include activity instances that are user tasks and assigned to a given user.
$finished = True; // bool | Only include finished activity instances. Value may only be `true`, as `false` behaves the same as when the property is not set.
$unfinished = True; // bool | Only include unfinished activity instances. Value may only be `true`, as `false` behaves the same as when the property is not set.
$canceled = True; // bool | Only include canceled activity instances. Value may only be `true`, as `false` behaves the same as when the property is not set.
$complete_scope = True; // bool | Only include activity instances which completed a scope. Value may only be `true`, as `false` behaves the same as when the property is not set.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were started before the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were started after the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$finished_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were finished before the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$finished_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were finished after the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of ids. An activity instance must have one of the given tenant ids.
$without_tenant_id = True; // bool | Only include historic activity instances that belong to no tenant. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getHistoricActivityInstancesCount($activity_instance_id, $process_instance_id, $process_definition_id, $execution_id, $activity_id, $activity_name, $activity_type, $task_assignee, $finished, $unfinished, $canceled, $complete_scope, $started_before, $started_after, $finished_before, $finished_after, $tenant_id_in, $without_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricActivityInstanceApi->getHistoricActivityInstancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_instance_id** | **string**| Filter by activity instance id. | [optional]
 **process_instance_id** | **string**| Filter by process instance id. | [optional]
 **process_definition_id** | **string**| Filter by process definition id. | [optional]
 **execution_id** | **string**| Filter by the id of the execution that executed the activity instance. | [optional]
 **activity_id** | **string**| Filter by the activity id (according to BPMN 2.0 XML). | [optional]
 **activity_name** | **string**| Filter by the activity name (according to BPMN 2.0 XML). | [optional]
 **activity_type** | **string**| Filter by activity type. | [optional]
 **task_assignee** | **string**| Only include activity instances that are user tasks and assigned to a given user. | [optional]
 **finished** | **bool**| Only include finished activity instances. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; behaves the same as when the property is not set. | [optional]
 **unfinished** | **bool**| Only include unfinished activity instances. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; behaves the same as when the property is not set. | [optional]
 **canceled** | **bool**| Only include canceled activity instances. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; behaves the same as when the property is not set. | [optional]
 **complete_scope** | **bool**| Only include activity instances which completed a scope. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; behaves the same as when the property is not set. | [optional]
 **started_before** | **\DateTime**| Restrict to instances that were started before the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_after** | **\DateTime**| Restrict to instances that were started after the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **finished_before** | **\DateTime**| Restrict to instances that were finished before the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **finished_after** | **\DateTime**| Restrict to instances that were finished after the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of ids. An activity instance must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic activity instances that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

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

## `queryHistoricActivityInstances()`

```php
queryHistoricActivityInstances($first_result, $max_results, $historic_activity_instance_query_dto): \OpenAPI\Client\Model\HistoricActivityInstanceDto[]
```

Get List (POST)

Queries for historic activity instances that fulfill the given parameters. The size of the result set can be retrieved by using the [Get Historic Activity Instance Count](https://docs.camunda.org/manual/7.15/reference/rest/history/activity-instance/get-activity-instance-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricActivityInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$historic_activity_instance_query_dto = {"activityType":"userTask","taskAssignee":"peter","sorting":[{"sortBy":"activityId","sortOrder":"asc"},{"sortBy":"executionId","sortOrder":"desc"}]}; // \OpenAPI\Client\Model\HistoricActivityInstanceQueryDto

try {
    $result = $apiInstance->queryHistoricActivityInstances($first_result, $max_results, $historic_activity_instance_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricActivityInstanceApi->queryHistoricActivityInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **historic_activity_instance_query_dto** | [**\OpenAPI\Client\Model\HistoricActivityInstanceQueryDto**](../Model/HistoricActivityInstanceQueryDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\HistoricActivityInstanceDto[]**](../Model/HistoricActivityInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryHistoricActivityInstancesCount()`

```php
queryHistoricActivityInstancesCount($historic_activity_instance_query_dto): \OpenAPI\Client\Model\CountResultDto
```

Get List Count (POST)

Queries for the number of historic activity instances that fulfill the given parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricActivityInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$historic_activity_instance_query_dto = {"activityType":"userTask"}; // \OpenAPI\Client\Model\HistoricActivityInstanceQueryDto

try {
    $result = $apiInstance->queryHistoricActivityInstancesCount($historic_activity_instance_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricActivityInstanceApi->queryHistoricActivityInstancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **historic_activity_instance_query_dto** | [**\OpenAPI\Client\Model\HistoricActivityInstanceQueryDto**](../Model/HistoricActivityInstanceQueryDto.md)|  | [optional]

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
