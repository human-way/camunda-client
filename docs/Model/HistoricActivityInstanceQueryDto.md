# # HistoricActivityInstanceQueryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity_instance_id** | **string** | Filter by activity instance id. | [optional]
**process_instance_id** | **string** | Filter by process instance id. | [optional]
**process_definition_id** | **string** | Filter by process definition id. | [optional]
**execution_id** | **string** | Filter by the id of the execution that executed the activity instance. | [optional]
**activity_id** | **string** | Filter by the activity id (according to BPMN 2.0 XML). | [optional]
**activity_name** | **string** | Filter by the activity name (according to BPMN 2.0 XML). | [optional]
**activity_type** | **string** | Filter by activity type. | [optional]
**task_assignee** | **string** | Only include activity instances that are user tasks and assigned to a given user. | [optional]
**finished** | **bool** | Only include finished activity instances. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; behaves the same as when the property is not set. | [optional]
**unfinished** | **bool** | Only include unfinished activity instances. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; behaves the same as when the property is not set. | [optional]
**canceled** | **bool** | Only include canceled activity instances. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; behaves the same as when the property is not set. | [optional]
**complete_scope** | **bool** | Only include activity instances which completed a scope. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; behaves the same as when the property is not set. | [optional]
**started_before** | [**\DateTime**](\DateTime.md) | Restrict to instances that were started before the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
**started_after** | [**\DateTime**](\DateTime.md) | Restrict to instances that were started after the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
**finished_before** | [**\DateTime**](\DateTime.md) | Restrict to instances that were finished before the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
**finished_after** | [**\DateTime**](\DateTime.md) | Restrict to instances that were finished after the given date. By [default](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
**tenant_id_in** | **string[]** | Must be a JSON array of Strings. An activity instance must have one of the given tenant ids. | [optional]
**without_tenant_id** | **bool** | Only include historic activity instances that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**sorting** | [**\OpenAPI\Client\Model\HistoricActivityInstanceQueryDtoSorting[]**](HistoricActivityInstanceQueryDtoSorting.md) | Apply sorting of the result | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
