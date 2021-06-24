# OpenAPI\Client\DecisionDefinitionApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**evaluateDecisionById()**](DecisionDefinitionApi.md#evaluateDecisionById) | **POST** /decision-definition/{id}/evaluate | Evaluate By Id
[**evaluateDecisionByKey()**](DecisionDefinitionApi.md#evaluateDecisionByKey) | **POST** /decision-definition/key/{key}/evaluate | Evaluate By Key
[**evaluateDecisionByKeyAndTenant()**](DecisionDefinitionApi.md#evaluateDecisionByKeyAndTenant) | **POST** /decision-definition/key/{key}/tenant-id/{tenant-id}/evaluate | Evaluate By Key And Tenant
[**getDecisionDefinitionById()**](DecisionDefinitionApi.md#getDecisionDefinitionById) | **GET** /decision-definition/{id} | Get Decision Definition By Id
[**getDecisionDefinitionByKey()**](DecisionDefinitionApi.md#getDecisionDefinitionByKey) | **GET** /decision-definition/key/{key} | Get Decision Definition By Key
[**getDecisionDefinitionByKeyAndTenantId()**](DecisionDefinitionApi.md#getDecisionDefinitionByKeyAndTenantId) | **GET** /decision-definition/key/{key}/tenant-id/{tenant-id} | Get Decision Definition By Key And Tenant Id
[**getDecisionDefinitionDiagram()**](DecisionDefinitionApi.md#getDecisionDefinitionDiagram) | **GET** /decision-definition/{id}/diagram | Get Diagram
[**getDecisionDefinitionDiagramByKey()**](DecisionDefinitionApi.md#getDecisionDefinitionDiagramByKey) | **GET** /decision-definition/key/{key}/diagram | Get Diagram By Key
[**getDecisionDefinitionDiagramByKeyAndTenant()**](DecisionDefinitionApi.md#getDecisionDefinitionDiagramByKeyAndTenant) | **GET** /decision-definition/key/{key}/tenant-id/{tenant-id}/diagram | Get Diagram By Key And Tenant
[**getDecisionDefinitionDmnXmlById()**](DecisionDefinitionApi.md#getDecisionDefinitionDmnXmlById) | **GET** /decision-definition/{id}/xml | Get XML By Id
[**getDecisionDefinitionDmnXmlByKey()**](DecisionDefinitionApi.md#getDecisionDefinitionDmnXmlByKey) | **GET** /decision-definition/key/{key}/xml | Get XML By Key
[**getDecisionDefinitionDmnXmlByKeyAndTenant()**](DecisionDefinitionApi.md#getDecisionDefinitionDmnXmlByKeyAndTenant) | **GET** /decision-definition/key/{key}/tenant-id/{tenant-id}/xml | Get XML By Key and Tenant
[**getDecisionDefinitions()**](DecisionDefinitionApi.md#getDecisionDefinitions) | **GET** /decision-definition | Get List
[**getDecisionDefinitionsCount()**](DecisionDefinitionApi.md#getDecisionDefinitionsCount) | **GET** /decision-definition/count | Get List Count
[**updateHistoryTimeToLiveByDecisionDefinitionId()**](DecisionDefinitionApi.md#updateHistoryTimeToLiveByDecisionDefinitionId) | **PUT** /decision-definition/{id}/history-time-to-live | Update History Time to Live
[**updateHistoryTimeToLiveByDecisionDefinitionKey()**](DecisionDefinitionApi.md#updateHistoryTimeToLiveByDecisionDefinitionKey) | **PUT** /decision-definition/key/{key}/history-time-to-live | Update History Time to Live By Key
[**updateHistoryTimeToLiveByDecisionDefinitionKeyAndTenant()**](DecisionDefinitionApi.md#updateHistoryTimeToLiveByDecisionDefinitionKeyAndTenant) | **PUT** /decision-definition/key/{key}/tenant-id/{tenant-id}/history-time-to-live | Update History Time to Live By Key And Tenant


## `evaluateDecisionById()`

```php
evaluateDecisionById($id, $evaluate_decision_dto): array<string,\OpenAPI\Client\Model\VariableValueDto>[]
```

Evaluate By Id

Evaluates a given decision and returns the result. The input values of the decision have to be supplied in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the decision definition to be evaluated.
$evaluate_decision_dto = {"variables":{"amount":{"value":600,"type":"Double"},"invoiceCategory":{"value":"Misc","type":"String"}}}; // \OpenAPI\Client\Model\EvaluateDecisionDto

try {
    $result = $apiInstance->evaluateDecisionById($id, $evaluate_decision_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->evaluateDecisionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the decision definition to be evaluated. |
 **evaluate_decision_dto** | [**\OpenAPI\Client\Model\EvaluateDecisionDto**](../Model/EvaluateDecisionDto.md)|  | [optional]

### Return type

[**array<string,\OpenAPI\Client\Model\VariableValueDto>[]**](../Model/array.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `evaluateDecisionByKey()`

```php
evaluateDecisionByKey($key, $evaluate_decision_dto): array<string,\OpenAPI\Client\Model\VariableValueDto>[]
```

Evaluate By Key

Evaluates the latest version of the decision definition which belongs to no tenant. The input values of the decision have to be supplied in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The key of the decision definition (the latest version thereof) to be evaluated.
$evaluate_decision_dto = {"variables":{"amount":{"value":600,"type":"Double"},"invoiceCategory":{"value":"Misc","type":"String"}}}; // \OpenAPI\Client\Model\EvaluateDecisionDto

try {
    $result = $apiInstance->evaluateDecisionByKey($key, $evaluate_decision_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->evaluateDecisionByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof) to be evaluated. |
 **evaluate_decision_dto** | [**\OpenAPI\Client\Model\EvaluateDecisionDto**](../Model/EvaluateDecisionDto.md)|  | [optional]

### Return type

[**array<string,\OpenAPI\Client\Model\VariableValueDto>[]**](../Model/array.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `evaluateDecisionByKeyAndTenant()`

```php
evaluateDecisionByKeyAndTenant($key, $tenant_id, $evaluate_decision_dto): array<string,\OpenAPI\Client\Model\VariableValueDto>[]
```

Evaluate By Key And Tenant

Evaluates the latest version of the decision definition for tenant. The input values of the decision have to be supplied in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The key of the decision definition (the latest version thereof) to be evaluated.
$tenant_id = 'tenant_id_example'; // string | The id of the tenant the decision definition belongs to.
$evaluate_decision_dto = {"variables":{"amount":{"value":600,"type":"Double"},"invoiceCategory":{"value":"Misc","type":"String"}}}; // \OpenAPI\Client\Model\EvaluateDecisionDto

try {
    $result = $apiInstance->evaluateDecisionByKeyAndTenant($key, $tenant_id, $evaluate_decision_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->evaluateDecisionByKeyAndTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof) to be evaluated. |
 **tenant_id** | **string**| The id of the tenant the decision definition belongs to. |
 **evaluate_decision_dto** | [**\OpenAPI\Client\Model\EvaluateDecisionDto**](../Model/EvaluateDecisionDto.md)|  | [optional]

### Return type

[**array<string,\OpenAPI\Client\Model\VariableValueDto>[]**](../Model/array.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDecisionDefinitionById()`

```php
getDecisionDefinitionById($id): \OpenAPI\Client\Model\DecisionDefinitionDto
```

Get Decision Definition By Id

Retrieves a decision definition by id, according to the `DecisionDefinition` interface in the engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the decision definition to be retrieved.

try {
    $result = $apiInstance->getDecisionDefinitionById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the decision definition to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\DecisionDefinitionDto**](../Model/DecisionDefinitionDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDecisionDefinitionByKey()`

```php
getDecisionDefinitionByKey($key): \OpenAPI\Client\Model\DecisionDefinitionDto
```

Get Decision Definition By Key

Retrieves the latest version of the decision definition which belongs to no tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The key of the decision definition (the latest version thereof) to be retrieved.

try {
    $result = $apiInstance->getDecisionDefinitionByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof) to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\DecisionDefinitionDto**](../Model/DecisionDefinitionDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDecisionDefinitionByKeyAndTenantId()`

```php
getDecisionDefinitionByKeyAndTenantId($key, $tenant_id): \OpenAPI\Client\Model\DecisionDefinitionDto
```

Get Decision Definition By Key And Tenant Id

Retrieves the latest version of the decision definition for tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The key of the decision definition (the latest version thereof) to be retrieved.
$tenant_id = 'tenant_id_example'; // string | The id of the tenant the decision definition belongs to.

try {
    $result = $apiInstance->getDecisionDefinitionByKeyAndTenantId($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof) to be retrieved. |
 **tenant_id** | **string**| The id of the tenant the decision definition belongs to. |

### Return type

[**\OpenAPI\Client\Model\DecisionDefinitionDto**](../Model/DecisionDefinitionDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDecisionDefinitionDiagram()`

```php
getDecisionDefinitionDiagram($id): \SplFileObject
```

Get Diagram

Retrieves the diagram of a decision definition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the process definition.

try {
    $result = $apiInstance->getDecisionDefinitionDiagram($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionDiagram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDecisionDefinitionDiagramByKey()`

```php
getDecisionDefinitionDiagramByKey($key): \SplFileObject
```

Get Diagram By Key

Returns the diagram for the latest version of the decision definition which belongs to no tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The key of the decision definition (the latest version thereof) to be retrieved.

try {
    $result = $apiInstance->getDecisionDefinitionDiagramByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionDiagramByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof) to be retrieved. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDecisionDefinitionDiagramByKeyAndTenant()`

```php
getDecisionDefinitionDiagramByKeyAndTenant($key, $tenant_id): \SplFileObject
```

Get Diagram By Key And Tenant

Returns the XML of the latest version of the decision definition for tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The key of the decision definition (the latest version thereof) to be retrieved.
$tenant_id = 'tenant_id_example'; // string | The id of the tenant the decision definition belongs to.

try {
    $result = $apiInstance->getDecisionDefinitionDiagramByKeyAndTenant($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionDiagramByKeyAndTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof) to be retrieved. |
 **tenant_id** | **string**| The id of the tenant the decision definition belongs to. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDecisionDefinitionDmnXmlById()`

```php
getDecisionDefinitionDmnXmlById($id): \OpenAPI\Client\Model\DecisionDefinitionDiagramDto
```

Get XML By Id

Retrieves the DMN XML of a decision definition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the decision definition.

try {
    $result = $apiInstance->getDecisionDefinitionDmnXmlById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionDmnXmlById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the decision definition. |

### Return type

[**\OpenAPI\Client\Model\DecisionDefinitionDiagramDto**](../Model/DecisionDefinitionDiagramDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDecisionDefinitionDmnXmlByKey()`

```php
getDecisionDefinitionDmnXmlByKey($key): \OpenAPI\Client\Model\DecisionDefinitionDiagramDto
```

Get XML By Key

Retrieves the XML for the latest version of the decision definition which belongs to no tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The key of the decision definition (the latest version thereof).

try {
    $result = $apiInstance->getDecisionDefinitionDmnXmlByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionDmnXmlByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof). |

### Return type

[**\OpenAPI\Client\Model\DecisionDefinitionDiagramDto**](../Model/DecisionDefinitionDiagramDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDecisionDefinitionDmnXmlByKeyAndTenant()`

```php
getDecisionDefinitionDmnXmlByKeyAndTenant($key, $tenant_id): \OpenAPI\Client\Model\DecisionDefinitionDiagramDto
```

Get XML By Key and Tenant

Retrieves the XML of the latest version of the decision definition for tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The key of the decision definition (the latest version thereof).
$tenant_id = 'tenant_id_example'; // string | The id of the tenant the decision definition belongs to.

try {
    $result = $apiInstance->getDecisionDefinitionDmnXmlByKeyAndTenant($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionDmnXmlByKeyAndTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof). |
 **tenant_id** | **string**| The id of the tenant the decision definition belongs to. |

### Return type

[**\OpenAPI\Client\Model\DecisionDefinitionDiagramDto**](../Model/DecisionDefinitionDiagramDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDecisionDefinitions()`

```php
getDecisionDefinitions($sort_by, $sort_order, $first_result, $max_results, $decision_definition_id, $decision_definition_id_in, $name, $name_like, $deployment_id, $deployed_after, $deployed_at, $key, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $decision_requirements_definition_id, $decision_requirements_definition_key, $without_decision_requirements_definition, $tenant_id_in, $without_tenant_id, $include_decision_definitions_without_tenant_id, $version_tag, $version_tag_like): \OpenAPI\Client\Model\DecisionDefinitionDto[]
```

Get List

Queries for decision definitions that fulfill given parameters. Parameters may be the properties of decision definitions, such as the name, key or version. The size of the result set can be retrieved by using the [Get Decision Definition Count](https://docs.camunda.org/manual/7.15/reference/rest/decision-definition/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$decision_definition_id = 'decision_definition_id_example'; // string | Filter by decision definition id.
$decision_definition_id_in = 'decision_definition_id_in_example'; // string | Filter by decision definition ids.
$name = 'name_example'; // string | Filter by decision definition name.
$name_like = 'name_like_example'; // string | Filter by decision definition names that the parameter is a substring of.
$deployment_id = 'deployment_id_example'; // string | Filter by the deployment the id belongs to.
$deployed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed after (exclusive) a specific time.
$deployed_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed at a specific time (exact match).
$key = 'key_example'; // string | Filter by decision definition key, i.e., the id in the DMN 1.0 XML. Exact match.
$key_like = 'key_like_example'; // string | Filter by decision definition keys that the parameter is a substring of.
$category = 'category_example'; // string | Filter by decision definition category. Exact match.
$category_like = 'category_like_example'; // string | Filter by decision definition categories that the parameter is a substring of.
$version = 56; // int | Filter by decision definition version.
$latest_version = True; // bool | Only include those decision definitions that are latest versions. Value may only be `true`, as `false` is the default behavior.
$resource_name = 'resource_name_example'; // string | Filter by the name of the decision definition resource. Exact match.
$resource_name_like = 'resource_name_like_example'; // string | Filter by names of those decision definition resources that the parameter is a substring of.
$decision_requirements_definition_id = 'decision_requirements_definition_id_example'; // string | Filter by the id of the decision requirements definition this decision definition belongs to.
$decision_requirements_definition_key = 'decision_requirements_definition_key_example'; // string | Filter by the key of the decision requirements definition this decision definition belongs to.
$without_decision_requirements_definition = True; // bool | Only include decision definitions which does not belongs to any decision requirements definition. Value may only be `true`, as `false` is the default behavior.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of `Strings`. A decision definition must have one of the given tenant ids.
$without_tenant_id = True; // bool | Only include decision definitions which belong to no tenant. Value can effectively only be `true`, as `false` is the default behavior.
$include_decision_definitions_without_tenant_id = True; // bool | Include decision definitions which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.
$version_tag = 'version_tag_example'; // string | Filter by the version tag.
$version_tag_like = 'version_tag_like_example'; // string | Filter by the version tags of those decision definition resources that the parameter is a substring of.

try {
    $result = $apiInstance->getDecisionDefinitions($sort_by, $sort_order, $first_result, $max_results, $decision_definition_id, $decision_definition_id_in, $name, $name_like, $deployment_id, $deployed_after, $deployed_at, $key, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $decision_requirements_definition_id, $decision_requirements_definition_key, $without_decision_requirements_definition, $tenant_id_in, $without_tenant_id, $include_decision_definitions_without_tenant_id, $version_tag, $version_tag_like);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **decision_definition_id** | **string**| Filter by decision definition id. | [optional]
 **decision_definition_id_in** | **string**| Filter by decision definition ids. | [optional]
 **name** | **string**| Filter by decision definition name. | [optional]
 **name_like** | **string**| Filter by decision definition names that the parameter is a substring of. | [optional]
 **deployment_id** | **string**| Filter by the deployment the id belongs to. | [optional]
 **deployed_after** | **\DateTime**| Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed after (exclusive) a specific time. | [optional]
 **deployed_at** | **\DateTime**| Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed at a specific time (exact match). | [optional]
 **key** | **string**| Filter by decision definition key, i.e., the id in the DMN 1.0 XML. Exact match. | [optional]
 **key_like** | **string**| Filter by decision definition keys that the parameter is a substring of. | [optional]
 **category** | **string**| Filter by decision definition category. Exact match. | [optional]
 **category_like** | **string**| Filter by decision definition categories that the parameter is a substring of. | [optional]
 **version** | **int**| Filter by decision definition version. | [optional]
 **latest_version** | **bool**| Only include those decision definitions that are latest versions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **resource_name** | **string**| Filter by the name of the decision definition resource. Exact match. | [optional]
 **resource_name_like** | **string**| Filter by names of those decision definition resources that the parameter is a substring of. | [optional]
 **decision_requirements_definition_id** | **string**| Filter by the id of the decision requirements definition this decision definition belongs to. | [optional]
 **decision_requirements_definition_key** | **string**| Filter by the key of the decision requirements definition this decision definition belongs to. | [optional]
 **without_decision_requirements_definition** | **bool**| Only include decision definitions which does not belongs to any decision requirements definition. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of &#x60;Strings&#x60;. A decision definition must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include decision definitions which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_decision_definitions_without_tenant_id** | **bool**| Include decision definitions which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **version_tag** | **string**| Filter by the version tag. | [optional]
 **version_tag_like** | **string**| Filter by the version tags of those decision definition resources that the parameter is a substring of. | [optional]

### Return type

[**\OpenAPI\Client\Model\DecisionDefinitionDto[]**](../Model/DecisionDefinitionDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDecisionDefinitionsCount()`

```php
getDecisionDefinitionsCount($decision_definition_id, $decision_definition_id_in, $name, $name_like, $deployment_id, $deployed_after, $deployed_at, $key, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $decision_requirements_definition_id, $decision_requirements_definition_key, $without_decision_requirements_definition, $tenant_id_in, $without_tenant_id, $include_decision_definitions_without_tenant_id, $version_tag, $version_tag_like): \OpenAPI\Client\Model\CountResultDto
```

Get List Count

Requests the number of decision definitions that fulfill the query criteria. Takes the same filtering parameters as the [Get Decision Definition](https://docs.camunda.org/manual/7.15/reference/rest/decision-definition/get-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$decision_definition_id = 'decision_definition_id_example'; // string | Filter by decision definition id.
$decision_definition_id_in = 'decision_definition_id_in_example'; // string | Filter by decision definition ids.
$name = 'name_example'; // string | Filter by decision definition name.
$name_like = 'name_like_example'; // string | Filter by decision definition names that the parameter is a substring of.
$deployment_id = 'deployment_id_example'; // string | Filter by the deployment the id belongs to.
$deployed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed after (exclusive) a specific time.
$deployed_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed at a specific time (exact match).
$key = 'key_example'; // string | Filter by decision definition key, i.e., the id in the DMN 1.0 XML. Exact match.
$key_like = 'key_like_example'; // string | Filter by decision definition keys that the parameter is a substring of.
$category = 'category_example'; // string | Filter by decision definition category. Exact match.
$category_like = 'category_like_example'; // string | Filter by decision definition categories that the parameter is a substring of.
$version = 56; // int | Filter by decision definition version.
$latest_version = True; // bool | Only include those decision definitions that are latest versions. Value may only be `true`, as `false` is the default behavior.
$resource_name = 'resource_name_example'; // string | Filter by the name of the decision definition resource. Exact match.
$resource_name_like = 'resource_name_like_example'; // string | Filter by names of those decision definition resources that the parameter is a substring of.
$decision_requirements_definition_id = 'decision_requirements_definition_id_example'; // string | Filter by the id of the decision requirements definition this decision definition belongs to.
$decision_requirements_definition_key = 'decision_requirements_definition_key_example'; // string | Filter by the key of the decision requirements definition this decision definition belongs to.
$without_decision_requirements_definition = True; // bool | Only include decision definitions which does not belongs to any decision requirements definition. Value may only be `true`, as `false` is the default behavior.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of `Strings`. A decision definition must have one of the given tenant ids.
$without_tenant_id = True; // bool | Only include decision definitions which belong to no tenant. Value can effectively only be `true`, as `false` is the default behavior.
$include_decision_definitions_without_tenant_id = True; // bool | Include decision definitions which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.
$version_tag = 'version_tag_example'; // string | Filter by the version tag.
$version_tag_like = 'version_tag_like_example'; // string | Filter by the version tags of those decision definition resources that the parameter is a substring of.

try {
    $result = $apiInstance->getDecisionDefinitionsCount($decision_definition_id, $decision_definition_id_in, $name, $name_like, $deployment_id, $deployed_after, $deployed_at, $key, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $decision_requirements_definition_id, $decision_requirements_definition_key, $without_decision_requirements_definition, $tenant_id_in, $without_tenant_id, $include_decision_definitions_without_tenant_id, $version_tag, $version_tag_like);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **decision_definition_id** | **string**| Filter by decision definition id. | [optional]
 **decision_definition_id_in** | **string**| Filter by decision definition ids. | [optional]
 **name** | **string**| Filter by decision definition name. | [optional]
 **name_like** | **string**| Filter by decision definition names that the parameter is a substring of. | [optional]
 **deployment_id** | **string**| Filter by the deployment the id belongs to. | [optional]
 **deployed_after** | **\DateTime**| Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed after (exclusive) a specific time. | [optional]
 **deployed_at** | **\DateTime**| Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed at a specific time (exact match). | [optional]
 **key** | **string**| Filter by decision definition key, i.e., the id in the DMN 1.0 XML. Exact match. | [optional]
 **key_like** | **string**| Filter by decision definition keys that the parameter is a substring of. | [optional]
 **category** | **string**| Filter by decision definition category. Exact match. | [optional]
 **category_like** | **string**| Filter by decision definition categories that the parameter is a substring of. | [optional]
 **version** | **int**| Filter by decision definition version. | [optional]
 **latest_version** | **bool**| Only include those decision definitions that are latest versions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **resource_name** | **string**| Filter by the name of the decision definition resource. Exact match. | [optional]
 **resource_name_like** | **string**| Filter by names of those decision definition resources that the parameter is a substring of. | [optional]
 **decision_requirements_definition_id** | **string**| Filter by the id of the decision requirements definition this decision definition belongs to. | [optional]
 **decision_requirements_definition_key** | **string**| Filter by the key of the decision requirements definition this decision definition belongs to. | [optional]
 **without_decision_requirements_definition** | **bool**| Only include decision definitions which does not belongs to any decision requirements definition. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of &#x60;Strings&#x60;. A decision definition must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include decision definitions which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_decision_definitions_without_tenant_id** | **bool**| Include decision definitions which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **version_tag** | **string**| Filter by the version tag. | [optional]
 **version_tag_like** | **string**| Filter by the version tags of those decision definition resources that the parameter is a substring of. | [optional]

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

## `updateHistoryTimeToLiveByDecisionDefinitionId()`

```php
updateHistoryTimeToLiveByDecisionDefinitionId($id, $history_time_to_live_dto)
```

Update History Time to Live

Updates history time to live for decision definition. The field is used within [History cleanup](https://docs.camunda.org/manual/7.15/user-guide/process-engine/history/#history-cleanup).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the decision definition to change history time to live.
$history_time_to_live_dto = {"historyTimeToLive":5}; // \OpenAPI\Client\Model\HistoryTimeToLiveDto

try {
    $apiInstance->updateHistoryTimeToLiveByDecisionDefinitionId($id, $history_time_to_live_dto);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->updateHistoryTimeToLiveByDecisionDefinitionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the decision definition to change history time to live. |
 **history_time_to_live_dto** | [**\OpenAPI\Client\Model\HistoryTimeToLiveDto**](../Model/HistoryTimeToLiveDto.md)|  | [optional]

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

## `updateHistoryTimeToLiveByDecisionDefinitionKey()`

```php
updateHistoryTimeToLiveByDecisionDefinitionKey($key, $history_time_to_live_dto)
```

Update History Time to Live By Key

Updates the latest version of the decision definition which belongs to no tenant. The field is used within [History cleanup](https://docs.camunda.org/manual/7.15/user-guide/process-engine/history/#history-cleanup).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The key of the decision definitions to change history time to live.
$history_time_to_live_dto = {"historyTimeToLive":5}; // \OpenAPI\Client\Model\HistoryTimeToLiveDto

try {
    $apiInstance->updateHistoryTimeToLiveByDecisionDefinitionKey($key, $history_time_to_live_dto);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->updateHistoryTimeToLiveByDecisionDefinitionKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definitions to change history time to live. |
 **history_time_to_live_dto** | [**\OpenAPI\Client\Model\HistoryTimeToLiveDto**](../Model/HistoryTimeToLiveDto.md)|  | [optional]

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

## `updateHistoryTimeToLiveByDecisionDefinitionKeyAndTenant()`

```php
updateHistoryTimeToLiveByDecisionDefinitionKeyAndTenant($key, $tenant_id, $history_time_to_live_dto)
```

Update History Time to Live By Key And Tenant

Updates the latest version of the decision definition for tenant. The field is used within [History cleanup](https://docs.camunda.org/manual/7.15/user-guide/process-engine/history/#history-cleanup).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The key of the decision definitions to change history time to live.
$tenant_id = 'tenant_id_example'; // string | The id of the tenant the decision definition belongs to.
$history_time_to_live_dto = {"historyTimeToLive":5}; // \OpenAPI\Client\Model\HistoryTimeToLiveDto

try {
    $apiInstance->updateHistoryTimeToLiveByDecisionDefinitionKeyAndTenant($key, $tenant_id, $history_time_to_live_dto);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->updateHistoryTimeToLiveByDecisionDefinitionKeyAndTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definitions to change history time to live. |
 **tenant_id** | **string**| The id of the tenant the decision definition belongs to. |
 **history_time_to_live_dto** | [**\OpenAPI\Client\Model\HistoryTimeToLiveDto**](../Model/HistoryTimeToLiveDto.md)|  | [optional]

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
