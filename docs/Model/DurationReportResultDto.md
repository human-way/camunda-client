# # DurationReportResultDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**period** | **int** | Specifies a timespan within a year. **Note:** The period must be interpreted in conjunction with the returned &#x60;periodUnit&#x60;. | [optional]
**period_unit** | **string** | The unit of the given period. Possible values are &#x60;MONTH&#x60; and &#x60;QUARTER&#x60;. | [optional]
**minimum** | **int** | The smallest duration in milliseconds of all completed process instances which were started in the given period. | [optional]
**maximum** | **int** | The greatest duration in milliseconds of all completed process instances which were started in the given period. | [optional]
**average** | **int** | The average duration in milliseconds of all completed process instances which were started in the given period. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
