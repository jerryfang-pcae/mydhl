<?php
/**
 * OnDemandDeliveryOptions
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
 * OpenAPI Generator version: 4.1.1
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
 * OnDemandDeliveryOptions Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OnDemandDeliveryOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OnDemandDeliveryOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_option' => 'string',
        'location' => 'string',
        'instructions' => 'string',
        'gate_code' => 'string',
        'lwn_type_code' => 'string',
        'neighbour_name' => 'string',
        'neighbour_house_number' => 'string',
        'authorizer_name' => 'string',
        'selected_service_point_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'delivery_option' => null,
        'location' => null,
        'instructions' => null,
        'gate_code' => null,
        'lwn_type_code' => null,
        'neighbour_name' => null,
        'neighbour_house_number' => null,
        'authorizer_name' => null,
        'selected_service_point_id' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'delivery_option' => 'DeliveryOption',
        'location' => 'Location',
        'instructions' => 'Instructions',
        'gate_code' => 'GateCode',
        'lwn_type_code' => 'LWNTypeCode',
        'neighbour_name' => 'NeighbourName',
        'neighbour_house_number' => 'NeighbourHouseNumber',
        'authorizer_name' => 'AuthorizerName',
        'selected_service_point_id' => 'SelectedServicePointID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_option' => 'setDeliveryOption',
        'location' => 'setLocation',
        'instructions' => 'setInstructions',
        'gate_code' => 'setGateCode',
        'lwn_type_code' => 'setLwnTypeCode',
        'neighbour_name' => 'setNeighbourName',
        'neighbour_house_number' => 'setNeighbourHouseNumber',
        'authorizer_name' => 'setAuthorizerName',
        'selected_service_point_id' => 'setSelectedServicePointId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_option' => 'getDeliveryOption',
        'location' => 'getLocation',
        'instructions' => 'getInstructions',
        'gate_code' => 'getGateCode',
        'lwn_type_code' => 'getLwnTypeCode',
        'neighbour_name' => 'getNeighbourName',
        'neighbour_house_number' => 'getNeighbourHouseNumber',
        'authorizer_name' => 'getAuthorizerName',
        'selected_service_point_id' => 'getSelectedServicePointId'
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
        $this->container['delivery_option'] = isset($data['delivery_option']) ? $data['delivery_option'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['instructions'] = isset($data['instructions']) ? $data['instructions'] : null;
        $this->container['gate_code'] = isset($data['gate_code']) ? $data['gate_code'] : null;
        $this->container['lwn_type_code'] = isset($data['lwn_type_code']) ? $data['lwn_type_code'] : null;
        $this->container['neighbour_name'] = isset($data['neighbour_name']) ? $data['neighbour_name'] : null;
        $this->container['neighbour_house_number'] = isset($data['neighbour_house_number']) ? $data['neighbour_house_number'] : null;
        $this->container['authorizer_name'] = isset($data['authorizer_name']) ? $data['authorizer_name'] : null;
        $this->container['selected_service_point_id'] = isset($data['selected_service_point_id']) ? $data['selected_service_point_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['delivery_option'] === null) {
            $invalidProperties[] = "'delivery_option' can't be null";
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
     * Gets delivery_option
     *
     * @return string
     */
    public function getDeliveryOption()
    {
        return $this->container['delivery_option'];
    }

    /**
     * Sets delivery_option
     *
     * @param string $delivery_option delivery_option
     *
     * @return $this
     */
    public function setDeliveryOption($delivery_option)
    {
        $this->container['delivery_option'] = $delivery_option;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return string|null
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param string|null $instructions instructions
     *
     * @return $this
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

        return $this;
    }

    /**
     * Gets gate_code
     *
     * @return string|null
     */
    public function getGateCode()
    {
        return $this->container['gate_code'];
    }

    /**
     * Sets gate_code
     *
     * @param string|null $gate_code gate_code
     *
     * @return $this
     */
    public function setGateCode($gate_code)
    {
        $this->container['gate_code'] = $gate_code;

        return $this;
    }

    /**
     * Gets lwn_type_code
     *
     * @return string|null
     */
    public function getLwnTypeCode()
    {
        return $this->container['lwn_type_code'];
    }

    /**
     * Sets lwn_type_code
     *
     * @param string|null $lwn_type_code lwn_type_code
     *
     * @return $this
     */
    public function setLwnTypeCode($lwn_type_code)
    {
        $this->container['lwn_type_code'] = $lwn_type_code;

        return $this;
    }

    /**
     * Gets neighbour_name
     *
     * @return string|null
     */
    public function getNeighbourName()
    {
        return $this->container['neighbour_name'];
    }

    /**
     * Sets neighbour_name
     *
     * @param string|null $neighbour_name neighbour_name
     *
     * @return $this
     */
    public function setNeighbourName($neighbour_name)
    {
        $this->container['neighbour_name'] = $neighbour_name;

        return $this;
    }

    /**
     * Gets neighbour_house_number
     *
     * @return string|null
     */
    public function getNeighbourHouseNumber()
    {
        return $this->container['neighbour_house_number'];
    }

    /**
     * Sets neighbour_house_number
     *
     * @param string|null $neighbour_house_number neighbour_house_number
     *
     * @return $this
     */
    public function setNeighbourHouseNumber($neighbour_house_number)
    {
        $this->container['neighbour_house_number'] = $neighbour_house_number;

        return $this;
    }

    /**
     * Gets authorizer_name
     *
     * @return string|null
     */
    public function getAuthorizerName()
    {
        return $this->container['authorizer_name'];
    }

    /**
     * Sets authorizer_name
     *
     * @param string|null $authorizer_name authorizer_name
     *
     * @return $this
     */
    public function setAuthorizerName($authorizer_name)
    {
        $this->container['authorizer_name'] = $authorizer_name;

        return $this;
    }

    /**
     * Gets selected_service_point_id
     *
     * @return string|null
     */
    public function getSelectedServicePointId()
    {
        return $this->container['selected_service_point_id'];
    }

    /**
     * Sets selected_service_point_id
     *
     * @param string|null $selected_service_point_id selected_service_point_id
     *
     * @return $this
     */
    public function setSelectedServicePointId($selected_service_point_id)
    {
        $this->container['selected_service_point_id'] = $selected_service_point_id;

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


