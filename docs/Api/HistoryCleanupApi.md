# OpenAPI\Client\HistoryCleanupApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cleanupAsync()**](HistoryCleanupApi.md#cleanupAsync) | **POST** /history/cleanup | Clean up history (POST)
[**findCleanupJob()**](HistoryCleanupApi.md#findCleanupJob) | **GET** /history/cleanup/job | Find clean up history job (GET)
[**findCleanupJobs()**](HistoryCleanupApi.md#findCleanupJobs) | **GET** /history/cleanup/jobs | Find clean up history jobs (GET)
[**getHistoryCleanupConfiguration()**](HistoryCleanupApi.md#getHistoryCleanupConfiguration) | **GET** /history/cleanup/configuration | Get History Cleanup Configuration


## `cleanupAsync()`

```php
cleanupAsync($immediately_due): \OpenAPI\Client\Model\JobDto
```

Clean up history (POST)

Schedules asynchronous history cleanup (See [History cleanup](https://docs.camunda.org/manual/latest/user-guide/process-engine/history/#history-cleanup)).  **Note:** This endpoint will return at most a single history cleanup job. Since version `7.9.0` it is possible to configure multiple [parallel history cleanup jobs](https://docs.camunda.org/manual/latest/user-guide/process-engine/history/#parallel-execution). Use [`GET /history/cleanup/jobs`](https://docs.camunda.org/manual/latest/reference/rest/history/history-cleanup/get-history-cleanup-jobs) to find all the available history cleanup jobs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoryCleanupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$immediately_due = True; // bool | When true the job will be scheduled for nearest future. When `false`, the job will be scheduled for next batch window start time. Default is `true`.

try {
    $result = $apiInstance->cleanupAsync($immediately_due);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryCleanupApi->cleanupAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **immediately_due** | **bool**| When true the job will be scheduled for nearest future. When &#x60;false&#x60;, the job will be scheduled for next batch window start time. Default is &#x60;true&#x60;. | [optional]

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

## `findCleanupJob()`

```php
findCleanupJob(): \OpenAPI\Client\Model\JobDto
```

Find clean up history job (GET)

**Deprecated!** Use `GET /history/cleanup/jobs` instead.  Finds history cleanup job (See [History cleanup](https://docs.camunda.org/manual/latest/user-guide/process-engine/history/#history-cleanup)).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoryCleanupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->findCleanupJob();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryCleanupApi->findCleanupJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `findCleanupJobs()`

```php
findCleanupJobs(): \OpenAPI\Client\Model\JobDto[]
```

Find clean up history jobs (GET)

Finds history cleanup jobs (See [History cleanup](https://docs.camunda.org/manual/latest/user-guide/process-engine/history/#history-cleanup)).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoryCleanupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->findCleanupJobs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryCleanupApi->findCleanupJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getHistoryCleanupConfiguration()`

```php
getHistoryCleanupConfiguration(): \OpenAPI\Client\Model\HistoryCleanupConfigurationDto
```

Get History Cleanup Configuration

Retrieves history cleanup batch window configuration (See [History cleanup](https://docs.camunda.org/manual/latest/user-guide/process-engine/history/#history-cleanup)).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoryCleanupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHistoryCleanupConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryCleanupApi->getHistoryCleanupConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\HistoryCleanupConfigurationDto**](../Model/HistoryCleanupConfigurationDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
