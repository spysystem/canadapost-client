<?php
/**
 * AddressDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  CanadaPost
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Canada Post REST Client
 *
 * Library for Canada Post REST API
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CanadaPost\Model;

use \ArrayAccess;
use \CanadaPost\ObjectSerializer;

/**
 * AddressDetails Class Doc Comment
 *
 * @category Class
 * @package  CanadaPost
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'address-details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_line_1' => 'string',
        'address_line_2' => 'string',
        'city' => 'string',
        'prov_state' => 'string',
        'country_code' => 'string',
        'postal_zip_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_line_1' => null,
        'address_line_2' => null,
        'city' => null,
        'prov_state' => null,
        'country_code' => null,
        'postal_zip_code' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address_line_1' => 'address-line-1',
        'address_line_2' => 'address-line-2',
        'city' => 'city',
        'prov_state' => 'prov-state',
        'country_code' => 'country-code',
        'postal_zip_code' => 'postal-zip-code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_line_1' => 'setAddressLine1',
        'address_line_2' => 'setAddressLine2',
        'city' => 'setCity',
        'prov_state' => 'setProvState',
        'country_code' => 'setCountryCode',
        'postal_zip_code' => 'setPostalZipCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_line_1' => 'getAddressLine1',
        'address_line_2' => 'getAddressLine2',
        'city' => 'getCity',
        'prov_state' => 'getProvState',
        'country_code' => 'getCountryCode',
        'postal_zip_code' => 'getPostalZipCode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['address_line_1'] = isset($data['address_line_1']) ? $data['address_line_1'] : null;
        $this->container['address_line_2'] = isset($data['address_line_2']) ? $data['address_line_2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['prov_state'] = isset($data['prov_state']) ? $data['prov_state'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['postal_zip_code'] = isset($data['postal_zip_code']) ? $data['postal_zip_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets address_line_1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line_1'];
    }

    /**
     * Sets address_line_1
     *
     * @param string $address_line_1 address_line_1
     *
     * @return $this
     */
    public function setAddressLine1($address_line_1)
    {
        $this->container['address_line_1'] = $address_line_1;

        return $this;
    }

    /**
     * Gets address_line_2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['address_line_2'];
    }

    /**
     * Sets address_line_2
     *
     * @param string $address_line_2 address_line_2
     *
     * @return $this
     */
    public function setAddressLine2($address_line_2)
    {
        $this->container['address_line_2'] = $address_line_2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets prov_state
     *
     * @return string
     */
    public function getProvState()
    {
        return $this->container['prov_state'];
    }

    /**
     * Sets prov_state
     *
     * @param string $prov_state prov_state
     *
     * @return $this
     */
    public function setProvState($prov_state)
    {
        $this->container['prov_state'] = $prov_state;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets postal_zip_code
     *
     * @return string
     */
    public function getPostalZipCode()
    {
        return $this->container['postal_zip_code'];
    }

    /**
     * Sets postal_zip_code
     *
     * @param string $postal_zip_code postal_zip_code
     *
     * @return $this
     */
    public function setPostalZipCode($postal_zip_code)
    {
        $this->container['postal_zip_code'] = $postal_zip_code;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


