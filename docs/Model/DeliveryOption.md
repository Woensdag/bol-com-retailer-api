# DeliveryOption

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_label_offer_id** | **string** | Unique identifier for the shipping label offer. | [optional] 
**valid_until_date** | [**\DateTime**](\DateTime.md) | The date until the delivery option (incl total price) is valid. | [optional] 
**transporter_code** | **string** | A code representing the transporter which is being used for transportation. | [optional] 
**label_type** | **string** | The type of the label, representing the way an item is being transported. MAILBOX is a mailbox package with delivery scan. MAILBOX_LIGHT is a mailbox package without delivery scan. PARCEL is a normal package. | [optional] 
**label_price** | [**\Swagger\Client\Model\LabelPrice**](LabelPrice.md) |  | 
**package_restrictions** | [**\Swagger\Client\Model\PackageRestrictions**](PackageRestrictions.md) |  | 
**handover_details** | [**\Swagger\Client\Model\HandoverDetails**](HandoverDetails.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


