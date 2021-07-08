# OpenAPI\Client\UserApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**availableOperations()**](UserApi.md#availableOperations) | **OPTIONS** /user | Options
[**availableUserOperations()**](UserApi.md#availableUserOperations) | **OPTIONS** /user/{id} | Options
[**createUser()**](UserApi.md#createUser) | **POST** /user/create | Create
[**deleteUser()**](UserApi.md#deleteUser) | **DELETE** /user/{id} | Delete
[**getUserCount()**](UserApi.md#getUserCount) | **GET** /user/count | Get List Count
[**getUserProfile()**](UserApi.md#getUserProfile) | **GET** /user/{id}/profile | Get Profile
[**getUsers()**](UserApi.md#getUsers) | **GET** /user | Get List
[**unlockUser()**](UserApi.md#unlockUser) | **POST** /user/{id}/unlock | Unlock User
[**updateCredentials()**](UserApi.md#updateCredentials) | **PUT** /user/{id}/credentials | Update Credentials
[**updateProfile()**](UserApi.md#updateProfile) | **PUT** /user/{id}/profile | Update User Profile


## `availableOperations()`

```php
availableOperations(): \OpenAPI\Client\Model\ResourceOptionsDto
```

Options

The `/user` resource supports two custom `OPTIONS` requests, one for the resource as such and one for individual user instances. The `OPTIONS` request allows checking for the set of available operations that the currently authenticated user can perform on the /user resource. If the user can perform an operation or not may depend on various things, including the user's authorizations to interact with this resource and the internal configuration of the process engine. `OPTIONS /user` returns available interactions on the resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->availableOperations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->availableOperations: ', $e->getMessage(), PHP_EOL;
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

## `availableUserOperations()`

```php
availableUserOperations($id): \OpenAPI\Client\Model\ResourceOptionsDto
```

Options

The `/user` resource supports two custom `OPTIONS` requests, one for the resource as such and one for individual user instances. The `OPTIONS` request allows checking for the set of available operations that the currently authenticated user can perform on the /user resource. If the user can perform an operation or not may depend on various things, including the user's authorizations to interact with this resource and the internal configuration of the process engine. `OPTIONS /user/{id}` returns available interactions on a resource instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the user to be deleted.

try {
    $result = $apiInstance->availableUserOperations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->availableUserOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the user to be deleted. |

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

## `createUser()`

```php
createUser($user_dto)
```

Create

Create a new user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_dto = {"profile":{"id":"jonny1","firstName":"John","lastName":"Doe","email":"anEmailAddress"},"credentials":{"password":"s3cret"}}; // \OpenAPI\Client\Model\UserDto

try {
    $apiInstance->createUser($user_dto);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_dto** | [**\OpenAPI\Client\Model\UserDto**](../Model/UserDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($id)
```

Delete

Deletes a user by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the user to be deleted.

try {
    $apiInstance->deleteUser($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the user to be deleted. |

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

## `getUserCount()`

```php
getUserCount($id, $id_in, $first_name, $first_name_like, $last_name, $last_name_like, $email, $email_like, $member_of_group, $member_of_tenant, $potential_starter): \OpenAPI\Client\Model\CountResultDto
```

Get List Count

Queries for the number of deployments that fulfill given parameters. Takes the same parameters as the [Get Users](https://docs.camunda.org/manual/latest/reference/rest/user/get-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Filter by user id
$id_in = 'id_in_example'; // string | Filter by a comma-separated list of user ids.
$first_name = 'first_name_example'; // string | Filter by the first name of the user. Exact match.
$first_name_like = 'first_name_like_example'; // string | Filter by the first name that the parameter is a substring of.
$last_name = 'last_name_example'; // string | Filter by the last name of the user. Exact match.
$last_name_like = 'last_name_like_example'; // string | Filter by the last name that the parameter is a substring of.
$email = 'email_example'; // string | Filter by the email of the user. Exact match.
$email_like = 'email_like_example'; // string | Filter by the email that the parameter is a substring of.
$member_of_group = 'member_of_group_example'; // string | Filter for users which are members of the given group.
$member_of_tenant = 'member_of_tenant_example'; // string | Filter for users which are members of the given tenant.
$potential_starter = 'potential_starter_example'; // string | Only select Users that are potential starter for the given process definition.

try {
    $result = $apiInstance->getUserCount($id, $id_in, $first_name, $first_name_like, $last_name, $last_name_like, $email, $email_like, $member_of_group, $member_of_tenant, $potential_starter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Filter by user id | [optional]
 **id_in** | **string**| Filter by a comma-separated list of user ids. | [optional]
 **first_name** | **string**| Filter by the first name of the user. Exact match. | [optional]
 **first_name_like** | **string**| Filter by the first name that the parameter is a substring of. | [optional]
 **last_name** | **string**| Filter by the last name of the user. Exact match. | [optional]
 **last_name_like** | **string**| Filter by the last name that the parameter is a substring of. | [optional]
 **email** | **string**| Filter by the email of the user. Exact match. | [optional]
 **email_like** | **string**| Filter by the email that the parameter is a substring of. | [optional]
 **member_of_group** | **string**| Filter for users which are members of the given group. | [optional]
 **member_of_tenant** | **string**| Filter for users which are members of the given tenant. | [optional]
 **potential_starter** | **string**| Only select Users that are potential starter for the given process definition. | [optional]

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

## `getUserProfile()`

```php
getUserProfile($id): \OpenAPI\Client\Model\UserProfileDto
```

Get Profile

Retrieves a user's profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the user to retrieve.

try {
    $result = $apiInstance->getUserProfile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the user to retrieve. |

### Return type

[**\OpenAPI\Client\Model\UserProfileDto**](../Model/UserProfileDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsers()`

```php
getUsers($id, $id_in, $first_name, $first_name_like, $last_name, $last_name_like, $email, $email_like, $member_of_group, $member_of_tenant, $potential_starter, $sort_by, $sort_order, $first_result, $max_results): \OpenAPI\Client\Model\UserProfileDto[]
```

Get List

Query for a list of users using a list of parameters. The size of the result set can be retrieved by using the Get User Count method. [Get User Count](https://docs.camunda.org/manual/latest/reference/rest/user/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Filter by user id
$id_in = 'id_in_example'; // string | Filter by a comma-separated list of user ids.
$first_name = 'first_name_example'; // string | Filter by the first name of the user. Exact match.
$first_name_like = 'first_name_like_example'; // string | Filter by the first name that the parameter is a substring of.
$last_name = 'last_name_example'; // string | Filter by the last name of the user. Exact match.
$last_name_like = 'last_name_like_example'; // string | Filter by the last name that the parameter is a substring of.
$email = 'email_example'; // string | Filter by the email of the user. Exact match.
$email_like = 'email_like_example'; // string | Filter by the email that the parameter is a substring of.
$member_of_group = 'member_of_group_example'; // string | Filter for users which are members of the given group.
$member_of_tenant = 'member_of_tenant_example'; // string | Filter for users which are members of the given tenant.
$potential_starter = 'potential_starter_example'; // string | Only select Users that are potential starter for the given process definition.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getUsers($id, $id_in, $first_name, $first_name_like, $last_name, $last_name_like, $email, $email_like, $member_of_group, $member_of_tenant, $potential_starter, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Filter by user id | [optional]
 **id_in** | **string**| Filter by a comma-separated list of user ids. | [optional]
 **first_name** | **string**| Filter by the first name of the user. Exact match. | [optional]
 **first_name_like** | **string**| Filter by the first name that the parameter is a substring of. | [optional]
 **last_name** | **string**| Filter by the last name of the user. Exact match. | [optional]
 **last_name_like** | **string**| Filter by the last name that the parameter is a substring of. | [optional]
 **email** | **string**| Filter by the email of the user. Exact match. | [optional]
 **email_like** | **string**| Filter by the email that the parameter is a substring of. | [optional]
 **member_of_group** | **string**| Filter for users which are members of the given group. | [optional]
 **member_of_tenant** | **string**| Filter for users which are members of the given tenant. | [optional]
 **potential_starter** | **string**| Only select Users that are potential starter for the given process definition. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\OpenAPI\Client\Model\UserProfileDto[]**](../Model/UserProfileDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlockUser()`

```php
unlockUser($id)
```

Unlock User

Unlocks a user by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the user to be unlocked.

try {
    $apiInstance->unlockUser($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->unlockUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the user to be unlocked. |

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

## `updateCredentials()`

```php
updateCredentials($id, $password, $authenticated_user_password, $user_credentials_dto): mixed
```

Update Credentials

Updates a user's credentials (password)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the user to be updated.
$password = 'password_example'; // string | The users new password.
$authenticated_user_password = 'authenticated_user_password_example'; // string | The password of the authenticated user who changes the password of the user (i.e., the user with passed id as path parameter).
$user_credentials_dto = {"password":"s3cr3t","authenticatedUserPassword":"demo"}; // \OpenAPI\Client\Model\UserCredentialsDto

try {
    $result = $apiInstance->updateCredentials($id, $password, $authenticated_user_password, $user_credentials_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the user to be updated. |
 **password** | **string**| The users new password. |
 **authenticated_user_password** | **string**| The password of the authenticated user who changes the password of the user (i.e., the user with passed id as path parameter). |
 **user_credentials_dto** | [**\OpenAPI\Client\Model\UserCredentialsDto**](../Model/UserCredentialsDto.md)|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProfile()`

```php
updateProfile($id, $user_profile_dto)
```

Update User Profile

Updates the profile information of an already existing user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the user.
$user_profile_dto = {"id":"jonny1","firstName":"John","lastName":"Doe","email":"aNewEmailAddress"}; // \OpenAPI\Client\Model\UserProfileDto

try {
    $apiInstance->updateProfile($id, $user_profile_dto);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the user. |
 **user_profile_dto** | [**\OpenAPI\Client\Model\UserProfileDto**](../Model/UserProfileDto.md)|  | [optional]

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
