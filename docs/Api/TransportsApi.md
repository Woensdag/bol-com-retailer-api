# Swagger\Client\TransportsApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTransportInformationByTransportId**](TransportsApi.md#addTransportInformationByTransportId) | **PUT** /retailer/transports/{transport-id} | Add transport information by transport id


# **addTransportInformationByTransportId**
> \Swagger\Client\Model\ProcessStatus addTransportInformationByTransportId($transport_id, $body)

Add transport information by transport id

Add information to an existing transport. The transport id is part of the shipment. You can retrieve the transport id through the GET shipment list request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TransportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transport_id = "transport_id_example"; // string | The transport id.
$body = new \Swagger\Client\Model\ChangeTransportRequest(); // \Swagger\Client\Model\ChangeTransportRequest | The change transport requested by the user.

try {
    $result = $apiInstance->addTransportInformationByTransportId($transport_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportsApi->addTransportInformationByTransportId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transport_id** | **string**| The transport id. |
 **body** | [**\Swagger\Client\Model\ChangeTransportRequest**](../Model/ChangeTransportRequest.md)| The change transport requested by the user. | [optional]

### Return type

[**\Swagger\Client\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v5+json
 - **Accept**: application/vnd.retailer.v5+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

