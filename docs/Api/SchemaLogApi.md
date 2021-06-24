# OpenAPI\Client\SchemaLogApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSchemaLog()**](SchemaLogApi.md#getSchemaLog) | **GET** /schema/log | Get List
[**querySchemaLog()**](SchemaLogApi.md#querySchemaLog) | **POST** /schema/log | Get List (POST)


## `getSchemaLog()`

```php
getSchemaLog($version, $first_result, $max_results): \OpenAPI\Client\Model\SchemaLogEntryDto[]
```

Get List

Queries for schema log entries that fulfill given parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemaLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = 'version_example'; // string | Only return schema log entries with a specific version.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getSchemaLog($version, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaLogApi->getSchemaLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| Only return schema log entries with a specific version. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\OpenAPI\Client\Model\SchemaLogEntryDto[]**](../Model/SchemaLogEntryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySchemaLog()`

```php
querySchemaLog($first_result, $max_results, $schema_log_query_dto): \OpenAPI\Client\Model\SchemaLogEntryDto[]
```

Get List (POST)

Queries for schema log entries that fulfill given parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchemaLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$schema_log_query_dto = {"version":"7.11.0","sortBy":"timestamp","sortOrder":"asc"}; // \OpenAPI\Client\Model\SchemaLogQueryDto

try {
    $result = $apiInstance->querySchemaLog($first_result, $max_results, $schema_log_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaLogApi->querySchemaLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **schema_log_query_dto** | [**\OpenAPI\Client\Model\SchemaLogQueryDto**](../Model/SchemaLogQueryDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SchemaLogEntryDto[]**](../Model/SchemaLogEntryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
