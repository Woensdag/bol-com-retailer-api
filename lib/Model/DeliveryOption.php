<?php
/**
 * DeliveryOption
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
 * DeliveryOption Class Doc Comment
 *
 * @category Class
 * @description A delivery option shows how and the costs of a transport for a shippable configuration
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeliveryOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeliveryOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipping_label_offer_id' => 'string',
        'valid_until_date' => '\DateTime',
        'transporter_code' => 'string',
        'label_type' => 'string',
        'label_price' => '\Swagger\Client\Model\LabelPrice',
        'package_restrictions' => '\Swagger\Client\Model\PackageRestrictions',
        'handover_details' => '\Swagger\Client\Model\HandoverDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipping_label_offer_id' => null,
        'valid_until_date' => 'date',
        'transporter_code' => null,
        'label_type' => null,
        'label_price' => null,
        'package_restrictions' => null,
        'handover_details' => null
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
        'shipping_label_offer_id' => 'shippingLabelOfferId',
        'valid_until_date' => 'validUntilDate',
        'transporter_code' => 'transporterCode',
        'label_type' => 'labelType',
        'label_price' => 'labelPrice',
        'package_restrictions' => 'packageRestrictions',
        'handover_details' => 'handoverDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_label_offer_id' => 'setShippingLabelOfferId',
        'valid_until_date' => 'setValidUntilDate',
        'transporter_code' => 'setTransporterCode',
        'label_type' => 'setLabelType',
        'label_price' => 'setLabelPrice',
        'package_restrictions' => 'setPackageRestrictions',
        'handover_details' => 'setHandoverDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_label_offer_id' => 'getShippingLabelOfferId',
        'valid_until_date' => 'getValidUntilDate',
        'transporter_code' => 'getTransporterCode',
        'label_type' => 'getLabelType',
        'label_price' => 'getLabelPrice',
        'package_restrictions' => 'getPackageRestrictions',
        'handover_details' => 'getHandoverDetails'
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

    const LABEL_TYPE_PARCEL = 'PARCEL';
    const LABEL_TYPE_MAILBOX = 'MAILBOX';
    const LABEL_TYPE_MAILBOX_LIGHT = 'MAILBOX_LIGHT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelTypeAllowableValues()
    {
        return [
            self::LABEL_TYPE_PARCEL,
            self::LABEL_TYPE_MAILBOX,
            self::LABEL_TYPE_MAILBOX_LIGHT,
        ];
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
        $this->container['shipping_label_offer_id'] = isset($data['shipping_label_offer_id']) ? $data['shipping_label_offer_id'] : null;
        $this->container['valid_until_date'] = isset($data['valid_until_date']) ? $data['valid_until_date'] : null;
        $this->container['transporter_code'] = isset($data['transporter_code']) ? $data['transporter_code'] : null;
        $this->container['label_type'] = isset($data['label_type']) ? $data['label_type'] : null;
        $this->container['label_price'] = isset($data['label_price']) ? $data['label_price'] : null;
        $this->container['package_restrictions'] = isset($data['package_restrictions']) ? $data['package_restrictions'] : null;
        $this->container['handover_details'] = isset($data['handover_details']) ? $data['handover_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getLabelTypeAllowableValues();
        if (!is_null($this->container['label_type']) && !in_array($this->container['label_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'label_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['label_price'] === null) {
            $invalidProperties[] = "'label_price' can't be null";
        }
        if ($this->container['package_restrictions'] === null) {
            $invalidProperties[] = "'package_restrictions' can't be null";
        }
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
     * Gets shipping_label_offer_id
     *
     * @return string
     */
    public function getShippingLabelOfferId()
    {
        return $this->container['shipping_label_offer_id'];
    }

    /**
     * Sets shipping_label_offer_id
     *
     * @param string $shipping_label_offer_id Unique identifier for the shipping label offer.
     *
     * @return $this
     */
    public function setShippingLabelOfferId($shipping_label_offer_id)
    {
        $this->container['shipping_label_offer_id'] = $shipping_label_offer_id;

        return $this;
    }

    /**
     * Gets valid_until_date
     *
     * @return \DateTime
     */
    public function getValidUntilDate()
    {
        return $this->container['valid_until_date'];
    }

    /**
     * Sets valid_until_date
     *
     * @param \DateTime $valid_until_date The date until the delivery option (incl total price) is valid.
     *
     * @return $this
     */
    public function setValidUntilDate($valid_until_date)
    {
        $this->container['valid_until_date'] = $valid_until_date;

        return $this;
    }

    /**
     * Gets transporter_code
     *
     * @return string
     */
    public function getTransporterCode()
    {
        return $this->container['transporter_code'];
    }

    /**
     * Sets transporter_code
     *
     * @param string $transporter_code A code representing the transporter which is being used for transportation.
     *
     * @return $this
     */
    public function setTransporterCode($transporter_code)
    {
        $this->container['transporter_code'] = $transporter_code;

        return $this;
    }

    /**
     * Gets label_type
     *
     * @return string
     */
    public function getLabelType()
    {
        return $this->container['label_type'];
    }

    /**
     * Sets label_type
     *
     * @param string $label_type The type of the label, representing the way an item is being transported. MAILBOX is a mailbox package with delivery scan. MAILBOX_LIGHT is a mailbox package without delivery scan. PARCEL is a normal package.
     *
     * @return $this
     */
    public function setLabelType($label_type)
    {
        $allowedValues = $this->getLabelTypeAllowableValues();
        if (!is_null($label_type) && !in_array($label_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'label_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['label_type'] = $label_type;

        return $this;
    }

    /**
     * Gets label_price
     *
     * @return \Swagger\Client\Model\LabelPrice
     */
    public function getLabelPrice()
    {
        return $this->container['label_price'];
    }

    /**
     * Sets label_price
     *
     * @param \Swagger\Client\Model\LabelPrice $label_price label_price
     *
     * @return $this
     */
    public function setLabelPrice($label_price)
    {
        $this->container['label_price'] = $label_price;

        return $this;
    }

    /**
     * Gets package_restrictions
     *
     * @return \Swagger\Client\Model\PackageRestrictions
     */
    public function getPackageRestrictions()
    {
        return $this->container['package_restrictions'];
    }

    /**
     * Sets package_restrictions
     *
     * @param \Swagger\Client\Model\PackageRestrictions $package_restrictions package_restrictions
     *
     * @return $this
     */
    public function setPackageRestrictions($package_restrictions)
    {
        $this->container['package_restrictions'] = $package_restrictions;

        return $this;
    }

    /**
     * Gets handover_details
     *
     * @return \Swagger\Client\Model\HandoverDetails
     */
    public function getHandoverDetails()
    {
        return $this->container['handover_details'];
    }

    /**
     * Sets handover_details
     *
     * @param \Swagger\Client\Model\HandoverDetails $handover_details handover_details
     *
     * @return $this
     */
    public function setHandoverDetails($handover_details)
    {
        $this->container['handover_details'] = $handover_details;

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


