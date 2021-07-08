# OpenAPI\Client\HistoricDecisionRequirementsDefinitionApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDecisionStatistics()**](HistoricDecisionRequirementsDefinitionApi.md#getDecisionStatistics) | **GET** /history/decision-requirements-definition/{id}/statistics | Get DRD Statistics


## `getDecisionStatistics()`

```php
getDecisionStatistics($id, $decision_instance_id): \OpenAPI\Client\Model\HistoricDecisionInstanceStatisticsDto[]
```

Get DRD Statistics

Retrieves evaluation statistics of a given decision requirements definition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricDecisionRequirementsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the decision requirements definition.
$decision_instance_id = 'decision_instance_id_example'; // string | Restrict query results to be based only on specific evaluation instance of a given decision requirements definition.

try {
    $result = $apiInstance->getDecisionStatistics($id, $decision_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricDecisionRequirementsDefinitionApi->getDecisionStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the decision requirements definition. |
 **decision_instance_id** | **string**| Restrict query results to be based only on specific evaluation instance of a given decision requirements definition. | [optional]

### Return type

[**\OpenAPI\Client\Model\HistoricDecisionInstanceStatisticsDto[]**](../Model/HistoricDecisionInstanceStatisticsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
