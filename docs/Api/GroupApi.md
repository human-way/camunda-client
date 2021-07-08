# OpenAPI\Client\GroupApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**availableGroupInstanceOperations()**](GroupApi.md#availableGroupInstanceOperations) | **OPTIONS** /group/{id} | Group Resource Instance Options
[**availableGroupMembersOperations()**](GroupApi.md#availableGroupMembersOperations) | **OPTIONS** /group/{id}/members | Group Membership Resource Options
[**availableGroupOperations()**](GroupApi.md#availableGroupOperations) | **OPTIONS** /group | Group Resource Options
[**createGroup()**](GroupApi.md#createGroup) | **POST** /group/create | Create Group
[**createGroupMember()**](GroupApi.md#createGroupMember) | **PUT** /group/{id}/members/{userId} | Create Group Member
[**deleteGroup()**](GroupApi.md#deleteGroup) | **DELETE** /group/{id} | Delete Group
[**deleteGroupMember()**](GroupApi.md#deleteGroupMember) | **DELETE** /group/{id}/members/{userId} | Delete a Group Member
[**getGroup()**](GroupApi.md#getGroup) | **GET** /group/{id} | Get Group
[**getGroupCount()**](GroupApi.md#getGroupCount) | **GET** /group/count | Get List Count
[**getQueryGroups()**](GroupApi.md#getQueryGroups) | **GET** /group | Get List
[**postQueryGroups()**](GroupApi.md#postQueryGroups) | **POST** /group | Get List (POST)
[**queryGroupCount()**](GroupApi.md#queryGroupCount) | **POST** /group/count | Get List Count (POST)
[**updateGroup()**](GroupApi.md#updateGroup) | **PUT** /group/{id} | Update Group


## `availableGroupInstanceOperations()`

```php
availableGroupInstanceOperations($id): \OpenAPI\Client\Model\ResourceOptionsDto
```

Group Resource Instance Options

The `/group` resource supports two custom OPTIONS requests, one for the resource as such and this one for individual group instances. The OPTIONS request allows checking for the set of available operations that the currently authenticated user can perform on the `/group/{id}` resource instance. If the user can perform an operation or not may depend on various things, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the group.

try {
    $result = $apiInstance->availableGroupInstanceOperations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->availableGroupInstanceOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the group. |

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

## `availableGroupMembersOperations()`

```php
availableGroupMembersOperations($id): \OpenAPI\Client\Model\ResourceOptionsDto
```

Group Membership Resource Options

The OPTIONS request allows checking for the set of available operations that the currently authenticated user can perform on the resource. If the user can perform an operation or not may depend on various things, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the group.

try {
    $result = $apiInstance->availableGroupMembersOperations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->availableGroupMembersOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the group. |

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

## `availableGroupOperations()`

```php
availableGroupOperations(): \OpenAPI\Client\Model\ResourceOptionsDto
```

Group Resource Options

The `/group` resource supports two custom OPTIONS requests, this one for the resource as such and one for individual group instances. The OPTIONS request allows checking for the set of available operations that the currently authenticated user can perform on the `/group` resource. If the user can perform an operation or not may depend on various things, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->availableGroupOperations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->availableGroupOperations: ', $e->getMessage(), PHP_EOL;
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

## `createGroup()`

```php
createGroup($group_dto)
```

Create Group

Creates a new group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_dto = {"id":"sales","name":"Sales","type":"Organizational Unit"}; // \OpenAPI\Client\Model\GroupDto

try {
    $apiInstance->createGroup($group_dto);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_dto** | [**\OpenAPI\Client\Model\GroupDto**](../Model/GroupDto.md)|  | [optional]

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

## `createGroupMember()`

```php
createGroupMember($id, $user_id)
```

Create Group Member

Adds a member to a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the group.
$user_id = 'user_id_example'; // string | The id of user to add to the group.

try {
    $apiInstance->createGroupMember($id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->createGroupMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the group. |
 **user_id** | **string**| The id of user to add to the group. |

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

## `deleteGroup()`

```php
deleteGroup($id)
```

Delete Group

Deletes a group by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the group to be deleted.

try {
    $apiInstance->deleteGroup($id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the group to be deleted. |

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

## `deleteGroupMember()`

```php
deleteGroupMember($id, $user_id)
```

Delete a Group Member

Removes a member from a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the group.
$user_id = 'user_id_example'; // string | The id of user to remove from the group.

try {
    $apiInstance->deleteGroupMember($id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->deleteGroupMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the group. |
 **user_id** | **string**| The id of user to remove from the group. |

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

## `getGroup()`

```php
getGroup($id): \OpenAPI\Client\Model\GroupDto
```

Get Group

Retrieves a group by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the group to be retrieved.

try {
    $result = $apiInstance->getGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the group to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\GroupDto**](../Model/GroupDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupCount()`

```php
getGroupCount($id, $id_in, $name, $name_like, $type, $member, $member_of_tenant): \OpenAPI\Client\Model\CountResultDto
```

Get List Count

Queries for groups using a list of parameters and retrieves the count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Filter by the id of the group.
$id_in = 'id_in_example'; // string | Filter by a comma seperated list of group ids.
$name = 'name_example'; // string | Filter by the name of the group.
$name_like = 'name_like_example'; // string | Filter by the name that the parameter is a substring of.
$type = 'type_example'; // string | Filter by the type of the group.
$member = 'member_example'; // string | Only retrieve groups where the given user id is a member of.
$member_of_tenant = 'member_of_tenant_example'; // string | Only retrieve groups which are members of the given tenant.

try {
    $result = $apiInstance->getGroupCount($id, $id_in, $name, $name_like, $type, $member, $member_of_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getGroupCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Filter by the id of the group. | [optional]
 **id_in** | **string**| Filter by a comma seperated list of group ids. | [optional]
 **name** | **string**| Filter by the name of the group. | [optional]
 **name_like** | **string**| Filter by the name that the parameter is a substring of. | [optional]
 **type** | **string**| Filter by the type of the group. | [optional]
 **member** | **string**| Only retrieve groups where the given user id is a member of. | [optional]
 **member_of_tenant** | **string**| Only retrieve groups which are members of the given tenant. | [optional]

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

## `getQueryGroups()`

```php
getQueryGroups($sort_by, $sort_order, $first_result, $max_results, $id, $id_in, $name, $name_like, $type, $member, $member_of_tenant): \OpenAPI\Client\Model\GroupDto[]
```

Get List

Queries for a list of groups using a list of parameters. The size of the result set can be retrieved by using the [Get Group Count](https://docs.camunda.org/manual/latest/reference/rest/group/get-query-count) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$id = 'id_example'; // string | Filter by the id of the group.
$id_in = 'id_in_example'; // string | Filter by a comma seperated list of group ids.
$name = 'name_example'; // string | Filter by the name of the group.
$name_like = 'name_like_example'; // string | Filter by the name that the parameter is a substring of.
$type = 'type_example'; // string | Filter by the type of the group.
$member = 'member_example'; // string | Only retrieve groups where the given user id is a member of.
$member_of_tenant = 'member_of_tenant_example'; // string | Only retrieve groups which are members of the given tenant.

try {
    $result = $apiInstance->getQueryGroups($sort_by, $sort_order, $first_result, $max_results, $id, $id_in, $name, $name_like, $type, $member, $member_of_tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->getQueryGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **id** | **string**| Filter by the id of the group. | [optional]
 **id_in** | **string**| Filter by a comma seperated list of group ids. | [optional]
 **name** | **string**| Filter by the name of the group. | [optional]
 **name_like** | **string**| Filter by the name that the parameter is a substring of. | [optional]
 **type** | **string**| Filter by the type of the group. | [optional]
 **member** | **string**| Only retrieve groups where the given user id is a member of. | [optional]
 **member_of_tenant** | **string**| Only retrieve groups which are members of the given tenant. | [optional]

### Return type

[**\OpenAPI\Client\Model\GroupDto[]**](../Model/GroupDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postQueryGroups()`

```php
postQueryGroups($first_result, $max_results, $group_query_dto): \OpenAPI\Client\Model\GroupDto[]
```

Get List (POST)

Queries for a list of groups using a list of parameters. The size of the result set can be retrieved by using the [Get Group Count (POST)](https://docs.camunda.org/manual/latest/reference/rest/group/post-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$group_query_dto = {"name":"Sales"}; // \OpenAPI\Client\Model\GroupQueryDto

try {
    $result = $apiInstance->postQueryGroups($first_result, $max_results, $group_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->postQueryGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **group_query_dto** | [**\OpenAPI\Client\Model\GroupQueryDto**](../Model/GroupQueryDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GroupDto[]**](../Model/GroupDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryGroupCount()`

```php
queryGroupCount($group_query_dto): \OpenAPI\Client\Model\CountResultDto
```

Get List Count (POST)

Queries for groups using a list of parameters and retrieves the count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_query_dto = {"name":"Sales"}; // \OpenAPI\Client\Model\GroupQueryDto

try {
    $result = $apiInstance->queryGroupCount($group_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->queryGroupCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_query_dto** | [**\OpenAPI\Client\Model\GroupQueryDto**](../Model/GroupQueryDto.md)|  | [optional]

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

## `updateGroup()`

```php
updateGroup($id, $group_dto)
```

Update Group

Updates a given group by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the group.
$group_dto = {"id":"sales","name":"Sales","type":"Organizational Unit"}; // \OpenAPI\Client\Model\GroupDto

try {
    $apiInstance->updateGroup($id, $group_dto);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the group. |
 **group_dto** | [**\OpenAPI\Client\Model\GroupDto**](../Model/GroupDto.md)|  | [optional]

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
