<?php
/**
 * ReplenishmentResponse
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
 * ReplenishmentResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReplenishmentResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReplenishmentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'replenishment_id' => 'string',
        'creation_date_time' => '\DateTime',
        'reference' => 'string',
        'labeling_by_bol' => 'bool',
        'state' => 'string',
        'delivery_information' => '\Swagger\Client\Model\DeliveryInformation',
        'pickup_appointment' => '\Swagger\Client\Model\PickupAppointment',
        'number_of_load_carriers' => 'int',
        'load_carriers' => '\Swagger\Client\Model\LoadCarrier[]',
        'lines' => '\Swagger\Client\Model\ReplenishmentLine[]',
        'invalid_lines' => '\Swagger\Client\Model\InvalidReplenishmentLine[]',
        'state_transitions' => '\Swagger\Client\Model\StateTransition[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'replenishment_id' => null,
        'creation_date_time' => 'date-time',
        'reference' => null,
        'labeling_by_bol' => null,
        'state' => null,
        'delivery_information' => null,
        'pickup_appointment' => null,
        'number_of_load_carriers' => 'int32',
        'load_carriers' => null,
        'lines' => null,
        'invalid_lines' => null,
        'state_transitions' => null
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
        'replenishment_id' => 'replenishmentId',
        'creation_date_time' => 'creationDateTime',
        'reference' => 'reference',
        'labeling_by_bol' => 'labelingByBol',
        'state' => 'state',
        'delivery_information' => 'deliveryInformation',
        'pickup_appointment' => 'pickupAppointment',
        'number_of_load_carriers' => 'numberOfLoadCarriers',
        'load_carriers' => 'loadCarriers',
        'lines' => 'lines',
        'invalid_lines' => 'invalidLines',
        'state_transitions' => 'stateTransitions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'replenishment_id' => 'setReplenishmentId',
        'creation_date_time' => 'setCreationDateTime',
        'reference' => 'setReference',
        'labeling_by_bol' => 'setLabelingByBol',
        'state' => 'setState',
        'delivery_information' => 'setDeliveryInformation',
        'pickup_appointment' => 'setPickupAppointment',
        'number_of_load_carriers' => 'setNumberOfLoadCarriers',
        'load_carriers' => 'setLoadCarriers',
        'lines' => 'setLines',
        'invalid_lines' => 'setInvalidLines',
        'state_transitions' => 'setStateTransitions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'replenishment_id' => 'getReplenishmentId',
        'creation_date_time' => 'getCreationDateTime',
        'reference' => 'getReference',
        'labeling_by_bol' => 'getLabelingByBol',
        'state' => 'getState',
        'delivery_information' => 'getDeliveryInformation',
        'pickup_appointment' => 'getPickupAppointment',
        'number_of_load_carriers' => 'getNumberOfLoadCarriers',
        'load_carriers' => 'getLoadCarriers',
        'lines' => 'getLines',
        'invalid_lines' => 'getInvalidLines',
        'state_transitions' => 'getStateTransitions'
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

    const STATE_ANNOUNCED = 'ANNOUNCED';
    const STATE_IN_TRANSIT = 'IN_TRANSIT';
    const STATE_ARRIVED_AT_WH = 'ARRIVED_AT_WH';
    const STATE_IN_PROGRESS_AT_WH = 'IN_PROGRESS_AT_WH';
    const STATE_CANCELLED = 'CANCELLED';
    const STATE_DONE = 'DONE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ANNOUNCED,
            self::STATE_IN_TRANSIT,
            self::STATE_ARRIVED_AT_WH,
            self::STATE_IN_PROGRESS_AT_WH,
            self::STATE_CANCELLED,
            self::STATE_DONE,
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
        $this->container['replenishment_id'] = isset($data['replenishment_id']) ? $data['replenishment_id'] : null;
        $this->container['creation_date_time'] = isset($data['creation_date_time']) ? $data['creation_date_time'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['labeling_by_bol'] = isset($data['labeling_by_bol']) ? $data['labeling_by_bol'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['delivery_information'] = isset($data['delivery_information']) ? $data['delivery_information'] : null;
        $this->container['pickup_appointment'] = isset($data['pickup_appointment']) ? $data['pickup_appointment'] : null;
        $this->container['number_of_load_carriers'] = isset($data['number_of_load_carriers']) ? $data['number_of_load_carriers'] : null;
        $this->container['load_carriers'] = isset($data['load_carriers']) ? $data['load_carriers'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['invalid_lines'] = isset($data['invalid_lines']) ? $data['invalid_lines'] : null;
        $this->container['state_transitions'] = isset($data['state_transitions']) ? $data['state_transitions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['replenishment_id'] === null) {
            $invalidProperties[] = "'replenishment_id' can't be null";
        }
        if ($this->container['creation_date_time'] === null) {
            $invalidProperties[] = "'creation_date_time' can't be null";
        }
        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['labeling_by_bol'] === null) {
            $invalidProperties[] = "'labeling_by_bol' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['delivery_information'] === null) {
            $invalidProperties[] = "'delivery_information' can't be null";
        }
        if ($this->container['load_carriers'] === null) {
            $invalidProperties[] = "'load_carriers' can't be null";
        }
        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
        }
        if ($this->container['invalid_lines'] === null) {
            $invalidProperties[] = "'invalid_lines' can't be null";
        }
        if ($this->container['state_transitions'] === null) {
            $invalidProperties[] = "'state_transitions' can't be null";
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
     * Gets replenishment_id
     *
     * @return string
     */
    public function getReplenishmentId()
    {
        return $this->container['replenishment_id'];
    }

    /**
     * Sets replenishment_id
     *
     * @param string $replenishment_id The unique identifier of the replenishment.
     *
     * @return $this
     */
    public function setReplenishmentId($replenishment_id)
    {
        $this->container['replenishment_id'] = $replenishment_id;

        return $this;
    }

    /**
     * Gets creation_date_time
     *
     * @return \DateTime
     */
    public function getCreationDateTime()
    {
        return $this->container['creation_date_time'];
    }

    /**
     * Sets creation_date_time
     *
     * @param \DateTime $creation_date_time The date and time when this replenishment was created. In ISO 8601 format.
     *
     * @return $this
     */
    public function setCreationDateTime($creation_date_time)
    {
        $this->container['creation_date_time'] = $creation_date_time;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference Custom user defined reference to identify the replenishment.
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets labeling_by_bol
     *
     * @return bool
     */
    public function getLabelingByBol()
    {
        return $this->container['labeling_by_bol'];
    }

    /**
     * Sets labeling_by_bol
     *
     * @param bool $labeling_by_bol Indicates whether the replenishment will be labeled by bol.com or not.
     *
     * @return $this
     */
    public function setLabelingByBol($labeling_by_bol)
    {
        $this->container['labeling_by_bol'] = $labeling_by_bol;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Indicates the state of this replenishment order.
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets delivery_information
     *
     * @return \Swagger\Client\Model\DeliveryInformation
     */
    public function getDeliveryInformation()
    {
        return $this->container['delivery_information'];
    }

    /**
     * Sets delivery_information
     *
     * @param \Swagger\Client\Model\DeliveryInformation $delivery_information delivery_information
     *
     * @return $this
     */
    public function setDeliveryInformation($delivery_information)
    {
        $this->container['delivery_information'] = $delivery_information;

        return $this;
    }

    /**
     * Gets pickup_appointment
     *
     * @return \Swagger\Client\Model\PickupAppointment
     */
    public function getPickupAppointment()
    {
        return $this->container['pickup_appointment'];
    }

    /**
     * Sets pickup_appointment
     *
     * @param \Swagger\Client\Model\PickupAppointment $pickup_appointment pickup_appointment
     *
     * @return $this
     */
    public function setPickupAppointment($pickup_appointment)
    {
        $this->container['pickup_appointment'] = $pickup_appointment;

        return $this;
    }

    /**
     * Gets number_of_load_carriers
     *
     * @return int
     */
    public function getNumberOfLoadCarriers()
    {
        return $this->container['number_of_load_carriers'];
    }

    /**
     * Sets number_of_load_carriers
     *
     * @param int $number_of_load_carriers The number of load carriers in this shipment.
     *
     * @return $this
     */
    public function setNumberOfLoadCarriers($number_of_load_carriers)
    {
        $this->container['number_of_load_carriers'] = $number_of_load_carriers;

        return $this;
    }

    /**
     * Gets load_carriers
     *
     * @return \Swagger\Client\Model\LoadCarrier[]
     */
    public function getLoadCarriers()
    {
        return $this->container['load_carriers'];
    }

    /**
     * Sets load_carriers
     *
     * @param \Swagger\Client\Model\LoadCarrier[] $load_carriers load_carriers
     *
     * @return $this
     */
    public function setLoadCarriers($load_carriers)
    {
        $this->container['load_carriers'] = $load_carriers;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \Swagger\Client\Model\ReplenishmentLine[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Swagger\Client\Model\ReplenishmentLine[] $lines lines
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets invalid_lines
     *
     * @return \Swagger\Client\Model\InvalidReplenishmentLine[]
     */
    public function getInvalidLines()
    {
        return $this->container['invalid_lines'];
    }

    /**
     * Sets invalid_lines
     *
     * @param \Swagger\Client\Model\InvalidReplenishmentLine[] $invalid_lines invalid_lines
     *
     * @return $this
     */
    public function setInvalidLines($invalid_lines)
    {
        $this->container['invalid_lines'] = $invalid_lines;

        return $this;
    }

    /**
     * Gets state_transitions
     *
     * @return \Swagger\Client\Model\StateTransition[]
     */
    public function getStateTransitions()
    {
        return $this->container['state_transitions'];
    }

    /**
     * Sets state_transitions
     *
     * @param \Swagger\Client\Model\StateTransition[] $state_transitions state_transitions
     *
     * @return $this
     */
    public function setStateTransitions($state_transitions)
    {
        $this->container['state_transitions'] = $state_transitions;

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


