# OpenAPI\Client\MessageApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deliverMessage()**](MessageApi.md#deliverMessage) | **POST** /message | Correlate


## `deliverMessage()`

```php
deliverMessage($correlation_message_dto): \OpenAPI\Client\Model\MessageCorrelationResultWithVariableDto[]
```

Correlate

Correlates a message to the process engine to either trigger a message start event or an intermediate message  catching event. Internally this maps to the engine's message correlation builder methods `MessageCorrelationBuilder#correlateWithResult()` and `MessageCorrelationBuilder#correlateAllWithResult()`. For more information about the correlation behavior, see the [Message Events](https://docs.camunda.org/manual/latest/bpmn20/events/message-events/) section of the [BPMN 2.0 Implementation Reference](https://docs.camunda.org/manual/latest/reference/bpmn20/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$correlation_message_dto = {"messageName":"aMessage","businessKey":"aBusinessKey","correlationKeys":{"aVariable":{"value":"aValue","type":"String"}},"processVariables":{"aVariable":{"value":"aNewValue","type":"String","valueInfo":{"transient":true}},"anotherVariable":{"value":true,"type":"Boolean"}}}; // \OpenAPI\Client\Model\CorrelationMessageDto

try {
    $result = $apiInstance->deliverMessage($correlation_message_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->deliverMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **correlation_message_dto** | [**\OpenAPI\Client\Model\CorrelationMessageDto**](../Model/CorrelationMessageDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\MessageCorrelationResultWithVariableDto[]**](../Model/MessageCorrelationResultWithVariableDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
