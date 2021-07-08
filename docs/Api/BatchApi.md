# OpenAPI\Client\BatchApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBatch()**](BatchApi.md#deleteBatch) | **DELETE** /batch/{id} | Delete
[**getBatch()**](BatchApi.md#getBatch) | **GET** /batch/{id} | Get
[**getBatchStatistics()**](BatchApi.md#getBatchStatistics) | **GET** /batch/statistics | Get Statistics
[**getBatchStatisticsCount()**](BatchApi.md#getBatchStatisticsCount) | **GET** /batch/statistics/count | Get Statistics Count
[**getBatches()**](BatchApi.md#getBatches) | **GET** /batch | Get List
[**getBatchesCount()**](BatchApi.md#getBatchesCount) | **GET** /batch/count | Get List Count
[**updateBatchSuspensionState()**](BatchApi.md#updateBatchSuspensionState) | **PUT** /batch/{id}/suspended | Activate/Suspend


## `deleteBatch()`

```php
deleteBatch($id, $cascade)
```

Delete

Deletes a batch by id, including all related jobs and job definitions. Optionally also deletes the batch history.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the batch to be deleted.
$cascade = True; // bool | `true`, if the historic batch and historic job logs for this batch should also be deleted.

try {
    $apiInstance->deleteBatch($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->deleteBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the batch to be deleted. |
 **cascade** | **bool**| &#x60;true&#x60;, if the historic batch and historic job logs for this batch should also be deleted. | [optional]

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

## `getBatch()`

```php
getBatch($id): \OpenAPI\Client\Model\BatchDto
```

Get

Retrieves a batch by id, according to the Batch interface in the engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the batch to be retrieved.

try {
    $result = $apiInstance->getBatch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->getBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the batch to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBatchStatistics()`

```php
getBatchStatistics($sort_by, $sort_order, $first_result, $max_results, $batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended): \OpenAPI\Client\Model\BatchStatisticsDto[]
```

Get Statistics

Queries for batch statistics that fulfill given parameters. Parameters may be the properties of batches, such as the id or type. The size of the result set can be retrieved by using the  [Get Batch Statistics Count](https://docs.camunda.org/manual/latest/reference/rest/batch/get-statistics-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$batch_id = 'batch_id_example'; // string | Filter by batch id.
$type = 'type_example'; // string | Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of `Strings`. A batch matches if it has one of the given tenant ids.
$without_tenant_id = True; // bool | Only include batches which belong to no tenant. Value can effectively only be `true`, as `false` is the default behavior.
$suspended = True; // bool | A `Boolean` value which indicates whether only active or suspended batches should be included. When the value is set to `true`, only suspended batches will be returned and when the value is set to `false`, only active batches will be returned.

try {
    $result = $apiInstance->getBatchStatistics($sort_by, $sort_order, $first_result, $max_results, $batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->getBatchStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **batch_id** | **string**| Filter by batch id. | [optional]
 **type** | **string**| Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of &#x60;Strings&#x60;. A batch matches if it has one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include batches which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| A &#x60;Boolean&#x60; value which indicates whether only active or suspended batches should be included. When the value is set to &#x60;true&#x60;, only suspended batches will be returned and when the value is set to &#x60;false&#x60;, only active batches will be returned. | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchStatisticsDto[]**](../Model/BatchStatisticsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBatchStatisticsCount()`

```php
getBatchStatisticsCount($batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended): \OpenAPI\Client\Model\CountResultDto
```

Get Statistics Count

Requests the number of batch statistics that fulfill the query criteria. Takes the same filtering parameters as the [Get Batch Statistics](https://docs.camunda.org/manual/latest/reference/rest/batch/get-statistics-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_id = 'batch_id_example'; // string | Filter by batch id.
$type = 'type_example'; // string | Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of `Strings`. A batch matches if it has one of the given tenant ids.
$without_tenant_id = True; // bool | Only include batches which belong to no tenant. Value can effectively only be `true`, as `false` is the default behavior.
$suspended = True; // bool | A `Boolean` value which indicates whether only active or suspended batches should be included. When the value is set to `true`, only suspended batches will be returned and when the value is set to `false`, only active batches will be returned.

try {
    $result = $apiInstance->getBatchStatisticsCount($batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->getBatchStatisticsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| Filter by batch id. | [optional]
 **type** | **string**| Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of &#x60;Strings&#x60;. A batch matches if it has one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include batches which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| A &#x60;Boolean&#x60; value which indicates whether only active or suspended batches should be included. When the value is set to &#x60;true&#x60;, only suspended batches will be returned and when the value is set to &#x60;false&#x60;, only active batches will be returned. | [optional]

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

## `getBatches()`

```php
getBatches($sort_by, $sort_order, $first_result, $max_results, $batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended): \OpenAPI\Client\Model\BatchDto[]
```

Get List

Queries for batches that fulfill given parameters. Parameters may be the properties of batches, such as the id or type. The size of the result set can be retrieved by using the [Get Batch Count](https://docs.camunda.org/manual/latest/reference/rest/batch/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$batch_id = 'batch_id_example'; // string | Filter by batch id.
$type = 'type_example'; // string | Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of `Strings`. A batch matches if it has one of the given tenant ids.
$without_tenant_id = True; // bool | Only include batches which belong to no tenant. Value can effectively only be `true`, as `false` is the default behavior.
$suspended = True; // bool | A `Boolean` value which indicates whether only active or suspended batches should be included. When the value is set to `true`, only suspended batches will be returned and when the value is set to `false`, only active batches will be returned.

try {
    $result = $apiInstance->getBatches($sort_by, $sort_order, $first_result, $max_results, $batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->getBatches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **batch_id** | **string**| Filter by batch id. | [optional]
 **type** | **string**| Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of &#x60;Strings&#x60;. A batch matches if it has one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include batches which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| A &#x60;Boolean&#x60; value which indicates whether only active or suspended batches should be included. When the value is set to &#x60;true&#x60;, only suspended batches will be returned and when the value is set to &#x60;false&#x60;, only active batches will be returned. | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchDto[]**](../Model/BatchDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBatchesCount()`

```php
getBatchesCount($batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended): \OpenAPI\Client\Model\CountResultDto
```

Get List Count

Requests the number of batches that fulfill the query criteria. Takes the same filtering parameters as the [Get Batches](https://docs.camunda.org/manual/latest/reference/rest/batch/get-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_id = 'batch_id_example'; // string | Filter by batch id.
$type = 'type_example'; // string | Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of `Strings`. A batch matches if it has one of the given tenant ids.
$without_tenant_id = True; // bool | Only include batches which belong to no tenant. Value can effectively only be `true`, as `false` is the default behavior.
$suspended = True; // bool | A `Boolean` value which indicates whether only active or suspended batches should be included. When the value is set to `true`, only suspended batches will be returned and when the value is set to `false`, only active batches will be returned.

try {
    $result = $apiInstance->getBatchesCount($batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->getBatchesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| Filter by batch id. | [optional]
 **type** | **string**| Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of &#x60;Strings&#x60;. A batch matches if it has one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include batches which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| A &#x60;Boolean&#x60; value which indicates whether only active or suspended batches should be included. When the value is set to &#x60;true&#x60;, only suspended batches will be returned and when the value is set to &#x60;false&#x60;, only active batches will be returned. | [optional]

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

## `updateBatchSuspensionState()`

```php
updateBatchSuspensionState($id, $suspension_state_dto)
```

Activate/Suspend

Activates or suspends a batch by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the batch to activate or suspend.
$suspension_state_dto = {"suspended":true}; // \OpenAPI\Client\Model\SuspensionStateDto

try {
    $apiInstance->updateBatchSuspensionState($id, $suspension_state_dto);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->updateBatchSuspensionState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the batch to activate or suspend. |
 **suspension_state_dto** | [**\OpenAPI\Client\Model\SuspensionStateDto**](../Model/SuspensionStateDto.md)|  | [optional]

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
