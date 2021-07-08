# OpenAPI\Client\MetricsApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTaskMetrics()**](MetricsApi.md#deleteTaskMetrics) | **DELETE** /metrics/task-worker | Delete Task Worker Metrics
[**getMetrics()**](MetricsApi.md#getMetrics) | **GET** /metrics/{metrics-name}/sum | Get Sum
[**interval()**](MetricsApi.md#interval) | **GET** /metrics | Get Metrics in Interval


## `deleteTaskMetrics()`

```php
deleteTaskMetrics($date)
```

Delete Task Worker Metrics

Deletes all task worker metrics prior to the given date or all if no date is provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date prior to which all task worker metrics should be deleted.

try {
    $apiInstance->deleteTaskMetrics($date);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->deleteTaskMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| The date prior to which all task worker metrics should be deleted. | [optional]

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

## `getMetrics()`

```php
getMetrics($metrics_name, $start_date, $end_date): \OpenAPI\Client\Model\MetricsResultDto
```

Get Sum

Retrieves the `sum` (count) for a given metric.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$metrics_name = 'metrics_name_example'; // string | The name of the metric.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date (inclusive).
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date (exclusive).

try {
    $result = $apiInstance->getMetrics($metrics_name, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metrics_name** | **string**| The name of the metric. |
 **start_date** | **\DateTime**| The start date (inclusive). | [optional]
 **end_date** | **\DateTime**| The end date (exclusive). | [optional]

### Return type

[**\OpenAPI\Client\Model\MetricsResultDto**](../Model/MetricsResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `interval()`

```php
interval($name, $reporter, $start_date, $end_date, $first_result, $max_results, $interval, $aggregate_by_reporter): \OpenAPI\Client\Model\MetricsIntervalResultDto[]
```

Get Metrics in Interval

Retrieves a list of metrics, aggregated for a given interval.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the metric.
$reporter = 'reporter_example'; // string | The name of the reporter (host), on which the metrics was logged. This will have value provided by the [hostname configuration property](https://docs.camunda.org/manual/latest/reference/deployment-descriptors/tags/process-engine/#hostname).
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date (inclusive).
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date (exclusive).
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$interval = '900'; // string | The interval for which the metrics should be aggregated. Time unit is seconds. Default: The interval is set to 15 minutes (900 seconds).
$aggregate_by_reporter = 'aggregate_by_reporter_example'; // string | Aggregate metrics by reporter.

try {
    $result = $apiInstance->interval($name, $reporter, $start_date, $end_date, $first_result, $max_results, $interval, $aggregate_by_reporter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->interval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the metric. | [optional]
 **reporter** | **string**| The name of the reporter (host), on which the metrics was logged. This will have value provided by the [hostname configuration property](https://docs.camunda.org/manual/latest/reference/deployment-descriptors/tags/process-engine/#hostname). | [optional]
 **start_date** | **\DateTime**| The start date (inclusive). | [optional]
 **end_date** | **\DateTime**| The end date (exclusive). | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **interval** | **string**| The interval for which the metrics should be aggregated. Time unit is seconds. Default: The interval is set to 15 minutes (900 seconds). | [optional] [default to &#39;900&#39;]
 **aggregate_by_reporter** | **string**| Aggregate metrics by reporter. | [optional]

### Return type

[**\OpenAPI\Client\Model\MetricsIntervalResultDto[]**](../Model/MetricsIntervalResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
