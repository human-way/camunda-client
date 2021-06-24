# # DeleteHistoricProcessInstancesDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**historic_process_instance_ids** | **string[]** | A list historic process instance ids to delete. | [optional]
**historic_process_instance_query** | [**\OpenAPI\Client\Model\HistoricProcessInstanceQueryDto**](HistoricProcessInstanceQueryDto.md) |  | [optional]
**delete_reason** | **string** | A string with delete reason. | [optional]
**fail_if_not_exists** | **bool** | If set to &#x60;false&#x60;, the request will still be successful if one ore more of the process ids are not found. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
