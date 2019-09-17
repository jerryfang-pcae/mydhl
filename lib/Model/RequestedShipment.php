<?php
/**
 * RequestedShipment
 *
 * PHP version 5
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Integration for DHL Express MyDHL Service
 *
 * OpenAPI description for the Integration with MyDHL
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: thomas@spysystem.dk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MyDHL\Model;

use \ArrayAccess;
use \MyDHL\ObjectSerializer;

/**
 * RequestedShipment Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RequestedShipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RequestedShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ship_timestamp' => 'string',
        'pickup_location_close_time' => 'string',
        'special_pickup_instruction' => 'string',
        'pickup_location' => 'string',
        'payment_info' => 'string',
        'on_demand_delivery_url_request' => 'string',
        'get_rate_estimates' => 'string',
        'shipment_info' => '\MyDHL\Model\ShipmentInfo',
        'international_detail' => '\MyDHL\Model\InternationalDetail',
        'on_demand_delivery_options' => '\MyDHL\Model\OnDemandDeliveryOptions',
        'ship' => '\MyDHL\Model\Ship',
        'packages' => '\MyDHL\Model\Packages',
        'shipment_notifications' => '\MyDHL\Model\ShipmentNotifications'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ship_timestamp' => null,
        'pickup_location_close_time' => null,
        'special_pickup_instruction' => null,
        'pickup_location' => null,
        'payment_info' => null,
        'on_demand_delivery_url_request' => null,
        'get_rate_estimates' => null,
        'shipment_info' => null,
        'international_detail' => null,
        'on_demand_delivery_options' => null,
        'ship' => null,
        'packages' => null,
        'shipment_notifications' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'ship_timestamp' => false,
        'pickup_location_close_time' => false,
        'special_pickup_instruction' => false,
        'pickup_location' => false,
        'payment_info' => false,
        'on_demand_delivery_url_request' => false,
        'get_rate_estimates' => false,
        'shipment_info' => false,
        'international_detail' => false,
        'on_demand_delivery_options' => false,
        'ship' => false,
        'packages' => false,
        'shipment_notifications' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of property to nullable mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPINullables()
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array
     */
    public function getOpenAPINullablesSetToNull()
    {
        return $this->openAPINullablesSetToNull;
    }

    public function setOpenAPINullablesSetToNull($nullablesSetToNull)
    {
        $this->openAPINullablesSetToNull=$nullablesSetToNull;

        return $this;
    }

    /**
     * Checks if a property is nullable
     *
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        if (isset(self::$openAPINullables[$property])) {
            return self::$openAPINullables[$property];
        }

        return false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        if (in_array($property, $this->getOpenAPINullablesSetToNull())) {
            return true;
        }
        return false;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ship_timestamp' => 'ShipTimestamp',
        'pickup_location_close_time' => 'PickupLocationCloseTime',
        'special_pickup_instruction' => 'SpecialPickupInstruction',
        'pickup_location' => 'PickupLocation',
        'payment_info' => 'PaymentInfo',
        'on_demand_delivery_url_request' => 'OnDemandDeliveryURLRequest',
        'get_rate_estimates' => 'GetRateEstimates',
        'shipment_info' => 'ShipmentInfo',
        'international_detail' => 'InternationalDetail',
        'on_demand_delivery_options' => 'OnDemandDeliveryOptions',
        'ship' => 'Ship',
        'packages' => 'Packages',
        'shipment_notifications' => 'ShipmentNotifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ship_timestamp' => 'setShipTimestamp',
        'pickup_location_close_time' => 'setPickupLocationCloseTime',
        'special_pickup_instruction' => 'setSpecialPickupInstruction',
        'pickup_location' => 'setPickupLocation',
        'payment_info' => 'setPaymentInfo',
        'on_demand_delivery_url_request' => 'setOnDemandDeliveryUrlRequest',
        'get_rate_estimates' => 'setGetRateEstimates',
        'shipment_info' => 'setShipmentInfo',
        'international_detail' => 'setInternationalDetail',
        'on_demand_delivery_options' => 'setOnDemandDeliveryOptions',
        'ship' => 'setShip',
        'packages' => 'setPackages',
        'shipment_notifications' => 'setShipmentNotifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ship_timestamp' => 'getShipTimestamp',
        'pickup_location_close_time' => 'getPickupLocationCloseTime',
        'special_pickup_instruction' => 'getSpecialPickupInstruction',
        'pickup_location' => 'getPickupLocation',
        'payment_info' => 'getPaymentInfo',
        'on_demand_delivery_url_request' => 'getOnDemandDeliveryUrlRequest',
        'get_rate_estimates' => 'getGetRateEstimates',
        'shipment_info' => 'getShipmentInfo',
        'international_detail' => 'getInternationalDetail',
        'on_demand_delivery_options' => 'getOnDemandDeliveryOptions',
        'ship' => 'getShip',
        'packages' => 'getPackages',
        'shipment_notifications' => 'getShipmentNotifications'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('ship_timestamp', $data, null);
        $this->setIfExists('pickup_location_close_time', $data, null);
        $this->setIfExists('special_pickup_instruction', $data, null);
        $this->setIfExists('pickup_location', $data, null);
        $this->setIfExists('payment_info', $data, null);
        $this->setIfExists('on_demand_delivery_url_request', $data, null);
        $this->setIfExists('get_rate_estimates', $data, null);
        $this->setIfExists('shipment_info', $data, null);
        $this->setIfExists('international_detail', $data, null);
        $this->setIfExists('on_demand_delivery_options', $data, null);
        $this->setIfExists('ship', $data, null);
        $this->setIfExists('packages', $data, null);
        $this->setIfExists('shipment_notifications', $data, null);
    }

    public function setIfExists(string $variableName, $fields, $defaultValue)
    {
        if (is_array($fields) && array_key_exists($variableName, $fields) && is_null($fields[$variableName]) && self::isNullable($variableName)) {
            array_push($this->openAPINullablesSetToNull, $variableName);
        }

        $this->container[$variableName] = isset($fields[$variableName]) ? $fields[$variableName] : $defaultValue;

        return $this;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ship_timestamp'] === null) {
            $invalidProperties[] = "'ship_timestamp' can't be null";
        }
        if ($this->container['payment_info'] === null) {
            $invalidProperties[] = "'payment_info' can't be null";
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
     * Gets ship_timestamp
     *
     * @return string
     */
    public function getShipTimestamp()
    {
        return $this->container['ship_timestamp'];
    }

    /**
     * Sets ship_timestamp
     *
     * @param string $ship_timestamp ship_timestamp
     *
     * @return $this
     */
    public function setShipTimestamp($ship_timestamp)
    {


        if (is_null($ship_timestamp)) {
            throw new \InvalidArgumentException('non-nullable ship_timestamp cannot be null');
        }

        $this->container['ship_timestamp'] = $ship_timestamp;

        return $this;
    }

    /**
     * Gets pickup_location_close_time
     *
     * @return string|null
     */
    public function getPickupLocationCloseTime()
    {
        return $this->container['pickup_location_close_time'];
    }

    /**
     * Sets pickup_location_close_time
     *
     * @param string|null $pickup_location_close_time pickup_location_close_time
     *
     * @return $this
     */
    public function setPickupLocationCloseTime($pickup_location_close_time)
    {


        if (is_null($pickup_location_close_time)) {
            throw new \InvalidArgumentException('non-nullable pickup_location_close_time cannot be null');
        }

        $this->container['pickup_location_close_time'] = $pickup_location_close_time;

        return $this;
    }

    /**
     * Gets special_pickup_instruction
     *
     * @return string|null
     */
    public function getSpecialPickupInstruction()
    {
        return $this->container['special_pickup_instruction'];
    }

    /**
     * Sets special_pickup_instruction
     *
     * @param string|null $special_pickup_instruction special_pickup_instruction
     *
     * @return $this
     */
    public function setSpecialPickupInstruction($special_pickup_instruction)
    {


        if (is_null($special_pickup_instruction)) {
            throw new \InvalidArgumentException('non-nullable special_pickup_instruction cannot be null');
        }

        $this->container['special_pickup_instruction'] = $special_pickup_instruction;

        return $this;
    }

    /**
     * Gets pickup_location
     *
     * @return string|null
     */
    public function getPickupLocation()
    {
        return $this->container['pickup_location'];
    }

    /**
     * Sets pickup_location
     *
     * @param string|null $pickup_location pickup_location
     *
     * @return $this
     */
    public function setPickupLocation($pickup_location)
    {


        if (is_null($pickup_location)) {
            throw new \InvalidArgumentException('non-nullable pickup_location cannot be null');
        }

        $this->container['pickup_location'] = $pickup_location;

        return $this;
    }

    /**
     * Gets payment_info
     *
     * @return string
     */
    public function getPaymentInfo()
    {
        return $this->container['payment_info'];
    }

    /**
     * Sets payment_info
     *
     * @param string $payment_info payment_info
     *
     * @return $this
     */
    public function setPaymentInfo($payment_info)
    {


        if (is_null($payment_info)) {
            throw new \InvalidArgumentException('non-nullable payment_info cannot be null');
        }

        $this->container['payment_info'] = $payment_info;

        return $this;
    }

    /**
     * Gets on_demand_delivery_url_request
     *
     * @return string|null
     */
    public function getOnDemandDeliveryUrlRequest()
    {
        return $this->container['on_demand_delivery_url_request'];
    }

    /**
     * Sets on_demand_delivery_url_request
     *
     * @param string|null $on_demand_delivery_url_request on_demand_delivery_url_request
     *
     * @return $this
     */
    public function setOnDemandDeliveryUrlRequest($on_demand_delivery_url_request)
    {


        if (is_null($on_demand_delivery_url_request)) {
            throw new \InvalidArgumentException('non-nullable on_demand_delivery_url_request cannot be null');
        }

        $this->container['on_demand_delivery_url_request'] = $on_demand_delivery_url_request;

        return $this;
    }

    /**
     * Gets get_rate_estimates
     *
     * @return string|null
     */
    public function getGetRateEstimates()
    {
        return $this->container['get_rate_estimates'];
    }

    /**
     * Sets get_rate_estimates
     *
     * @param string|null $get_rate_estimates get_rate_estimates
     *
     * @return $this
     */
    public function setGetRateEstimates($get_rate_estimates)
    {


        if (is_null($get_rate_estimates)) {
            throw new \InvalidArgumentException('non-nullable get_rate_estimates cannot be null');
        }

        $this->container['get_rate_estimates'] = $get_rate_estimates;

        return $this;
    }

    /**
     * Gets shipment_info
     *
     * @return \MyDHL\Model\ShipmentInfo|null
     */
    public function getShipmentInfo()
    {
        return $this->container['shipment_info'];
    }

    /**
     * Sets shipment_info
     *
     * @param \MyDHL\Model\ShipmentInfo|null $shipment_info shipment_info
     *
     * @return $this
     */
    public function setShipmentInfo($shipment_info)
    {


        if (is_null($shipment_info)) {
            throw new \InvalidArgumentException('non-nullable shipment_info cannot be null');
        }

        $this->container['shipment_info'] = $shipment_info;

        return $this;
    }

    /**
     * Gets international_detail
     *
     * @return \MyDHL\Model\InternationalDetail|null
     */
    public function getInternationalDetail()
    {
        return $this->container['international_detail'];
    }

    /**
     * Sets international_detail
     *
     * @param \MyDHL\Model\InternationalDetail|null $international_detail international_detail
     *
     * @return $this
     */
    public function setInternationalDetail($international_detail)
    {


        if (is_null($international_detail)) {
            throw new \InvalidArgumentException('non-nullable international_detail cannot be null');
        }

        $this->container['international_detail'] = $international_detail;

        return $this;
    }

    /**
     * Gets on_demand_delivery_options
     *
     * @return \MyDHL\Model\OnDemandDeliveryOptions|null
     */
    public function getOnDemandDeliveryOptions()
    {
        return $this->container['on_demand_delivery_options'];
    }

    /**
     * Sets on_demand_delivery_options
     *
     * @param \MyDHL\Model\OnDemandDeliveryOptions|null $on_demand_delivery_options on_demand_delivery_options
     *
     * @return $this
     */
    public function setOnDemandDeliveryOptions($on_demand_delivery_options)
    {


        if (is_null($on_demand_delivery_options)) {
            throw new \InvalidArgumentException('non-nullable on_demand_delivery_options cannot be null');
        }

        $this->container['on_demand_delivery_options'] = $on_demand_delivery_options;

        return $this;
    }

    /**
     * Gets ship
     *
     * @return \MyDHL\Model\Ship|null
     */
    public function getShip()
    {
        return $this->container['ship'];
    }

    /**
     * Sets ship
     *
     * @param \MyDHL\Model\Ship|null $ship ship
     *
     * @return $this
     */
    public function setShip($ship)
    {


        if (is_null($ship)) {
            throw new \InvalidArgumentException('non-nullable ship cannot be null');
        }

        $this->container['ship'] = $ship;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return \MyDHL\Model\Packages|null
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \MyDHL\Model\Packages|null $packages packages
     *
     * @return $this
     */
    public function setPackages($packages)
    {


        if (is_null($packages)) {
            throw new \InvalidArgumentException('non-nullable packages cannot be null');
        }

        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets shipment_notifications
     *
     * @return \MyDHL\Model\ShipmentNotifications|null
     */
    public function getShipmentNotifications()
    {
        return $this->container['shipment_notifications'];
    }

    /**
     * Sets shipment_notifications
     *
     * @param \MyDHL\Model\ShipmentNotifications|null $shipment_notifications shipment_notifications
     *
     * @return $this
     */
    public function setShipmentNotifications($shipment_notifications)
    {


        if (is_null($shipment_notifications)) {
            throw new \InvalidArgumentException('non-nullable shipment_notifications cannot be null');
        }

        $this->container['shipment_notifications'] = $shipment_notifications;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


