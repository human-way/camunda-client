# # HistoricTaskInstanceReportResultDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**task_name** | **string** | The name of the task. It is only available when the &#x60;groupBy&#x60; parameter is set to &#x60;taskName&#x60;. Else the value is &#x60;null&#x60;.  **Note:** This property is only set for a historic task report object. In these cases, the value of the &#x60;reportType&#x60; query parameter is &#x60;count&#x60;. | [optional]
**count** | **int** | The number of tasks which have the given definition.  **Note:** This property is only set for a historic task report object. In these cases, the value of the &#x60;reportType&#x60; query parameter is &#x60;count&#x60;. | [optional]
**process_definition_key** | **string** | The key of the process definition.  **Note:** This property is only set for a historic task report object. In these cases, the value of the &#x60;reportType&#x60; query parameter is &#x60;count&#x60;. | [optional]
**process_definition_id** | **string** | The id of the process definition.  **Note:** This property is only set for a historic task report object. In these cases, the value of the &#x60;reportType&#x60; query parameter is &#x60;count&#x60;. | [optional]
**process_definition_name** | **string** | The name of the process definition.  **Note:** This property is only set for a historic task report object. In these cases, the value of the &#x60;reportType&#x60; query parameter is &#x60;count&#x60;. | [optional]
**period** | **int** | Specifies a span of time within a year. **Note:** The period must be interpreted in conjunction with the returned &#x60;periodUnit&#x60;.  **Note:** This property is only set for a duration report object. In these cases, the value of the &#x60;reportType&#x60; query parameter is &#x60;duration&#x60;. | [optional]
**period_unit** | **string** | The unit of the given period. Possible values are &#x60;MONTH&#x60; and &#x60;QUARTER&#x60;.  **Note:** This property is only set for a duration report object. In these cases, the value of the &#x60;reportType&#x60; query parameter is &#x60;duration&#x60;. | [optional]
**minimum** | **int** | The smallest duration in milliseconds of all completed process instances which were started in the given period.  **Note:** This property is only set for a duration report object. In these cases, the value of the &#x60;reportType&#x60; query parameter is &#x60;duration&#x60;. | [optional]
**maximum** | **int** | The greatest duration in milliseconds of all completed process instances which were started in the given period.  **Note:** This property is only set for a duration report object. In these cases, the value of the &#x60;reportType&#x60; query parameter is &#x60;duration&#x60;. | [optional]
**average** | **int** | The average duration in milliseconds of all completed process instances which were started in the given period.  **Note:** This property is only set for a duration report object. In these cases, the value of the &#x60;reportType&#x60; query parameter is &#x60;duration&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
