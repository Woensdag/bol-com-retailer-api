# CreateReplenishmentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | Custom user reference for this replenishment. Must contain at least 1 digit and only upper case characters allowed. | 
**delivery_info** | [**\Swagger\Client\Model\CreateDeliveryInfo**](CreateDeliveryInfo.md) |  | [optional] 
**labeling_by_bol** | **bool** | Indicates whether the replenishment will be labeled by bol.com or not. | 
**number_of_load_carriers** | **int** | The number of parcels in this replenishment. | 
**pickup_appointment** | [**\Swagger\Client\Model\CreatePickupAppointment**](CreatePickupAppointment.md) |  | [optional] 
**lines** | [**\Swagger\Client\Model\CreateReplenishmentLine[]**](CreateReplenishmentLine.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


