<?php
/**
 * CustomerDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * v5
 *
 * The bol.com API for Retailers.
 *
 * OpenAPI spec version: 5.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CustomerDetails Class Doc Comment
 *
 * @category Class
 * @description Information related to the customer.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'salutation_code' => 'string',
        'first_name' => 'string',
        'surname' => 'string',
        'street_name' => 'string',
        'house_number' => 'string',
        'house_number_extended' => 'string',
        'extra_address_information' => 'string',
        'zip_code' => 'string',
        'city' => 'string',
        'country_code' => 'string',
        'email' => 'string',
        'delivery_phone_number' => 'string',
        'company' => 'string',
        'vat_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'salutation_code' => null,
        'first_name' => null,
        'surname' => null,
        'street_name' => null,
        'house_number' => null,
        'house_number_extended' => null,
        'extra_address_information' => null,
        'zip_code' => null,
        'city' => null,
        'country_code' => null,
        'email' => null,
        'delivery_phone_number' => null,
        'company' => null,
        'vat_number' => null
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
        'salutation_code' => 'salutationCode',
        'first_name' => 'firstName',
        'surname' => 'surname',
        'street_name' => 'streetName',
        'house_number' => 'houseNumber',
        'house_number_extended' => 'houseNumberExtended',
        'extra_address_information' => 'extraAddressInformation',
        'zip_code' => 'zipCode',
        'city' => 'city',
        'country_code' => 'countryCode',
        'email' => 'email',
        'delivery_phone_number' => 'deliveryPhoneNumber',
        'company' => 'company',
        'vat_number' => 'vatNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'salutation_code' => 'setSalutationCode',
        'first_name' => 'setFirstName',
        'surname' => 'setSurname',
        'street_name' => 'setStreetName',
        'house_number' => 'setHouseNumber',
        'house_number_extended' => 'setHouseNumberExtended',
        'extra_address_information' => 'setExtraAddressInformation',
        'zip_code' => 'setZipCode',
        'city' => 'setCity',
        'country_code' => 'setCountryCode',
        'email' => 'setEmail',
        'delivery_phone_number' => 'setDeliveryPhoneNumber',
        'company' => 'setCompany',
        'vat_number' => 'setVatNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'salutation_code' => 'getSalutationCode',
        'first_name' => 'getFirstName',
        'surname' => 'getSurname',
        'street_name' => 'getStreetName',
        'house_number' => 'getHouseNumber',
        'house_number_extended' => 'getHouseNumberExtended',
        'extra_address_information' => 'getExtraAddressInformation',
        'zip_code' => 'getZipCode',
        'city' => 'getCity',
        'country_code' => 'getCountryCode',
        'email' => 'getEmail',
        'delivery_phone_number' => 'getDeliveryPhoneNumber',
        'company' => 'getCompany',
        'vat_number' => 'getVatNumber'
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
        $this->container['salutation_code'] = isset($data['salutation_code']) ? $data['salutation_code'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['street_name'] = isset($data['street_name']) ? $data['street_name'] : null;
        $this->container['house_number'] = isset($data['house_number']) ? $data['house_number'] : null;
        $this->container['house_number_extended'] = isset($data['house_number_extended']) ? $data['house_number_extended'] : null;
        $this->container['extra_address_information'] = isset($data['extra_address_information']) ? $data['extra_address_information'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['delivery_phone_number'] = isset($data['delivery_phone_number']) ? $data['delivery_phone_number'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['vat_number'] = isset($data['vat_number']) ? $data['vat_number'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets salutation_code
     *
     * @return string
     */
    public function getSalutationCode()
    {
        return $this->container['salutation_code'];
    }

    /**
     * Sets salutation_code
     *
     * @param string $salutation_code The salutation of the customer.
     *
     * @return $this
     */
    public function setSalutationCode($salutation_code)
    {
        $this->container['salutation_code'] = $salutation_code;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name The first name of the customer.
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string $surname The surname of the customer.
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return string
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string $street_name The street name.
     *
     * @return $this
     */
    public function setStreetName($street_name)
    {
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param string $house_number The house number.
     *
     * @return $this
     */
    public function setHouseNumber($house_number)
    {
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets house_number_extended
     *
     * @return string
     */
    public function getHouseNumberExtended()
    {
        return $this->container['house_number_extended'];
    }

    /**
     * Sets house_number_extended
     *
     * @param string $house_number_extended The extension on the house number.
     *
     * @return $this
     */
    public function setHouseNumberExtended($house_number_extended)
    {
        $this->container['house_number_extended'] = $house_number_extended;

        return $this;
    }

    /**
     * Gets extra_address_information
     *
     * @return string
     */
    public function getExtraAddressInformation()
    {
        return $this->container['extra_address_information'];
    }

    /**
     * Sets extra_address_information
     *
     * @param string $extra_address_information Additional information related to the address that helps in delivering the package.
     *
     * @return $this
     */
    public function setExtraAddressInformation($extra_address_information)
    {
        $this->container['extra_address_information'] = $extra_address_information;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string $zip_code The ZIP code in '1234AB' format for NL orders and '0000' format for BE orders.
     *
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

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
     * @param string $city The name of the city.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

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
     * @param string $country_code The country code.
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email A scrambled email address that can be used to contact the customer.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets delivery_phone_number
     *
     * @return string
     */
    public function getDeliveryPhoneNumber()
    {
        return $this->container['delivery_phone_number'];
    }

    /**
     * Sets delivery_phone_number
     *
     * @param string $delivery_phone_number The delivery phone number of the customer. Filled in case the order requires an appointment for delivering the goods.
     *
     * @return $this
     */
    public function setDeliveryPhoneNumber($delivery_phone_number)
    {
        $this->container['delivery_phone_number'] = $delivery_phone_number;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company The company name.
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string $vat_number The Value Added Tax (VAT) / BTW number for business sellers situated in the Netherlands.
     *
     * @return $this
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

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


