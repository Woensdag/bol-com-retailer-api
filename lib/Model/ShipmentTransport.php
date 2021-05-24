<?php
/**
 * ShipmentTransport
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
 * ShipmentTransport Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentTransport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentTransport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transport_id' => 'int',
        'transporter_code' => 'string',
        'track_and_trace' => 'string',
        'shipping_label_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transport_id' => 'int64',
        'transporter_code' => null,
        'track_and_trace' => null,
        'shipping_label_id' => null
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
        'transport_id' => 'transportId',
        'transporter_code' => 'transporterCode',
        'track_and_trace' => 'trackAndTrace',
        'shipping_label_id' => 'shippingLabelId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transport_id' => 'setTransportId',
        'transporter_code' => 'setTransporterCode',
        'track_and_trace' => 'setTrackAndTrace',
        'shipping_label_id' => 'setShippingLabelId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transport_id' => 'getTransportId',
        'transporter_code' => 'getTransporterCode',
        'track_and_trace' => 'getTrackAndTrace',
        'shipping_label_id' => 'getShippingLabelId'
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
        $this->container['transport_id'] = isset($data['transport_id']) ? $data['transport_id'] : null;
        $this->container['transporter_code'] = isset($data['transporter_code']) ? $data['transporter_code'] : null;
        $this->container['track_and_trace'] = isset($data['track_and_trace']) ? $data['track_and_trace'] : null;
        $this->container['shipping_label_id'] = isset($data['shipping_label_id']) ? $data['shipping_label_id'] : null;
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
     * Gets transport_id
     *
     * @return int
     */
    public function getTransportId()
    {
        return $this->container['transport_id'];
    }

    /**
     * Sets transport_id
     *
     * @param int $transport_id The transport id.
     *
     * @return $this
     */
    public function setTransportId($transport_id)
    {
        $this->container['transport_id'] = $transport_id;

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
     * @param string $transporter_code Specify the transporter that will carry out the shipment.
     *
     * @return $this
     */
    public function setTransporterCode($transporter_code)
    {
        $this->container['transporter_code'] = $transporter_code;

        return $this;
    }

    /**
     * Gets track_and_trace
     *
     * @return string
     */
    public function getTrackAndTrace()
    {
        return $this->container['track_and_trace'];
    }

    /**
     * Sets track_and_trace
     *
     * @param string $track_and_trace The track and trace code that is associated with this transport.
     *
     * @return $this
     */
    public function setTrackAndTrace($track_and_trace)
    {
        $this->container['track_and_trace'] = $track_and_trace;

        return $this;
    }

    /**
     * Gets shipping_label_id
     *
     * @return string
     */
    public function getShippingLabelId()
    {
        return $this->container['shipping_label_id'];
    }

    /**
     * Sets shipping_label_id
     *
     * @param string $shipping_label_id The shipping label id.
     *
     * @return $this
     */
    public function setShippingLabelId($shipping_label_id)
    {
        $this->container['shipping_label_id'] = $shipping_label_id;

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


