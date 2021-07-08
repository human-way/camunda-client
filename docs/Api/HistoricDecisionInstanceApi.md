# OpenAPI\Client\HistoricDecisionInstanceApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAsync()**](HistoricDecisionInstanceApi.md#deleteAsync) | **POST** /history/decision-instance/delete | Delete Async (POST)
[**getHistoricDecisionInstance()**](HistoricDecisionInstanceApi.md#getHistoricDecisionInstance) | **GET** /history/decision-instance/{id} | Get Historic Decision Instance
[**getHistoricDecisionInstances()**](HistoricDecisionInstanceApi.md#getHistoricDecisionInstances) | **GET** /history/decision-instance | Get Historic Decision Instances
[**getHistoricDecisionInstancesCount()**](HistoricDecisionInstanceApi.md#getHistoricDecisionInstancesCount) | **GET** /history/decision-instance/count | Get Historic Decision Instance Count
[**setRemovalTimeAsyncHistoricDecisionInstance()**](HistoricDecisionInstanceApi.md#setRemovalTimeAsyncHistoricDecisionInstance) | **POST** /history/decision-instance/set-removal-time | Set Removal Time Async (POST)


## `deleteAsync()`

```php
deleteAsync($delete_historic_decision_instances_dto): \OpenAPI\Client\Model\BatchDto
```

Delete Async (POST)

Delete multiple historic decision instances asynchronously (batch). At least `historicDecisionInstanceIds` or `historicDecisionInstanceQuery`  has to be provided. If both are provided then all instances matching query  criterion and instances from the list will be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricDecisionInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_historic_decision_instances_dto = {"historicDecisionInstanceIds":["aDecision","secondDecision"],"historicDecisionInstanceQuery":{"decisionDefinitionKey":"a-definition-key"},"deleteReason":"a delete reason"}; // \OpenAPI\Client\Model\DeleteHistoricDecisionInstancesDto

try {
    $result = $apiInstance->deleteAsync($delete_historic_decision_instances_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricDecisionInstanceApi->deleteAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_historic_decision_instances_dto** | [**\OpenAPI\Client\Model\DeleteHistoricDecisionInstancesDto**](../Model/DeleteHistoricDecisionInstancesDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricDecisionInstance()`

```php
getHistoricDecisionInstance($id, $include_inputs, $include_outputs, $disable_binary_fetching, $disable_custom_object_deserialization): \OpenAPI\Client\Model\HistoricDecisionInstanceDto
```

Get Historic Decision Instance

Retrieves a historic decision instance by id, according to the  `HistoricDecisionInstance` interface in the engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricDecisionInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the historic decision instance to be retrieved.
$include_inputs = True; // bool | Include input values in the result. Value may only be `true`, as `false` is the default behavior.
$include_outputs = True; // bool | Include output values in the result. Value may only be `true`, as `false` is the default behavior.
$disable_binary_fetching = True; // bool | Disables fetching of byte array input and output values. Value may only be `true`, as `false` is the default behavior.
$disable_custom_object_deserialization = True; // bool | Disables deserialization of input and output values that are custom objects. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getHistoricDecisionInstance($id, $include_inputs, $include_outputs, $disable_binary_fetching, $disable_custom_object_deserialization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricDecisionInstanceApi->getHistoricDecisionInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the historic decision instance to be retrieved. |
 **include_inputs** | **bool**| Include input values in the result. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_outputs** | **bool**| Include output values in the result. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **disable_binary_fetching** | **bool**| Disables fetching of byte array input and output values. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **disable_custom_object_deserialization** | **bool**| Disables deserialization of input and output values that are custom objects. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

### Return type

[**\OpenAPI\Client\Model\HistoricDecisionInstanceDto**](../Model/HistoricDecisionInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricDecisionInstances()`

```php
getHistoricDecisionInstances($decision_instance_id, $decision_instance_id_in, $decision_definition_id, $decision_definition_id_in, $decision_definition_key, $decision_definition_key_in, $decision_definition_name, $decision_definition_name_like, $process_definition_id, $process_definition_key, $process_instance_id, $case_definition_id, $case_definition_key, $case_instance_id, $activity_id_in, $activity_instance_id_in, $tenant_id_in, $without_tenant_id, $evaluated_before, $evaluated_after, $user_id, $root_decision_instance_id, $root_decision_instances_only, $decision_requirements_definition_id, $decision_requirements_definition_key, $include_inputs, $include_outputs, $disable_binary_fetching, $disable_custom_object_deserialization, $sort_by, $sort_order, $first_result, $max_results): \OpenAPI\Client\Model\HistoricDecisionInstanceDto[]
```

Get Historic Decision Instances

Queries for historic decision instances that fulfill the given parameters.  The size of the result set can be retrieved by using the  [Get Historic Decision Instance Count](https://docs.camunda.org/manual/latest/reference/rest/history/decision-instance/get-decision-instance-query-count/)  method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricDecisionInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$decision_instance_id = 'decision_instance_id_example'; // string | Filter by decision instance id.
$decision_instance_id_in = 'decision_instance_id_in_example'; // string | Filter by decision instance ids. Must be a comma-separated list of decision instance ids.
$decision_definition_id = 'decision_definition_id_example'; // string | Filter by the decision definition the instances belongs to.
$decision_definition_id_in = 'decision_definition_id_in_example'; // string | Filter by the decision definitions the instances belongs to. Must be a comma-separated list of decision definition ids.
$decision_definition_key = 'decision_definition_key_example'; // string | Filter by the key of the decision definition the instances belongs to.
$decision_definition_key_in = 'decision_definition_key_in_example'; // string | Filter by the keys of the decision definition the instances belongs to. Must be a comma- separated list of decision definition keys.
$decision_definition_name = 'decision_definition_name_example'; // string | Filter by the name of the decision definition the instances belongs to.
$decision_definition_name_like = 'decision_definition_name_like_example'; // string | Filter by the name of the decision definition the instances belongs to, that the parameter is a substring of.
$process_definition_id = 'process_definition_id_example'; // string | Filter by the process definition the instances belongs to.
$process_definition_key = 'process_definition_key_example'; // string | Filter by the key of the process definition the instances belongs to.
$process_instance_id = 'process_instance_id_example'; // string | Filter by the process instance the instances belongs to.
$case_definition_id = 'case_definition_id_example'; // string | Filter by the case definition the instances belongs to.
$case_definition_key = 'case_definition_key_example'; // string | Filter by the key of the case definition the instances belongs to.
$case_instance_id = 'case_instance_id_example'; // string | Filter by the case instance the instances belongs to.
$activity_id_in = 'activity_id_in_example'; // string | Filter by the activity ids the instances belongs to. Must be a comma-separated list of acitvity ids.
$activity_instance_id_in = 'activity_instance_id_in_example'; // string | Filter by the activity instance ids the instances belongs to. Must be a comma-separated list of acitvity instance ids.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids. A historic decision instance must have one of the given tenant ids.
$without_tenant_id = True; // bool | Only include historic decision instances that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$evaluated_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were evaluated before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM- dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$evaluated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were evaluated after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM- dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$user_id = 'user_id_example'; // string | Restrict to instances that were evaluated by the given user.
$root_decision_instance_id = 'root_decision_instance_id_example'; // string | Restrict to instances that have a given root decision instance id. This also includes the decision instance with the given id.
$root_decision_instances_only = True; // bool | Restrict to instances those are the root decision instance of an evaluation. Value may only be `true`, as `false` is the default behavior.
$decision_requirements_definition_id = 'decision_requirements_definition_id_example'; // string | Filter by the decision requirements definition the instances belongs to.
$decision_requirements_definition_key = 'decision_requirements_definition_key_example'; // string | Filter by the key of the decision requirements definition the instances belongs to.
$include_inputs = True; // bool | Include input values in the result. Value may only be `true`, as `false` is the default behavior.
$include_outputs = True; // bool | Include output values in the result. Value may only be `true`, as `false` is the default behavior.
$disable_binary_fetching = True; // bool | Disables fetching of byte array input and output values. Value may only be `true`, as `false` is the default behavior.
$disable_custom_object_deserialization = True; // bool | Disables deserialization of input and output values that are custom objects. Value may only be `true`, as `false` is the default behavior.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getHistoricDecisionInstances($decision_instance_id, $decision_instance_id_in, $decision_definition_id, $decision_definition_id_in, $decision_definition_key, $decision_definition_key_in, $decision_definition_name, $decision_definition_name_like, $process_definition_id, $process_definition_key, $process_instance_id, $case_definition_id, $case_definition_key, $case_instance_id, $activity_id_in, $activity_instance_id_in, $tenant_id_in, $without_tenant_id, $evaluated_before, $evaluated_after, $user_id, $root_decision_instance_id, $root_decision_instances_only, $decision_requirements_definition_id, $decision_requirements_definition_key, $include_inputs, $include_outputs, $disable_binary_fetching, $disable_custom_object_deserialization, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricDecisionInstanceApi->getHistoricDecisionInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **decision_instance_id** | **string**| Filter by decision instance id. | [optional]
 **decision_instance_id_in** | **string**| Filter by decision instance ids. Must be a comma-separated list of decision instance ids. | [optional]
 **decision_definition_id** | **string**| Filter by the decision definition the instances belongs to. | [optional]
 **decision_definition_id_in** | **string**| Filter by the decision definitions the instances belongs to. Must be a comma-separated list of decision definition ids. | [optional]
 **decision_definition_key** | **string**| Filter by the key of the decision definition the instances belongs to. | [optional]
 **decision_definition_key_in** | **string**| Filter by the keys of the decision definition the instances belongs to. Must be a comma- separated list of decision definition keys. | [optional]
 **decision_definition_name** | **string**| Filter by the name of the decision definition the instances belongs to. | [optional]
 **decision_definition_name_like** | **string**| Filter by the name of the decision definition the instances belongs to, that the parameter is a substring of. | [optional]
 **process_definition_id** | **string**| Filter by the process definition the instances belongs to. | [optional]
 **process_definition_key** | **string**| Filter by the key of the process definition the instances belongs to. | [optional]
 **process_instance_id** | **string**| Filter by the process instance the instances belongs to. | [optional]
 **case_definition_id** | **string**| Filter by the case definition the instances belongs to. | [optional]
 **case_definition_key** | **string**| Filter by the key of the case definition the instances belongs to. | [optional]
 **case_instance_id** | **string**| Filter by the case instance the instances belongs to. | [optional]
 **activity_id_in** | **string**| Filter by the activity ids the instances belongs to. Must be a comma-separated list of acitvity ids. | [optional]
 **activity_instance_id_in** | **string**| Filter by the activity instance ids the instances belongs to. Must be a comma-separated list of acitvity instance ids. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A historic decision instance must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic decision instances that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **evaluated_before** | **\DateTime**| Restrict to instances that were evaluated before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM- dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **evaluated_after** | **\DateTime**| Restrict to instances that were evaluated after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM- dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **user_id** | **string**| Restrict to instances that were evaluated by the given user. | [optional]
 **root_decision_instance_id** | **string**| Restrict to instances that have a given root decision instance id. This also includes the decision instance with the given id. | [optional]
 **root_decision_instances_only** | **bool**| Restrict to instances those are the root decision instance of an evaluation. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **decision_requirements_definition_id** | **string**| Filter by the decision requirements definition the instances belongs to. | [optional]
 **decision_requirements_definition_key** | **string**| Filter by the key of the decision requirements definition the instances belongs to. | [optional]
 **include_inputs** | **bool**| Include input values in the result. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_outputs** | **bool**| Include output values in the result. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **disable_binary_fetching** | **bool**| Disables fetching of byte array input and output values. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **disable_custom_object_deserialization** | **bool**| Disables deserialization of input and output values that are custom objects. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\OpenAPI\Client\Model\HistoricDecisionInstanceDto[]**](../Model/HistoricDecisionInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistoricDecisionInstancesCount()`

```php
getHistoricDecisionInstancesCount($decision_instance_id, $decision_instance_id_in, $decision_definition_id, $decision_definition_id_in, $decision_definition_key, $decision_definition_key_in, $decision_definition_name, $decision_definition_name_like, $process_definition_id, $process_definition_key, $process_instance_id, $case_definition_id, $case_definition_key, $case_instance_id, $activity_id_in, $activity_instance_id_in, $tenant_id_in, $without_tenant_id, $evaluated_before, $evaluated_after, $user_id, $root_decision_instance_id, $root_decision_instances_only, $decision_requirements_definition_id, $decision_requirements_definition_key): \OpenAPI\Client\Model\CountResultDto
```

Get Historic Decision Instance Count

Queries for the number of historic decision instances that fulfill the given parameters.  Takes the same parameters as the  [Get Historic Decision Instances](https://docs.camunda.org/manual/latest/reference/rest/history/decision-instance/get-decision-instance-query/)  method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricDecisionInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$decision_instance_id = 'decision_instance_id_example'; // string | Filter by decision instance id.
$decision_instance_id_in = 'decision_instance_id_in_example'; // string | Filter by decision instance ids. Must be a comma-separated list of decision instance ids.
$decision_definition_id = 'decision_definition_id_example'; // string | Filter by the decision definition the instances belongs to.
$decision_definition_id_in = 'decision_definition_id_in_example'; // string | Filter by the decision definitions the instances belongs to. Must be a comma-separated list of decision definition ids.
$decision_definition_key = 'decision_definition_key_example'; // string | Filter by the key of the decision definition the instances belongs to.
$decision_definition_key_in = 'decision_definition_key_in_example'; // string | Filter by the keys of the decision definition the instances belongs to. Must be a comma- separated list of decision definition keys.
$decision_definition_name = 'decision_definition_name_example'; // string | Filter by the name of the decision definition the instances belongs to.
$decision_definition_name_like = 'decision_definition_name_like_example'; // string | Filter by the name of the decision definition the instances belongs to, that the parameter is a substring of.
$process_definition_id = 'process_definition_id_example'; // string | Filter by the process definition the instances belongs to.
$process_definition_key = 'process_definition_key_example'; // string | Filter by the key of the process definition the instances belongs to.
$process_instance_id = 'process_instance_id_example'; // string | Filter by the process instance the instances belongs to.
$case_definition_id = 'case_definition_id_example'; // string | Filter by the case definition the instances belongs to.
$case_definition_key = 'case_definition_key_example'; // string | Filter by the key of the case definition the instances belongs to.
$case_instance_id = 'case_instance_id_example'; // string | Filter by the case instance the instances belongs to.
$activity_id_in = 'activity_id_in_example'; // string | Filter by the activity ids the instances belongs to. Must be a comma-separated list of acitvity ids.
$activity_instance_id_in = 'activity_instance_id_in_example'; // string | Filter by the activity instance ids the instances belongs to. Must be a comma-separated list of acitvity instance ids.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids. A historic decision instance must have one of the given tenant ids.
$without_tenant_id = True; // bool | Only include historic decision instances that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$evaluated_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were evaluated before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM- dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$evaluated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to instances that were evaluated after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format `yyyy-MM- dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$user_id = 'user_id_example'; // string | Restrict to instances that were evaluated by the given user.
$root_decision_instance_id = 'root_decision_instance_id_example'; // string | Restrict to instances that have a given root decision instance id. This also includes the decision instance with the given id.
$root_decision_instances_only = True; // bool | Restrict to instances those are the root decision instance of an evaluation. Value may only be `true`, as `false` is the default behavior.
$decision_requirements_definition_id = 'decision_requirements_definition_id_example'; // string | Filter by the decision requirements definition the instances belongs to.
$decision_requirements_definition_key = 'decision_requirements_definition_key_example'; // string | Filter by the key of the decision requirements definition the instances belongs to.

try {
    $result = $apiInstance->getHistoricDecisionInstancesCount($decision_instance_id, $decision_instance_id_in, $decision_definition_id, $decision_definition_id_in, $decision_definition_key, $decision_definition_key_in, $decision_definition_name, $decision_definition_name_like, $process_definition_id, $process_definition_key, $process_instance_id, $case_definition_id, $case_definition_key, $case_instance_id, $activity_id_in, $activity_instance_id_in, $tenant_id_in, $without_tenant_id, $evaluated_before, $evaluated_after, $user_id, $root_decision_instance_id, $root_decision_instances_only, $decision_requirements_definition_id, $decision_requirements_definition_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricDecisionInstanceApi->getHistoricDecisionInstancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **decision_instance_id** | **string**| Filter by decision instance id. | [optional]
 **decision_instance_id_in** | **string**| Filter by decision instance ids. Must be a comma-separated list of decision instance ids. | [optional]
 **decision_definition_id** | **string**| Filter by the decision definition the instances belongs to. | [optional]
 **decision_definition_id_in** | **string**| Filter by the decision definitions the instances belongs to. Must be a comma-separated list of decision definition ids. | [optional]
 **decision_definition_key** | **string**| Filter by the key of the decision definition the instances belongs to. | [optional]
 **decision_definition_key_in** | **string**| Filter by the keys of the decision definition the instances belongs to. Must be a comma- separated list of decision definition keys. | [optional]
 **decision_definition_name** | **string**| Filter by the name of the decision definition the instances belongs to. | [optional]
 **decision_definition_name_like** | **string**| Filter by the name of the decision definition the instances belongs to, that the parameter is a substring of. | [optional]
 **process_definition_id** | **string**| Filter by the process definition the instances belongs to. | [optional]
 **process_definition_key** | **string**| Filter by the key of the process definition the instances belongs to. | [optional]
 **process_instance_id** | **string**| Filter by the process instance the instances belongs to. | [optional]
 **case_definition_id** | **string**| Filter by the case definition the instances belongs to. | [optional]
 **case_definition_key** | **string**| Filter by the key of the case definition the instances belongs to. | [optional]
 **case_instance_id** | **string**| Filter by the case instance the instances belongs to. | [optional]
 **activity_id_in** | **string**| Filter by the activity ids the instances belongs to. Must be a comma-separated list of acitvity ids. | [optional]
 **activity_instance_id_in** | **string**| Filter by the activity instance ids the instances belongs to. Must be a comma-separated list of acitvity instance ids. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A historic decision instance must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic decision instances that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **evaluated_before** | **\DateTime**| Restrict to instances that were evaluated before the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM- dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **evaluated_after** | **\DateTime**| Restrict to instances that were evaluated after the given date. By [default](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM- dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **user_id** | **string**| Restrict to instances that were evaluated by the given user. | [optional]
 **root_decision_instance_id** | **string**| Restrict to instances that have a given root decision instance id. This also includes the decision instance with the given id. | [optional]
 **root_decision_instances_only** | **bool**| Restrict to instances those are the root decision instance of an evaluation. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **decision_requirements_definition_id** | **string**| Filter by the decision requirements definition the instances belongs to. | [optional]
 **decision_requirements_definition_key** | **string**| Filter by the key of the decision requirements definition the instances belongs to. | [optional]

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

## `setRemovalTimeAsyncHistoricDecisionInstance()`

```php
setRemovalTimeAsyncHistoricDecisionInstance($set_removal_time_to_historic_decision_instances_dto): \OpenAPI\Client\Model\BatchDto
```

Set Removal Time Async (POST)

Sets the removal time to multiple historic decision instances asynchronously (batch).  At least `historicDecisionInstanceIds` or `historicDecisionInstanceQuery` has to be provided. If both are provided, all instances matching query criterion and instances from the list will be updated with a removal time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\HistoricDecisionInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$set_removal_time_to_historic_decision_instances_dto = {"absoluteRemovalTime":"2019-05-05T11:56:24.725+0200","hierarchical":true,"historicDecisionInstanceQuery":{"evaluatedBefore":"2019-09-05T17:02:10.123+0200"},"historicDecisionInstanceIds":["b4d2ad98-7240-11e9-98b7-be5e0f7575b7","b4d2ad94-7240-11e9-98b7-be5e0f7575b7"]}; // \OpenAPI\Client\Model\SetRemovalTimeToHistoricDecisionInstancesDto

try {
    $result = $apiInstance->setRemovalTimeAsyncHistoricDecisionInstance($set_removal_time_to_historic_decision_instances_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricDecisionInstanceApi->setRemovalTimeAsyncHistoricDecisionInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_removal_time_to_historic_decision_instances_dto** | [**\OpenAPI\Client\Model\SetRemovalTimeToHistoricDecisionInstancesDto**](../Model/SetRemovalTimeToHistoricDecisionInstancesDto.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
