# CanadaPost\DefaultApi

All URIs are relative to *https://ct.soa-gw.canadapost.ca/rs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShipment**](DefaultApi.md#createShipment) | **POST** /{strCustomer}/{strMobo}/shipment | creates a Shipment
[**transmitShipment**](DefaultApi.md#transmitShipment) | **POST** /{strCustomer}/{strMobo}/manifest | transmits a Shipment


# **createShipment**
> \CanadaPost\Model\ShipmentInfo createShipment($str_customer, $str_mobo, $accept_language, $xmlbody)

creates a Shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = CanadaPost\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new CanadaPost\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$str_customer = "str_customer_example"; // string | Customer Number
$str_mobo = "str_mobo_example"; // string | Mailed On Behalf Of Custoner Number
$accept_language = "accept_language_example"; // string | 
$xmlbody = new \CanadaPost\Model\Shipment(); // \CanadaPost\Model\Shipment | Shipment data

try {
    $result = $apiInstance->createShipment($str_customer, $str_mobo, $accept_language, $xmlbody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **str_customer** | **string**| Customer Number |
 **str_mobo** | **string**| Mailed On Behalf Of Custoner Number |
 **accept_language** | **string**|  | [optional]
 **xmlbody** | [**\CanadaPost\Model\Shipment**](../Model/Shipment.md)| Shipment data | [optional]

### Return type

[**\CanadaPost\Model\ShipmentInfo**](../Model/ShipmentInfo.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.cpc.shipment-v8+xml
 - **Accept**: application/vnd.cpc.shipment-v8+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transmitShipment**
> \CanadaPost\Model\Manifests transmitShipment($str_customer, $str_mobo, $accept_language, $xmlbody)

transmits a Shipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = CanadaPost\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new CanadaPost\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$str_customer = "str_customer_example"; // string | Customer Number
$str_mobo = "str_mobo_example"; // string | Mailed On Behalf Of Custoner Number
$accept_language = "accept_language_example"; // string | 
$xmlbody = new \CanadaPost\Model\TransmitSet(); // \CanadaPost\Model\TransmitSet | Transmit set data

try {
    $result = $apiInstance->transmitShipment($str_customer, $str_mobo, $accept_language, $xmlbody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->transmitShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **str_customer** | **string**| Customer Number |
 **str_mobo** | **string**| Mailed On Behalf Of Custoner Number |
 **accept_language** | **string**|  | [optional]
 **xmlbody** | [**\CanadaPost\Model\TransmitSet**](../Model/TransmitSet.md)| Transmit set data | [optional]

### Return type

[**\CanadaPost\Model\Manifests**](../Model/Manifests.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/vnd.cpc.shipment-v8+xml
 - **Accept**: application/vnd.cpc.shipment-v8+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

