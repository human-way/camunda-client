# OpenAPI\Client\HistoricIdentityLinkLogApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistoricIdentityLinks()**](HistoricIdentityLinkLogApi.md#getHistoricIdentityLinks) | **GET** /history/identity-link-log | Get Identity Link Logs
[**getHistoricIdentityLinksCount()**](HistoricIdentityLinkLogApi.md#getHistoricIdentityLinksCount) | **GET** /history/identity-link-log/count | Get Identity Link Log Count


## `getHistoricIdentityLinks()`

```php
getHistoricIdentityLinks($type, $user_id, $group_id, $date_before, $date_after, $task_id, $process_definition_id, $process_definition_key, $operation_type, $assigner_id, $tenant_id_in, $without_tenant_id, $sort_by, $sort_order, $first_result, $max_results): \OpenAPI\Client\Model\HistoricIdentityLinkLogDto[]
```

Get Identity Link Logs

Queries for historic identity link logs that fulfill given parameters. The size of the result set can be retrieved by using the [Get Identity-Link-Log Count](https://docs.camunda.org/manual/latest/reference/rest/history/identity-links/get-identity-link-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricIdentityLinkLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | Restricts to identity links that have the given type (candidate/assignee/owner).
$user_id = 'user_id_example'; // string | Restricts to identity links that have the given user id.
$group_id = 'group_id_example'; // string | Restricts to identity links that have the given group id.
$date_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to identity links that have the time before the given time.
$date_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to identity links that have the time after the given time.
$task_id = 'task_id_example'; // string | Restricts to identity links that have the given task id.
$process_definition_id = 'process_definition_id_example'; // string | Restricts to identity links that have the given process definition id.
$process_definition_key = 'process_definition_key_example'; // string | Restricts to identity links that have the given process definition key.
$operation_type = 'operation_type_example'; // string | Restricts to identity links that have the given operationType (add/delete).
$assigner_id = 'assigner_id_example'; // string | Restricts to identity links that have the given assigner id.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids.
$without_tenant_id = True; // bool | Only include historic identity links that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getHistoricIdentityLinks($type, $user_id, $group_id, $date_before, $date_after, $task_id, $process_definition_id, $process_definition_key, $operation_type, $assigner_id, $tenant_id_in, $without_tenant_id, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricIdentityLinkLogApi->getHistoricIdentityLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Restricts to identity links that have the given type (candidate/assignee/owner). | [optional]
 **user_id** | **string**| Restricts to identity links that have the given user id. | [optional]
 **group_id** | **string**| Restricts to identity links that have the given group id. | [optional]
 **date_before** | **\DateTime**| Restricts to identity links that have the time before the given time. | [optional]
 **date_after** | **\DateTime**| Restricts to identity links that have the time after the given time. | [optional]
 **task_id** | **string**| Restricts to identity links that have the given task id. | [optional]
 **process_definition_id** | **string**| Restricts to identity links that have the given process definition id. | [optional]
 **process_definition_key** | **string**| Restricts to identity links that have the given process definition key. | [optional]
 **operation_type** | **string**| Restricts to identity links that have the given operationType (add/delete). | [optional]
 **assigner_id** | **string**| Restricts to identity links that have the given assigner id. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic identity links that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\OpenAPI\Client\Model\HistoricIdentityLinkLogDto[]**](../Model/HistoricIdentityLinkLogDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricIdentityLinksCount()`

```php
getHistoricIdentityLinksCount($type, $user_id, $group_id, $date_before, $date_after, $task_id, $process_definition_id, $process_definition_key, $operation_type, $assigner_id, $tenant_id_in, $without_tenant_id): \OpenAPI\Client\Model\CountResultDto
```

Get Identity Link Log Count

Queries for the number of historic identity link logs that fulfill the given parameters. Takes the same parameters as the [Get Identity-Link-Logs](https://docs.camunda.org/manual/latest/reference/rest/history/identity-links/get-identity-link-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricIdentityLinkLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | Restricts to identity links that have the given type (candidate/assignee/owner).
$user_id = 'user_id_example'; // string | Restricts to identity links that have the given user id.
$group_id = 'group_id_example'; // string | Restricts to identity links that have the given group id.
$date_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to identity links that have the time before the given time.
$date_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to identity links that have the time after the given time.
$task_id = 'task_id_example'; // string | Restricts to identity links that have the given task id.
$process_definition_id = 'process_definition_id_example'; // string | Restricts to identity links that have the given process definition id.
$process_definition_key = 'process_definition_key_example'; // string | Restricts to identity links that have the given process definition key.
$operation_type = 'operation_type_example'; // string | Restricts to identity links that have the given operationType (add/delete).
$assigner_id = 'assigner_id_example'; // string | Restricts to identity links that have the given assigner id.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids.
$without_tenant_id = True; // bool | Only include historic identity links that belong to no tenant. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getHistoricIdentityLinksCount($type, $user_id, $group_id, $date_before, $date_after, $task_id, $process_definition_id, $process_definition_key, $operation_type, $assigner_id, $tenant_id_in, $without_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricIdentityLinkLogApi->getHistoricIdentityLinksCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Restricts to identity links that have the given type (candidate/assignee/owner). | [optional]
 **user_id** | **string**| Restricts to identity links that have the given user id. | [optional]
 **group_id** | **string**| Restricts to identity links that have the given group id. | [optional]
 **date_before** | **\DateTime**| Restricts to identity links that have the time before the given time. | [optional]
 **date_after** | **\DateTime**| Restricts to identity links that have the time after the given time. | [optional]
 **task_id** | **string**| Restricts to identity links that have the given task id. | [optional]
 **process_definition_id** | **string**| Restricts to identity links that have the given process definition id. | [optional]
 **process_definition_key** | **string**| Restricts to identity links that have the given process definition key. | [optional]
 **operation_type** | **string**| Restricts to identity links that have the given operationType (add/delete). | [optional]
 **assigner_id** | **string**| Restricts to identity links that have the given assigner id. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic identity links that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

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
