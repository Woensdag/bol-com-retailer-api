# Swagger\Client\OrdersApi

All URIs are relative to *https://api.bol.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrderItem**](OrdersApi.md#cancelOrderItem) | **PUT** /retailer/orders/cancellation | Cancel an order item by an order item id
[**getOrder**](OrdersApi.md#getOrder) | **GET** /retailer/orders/{order-id} | Get order
[**getOrders**](OrdersApi.md#getOrders) | **GET** /retailer/orders | Get orders
[**shipOrderItem**](OrdersApi.md#shipOrderItem) | **PUT** /retailer/orders/shipment | Ship order item


# **cancelOrderItem**
> \Swagger\Client\Model\ProcessStatus cancelOrderItem($body)

Cancel an order item by an order item id

This endpoint can be used to either confirm a cancellation request by the customer or to cancel an order item you yourself are unable to fulfil.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ContainerForTheOrderItemsThatHaveToBeCancelled_(); // \Swagger\Client\Model\ContainerForTheOrderItemsThatHaveToBeCancelled_ | 

try {
    $result = $apiInstance->cancelOrderItem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ContainerForTheOrderItemsThatHaveToBeCancelled_**](../Model/ContainerForTheOrderItemsThatHaveToBeCancelled_.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v5+json
 - **Accept**: application/vnd.retailer.v5+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \Swagger\Client\Model\Order getOrder($order_id)

Get order

Gets an order by order id. The order can be partially shipped or cancelled, the message contains the quantity shipped or cancelled items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = "order_id_example"; // string | The id of the order to get.

try {
    $result = $apiInstance->getOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The id of the order to get. |

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v5+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrders**
> \Swagger\Client\Model\ReducedOrders getOrders($page, $fulfilment_method, $status)

Get orders

Gets a paginated list of all orders sorted by date in descending order. To create a pick list you can set state to open.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The requested page number with a page size of 50 items.
$fulfilment_method = "FBR"; // string | The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
$status = "OPEN"; // string | Determines whether you want to retrieve orders including or excluding shipped and/or cancelled items.

try {
    $result = $apiInstance->getOrders($page, $fulfilment_method, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1]
 **fulfilment_method** | **string**| The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). | [optional] [default to FBR]
 **status** | **string**| Determines whether you want to retrieve orders including or excluding shipped and/or cancelled items. | [optional] [default to OPEN]

### Return type

[**\Swagger\Client\Model\ReducedOrders**](../Model/ReducedOrders.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.retailer.v5+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipOrderItem**
> \Swagger\Client\Model\ProcessStatus shipOrderItem($body)

Ship order item

Ship a single order item within a customer order by providing shipping information. In case you purchased a shipping label you can add the shippingLabelId to this message; in that case the transport element must be left empty. If you ship the item(s) using your own transporter method you must omit the shippingLabelId entirely.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ShipmentRequest(); // \Swagger\Client\Model\ShipmentRequest | 

try {
    $result = $apiInstance->shipOrderItem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->shipOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShipmentRequest**](../Model/ShipmentRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.retailer.v5+json
 - **Accept**: application/vnd.retailer.v5+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

