# OpenAPI\Client\TaskCommentApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createComment()**](TaskCommentApi.md#createComment) | **POST** /task/{id}/comment/create | Create
[**getComment()**](TaskCommentApi.md#getComment) | **GET** /task/{id}/comment/{commentId} | Get
[**getComments()**](TaskCommentApi.md#getComments) | **GET** /task/{id}/comment | Get List


## `createComment()`

```php
createComment($id, $comment_dto): \OpenAPI\Client\Model\CommentDto
```

Create

Creates a comment for a task by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskCommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task to add the comment to.
$comment_dto = {"message":"a task comment"}; // \OpenAPI\Client\Model\CommentDto | **Note:** Only the `message` property will be used. Every other property passed to this endpoint will be ignored.

try {
    $result = $apiInstance->createComment($id, $comment_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCommentApi->createComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to add the comment to. |
 **comment_dto** | [**\OpenAPI\Client\Model\CommentDto**](../Model/CommentDto.md)| **Note:** Only the &#x60;message&#x60; property will be used. Every other property passed to this endpoint will be ignored. | [optional]

### Return type

[**\OpenAPI\Client\Model\CommentDto**](../Model/CommentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getComment()`

```php
getComment($id, $comment_id): \OpenAPI\Client\Model\CommentDto
```

Get

Retrieves a task comment by task id and comment id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskCommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task.
$comment_id = 'comment_id_example'; // string | The id of the comment to be retrieved.

try {
    $result = $apiInstance->getComment($id, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCommentApi->getComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **comment_id** | **string**| The id of the comment to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\CommentDto**](../Model/CommentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getComments()`

```php
getComments($id): \OpenAPI\Client\Model\CommentDto[]
```

Get List

Gets the comments for a task by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TaskCommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task to retrieve the comments for.

try {
    $result = $apiInstance->getComments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCommentApi->getComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the comments for. |

### Return type

[**\OpenAPI\Client\Model\CommentDto[]**](../Model/CommentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
