# OpenAPI\Client\MigrationApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeMigrationPlan()**](MigrationApi.md#executeMigrationPlan) | **POST** /migration/execute | Execute Migration Plan
[**executeMigrationPlanAsync()**](MigrationApi.md#executeMigrationPlanAsync) | **POST** /migration/executeAsync | Execute Migration Plan Async (Batch)
[**generateMigrationPlan()**](MigrationApi.md#generateMigrationPlan) | **POST** /migration/generate | Generate Migration Plan
[**validateMigrationPlan()**](MigrationApi.md#validateMigrationPlan) | **POST** /migration/validate | Validate Migration Plan


## `executeMigrationPlan()`

```php
executeMigrationPlan($migration_execution_dto)
```

Execute Migration Plan

Executes a migration plan synchronously for multiple process instances. To execute a migration plan asynchronously, use the [Execute Migration Plan Async(Batch)](https://docs.camunda.org/manual/latest/reference/rest/migration/execute-migration-async/) method.  For more information about the difference between synchronous and asynchronous execution of a migration plan, please refer to the related section of [the user guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/process-instance-migration/#executing-a-migration-plan).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$migration_execution_dto = {"migrationPlan":{"sourceProcessDefinitionId":"aProcessDefinitionId1","targetProcessDefinitionId":"aProcessDefinitionId2","instructions":[{"sourceActivityIds":["aUserTask"],"targetActivityIds":["aUserTask"]},{"sourceActivityIds":["anEvent"],"targetActivityIds":["anotherEvent"],"updateEventTrigger":true}],"variables":{"foo":{"type":"Object","value":"[5,9]","valueInfo":{"objectTypeName":"java.util.ArrayList","serializationDataFormat":"application/json"}}}},"processInstanceIds":["aProcessInstance","anotherProcessInstance"],"processInstanceQuery":{"processDefinitionId":"aProcessDefinitionId1"},"skipCustomListeners":true}; // \OpenAPI\Client\Model\MigrationExecutionDto

try {
    $apiInstance->executeMigrationPlan($migration_execution_dto);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->executeMigrationPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **migration_execution_dto** | [**\OpenAPI\Client\Model\MigrationExecutionDto**](../Model/MigrationExecutionDto.md)|  | [optional]

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

## `executeMigrationPlanAsync()`

```php
executeMigrationPlanAsync($migration_execution_dto): \OpenAPI\Client\Model\BatchDto
```

Execute Migration Plan Async (Batch)

Executes a migration plan asynchronously (batch) for multiple process instances. To execute a migration plan synchronously, use the [Execute MigrationPlan](https://docs.camunda.org/manual/latest/reference/rest/migration/execute-migration/) method.  For more information about the difference between synchronous and asynchronous execution of a migration plan, please refer to the related section of [the user guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/process-instance-migration/#executing-a-migration-plan).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$migration_execution_dto = {"migrationPlan":{"sourceProcessDefinitionId":"aProcessDefinitionId1","targetProcessDefinitionId":"aProcessDefinitionId2","instructions":[{"sourceActivityIds":["aUserTask"],"targetActivityIds":["aUserTask"]},{"sourceActivityIds":["anEvent"],"targetActivityIds":["anotherEvent"],"updateEventTrigger":true}],"variables":{"foo":{"type":"Object","value":"[5,9]","valueInfo":{"objectTypeName":"java.util.ArrayList","serializationDataFormat":"application/json"}}}},"processInstanceIds":["aProcessInstance","anotherProcessInstance"],"processInstanceQuery":{"processDefinitionId":"aProcessDefinitionId1"},"skipCustomListeners":true}; // \OpenAPI\Client\Model\MigrationExecutionDto

try {
    $result = $apiInstance->executeMigrationPlanAsync($migration_execution_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->executeMigrationPlanAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **migration_execution_dto** | [**\OpenAPI\Client\Model\MigrationExecutionDto**](../Model/MigrationExecutionDto.md)|  | [optional]

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

## `generateMigrationPlan()`

```php
generateMigrationPlan($migration_plan_generation_dto): \OpenAPI\Client\Model\MigrationPlanDto
```

Generate Migration Plan

Generates a migration plan for two process definitions. The generated migration plan contains migration instructions which map equal activities between the two process definitions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$migration_plan_generation_dto = {"sourceProcessDefinitionId":"aProcessDefinitionId1","targetProcessDefinitionId":"aProcessDefinitionId2","updateEventTriggers":true,"variables":{"foo":{"type":"Object","value":"[5,6]","valueInfo":{"objectTypeName":"java.util.ArrayList","serializationDataFormat":"application/json"}}}}; // \OpenAPI\Client\Model\MigrationPlanGenerationDto

try {
    $result = $apiInstance->generateMigrationPlan($migration_plan_generation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->generateMigrationPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **migration_plan_generation_dto** | [**\OpenAPI\Client\Model\MigrationPlanGenerationDto**](../Model/MigrationPlanGenerationDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\MigrationPlanDto**](../Model/MigrationPlanDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateMigrationPlan()`

```php
validateMigrationPlan($migration_plan_dto): \OpenAPI\Client\Model\MigrationPlanReportDto
```

Validate Migration Plan

Validates a migration plan statically without executing it. This corresponds to the [creation time validation](https://docs.camunda.org/manual/latest/user-guide/process-engine/process-instance-migration/#creation-time-validation) described in the user guide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$migration_plan_dto = {"sourceProcessDefinitionId":"aProcessDefinitionId1","targetProcessDefinitionId":"aProcessDefinitionId2","instructions":[{"sourceActivityIds":["aUserTask"],"targetActivityIds":["aUserTask"]},{"sourceActivityIds":["anEvent"],"targetActivityIds":["anotherEvent"],"updateEventTrigger":true}],"variables":{"foo":{"type":"Object","value":"...","valueInfo":{"objectTypeName":"java.util.ArrayList","serializationDataFormat":"application/x-java-serialized-object"}}}}; // \OpenAPI\Client\Model\MigrationPlanDto

try {
    $result = $apiInstance->validateMigrationPlan($migration_plan_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->validateMigrationPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **migration_plan_dto** | [**\OpenAPI\Client\Model\MigrationPlanDto**](../Model/MigrationPlanDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\MigrationPlanReportDto**](../Model/MigrationPlanReportDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
