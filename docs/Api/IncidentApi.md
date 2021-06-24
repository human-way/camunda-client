# OpenAPI\Client\IncidentApi

All URIs are relative to http://localhost:8080/engine-rest.

Method | HTTP request | Description
------------- | ------------- | -------------
[**clearIncidentAnnotation()**](IncidentApi.md#clearIncidentAnnotation) | **DELETE** /incident/{id}/annotation | Clear Incident Annotation
[**getIncident()**](IncidentApi.md#getIncident) | **GET** /incident/{id} | Get Incident
[**getIncidents()**](IncidentApi.md#getIncidents) | **GET** /incident | Get List
[**getIncidentsCount()**](IncidentApi.md#getIncidentsCount) | **GET** /incident/count | Get List Count
[**resolveIncident()**](IncidentApi.md#resolveIncident) | **DELETE** /incident/{id} | Resolve Incident
[**setIncidentAnnotation()**](IncidentApi.md#setIncidentAnnotation) | **PUT** /incident/{id}/annotation | Set Incident Annotation


## `clearIncidentAnnotation()`

```php
clearIncidentAnnotation($id)
```

Clear Incident Annotation

Clears the annotation of an incident with given id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the incident to clear the annotation at.

try {
    $apiInstance->clearIncidentAnnotation($id);
} catch (Exception $e) {
    echo 'Exception when calling IncidentApi->clearIncidentAnnotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the incident to clear the annotation at. |

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

## `getIncident()`

```php
getIncident($id): \OpenAPI\Client\Model\IncidentDto
```

Get Incident

Retrieves an incident by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the incident to be retrieved.

try {
    $result = $apiInstance->getIncident($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentApi->getIncident: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the incident to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\IncidentDto**](../Model/IncidentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIncidents()`

```php
getIncidents($incident_id, $incident_type, $incident_message, $incident_message_like, $process_definition_id, $process_definition_key_in, $process_instance_id, $execution_id, $incident_timestamp_before, $incident_timestamp_after, $activity_id, $failed_activity_id, $cause_incident_id, $root_cause_incident_id, $configuration, $tenant_id_in, $job_definition_id_in, $sort_by, $sort_order): \OpenAPI\Client\Model\IncidentDto[]
```

Get List

Queries for incidents that fulfill given parameters. The size of the result set can be retrieved by using the [Get Incident Count](https://docs.camunda.org/manual/7.15/reference/rest/incident/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$incident_id = 'incident_id_example'; // string | Restricts to incidents that have the given id.
$incident_type = 'incident_type_example'; // string | Restricts to incidents that belong to the given incident type. See the [User Guide](https://docs.camunda.org/manual/7.15/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$incident_message = 'incident_message_example'; // string | Restricts to incidents that have the given incident message.
$incident_message_like = 'incident_message_like_example'; // string | Restricts to incidents that incidents message is a substring of the given value. The string can include the wildcard character '%' to express like-strategy: starts with (`string%`), ends with (`%string`) or contains (`%string%`).
$process_definition_id = 'process_definition_id_example'; // string | Restricts to incidents that belong to a process definition with the given id.
$process_definition_key_in = 'process_definition_key_in_example'; // string | Restricts to incidents that belong to a process definition with the given keys. Must be a comma-separated list.
$process_instance_id = 'process_instance_id_example'; // string | Restricts to incidents that belong to a process instance with the given id.
$execution_id = 'execution_id_example'; // string | Restricts to incidents that belong to an execution with the given id.
$incident_timestamp_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to incidents that have an incidentTimestamp date before the given date. By default, the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$incident_timestamp_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to incidents that have an incidentTimestamp date after the given date. By default*, the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$activity_id = 'activity_id_example'; // string | Restricts to incidents that belong to an activity with the given id.
$failed_activity_id = 'failed_activity_id_example'; // string | Restricts to incidents that were created due to the failure of an activity with the given id.
$cause_incident_id = 'cause_incident_id_example'; // string | Restricts to incidents that have the given incident id as cause incident.
$root_cause_incident_id = 'root_cause_incident_id_example'; // string | Restricts to incidents that have the given incident id as root cause incident.
$configuration = 'configuration_example'; // string | Restricts to incidents that have the given parameter set as configuration.
$tenant_id_in = 'tenant_id_in_example'; // string | Restricts to incidents that have one of the given comma-separated tenant ids.
$job_definition_id_in = 'job_definition_id_in_example'; // string | Restricts to incidents that have one of the given comma-separated job definition ids.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.

try {
    $result = $apiInstance->getIncidents($incident_id, $incident_type, $incident_message, $incident_message_like, $process_definition_id, $process_definition_key_in, $process_instance_id, $execution_id, $incident_timestamp_before, $incident_timestamp_after, $activity_id, $failed_activity_id, $cause_incident_id, $root_cause_incident_id, $configuration, $tenant_id_in, $job_definition_id_in, $sort_by, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentApi->getIncidents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **incident_id** | **string**| Restricts to incidents that have the given id. | [optional]
 **incident_type** | **string**| Restricts to incidents that belong to the given incident type. See the [User Guide](https://docs.camunda.org/manual/7.15/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **incident_message** | **string**| Restricts to incidents that have the given incident message. | [optional]
 **incident_message_like** | **string**| Restricts to incidents that incidents message is a substring of the given value. The string can include the wildcard character &#39;%&#39; to express like-strategy: starts with (&#x60;string%&#x60;), ends with (&#x60;%string&#x60;) or contains (&#x60;%string%&#x60;). | [optional]
 **process_definition_id** | **string**| Restricts to incidents that belong to a process definition with the given id. | [optional]
 **process_definition_key_in** | **string**| Restricts to incidents that belong to a process definition with the given keys. Must be a comma-separated list. | [optional]
 **process_instance_id** | **string**| Restricts to incidents that belong to a process instance with the given id. | [optional]
 **execution_id** | **string**| Restricts to incidents that belong to an execution with the given id. | [optional]
 **incident_timestamp_before** | **\DateTime**| Restricts to incidents that have an incidentTimestamp date before the given date. By default, the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **incident_timestamp_after** | **\DateTime**| Restricts to incidents that have an incidentTimestamp date after the given date. By default*, the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **activity_id** | **string**| Restricts to incidents that belong to an activity with the given id. | [optional]
 **failed_activity_id** | **string**| Restricts to incidents that were created due to the failure of an activity with the given id. | [optional]
 **cause_incident_id** | **string**| Restricts to incidents that have the given incident id as cause incident. | [optional]
 **root_cause_incident_id** | **string**| Restricts to incidents that have the given incident id as root cause incident. | [optional]
 **configuration** | **string**| Restricts to incidents that have the given parameter set as configuration. | [optional]
 **tenant_id_in** | **string**| Restricts to incidents that have one of the given comma-separated tenant ids. | [optional]
 **job_definition_id_in** | **string**| Restricts to incidents that have one of the given comma-separated job definition ids. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]

### Return type

[**\OpenAPI\Client\Model\IncidentDto[]**](../Model/IncidentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIncidentsCount()`

```php
getIncidentsCount($incident_id, $incident_type, $incident_message, $incident_message_like, $process_definition_id, $process_definition_key_in, $process_instance_id, $execution_id, $incident_timestamp_before, $incident_timestamp_after, $activity_id, $failed_activity_id, $cause_incident_id, $root_cause_incident_id, $configuration, $tenant_id_in, $job_definition_id_in): \OpenAPI\Client\Model\CountResultDto[]
```

Get List Count

Queries for the number of incidents that fulfill given parameters. Takes the same parameters as the [Get Incidents](https://docs.camunda.org/manual/7.15/reference/rest/incident/get-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$incident_id = 'incident_id_example'; // string | Restricts to incidents that have the given id.
$incident_type = 'incident_type_example'; // string | Restricts to incidents that belong to the given incident type. See the [User Guide](https://docs.camunda.org/manual/7.15/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$incident_message = 'incident_message_example'; // string | Restricts to incidents that have the given incident message.
$incident_message_like = 'incident_message_like_example'; // string | Restricts to incidents that incidents message is a substring of the given value. The string can include the wildcard character '%' to express like-strategy: starts with (`string%`), ends with (`%string`) or contains (`%string%`).
$process_definition_id = 'process_definition_id_example'; // string | Restricts to incidents that belong to a process definition with the given id.
$process_definition_key_in = 'process_definition_key_in_example'; // string | Restricts to incidents that belong to a process definition with the given keys. Must be a comma-separated list.
$process_instance_id = 'process_instance_id_example'; // string | Restricts to incidents that belong to a process instance with the given id.
$execution_id = 'execution_id_example'; // string | Restricts to incidents that belong to an execution with the given id.
$incident_timestamp_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to incidents that have an incidentTimestamp date before the given date. By default, the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$incident_timestamp_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to incidents that have an incidentTimestamp date after the given date. By default*, the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$activity_id = 'activity_id_example'; // string | Restricts to incidents that belong to an activity with the given id.
$failed_activity_id = 'failed_activity_id_example'; // string | Restricts to incidents that were created due to the failure of an activity with the given id.
$cause_incident_id = 'cause_incident_id_example'; // string | Restricts to incidents that have the given incident id as cause incident.
$root_cause_incident_id = 'root_cause_incident_id_example'; // string | Restricts to incidents that have the given incident id as root cause incident.
$configuration = 'configuration_example'; // string | Restricts to incidents that have the given parameter set as configuration.
$tenant_id_in = 'tenant_id_in_example'; // string | Restricts to incidents that have one of the given comma-separated tenant ids.
$job_definition_id_in = 'job_definition_id_in_example'; // string | Restricts to incidents that have one of the given comma-separated job definition ids.

try {
    $result = $apiInstance->getIncidentsCount($incident_id, $incident_type, $incident_message, $incident_message_like, $process_definition_id, $process_definition_key_in, $process_instance_id, $execution_id, $incident_timestamp_before, $incident_timestamp_after, $activity_id, $failed_activity_id, $cause_incident_id, $root_cause_incident_id, $configuration, $tenant_id_in, $job_definition_id_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentApi->getIncidentsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **incident_id** | **string**| Restricts to incidents that have the given id. | [optional]
 **incident_type** | **string**| Restricts to incidents that belong to the given incident type. See the [User Guide](https://docs.camunda.org/manual/7.15/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **incident_message** | **string**| Restricts to incidents that have the given incident message. | [optional]
 **incident_message_like** | **string**| Restricts to incidents that incidents message is a substring of the given value. The string can include the wildcard character &#39;%&#39; to express like-strategy: starts with (&#x60;string%&#x60;), ends with (&#x60;%string&#x60;) or contains (&#x60;%string%&#x60;). | [optional]
 **process_definition_id** | **string**| Restricts to incidents that belong to a process definition with the given id. | [optional]
 **process_definition_key_in** | **string**| Restricts to incidents that belong to a process definition with the given keys. Must be a comma-separated list. | [optional]
 **process_instance_id** | **string**| Restricts to incidents that belong to a process instance with the given id. | [optional]
 **execution_id** | **string**| Restricts to incidents that belong to an execution with the given id. | [optional]
 **incident_timestamp_before** | **\DateTime**| Restricts to incidents that have an incidentTimestamp date before the given date. By default, the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **incident_timestamp_after** | **\DateTime**| Restricts to incidents that have an incidentTimestamp date after the given date. By default*, the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **activity_id** | **string**| Restricts to incidents that belong to an activity with the given id. | [optional]
 **failed_activity_id** | **string**| Restricts to incidents that were created due to the failure of an activity with the given id. | [optional]
 **cause_incident_id** | **string**| Restricts to incidents that have the given incident id as cause incident. | [optional]
 **root_cause_incident_id** | **string**| Restricts to incidents that have the given incident id as root cause incident. | [optional]
 **configuration** | **string**| Restricts to incidents that have the given parameter set as configuration. | [optional]
 **tenant_id_in** | **string**| Restricts to incidents that have one of the given comma-separated tenant ids. | [optional]
 **job_definition_id_in** | **string**| Restricts to incidents that have one of the given comma-separated job definition ids. | [optional]

### Return type

[**\OpenAPI\Client\Model\CountResultDto[]**](../Model/CountResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resolveIncident()`

```php
resolveIncident($id)
```

Resolve Incident

Resolves an incident with given id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the incident to be resolved.

try {
    $apiInstance->resolveIncident($id);
} catch (Exception $e) {
    echo 'Exception when calling IncidentApi->resolveIncident: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the incident to be resolved. |

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

## `setIncidentAnnotation()`

```php
setIncidentAnnotation($id, $annotation_dto)
```

Set Incident Annotation

Sets the annotation of an incident with given id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the incident to clear the annotation at.
$annotation_dto = {"annotation":"my annotation"}; // \OpenAPI\Client\Model\AnnotationDto

try {
    $apiInstance->setIncidentAnnotation($id, $annotation_dto);
} catch (Exception $e) {
    echo 'Exception when calling IncidentApi->setIncidentAnnotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the incident to clear the annotation at. |
 **annotation_dto** | [**\OpenAPI\Client\Model\AnnotationDto**](../Model/AnnotationDto.md)|  | [optional]

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
