# # JobDuedateDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**duedate** | [**\DateTime**](\DateTime.md) | The date to set when the job has the next execution. | [optional]
**cascade** | **bool** | A boolean value to indicate if modifications to the due date should cascade to subsequent jobs. (e.g. Modify the due date of a timer by +15 minutes. This flag indicates if a +15 minutes should be applied to all subsequent timers.) This flag only affects timer jobs and only works if due date is not null. Default: &#x60;false&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
