# 
Library for Canada Post REST API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/spysystem/canadapost-client.git"
    }
  ],
  "require": {
    "spysystem/canadapost-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
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

## Documentation for API Endpoints

All URIs are relative to *https://ct.soa-gw.canadapost.ca/rs*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**createShipment**](docs/Api/DefaultApi.md#createshipment) | **POST** /{strCustomer}/{strMobo}/shipment | creates a Shipment
*DefaultApi* | [**transmitShipment**](docs/Api/DefaultApi.md#transmitshipment) | **POST** /{strCustomer}/{strMobo}/manifest | transmits a Shipment


## Documentation For Models

 - [AddressDetails](docs/Model/AddressDetails.md)
 - [DeliveryCustoms](docs/Model/DeliveryCustoms.md)
 - [DeliveryItem](docs/Model/DeliveryItem.md)
 - [DeliveryParcelCharacteristics](docs/Model/DeliveryParcelCharacteristics.md)
 - [DeliveryPreferences](docs/Model/DeliveryPreferences.md)
 - [DeliveryPrintPreferences](docs/Model/DeliveryPrintPreferences.md)
 - [DeliveryReferences](docs/Model/DeliveryReferences.md)
 - [DeliverySettlementInfo](docs/Model/DeliverySettlementInfo.md)
 - [DeliverySpec](docs/Model/DeliverySpec.md)
 - [Destination](docs/Model/Destination.md)
 - [ErrorResponseObject](docs/Model/ErrorResponseObject.md)
 - [ErrorResponseMessage](docs/Model/ErrorResponseObjectInner.md)
 - [Manifest](docs/Model/Manifest.md)
 - [Manifests](docs/Model/Manifests.md)
 - [ManifestsInner](docs/Model/ManifestsInner.md)
 - [Sender](docs/Model/Sender.md)
 - [Shipment](docs/Model/Shipment.md)
 - [ShipmentInfo](docs/Model/ShipmentInfo.md)
 - [ShipmentinfoLinks](docs/Model/ShipmentinfoLinks.md)
 - [Shipments](docs/Model/Shipments.md)
 - [TransmitSet](docs/Model/TransmitSet.md)
 - [TransmitsetManifestaddress](docs/Model/TransmitsetManifestaddress.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author




