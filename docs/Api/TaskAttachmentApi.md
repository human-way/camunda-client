# OpenAPI\Client\TaskAttachmentApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAttachment()**](TaskAttachmentApi.md#addAttachment) | **POST** /task/{id}/attachment/create | Create
[**deleteAttachment()**](TaskAttachmentApi.md#deleteAttachment) | **DELETE** /task/{id}/attachment/{attachmentId} | Delete
[**getAttachment()**](TaskAttachmentApi.md#getAttachment) | **GET** /task/{id}/attachment/{attachmentId} | Get
[**getAttachmentData()**](TaskAttachmentApi.md#getAttachmentData) | **GET** /task/{id}/attachment/{attachmentId}/data | Get (Binary)
[**getAttachments()**](TaskAttachmentApi.md#getAttachments) | **GET** /task/{id}/attachment | Get List


## `addAttachment()`

```php
addAttachment($id, $attachment_name, $attachment_description, $attachment_type, $url, $content): \OpenAPI\Client\Model\AttachmentDto
```

Create

Creates an attachment for a task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task to add the attachment to.
$attachment_name = 'attachment_name_example'; // string | The name of the attachment.
$attachment_description = 'attachment_description_example'; // string | The description of the attachment.
$attachment_type = 'attachment_type_example'; // string | The type of the attachment.
$url = 'url_example'; // string | The url to the remote content of the attachment.
$content = "/path/to/file.txt"; // \SplFileObject | The content of the attachment.

try {
    $result = $apiInstance->addAttachment($id, $attachment_name, $attachment_description, $attachment_type, $url, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskAttachmentApi->addAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to add the attachment to. |
 **attachment_name** | **string**| The name of the attachment. | [optional]
 **attachment_description** | **string**| The description of the attachment. | [optional]
 **attachment_type** | **string**| The type of the attachment. | [optional]
 **url** | **string**| The url to the remote content of the attachment. | [optional]
 **content** | **\SplFileObject****\SplFileObject**| The content of the attachment. | [optional]

### Return type

[**\OpenAPI\Client\Model\AttachmentDto**](../Model/AttachmentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAttachment()`

```php
deleteAttachment($id, $attachment_id)
```

Delete

Removes an attachment from a task by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task.
$attachment_id = 'attachment_id_example'; // string | The id of the attachment to be removed.

try {
    $apiInstance->deleteAttachment($id, $attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskAttachmentApi->deleteAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **attachment_id** | **string**| The id of the attachment to be removed. |

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

## `getAttachment()`

```php
getAttachment($id, $attachment_id): \OpenAPI\Client\Model\AttachmentDto
```

Get

Retrieves a task attachment by task id and attachment id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task.
$attachment_id = 'attachment_id_example'; // string | The id of the attachment to be retrieved.

try {
    $result = $apiInstance->getAttachment($id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskAttachmentApi->getAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **attachment_id** | **string**| The id of the attachment to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\AttachmentDto**](../Model/AttachmentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachmentData()`

```php
getAttachmentData($id, $attachment_id): \SplFileObject
```

Get (Binary)

Retrieves the binary content of a task attachment by task id and attachment id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task.
$attachment_id = 'attachment_id_example'; // string | The id of the attachment to be retrieved.

try {
    $result = $apiInstance->getAttachmentData($id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskAttachmentApi->getAttachmentData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **attachment_id** | **string**| The id of the attachment to be retrieved. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachments()`

```php
getAttachments($id): \OpenAPI\Client\Model\AttachmentDto[]
```

Get List

Gets the attachments for a task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task to retrieve the attachments for.

try {
    $result = $apiInstance->getAttachments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskAttachmentApi->getAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the attachments for. |

### Return type

[**\OpenAPI\Client\Model\AttachmentDto[]**](../Model/AttachmentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
