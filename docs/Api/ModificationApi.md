# OpenAPI\Client\ModificationApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeModification()**](ModificationApi.md#executeModification) | **POST** /modification/execute | Execute Modification
[**executeModificationAsync()**](ModificationApi.md#executeModificationAsync) | **POST** /modification/executeAsync | Execute Modification Async (Batch)


## `executeModification()`

```php
executeModification($modification_dto)
```

Execute Modification

Executes a modification synchronously for multiple process instances. To modify a single process instance, use the [Modify Process Instance Execution State](https://docs.camunda.org/manual/latest/reference/rest/process-instance/post-modification/) method. To execute a modification asynchronously, use the [Execute Modification Async (Batch)](https://docs.camunda.org/manual/latest/reference/rest/modification/post-modification-async/) method.  For more information about the difference between synchronous and asynchronous execution of a modification, please refer to the related section of the [user guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/process-instance-migration.md#executing-a-migration-plan).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modification_dto = {"processDefinitionId":"aProcessDefinitionId","instructions":[{"type":"startAfterActivity","activityId":"aUserTask"},{"type":"cancel","activityId":"anotherTask","cancelCurrentActiveActivityInstances":true}],"processInstanceIds":["aProcessInstance","anotherProcessInstance"],"processInstanceQuery":{"processDefinitionId":"aProcessDefinitionId"},"skipCustomListeners":true,"annotation":"Modified to resolve an error."}; // \OpenAPI\Client\Model\ModificationDto

try {
    $apiInstance->executeModification($modification_dto);
} catch (Exception $e) {
    echo 'Exception when calling ModificationApi->executeModification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modification_dto** | [**\OpenAPI\Client\Model\ModificationDto**](../Model/ModificationDto.md)|  | [optional]

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

## `executeModificationAsync()`

```php
executeModificationAsync($modification_dto): \OpenAPI\Client\Model\BatchDto
```

Execute Modification Async (Batch)

Executes a modification asynchronously for multiple process instances. To execute a modification synchronously, use the [Execute Modification](https://docs.camunda.org/manual/latest/reference/rest/modification/post-modification-sync/) method.  For more information about the difference between synchronous and asynchronous execution of a modification, please refer to the related section of the [user guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/process-instance-migration.md#executing-a-migration-plan).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modification_dto = {"processDefinitionId":"aProcessDefinitionId","instructions":[{"type":"startAfterActivity","activityId":"aUserTask"},{"type":"cancel","activityId":"anotherTask","cancelCurrentActiveActivityInstances":true}],"processInstanceIds":["aProcessInstance","anotherProcessInstance"],"processInstanceQuery":{"processDefinitionId":"aProcessDefinitionId"},"skipCustomListeners":true,"annotation":"Modified to resolve an error."}; // \OpenAPI\Client\Model\ModificationDto

try {
    $result = $apiInstance->executeModificationAsync($modification_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModificationApi->executeModificationAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modification_dto** | [**\OpenAPI\Client\Model\ModificationDto**](../Model/ModificationDto.md)|  | [optional]

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
