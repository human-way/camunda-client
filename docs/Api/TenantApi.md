# OpenAPI\Client\TenantApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**availableTenantGroupMembersOperations()**](TenantApi.md#availableTenantGroupMembersOperations) | **OPTIONS** /tenant/{id}/group-members | Tenant Group Membership Resource Options
[**availableTenantInstanceOperations()**](TenantApi.md#availableTenantInstanceOperations) | **OPTIONS** /tenant/{id} | Tenant Resource Options
[**availableTenantResourceOperations()**](TenantApi.md#availableTenantResourceOperations) | **OPTIONS** /tenant | Tenant Resource Options
[**availableTenantUserMembersOperations()**](TenantApi.md#availableTenantUserMembersOperations) | **OPTIONS** /tenant/{id}/user-members | Tenant User Membership Resource Options
[**createGroupMembership()**](TenantApi.md#createGroupMembership) | **PUT** /tenant/{id}/group-members/{groupId} | Create Tenant Group Membership
[**createTenant()**](TenantApi.md#createTenant) | **POST** /tenant/create | Create Tenant
[**createUserMembership()**](TenantApi.md#createUserMembership) | **PUT** /tenant/{id}/user-members/{userId} | Create Tenant User Membership
[**deleteGroupMembership()**](TenantApi.md#deleteGroupMembership) | **DELETE** /tenant/{id}/group-members/{groupId} | Create Tenant Group Membership
[**deleteTenant()**](TenantApi.md#deleteTenant) | **DELETE** /tenant/{id} | Delete Tenant
[**deleteUserMembership()**](TenantApi.md#deleteUserMembership) | **DELETE** /tenant/{id}/user-members/{userId} | Delete a Tenant User Membership
[**getTenant()**](TenantApi.md#getTenant) | **GET** /tenant/{id} | Get Tenant
[**getTenantCount()**](TenantApi.md#getTenantCount) | **GET** /tenant/count | Get Tenant Count
[**queryTenants()**](TenantApi.md#queryTenants) | **GET** /tenant | Get Tenants
[**updateTenant()**](TenantApi.md#updateTenant) | **PUT** /tenant/{id} | Update Tenant


## `availableTenantGroupMembersOperations()`

```php
availableTenantGroupMembersOperations($id): \OpenAPI\Client\Model\ResourceOptionsDto
```

Tenant Group Membership Resource Options

The OPTIONS request allows checking for the set of available operations that the currently authenticated user can perform on the resource. If the user can perform an operation or not may depend on various things, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the tenant

try {
    $result = $apiInstance->availableTenantGroupMembersOperations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->availableTenantGroupMembersOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant |

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

## `availableTenantInstanceOperations()`

```php
availableTenantInstanceOperations($id): \OpenAPI\Client\Model\ResourceOptionsDto
```

Tenant Resource Options

The `/tenant` resource supports two custom OPTIONS requests, one for the resource as such and this one for individual tenant instances. The OPTIONS request allows checking for the set of available operations that the currently authenticated user can perform on the `/tenant/{id}` resource. If the user can perform an operation or not may depend on various things, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the tenant

try {
    $result = $apiInstance->availableTenantInstanceOperations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->availableTenantInstanceOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant |

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

## `availableTenantResourceOperations()`

```php
availableTenantResourceOperations(): \OpenAPI\Client\Model\ResourceOptionsDto
```

Tenant Resource Options

The `/tenant` resource supports two custom OPTIONS requests, this one for the resource as such and one for individual tenant instances. The OPTIONS request allows checking for the set of available operations that the currently authenticated user can perform on the `/tenant` resource. If the user can perform an operation or not may depend on various things, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->availableTenantResourceOperations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->availableTenantResourceOperations: ', $e->getMessage(), PHP_EOL;
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

## `availableTenantUserMembersOperations()`

```php
availableTenantUserMembersOperations($id): \OpenAPI\Client\Model\ResourceOptionsDto
```

Tenant User Membership Resource Options

The OPTIONS request allows checking for the set of available operations that the currently authenticated user can perform on the resource. If the user can perform an operation or not may depend on various things, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the tenant

try {
    $result = $apiInstance->availableTenantUserMembersOperations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->availableTenantUserMembersOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant |

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

## `createGroupMembership()`

```php
createGroupMembership($id, $group_id)
```

Create Tenant Group Membership

Creates a membership between a tenant and a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the tenant.
$group_id = 'group_id_example'; // string | The id of the group.

try {
    $apiInstance->createGroupMembership($id, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->createGroupMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant. |
 **group_id** | **string**| The id of the group. |

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

## `createTenant()`

```php
createTenant($tenant_dto)
```

Create Tenant

Create a new tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_dto = {"id":"tenantOne","name":"Tenant One"}; // \OpenAPI\Client\Model\TenantDto

try {
    $apiInstance->createTenant($tenant_dto);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->createTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_dto** | [**\OpenAPI\Client\Model\TenantDto**](../Model/TenantDto.md)|  | [optional]

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

## `createUserMembership()`

```php
createUserMembership($id, $user_id)
```

Create Tenant User Membership

Creates a membership between a tenant and an user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the tenant.
$user_id = 'user_id_example'; // string | The id of the user.

try {
    $apiInstance->createUserMembership($id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->createUserMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant. |
 **user_id** | **string**| The id of the user. |

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

## `deleteGroupMembership()`

```php
deleteGroupMembership($id, $group_id)
```

Create Tenant Group Membership

Creates a membership between a tenant and a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the tenant.
$group_id = 'group_id_example'; // string | The id of the group.

try {
    $apiInstance->deleteGroupMembership($id, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->deleteGroupMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant. |
 **group_id** | **string**| The id of the group. |

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

## `deleteTenant()`

```php
deleteTenant($id)
```

Delete Tenant

Deletes a tenant by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the tenant to be deleted.

try {
    $apiInstance->deleteTenant($id);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->deleteTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant to be deleted. |

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

## `deleteUserMembership()`

```php
deleteUserMembership($id, $user_id)
```

Delete a Tenant User Membership

Deletes a membership between a tenant and an user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the tenant.
$user_id = 'user_id_example'; // string | The id of the user.

try {
    $apiInstance->deleteUserMembership($id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->deleteUserMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant. |
 **user_id** | **string**| The id of the user. |

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

## `getTenant()`

```php
getTenant($id): \OpenAPI\Client\Model\TenantDto
```

Get Tenant

Retrieves a tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the tenant to be retrieved.

try {
    $result = $apiInstance->getTenant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->getTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\TenantDto**](../Model/TenantDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantCount()`

```php
getTenantCount($id, $name, $name_like, $user_member, $group_member, $including_groups_of_user): \OpenAPI\Client\Model\CountResultDto
```

Get Tenant Count

Query for tenants using a list of parameters and retrieves the count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Filter by the id of the tenant.
$name = 'name_example'; // string | Filter by the name of the tenant.
$name_like = 'name_like_example'; // string | Filter by the name that the parameter is a substring of.
$user_member = 'user_member_example'; // string | Select only tenants where the given user is a member of.
$group_member = 'group_member_example'; // string | Select only tenants where the given group is a member of.
$including_groups_of_user = True; // bool | Select only tenants where the user or one of his groups is a member of. Can only be used in combination with the `userMember` parameter. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getTenantCount($id, $name, $name_like, $user_member, $group_member, $including_groups_of_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->getTenantCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Filter by the id of the tenant. | [optional]
 **name** | **string**| Filter by the name of the tenant. | [optional]
 **name_like** | **string**| Filter by the name that the parameter is a substring of. | [optional]
 **user_member** | **string**| Select only tenants where the given user is a member of. | [optional]
 **group_member** | **string**| Select only tenants where the given group is a member of. | [optional]
 **including_groups_of_user** | **bool**| Select only tenants where the user or one of his groups is a member of. Can only be used in combination with the &#x60;userMember&#x60; parameter. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

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

## `queryTenants()`

```php
queryTenants($sort_by, $sort_order, $first_result, $max_results, $id, $name, $name_like, $user_member, $group_member, $including_groups_of_user): \OpenAPI\Client\Model\TenantDto[]
```

Get Tenants

Query for a list of tenants using a list of parameters. The size of the result set can be retrieved by using the [Get Tenant Count](https://docs.camunda.org/manual/7.15/reference/rest/tenant/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$id = 'id_example'; // string | Filter by the id of the tenant.
$name = 'name_example'; // string | Filter by the name of the tenant.
$name_like = 'name_like_example'; // string | Filter by the name that the parameter is a substring of.
$user_member = 'user_member_example'; // string | Select only tenants where the given user is a member of.
$group_member = 'group_member_example'; // string | Select only tenants where the given group is a member of.
$including_groups_of_user = True; // bool | Select only tenants where the user or one of his groups is a member of. Can only be used in combination with the `userMember` parameter. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->queryTenants($sort_by, $sort_order, $first_result, $max_results, $id, $name, $name_like, $user_member, $group_member, $including_groups_of_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->queryTenants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **id** | **string**| Filter by the id of the tenant. | [optional]
 **name** | **string**| Filter by the name of the tenant. | [optional]
 **name_like** | **string**| Filter by the name that the parameter is a substring of. | [optional]
 **user_member** | **string**| Select only tenants where the given user is a member of. | [optional]
 **group_member** | **string**| Select only tenants where the given group is a member of. | [optional]
 **including_groups_of_user** | **bool**| Select only tenants where the user or one of his groups is a member of. Can only be used in combination with the &#x60;userMember&#x60; parameter. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

### Return type

[**\OpenAPI\Client\Model\TenantDto[]**](../Model/TenantDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTenant()`

```php
updateTenant($id, $tenant_dto)
```

Update Tenant

Updates a given tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the tenant.
$tenant_dto = {"id":"tenantOne","name":"Tenant One"}; // \OpenAPI\Client\Model\TenantDto

try {
    $apiInstance->updateTenant($id, $tenant_dto);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->updateTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenant. |
 **tenant_dto** | [**\OpenAPI\Client\Model\TenantDto**](../Model/TenantDto.md)|  | [optional]

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
