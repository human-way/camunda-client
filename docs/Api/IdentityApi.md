# OpenAPI\Client\IdentityApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkPassword()**](IdentityApi.md#checkPassword) | **POST** /identity/password-policy | Validate Password
[**getGroupInfo()**](IdentityApi.md#getGroupInfo) | **GET** /identity/groups | Get a User&#39;s Groups
[**getPasswordPolicy()**](IdentityApi.md#getPasswordPolicy) | **GET** /identity/password-policy | Get Password Policy
[**verifyUser()**](IdentityApi.md#verifyUser) | **POST** /identity/verify | Verify User


## `checkPassword()`

```php
checkPassword($password_policy_request_dto): \OpenAPI\Client\Model\CheckPasswordPolicyResultDto
```

Validate Password

A password policy consists of a list of rules that new passwords must follow to be policy compliant. A password can be checked for compliancy via this end point. More information on password policies in Camunda can be found in the password policy [user guide](https://docs.camunda.org/manual/7.15/user-guide/process-engine/password-policy/) and in the [security instructions](https://docs.camunda.org/manual/7.15/user-guide/security/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$password_policy_request_dto = {"password":"myPassword","profile":{"id":"jonny1","firstName":"John","lastName":"Doe","email":"jonny@camunda.org"}}; // \OpenAPI\Client\Model\PasswordPolicyRequestDto

try {
    $result = $apiInstance->checkPassword($password_policy_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->checkPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password_policy_request_dto** | [**\OpenAPI\Client\Model\PasswordPolicyRequestDto**](../Model/PasswordPolicyRequestDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CheckPasswordPolicyResultDto**](../Model/CheckPasswordPolicyResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupInfo()`

```php
getGroupInfo($user_id): \OpenAPI\Client\Model\IdentityServiceGroupInfoDto
```

Get a User's Groups

Gets the groups of a user by id and includes all users that share a group with the given user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string | The id of the user to get the groups for.

try {
    $result = $apiInstance->getGroupInfo($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->getGroupInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The id of the user to get the groups for. |

### Return type

[**\OpenAPI\Client\Model\IdentityServiceGroupInfoDto**](../Model/IdentityServiceGroupInfoDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPasswordPolicy()`

```php
getPasswordPolicy(): \OpenAPI\Client\Model\PasswordPolicyDto
```

Get Password Policy

A password policy consists of a list of rules that new passwords must follow to be policy compliant. This end point returns a JSON representation of the list of policy rules. More information on password policies in Camunda can be found in the password policy [user guide](https://docs.camunda.org/manual/7.15/user-guide/process-engine/password-policy/) and in the [security instructions](https://docs.camunda.org/manual/7.15/user-guide/security/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPasswordPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->getPasswordPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PasswordPolicyDto**](../Model/PasswordPolicyDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyUser()`

```php
verifyUser($basic_user_credentials_dto): \OpenAPI\Client\Model\AuthenticationResult
```

Verify User

Verifies that user credentials are valid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$basic_user_credentials_dto = {"username":"testUser","password":"testPassword"}; // \OpenAPI\Client\Model\BasicUserCredentialsDto

try {
    $result = $apiInstance->verifyUser($basic_user_credentials_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->verifyUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **basic_user_credentials_dto** | [**\OpenAPI\Client\Model\BasicUserCredentialsDto**](../Model/BasicUserCredentialsDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AuthenticationResult**](../Model/AuthenticationResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
