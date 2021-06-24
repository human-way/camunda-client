# OpenAPI\Client\TelemetryApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**configureTelemetry()**](TelemetryApi.md#configureTelemetry) | **POST** /telemetry/configuration | Configure Telemetry
[**getTelemetryConfiguration()**](TelemetryApi.md#getTelemetryConfiguration) | **GET** /telemetry/configuration | Fetch Telemetry Configuration


## `configureTelemetry()`

```php
configureTelemetry($telemetry_configuration_dto)
```

Configure Telemetry

Configures whether Camunda receives data collection of the process engine setup and usage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TelemetryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$telemetry_configuration_dto = {"enableTelemetry":true}; // \OpenAPI\Client\Model\TelemetryConfigurationDto

try {
    $apiInstance->configureTelemetry($telemetry_configuration_dto);
} catch (Exception $e) {
    echo 'Exception when calling TelemetryApi->configureTelemetry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telemetry_configuration_dto** | [**\OpenAPI\Client\Model\TelemetryConfigurationDto**](../Model/TelemetryConfigurationDto.md)|  | [optional]

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

## `getTelemetryConfiguration()`

```php
getTelemetryConfiguration(): \OpenAPI\Client\Model\TelemetryConfigurationDto
```

Fetch Telemetry Configuration

Fetches Telemetry Configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TelemetryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getTelemetryConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelemetryApi->getTelemetryConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TelemetryConfigurationDto**](../Model/TelemetryConfigurationDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
