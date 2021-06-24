# OpenAPI\Client\EngineApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProcessEngineNames()**](EngineApi.md#getProcessEngineNames) | **GET** /engine | Get List


## `getProcessEngineNames()`

```php
getProcessEngineNames(): \OpenAPI\Client\Model\ProcessEngineDto[]
```

Get List

Retrieves the names of all process engines available on your platform. **Note**: You cannot prepend `/engine/{name}` to this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getProcessEngineNames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EngineApi->getProcessEngineNames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ProcessEngineDto[]**](../Model/ProcessEngineDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
