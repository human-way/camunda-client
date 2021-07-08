# # HistoricIdentityLinkLogDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id of the Historic identity link entry. | [optional]
**time** | [**\DateTime**](\DateTime.md) | The time when the identity link is logged.  [Default format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**type** | **string** | The type of identity link (candidate/assignee/owner). | [optional]
**user_id** | **string** | The id of the user/assignee. | [optional]
**group_id** | **string** | The id of the group. | [optional]
**task_id** | **string** | The id of the task. | [optional]
**process_definition_id** | **string** | The id of the process definition. | [optional]
**process_definition_key** | **string** | The key of the process definition. | [optional]
**operation_type** | **string** | Type of operation (add/delete). | [optional]
**assigner_id** | **string** | The id of the assigner. | [optional]
**tenant_id** | **string** | The id of the tenant. | [optional]
**removal_time** | [**\DateTime**](\DateTime.md) | The time after which the identity link should be removed by the History Cleanup job.  [Default format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**root_process_instance_id** | **string** | The process instance id of the root process instance that initiated the process containing this identity link. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
