# # HistoricIncidentDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the incident. | [optional]
**process_definition_key** | **string** | The key of the process definition this incident is associated with. | [optional]
**process_definition_id** | **string** | The id of the process definition this incident is associated with. | [optional]
**process_instance_id** | **string** | The key of the process definition this incident is associated with. | [optional]
**execution_id** | **string** | The id of the execution this incident is associated with. | [optional]
**root_process_instance_id** | **string** | The process instance id of the root process instance that initiated the process containing this incident. | [optional]
**create_time** | [**\DateTime**](\DateTime.md) | The time this incident happened.  [Default format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**end_time** | [**\DateTime**](\DateTime.md) | The time this incident has been deleted or resolved.  [Default format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**removal_time** | [**\DateTime**](\DateTime.md) | The time after which the incident should be removed by the History Cleanup job. [Default format](https://docs.camunda.org/manual/latest/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional]
**incident_type** | **string** | The type of incident, for example: &#x60;failedJobs&#x60; will be returned in case of an incident which identified a failed job during the execution of a process instance. See the [User Guide](/manual/develop/user- guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
**activity_id** | **string** | The id of the activity this incident is associated with. | [optional]
**failed_activity_id** | **string** | The id of the activity on which the last exception occurred. | [optional]
**cause_incident_id** | **string** | The id of the associated cause incident which has been triggered. | [optional]
**root_cause_incident_id** | **string** | The id of the associated root cause incident which has been triggered. | [optional]
**configuration** | **string** | The payload of this incident. | [optional]
**history_configuration** | **string** | The payload of this incident at the time when it occurred. | [optional]
**incident_message** | **string** | The message of this incident. | [optional]
**tenant_id** | **string** | The id of the tenant this incident is associated with. | [optional]
**job_definition_id** | **string** | The job definition id the incident is associated with. | [optional]
**open** | **bool** | If true, this incident is open. | [optional]
**deleted** | **bool** | If true, this incident has been deleted. | [optional]
**resolved** | **bool** | If true, this incident has been resolved. | [optional]
**annotation** | **string** | The annotation set to the incident. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
