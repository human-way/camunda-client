# # HistoricBatchQueryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batch_id** | **string** | Filter by batch id. | [optional]
**type** | **string** | Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/latest/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types. | [optional]
**completed** | **bool** | Filter completed or not completed batches. If the value is &#x60;true&#x60;, only completed batches, i.e., end time is set, are returned. Otherwise, if the value is &#x60;false&#x60;, only running batches, i.e., end time is null, are returned. | [optional]
**tenant_id_in** | **string[]** | Filter by a comma-separated list of tenant ids. A batch matches if it has one of the given tenant ids. | [optional]
**without_tenant_id** | **bool** | Only include batches which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
**sorting** | [**\OpenAPI\Client\Model\HistoricBatchQueryDtoSorting[]**](HistoricBatchQueryDtoSorting.md) | An array of criteria to sort the result by. Each element of the array is                        an object that specifies one ordering. The position in the array                        identifies the rank of an ordering, i.e., whether it is primary, secondary,                        etc. Has no effect for the &#x60;/count&#x60; endpoint | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
