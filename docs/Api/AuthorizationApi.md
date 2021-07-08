# OpenAPI\Client\AuthorizationApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**availableOperationsAuthorization()**](AuthorizationApi.md#availableOperationsAuthorization) | **OPTIONS** /authorization | Authorization Resource Options
[**availableOperationsAuthorizationInstance()**](AuthorizationApi.md#availableOperationsAuthorizationInstance) | **OPTIONS** /authorization/{id} | Authorization Resource Options
[**createAuthorization()**](AuthorizationApi.md#createAuthorization) | **POST** /authorization/create | Create a New Authorization
[**deleteAuthorization()**](AuthorizationApi.md#deleteAuthorization) | **DELETE** /authorization/{id} | Delete Authorization
[**getAuthorization()**](AuthorizationApi.md#getAuthorization) | **GET** /authorization/{id} | Get Authorization
[**getAuthorizationCount()**](AuthorizationApi.md#getAuthorizationCount) | **GET** /authorization/count | Get Authorization Count
[**isUserAuthorized()**](AuthorizationApi.md#isUserAuthorized) | **GET** /authorization/check | Perform an Authorization Check
[**queryAuthorizations()**](AuthorizationApi.md#queryAuthorizations) | **GET** /authorization | Get Authorizations
[**updateAuthorization()**](AuthorizationApi.md#updateAuthorization) | **PUT** /authorization/{id} | Update an Authorization


## `availableOperationsAuthorization()`

```php
availableOperationsAuthorization(): \OpenAPI\Client\Model\ResourceOptionsDto
```

Authorization Resource Options

The OPTIONS request allows you to check for the set of available operations that the currently authenticated user can perform on the `/authorization` resource. Whether the user can perform an operation or not may depend on various factors, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->availableOperationsAuthorization();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->availableOperationsAuthorization: ', $e->getMessage(), PHP_EOL;
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

## `availableOperationsAuthorizationInstance()`

```php
availableOperationsAuthorizationInstance($id): \OpenAPI\Client\Model\ResourceOptionsDto
```

Authorization Resource Options

The OPTIONS request allows you to check for the set of available operations that the currently authenticated user can perform on a given instance of the `/authorization` resource. Whether the user can perform an operation or not may depend on various factors, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the authorization to be retrieved.

try {
    $result = $apiInstance->availableOperationsAuthorizationInstance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->availableOperationsAuthorizationInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the authorization to be retrieved. |

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

## `createAuthorization()`

```php
createAuthorization($authorization_create_dto): \OpenAPI\Client\Model\AuthorizationDto
```

Create a New Authorization

Creates a new authorization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization_create_dto = {"type":0,"permissions":["CREATE","READ"],"userId":"*","groupId":null,"resourceType":1,"resourceId":"*"}; // \OpenAPI\Client\Model\AuthorizationCreateDto

try {
    $result = $apiInstance->createAuthorization($authorization_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->createAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization_create_dto** | [**\OpenAPI\Client\Model\AuthorizationCreateDto**](../Model/AuthorizationCreateDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AuthorizationDto**](../Model/AuthorizationDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAuthorization()`

```php
deleteAuthorization($id)
```

Delete Authorization

Deletes an authorization by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the authorization to be deleted.

try {
    $apiInstance->deleteAuthorization($id);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->deleteAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the authorization to be deleted. |

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

## `getAuthorization()`

```php
getAuthorization($id): \OpenAPI\Client\Model\AuthorizationDto
```

Get Authorization

Retrieves an authorization by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the authorization to be retrieved.

try {
    $result = $apiInstance->getAuthorization($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the authorization to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\AuthorizationDto**](../Model/AuthorizationDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuthorizationCount()`

```php
getAuthorizationCount($id, $type, $user_id_in, $group_id_in, $resource_type, $resource_id): \OpenAPI\Client\Model\CountResultDto
```

Get Authorization Count

Queries for authorizations using a list of parameters and retrieves the count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Filter by the id of the authorization.
$type = 56; // int | Filter by authorization type. (0=global, 1=grant, 2=revoke). See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/authorization-service/#authorization-type) for more information about authorization types.
$user_id_in = 'user_id_in_example'; // string | Filter by a comma-separated list of userIds.
$group_id_in = 'group_id_in_example'; // string | Filter by a comma-separated list of groupIds.
$resource_type = 56; // int | Filter by an integer representation of the resource type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/authorization-service/#resources) for a list of integer representations of resource types.
$resource_id = 'resource_id_example'; // string | Filter by resource id.

try {
    $result = $apiInstance->getAuthorizationCount($id, $type, $user_id_in, $group_id_in, $resource_type, $resource_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Filter by the id of the authorization. | [optional]
 **type** | **int**| Filter by authorization type. (0&#x3D;global, 1&#x3D;grant, 2&#x3D;revoke). See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/authorization-service/#authorization-type) for more information about authorization types. | [optional]
 **user_id_in** | **string**| Filter by a comma-separated list of userIds. | [optional]
 **group_id_in** | **string**| Filter by a comma-separated list of groupIds. | [optional]
 **resource_type** | **int**| Filter by an integer representation of the resource type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/authorization-service/#resources) for a list of integer representations of resource types. | [optional]
 **resource_id** | **string**| Filter by resource id. | [optional]

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

## `isUserAuthorized()`

```php
isUserAuthorized($permission_name, $resource_name, $resource_type, $resource_id, $user_id): \OpenAPI\Client\Model\AuthorizationCheckResultDto
```

Perform an Authorization Check

Performs an authorization check for the currently authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$permission_name = 'permission_name_example'; // string | String value representing the permission name to check for.
$resource_name = 'resource_name_example'; // string | String value for the name of the resource to check permissions for.
$resource_type = 56; // int | An integer representing the resource type to check permissions for. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/authorization-service/#resources) for a list of integer representations of resource types.
$resource_id = 'resource_id_example'; // string | The id of the resource to check permissions for. If left blank, a check for global permissions on the resource is performed.
$user_id = 'user_id_example'; // string | The id of the user to check permissions for. The currently authenticated user must have a READ permission for the Authorization resource. If `userId` is blank, a check for the currently authenticated user is performed.

try {
    $result = $apiInstance->isUserAuthorized($permission_name, $resource_name, $resource_type, $resource_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->isUserAuthorized: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permission_name** | **string**| String value representing the permission name to check for. |
 **resource_name** | **string**| String value for the name of the resource to check permissions for. |
 **resource_type** | **int**| An integer representing the resource type to check permissions for. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/authorization-service/#resources) for a list of integer representations of resource types. |
 **resource_id** | **string**| The id of the resource to check permissions for. If left blank, a check for global permissions on the resource is performed. | [optional]
 **user_id** | **string**| The id of the user to check permissions for. The currently authenticated user must have a READ permission for the Authorization resource. If &#x60;userId&#x60; is blank, a check for the currently authenticated user is performed. | [optional]

### Return type

[**\OpenAPI\Client\Model\AuthorizationCheckResultDto**](../Model/AuthorizationCheckResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryAuthorizations()`

```php
queryAuthorizations($id, $type, $user_id_in, $group_id_in, $resource_type, $resource_id, $sort_by, $sort_order, $first_result, $max_results): \OpenAPI\Client\Model\AuthorizationDto[]
```

Get Authorizations

Queries for a list of authorizations using a list of parameters. The size of the result set can be retrieved by using the [Get Authorization Count](https://docs.camunda.org/manual/latest/reference/rest/authorization/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Filter by the id of the authorization.
$type = 56; // int | Filter by authorization type. (0=global, 1=grant, 2=revoke). See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/authorization-service/#authorization-type) for more information about authorization types.
$user_id_in = 'user_id_in_example'; // string | Filter by a comma-separated list of userIds.
$group_id_in = 'group_id_in_example'; // string | Filter by a comma-separated list of groupIds.
$resource_type = 56; // int | Filter by an integer representation of the resource type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/authorization-service/#resources) for a list of integer representations of resource types.
$resource_id = 'resource_id_example'; // string | Filter by resource id.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->queryAuthorizations($id, $type, $user_id_in, $group_id_in, $resource_type, $resource_id, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->queryAuthorizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Filter by the id of the authorization. | [optional]
 **type** | **int**| Filter by authorization type. (0&#x3D;global, 1&#x3D;grant, 2&#x3D;revoke). See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/authorization-service/#authorization-type) for more information about authorization types. | [optional]
 **user_id_in** | **string**| Filter by a comma-separated list of userIds. | [optional]
 **group_id_in** | **string**| Filter by a comma-separated list of groupIds. | [optional]
 **resource_type** | **int**| Filter by an integer representation of the resource type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/authorization-service/#resources) for a list of integer representations of resource types. | [optional]
 **resource_id** | **string**| Filter by resource id. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\OpenAPI\Client\Model\AuthorizationDto[]**](../Model/AuthorizationDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAuthorization()`

```php
updateAuthorization($id, $authorization_update_dto)
```

Update an Authorization

Updates an authorization by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the authorization to be updated.
$authorization_update_dto = {"permissions":16,"userId":"*","groupId":null,"resourceType":1,"resourceId":"*"}; // \OpenAPI\Client\Model\AuthorizationUpdateDto

try {
    $apiInstance->updateAuthorization($id, $authorization_update_dto);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->updateAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the authorization to be updated. |
 **authorization_update_dto** | [**\OpenAPI\Client\Model\AuthorizationUpdateDto**](../Model/AuthorizationUpdateDto.md)|  | [optional]

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
