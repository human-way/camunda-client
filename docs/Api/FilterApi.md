# OpenAPI\Client\FilterApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFilter()**](FilterApi.md#createFilter) | **POST** /filter/create | Create Filter
[**deleteFilter()**](FilterApi.md#deleteFilter) | **DELETE** /filter/{id} | Delete Filter
[**executeFilterCount()**](FilterApi.md#executeFilterCount) | **GET** /filter/{id}/count | Execute Filter Count
[**executeFilterList()**](FilterApi.md#executeFilterList) | **GET** /filter/{id}/list | Execute Filter List
[**executeFilterSingleResult()**](FilterApi.md#executeFilterSingleResult) | **GET** /filter/{id}/singleResult | Execute Filter Single Result
[**filterResourceOptions()**](FilterApi.md#filterResourceOptions) | **OPTIONS** /filter | Filter Resource Options
[**filterResourceOptionsSingle()**](FilterApi.md#filterResourceOptionsSingle) | **OPTIONS** /filter/{id} | Filter Resource Options
[**getFilterCount()**](FilterApi.md#getFilterCount) | **GET** /filter/count | Get Filter Count
[**getFilterList()**](FilterApi.md#getFilterList) | **GET** /filter | Get Filters
[**getSingleFilter()**](FilterApi.md#getSingleFilter) | **GET** /filter/{id} | Get Single Filter
[**postExecuteFilterCount()**](FilterApi.md#postExecuteFilterCount) | **POST** /filter/{id}/count | Execute Filter Count (POST)
[**postExecuteFilterList()**](FilterApi.md#postExecuteFilterList) | **POST** /filter/{id}/list | Execute Filter List (POST)
[**postExecuteFilterSingleResult()**](FilterApi.md#postExecuteFilterSingleResult) | **POST** /filter/{id}/singleResult | Execute Filter Single Result (POST)
[**updateFilter()**](FilterApi.md#updateFilter) | **PUT** /filter/{id} | Update Filter


## `createFilter()`

```php
createFilter($create_filter_dto): \OpenAPI\Client\Model\FilterDto
```

Create Filter

Creates a new filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_filter_dto = {"resourceType":"Task","name":"Accounting Tasks","owner":"jonny1","query":{"candidateGroup":"accounting"},"properties":{"color":"#3e4d2f","description":"Tasks assigned to group accounting","priority":5}}; // \OpenAPI\Client\Model\CreateFilterDto

try {
    $result = $apiInstance->createFilter($create_filter_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->createFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_filter_dto** | [**\OpenAPI\Client\Model\CreateFilterDto**](../Model/CreateFilterDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FilterDto**](../Model/FilterDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFilter()`

```php
deleteFilter($id)
```

Delete Filter

Deletes a filter by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the filter to be deleted.

try {
    $apiInstance->deleteFilter($id);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->deleteFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the filter to be deleted. |

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

## `executeFilterCount()`

```php
executeFilterCount($id): \OpenAPI\Client\Model\CountResultDto
```

Execute Filter Count

Executes the saved query of the filter by id and returns the count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the filter to execute.

try {
    $result = $apiInstance->executeFilterCount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->executeFilterCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the filter to execute. |

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

## `executeFilterList()`

```php
executeFilterList($id, $first_result, $max_results): object[]
```

Execute Filter List

Executes the saved query of the filter by id and returns the result list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the filter to execute.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->executeFilterList($id, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->executeFilterList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the filter to execute. |
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeFilterSingleResult()`

```php
executeFilterSingleResult($id): object
```

Execute Filter Single Result

Executes the saved query of the filter by id and returns the single result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the filter to execute.

try {
    $result = $apiInstance->executeFilterSingleResult($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->executeFilterSingleResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the filter to execute. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `filterResourceOptions()`

```php
filterResourceOptions(): \OpenAPI\Client\Model\ResourceOptionsDto
```

Filter Resource Options

The OPTIONS request allows you to check for the set of available operations  that the currently authenticated user can perform on the `/filter` resource. Whether the user can perform an operation or not may depend on various factors, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->filterResourceOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->filterResourceOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ResourceOptionsDto**](../Model/ResourceOptionsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `filterResourceOptionsSingle()`

```php
filterResourceOptionsSingle($id): \OpenAPI\Client\Model\ResourceOptionsDto
```

Filter Resource Options

The OPTIONS request allows you to check for the set of available operations  that the currently authenticated user can perform on the `/filter` resource. Whether the user can perform an operation or not may depend on various factors, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the filter to be checked.

try {
    $result = $apiInstance->filterResourceOptionsSingle($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->filterResourceOptionsSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the filter to be checked. |

### Return type

[**\OpenAPI\Client\Model\ResourceOptionsDto**](../Model/ResourceOptionsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilterCount()`

```php
getFilterCount($filter_id, $resource_type, $name, $name_like, $owner): \OpenAPI\Client\Model\CountResultDto
```

Get Filter Count

Retrieves the number of filters that fulfill a provided query. Corresponds to the size of the result set when using the  [Get Filters](https://docs.camunda.org/manual/latest/reference/rest/filter/get-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter_id = 'filter_id_example'; // string | Filter by the id of the filter.
$resource_type = 'resource_type_example'; // string | Filter by the resource type of the filter, e.g., `Task`.
$name = 'name_example'; // string | Filter by the name of the filter.
$name_like = 'name_like_example'; // string | Filter by the name that the parameter is a substring of.
$owner = 'owner_example'; // string | Filter by the user id of the owner of the filter.

try {
    $result = $apiInstance->getFilterCount($filter_id, $resource_type, $name, $name_like, $owner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->getFilterCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_id** | **string**| Filter by the id of the filter. | [optional]
 **resource_type** | **string**| Filter by the resource type of the filter, e.g., &#x60;Task&#x60;. | [optional]
 **name** | **string**| Filter by the name of the filter. | [optional]
 **name_like** | **string**| Filter by the name that the parameter is a substring of. | [optional]
 **owner** | **string**| Filter by the user id of the owner of the filter. | [optional]

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

## `getFilterList()`

```php
getFilterList($filter_id, $resource_type, $name, $name_like, $owner, $item_count, $sort_by, $sort_order, $first_result, $max_results): \OpenAPI\Client\Model\FilterDto[]
```

Get Filters

Queries for a list of filters using a list of parameters. The size of the result set can be retrieved by using the [Get Filter Count](https://docs.camunda.org/manual/latest/reference/rest/filter/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter_id = 'filter_id_example'; // string | Filter by the id of the filter.
$resource_type = 'resource_type_example'; // string | Filter by the resource type of the filter, e.g., `Task`.
$name = 'name_example'; // string | Filter by the name of the filter.
$name_like = 'name_like_example'; // string | Filter by the name that the parameter is a substring of.
$owner = 'owner_example'; // string | Filter by the user id of the owner of the filter.
$item_count = True; // bool | If set to `true`, each filter result will contain an `itemCount` property with the number of items matched by the filter itself.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getFilterList($filter_id, $resource_type, $name, $name_like, $owner, $item_count, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->getFilterList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_id** | **string**| Filter by the id of the filter. | [optional]
 **resource_type** | **string**| Filter by the resource type of the filter, e.g., &#x60;Task&#x60;. | [optional]
 **name** | **string**| Filter by the name of the filter. | [optional]
 **name_like** | **string**| Filter by the name that the parameter is a substring of. | [optional]
 **owner** | **string**| Filter by the user id of the owner of the filter. | [optional]
 **item_count** | **bool**| If set to &#x60;true&#x60;, each filter result will contain an &#x60;itemCount&#x60; property with the number of items matched by the filter itself. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\OpenAPI\Client\Model\FilterDto[]**](../Model/FilterDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSingleFilter()`

```php
getSingleFilter($id, $item_count): \OpenAPI\Client\Model\FilterDto
```

Get Single Filter

Retrieves a single filter by id, according to the `Filter` interface in the engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the filter to be retrieved.
$item_count = True; // bool | If set to `true`, each filter result will contain an `itemCount` property with the number of items matched by the filter itself.

try {
    $result = $apiInstance->getSingleFilter($id, $item_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->getSingleFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the filter to be retrieved. |
 **item_count** | **bool**| If set to &#x60;true&#x60;, each filter result will contain an &#x60;itemCount&#x60; property with the number of items matched by the filter itself. | [optional]

### Return type

[**\OpenAPI\Client\Model\FilterDto**](../Model/FilterDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postExecuteFilterCount()`

```php
postExecuteFilterCount($id, $body): \OpenAPI\Client\Model\CountResultDto
```

Execute Filter Count (POST)

Executes the saved query of the filter by id and returns the count. This method is slightly more powerful then the [Get Execute Filter Count](https://docs.camunda.org/manual/latest/reference/rest/filter/get-execute-count/)  method because it allows to extend the saved query of the filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the filter to execute.
$body = {"assignee":"jonny1","taskDefinitionKey":"aTaskKey"}; // object | A JSON object which corresponds to the type of the saved query of the filter, i.e., if the resource type of the filter is Task the body should form a valid task query corresponding to the Task resource.

try {
    $result = $apiInstance->postExecuteFilterCount($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->postExecuteFilterCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the filter to execute. |
 **body** | **object**| A JSON object which corresponds to the type of the saved query of the filter, i.e., if the resource type of the filter is Task the body should form a valid task query corresponding to the Task resource. | [optional]

### Return type

[**\OpenAPI\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postExecuteFilterList()`

```php
postExecuteFilterList($id, $first_result, $max_results, $body): object[]
```

Execute Filter List (POST)

Executes the saved query of the filter by id and returns the result list. This method is slightly more powerful then the  [Get Execute FilterList](https://docs.camunda.org/manual/latest/reference/rest/filter/get-execute-list/) method because it allows to extend the saved query of the filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the filter to execute.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$body = {"assignee":"jonny1","taskDefinitionKey":"aTaskKey"}; // object | A JSON object which corresponds to the type of the saved query of the filter, i.e., if the resource type of the filter is Task the body should form a valid task query corresponding to the Task resource.

try {
    $result = $apiInstance->postExecuteFilterList($id, $first_result, $max_results, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->postExecuteFilterList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the filter to execute. |
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **body** | **object**| A JSON object which corresponds to the type of the saved query of the filter, i.e., if the resource type of the filter is Task the body should form a valid task query corresponding to the Task resource. | [optional]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postExecuteFilterSingleResult()`

```php
postExecuteFilterSingleResult($id, $body): object
```

Execute Filter Single Result (POST)

Executes the saved query of the filter by id and returns the single result. This method is slightly more powerful then the [Get Execute Filter Single Result](https://docs.camunda.org/manual/latest/reference/rest/filter/get-execute-single-result/) method because it allows to extend the saved query of the filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the filter to execute.
$body = {"assignee":"jonny1","taskDefinitionKey":"aTaskKey"}; // object | A JSON object which corresponds to the type of the saved query of the filter, i.e., if the resource type of the filter is Task the body should form a valid task query corresponding to the Task resource.

try {
    $result = $apiInstance->postExecuteFilterSingleResult($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->postExecuteFilterSingleResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the filter to execute. |
 **body** | **object**| A JSON object which corresponds to the type of the saved query of the filter, i.e., if the resource type of the filter is Task the body should form a valid task query corresponding to the Task resource. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFilter()`

```php
updateFilter($id, $create_filter_dto)
```

Update Filter

Updates an existing filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the filter to be updated.
$create_filter_dto = {"resourceType":"Task","name":"My Tasks","owner":"jonny1","query":{"assignee":"jonny1"},"properties":{"color":"#99CCFF","description":"Tasks assigned to me","priority":-10}}; // \OpenAPI\Client\Model\CreateFilterDto

try {
    $apiInstance->updateFilter($id, $create_filter_dto);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->updateFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the filter to be updated. |
 **create_filter_dto** | [**\OpenAPI\Client\Model\CreateFilterDto**](../Model/CreateFilterDto.md)|  | [optional]

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
