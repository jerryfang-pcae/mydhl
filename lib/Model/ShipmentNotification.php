<?php
/**
 * ShipmentNotification
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
 * ShipmentNotification Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentNotification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentNotification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'notification_method' => 'string',
        'email_address' => 'string',
        'bespoke_message' => 'string',
        'language_code' => 'string',
        'language_country_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'notification_method' => null,
        'email_address' => null,
        'bespoke_message' => null,
        'language_code' => null,
        'language_country_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'notification_method' => false,
        'email_address' => false,
        'bespoke_message' => false,
        'language_code' => false,
        'language_country_code' => false
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
        'notification_method' => 'NotificationMethod',
        'email_address' => 'EmailAddress',
        'bespoke_message' => 'BespokeMessage',
        'language_code' => 'LanguageCode',
        'language_country_code' => 'LanguageCountryCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'notification_method' => 'setNotificationMethod',
        'email_address' => 'setEmailAddress',
        'bespoke_message' => 'setBespokeMessage',
        'language_code' => 'setLanguageCode',
        'language_country_code' => 'setLanguageCountryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'notification_method' => 'getNotificationMethod',
        'email_address' => 'getEmailAddress',
        'bespoke_message' => 'getBespokeMessage',
        'language_code' => 'getLanguageCode',
        'language_country_code' => 'getLanguageCountryCode'
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

    const NOTIFICATION_METHOD_EMAIL = 'EMAIL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNotificationMethodAllowableValues()
    {
        return [
            self::NOTIFICATION_METHOD_EMAIL,
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
        $this->setIfExists('notification_method', $data, null);
        $this->setIfExists('email_address', $data, null);
        $this->setIfExists('bespoke_message', $data, null);
        $this->setIfExists('language_code', $data, null);
        $this->setIfExists('language_country_code', $data, null);
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

        if ($this->container['notification_method'] === null) {
            $invalidProperties[] = "'notification_method' can't be null";
        }
        $allowedValues = $this->getNotificationMethodAllowableValues();
        if (!is_null($this->container['notification_method']) && !in_array($this->container['notification_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'notification_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets notification_method
     *
     * @return string
     */
    public function getNotificationMethod()
    {
        return $this->container['notification_method'];
    }

    /**
     * Sets notification_method
     *
     * @param string $notification_method notification_method
     *
     * @return $this
     */
    public function setNotificationMethod($notification_method)
    {
        $allowedValues = $this->getNotificationMethodAllowableValues();
        if (!in_array($notification_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'notification_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        if (is_null($notification_method)) {
            throw new \InvalidArgumentException('non-nullable notification_method cannot be null');
        }

        $this->container['notification_method'] = $notification_method;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address email_address
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {


        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }

        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets bespoke_message
     *
     * @return string|null
     */
    public function getBespokeMessage()
    {
        return $this->container['bespoke_message'];
    }

    /**
     * Sets bespoke_message
     *
     * @param string|null $bespoke_message bespoke_message
     *
     * @return $this
     */
    public function setBespokeMessage($bespoke_message)
    {


        if (is_null($bespoke_message)) {
            throw new \InvalidArgumentException('non-nullable bespoke_message cannot be null');
        }

        $this->container['bespoke_message'] = $bespoke_message;

        return $this;
    }

    /**
     * Gets language_code
     *
     * @return string|null
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string|null $language_code language_code
     *
     * @return $this
     */
    public function setLanguageCode($language_code)
    {


        if (is_null($language_code)) {
            throw new \InvalidArgumentException('non-nullable language_code cannot be null');
        }

        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets language_country_code
     *
     * @return string|null
     */
    public function getLanguageCountryCode()
    {
        return $this->container['language_country_code'];
    }

    /**
     * Sets language_country_code
     *
     * @param string|null $language_country_code language_country_code
     *
     * @return $this
     */
    public function setLanguageCountryCode($language_country_code)
    {


        if (is_null($language_country_code)) {
            throw new \InvalidArgumentException('non-nullable language_country_code cannot be null');
        }

        $this->container['language_country_code'] = $language_country_code;

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


