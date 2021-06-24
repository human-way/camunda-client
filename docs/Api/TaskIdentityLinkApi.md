# OpenAPI\Client\TaskIdentityLinkApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addIdentityLink()**](TaskIdentityLinkApi.md#addIdentityLink) | **POST** /task/{id}/identity-links | Add
[**deleteIdentityLink()**](TaskIdentityLinkApi.md#deleteIdentityLink) | **POST** /task/{id}/identity-links/delete | Delete
[**getIdentityLinks()**](TaskIdentityLinkApi.md#getIdentityLinks) | **GET** /task/{id}/identity-links | Get List


## `addIdentityLink()`

```php
addIdentityLink($id, $identity_link_dto)
```

Add

Adds an identity link to a task by id. Can be used to link any user or group to a task and specify a relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskIdentityLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task to add a link to.
$identity_link_dto = {"groupId":"aNewGroupId","type":"candidate"}; // \OpenAPI\Client\Model\IdentityLinkDto

try {
    $apiInstance->addIdentityLink($id, $identity_link_dto);
} catch (Exception $e) {
    echo 'Exception when calling TaskIdentityLinkApi->addIdentityLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to add a link to. |
 **identity_link_dto** | [**\OpenAPI\Client\Model\IdentityLinkDto**](../Model/IdentityLinkDto.md)|  | [optional]

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

## `deleteIdentityLink()`

```php
deleteIdentityLink($id, $identity_link_dto)
```

Delete

Removes an identity link from a task by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskIdentityLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task to remove a link from.
$identity_link_dto = {"groupId":"theOldGroupId","type":"candidate"}; // \OpenAPI\Client\Model\IdentityLinkDto

try {
    $apiInstance->deleteIdentityLink($id, $identity_link_dto);
} catch (Exception $e) {
    echo 'Exception when calling TaskIdentityLinkApi->deleteIdentityLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to remove a link from. |
 **identity_link_dto** | [**\OpenAPI\Client\Model\IdentityLinkDto**](../Model/IdentityLinkDto.md)|  | [optional]

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

## `getIdentityLinks()`

```php
getIdentityLinks($id, $type): \OpenAPI\Client\Model\IdentityLinkDto[]
```

Get List

Gets the identity links for a task by id, which are the users and groups that are in *some* relation to it (including assignee and owner).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskIdentityLinkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task to retrieve the identity links for.
$type = 'type_example'; // string | Filter by the type of links to include.

try {
    $result = $apiInstance->getIdentityLinks($id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskIdentityLinkApi->getIdentityLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the identity links for. |
 **type** | **string**| Filter by the type of links to include. | [optional]

### Return type

[**\OpenAPI\Client\Model\IdentityLinkDto[]**](../Model/IdentityLinkDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
