# # HistoricProcessInstanceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the process instance. | [optional]
**root_process_instance_id** | **string** | The process instance id of the root process instance that initiated the process. | [optional]
**super_process_instance_id** | **string** | The id of the parent process instance, if it exists. | [optional]
**super_case_instance_id** | **string** | The id of the parent case instance, if it exists. | [optional]
**case_instance_id** | **string** | The id of the parent case instance, if it exists. | [optional]
**process_definition_name** | **string** | The name of the process definition that this process instance belongs to. | [optional]
**process_definition_key** | **string** | The key of the process definition that this process instance belongs to. | [optional]
**process_definition_version** | **int** | The version of the process definition that this process instance belongs to. | [optional]
**process_definition_id** | **string** | The id of the process definition that this process instance belongs to. | [optional]
**business_key** | **string** | The business key of the process instance. | [optional]
**start_time** | [**\DateTime**](\DateTime.md) | The time the instance was started. Default [format](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**end_time** | [**\DateTime**](\DateTime.md) | The time the instance ended. Default [format](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**removal_time** | [**\DateTime**](\DateTime.md) | The time after which the instance should be removed by the History Cleanup job. Default [format](https://docs.camunda.org/manual/7.15/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**duration_in_millis** | **int** | The time the instance took to finish (in milliseconds). | [optional]
**start_user_id** | **string** | The id of the user who started the process instance. | [optional]
**start_activity_id** | **string** | The id of the initial activity that was executed (e.g., a start event). | [optional]
**delete_reason** | **string** | The provided delete reason in case the process instance was canceled during execution. | [optional]
**tenant_id** | **string** | The tenant id of the process instance. | [optional]
**state** | **string** | Last state of the process instance, possible values are:  &#x60;ACTIVE&#x60; - running process instance  &#x60;SUSPENDED&#x60; - suspended process instances  &#x60;COMPLETED&#x60; - completed through normal end event  &#x60;EXTERNALLY_TERMINATED&#x60; - terminated externally, for instance through REST API  &#x60;INTERNALLY_TERMINATED&#x60; - terminated internally, for instance by terminating boundary event | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
