<?php
/**
 * ShipmentInfo
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
 * ShipmentInfo Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'drop_off_type' => 'string',
        'service_type' => 'string',
        'local_service_type' => 'string',
        'account' => 'string',
        'currency' => 'string',
        'unit_of_measurement' => 'string',
        'shipment_identification_number' => 'string',
        'use_own_shipment_identification_number' => 'string',
        'label_type' => 'string',
        'label_template' => 'string',
        'archive_label_template' => 'string',
        'customs_invoice_template' => 'string',
        'shipment_receipt_template' => 'string',
        'paperless_trade_enabled' => 'string',
        'parent_shipment_identification_number' => 'string',
        'request_transliterate_response' => 'string',
        'request_additional_information' => 'string',
        'billing' => '\MyDHL\Model\Billing',
        'document_images' => '\MyDHL\Model\DocumentImages',
        'label_options' => '\MyDHL\Model\LabelOptions',
        'special_services' => '\MyDHL\Model\SpecialServices'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'drop_off_type' => null,
        'service_type' => null,
        'local_service_type' => null,
        'account' => null,
        'currency' => null,
        'unit_of_measurement' => null,
        'shipment_identification_number' => null,
        'use_own_shipment_identification_number' => null,
        'label_type' => null,
        'label_template' => null,
        'archive_label_template' => null,
        'customs_invoice_template' => null,
        'shipment_receipt_template' => null,
        'paperless_trade_enabled' => null,
        'parent_shipment_identification_number' => null,
        'request_transliterate_response' => null,
        'request_additional_information' => null,
        'billing' => null,
        'document_images' => null,
        'label_options' => null,
        'special_services' => null
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
        'drop_off_type' => 'DropOffType',
        'service_type' => 'ServiceType',
        'local_service_type' => 'LocalServiceType',
        'account' => 'Account',
        'currency' => 'Currency',
        'unit_of_measurement' => 'UnitOfMeasurement',
        'shipment_identification_number' => 'ShipmentIdentificationNumber',
        'use_own_shipment_identification_number' => 'UseOwnShipmentIdentificationNumber',
        'label_type' => 'LabelType',
        'label_template' => 'LabelTemplate',
        'archive_label_template' => 'ArchiveLabelTemplate',
        'customs_invoice_template' => 'CustomsInvoiceTemplate',
        'shipment_receipt_template' => 'ShipmentReceiptTemplate',
        'paperless_trade_enabled' => 'PaperlessTradeEnabled',
        'parent_shipment_identification_number' => 'ParentShipmentIdentificationNumber',
        'request_transliterate_response' => 'RequestTransliterateResponse',
        'request_additional_information' => 'RequestAdditionalInformation',
        'billing' => 'Billing',
        'document_images' => 'DocumentImages',
        'label_options' => 'LabelOptions',
        'special_services' => 'SpecialServices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'drop_off_type' => 'setDropOffType',
        'service_type' => 'setServiceType',
        'local_service_type' => 'setLocalServiceType',
        'account' => 'setAccount',
        'currency' => 'setCurrency',
        'unit_of_measurement' => 'setUnitOfMeasurement',
        'shipment_identification_number' => 'setShipmentIdentificationNumber',
        'use_own_shipment_identification_number' => 'setUseOwnShipmentIdentificationNumber',
        'label_type' => 'setLabelType',
        'label_template' => 'setLabelTemplate',
        'archive_label_template' => 'setArchiveLabelTemplate',
        'customs_invoice_template' => 'setCustomsInvoiceTemplate',
        'shipment_receipt_template' => 'setShipmentReceiptTemplate',
        'paperless_trade_enabled' => 'setPaperlessTradeEnabled',
        'parent_shipment_identification_number' => 'setParentShipmentIdentificationNumber',
        'request_transliterate_response' => 'setRequestTransliterateResponse',
        'request_additional_information' => 'setRequestAdditionalInformation',
        'billing' => 'setBilling',
        'document_images' => 'setDocumentImages',
        'label_options' => 'setLabelOptions',
        'special_services' => 'setSpecialServices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'drop_off_type' => 'getDropOffType',
        'service_type' => 'getServiceType',
        'local_service_type' => 'getLocalServiceType',
        'account' => 'getAccount',
        'currency' => 'getCurrency',
        'unit_of_measurement' => 'getUnitOfMeasurement',
        'shipment_identification_number' => 'getShipmentIdentificationNumber',
        'use_own_shipment_identification_number' => 'getUseOwnShipmentIdentificationNumber',
        'label_type' => 'getLabelType',
        'label_template' => 'getLabelTemplate',
        'archive_label_template' => 'getArchiveLabelTemplate',
        'customs_invoice_template' => 'getCustomsInvoiceTemplate',
        'shipment_receipt_template' => 'getShipmentReceiptTemplate',
        'paperless_trade_enabled' => 'getPaperlessTradeEnabled',
        'parent_shipment_identification_number' => 'getParentShipmentIdentificationNumber',
        'request_transliterate_response' => 'getRequestTransliterateResponse',
        'request_additional_information' => 'getRequestAdditionalInformation',
        'billing' => 'getBilling',
        'document_images' => 'getDocumentImages',
        'label_options' => 'getLabelOptions',
        'special_services' => 'getSpecialServices'
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
        $this->container['drop_off_type'] = isset($data['drop_off_type']) ? $data['drop_off_type'] : null;
        $this->container['service_type'] = isset($data['service_type']) ? $data['service_type'] : null;
        $this->container['local_service_type'] = isset($data['local_service_type']) ? $data['local_service_type'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['unit_of_measurement'] = isset($data['unit_of_measurement']) ? $data['unit_of_measurement'] : null;
        $this->container['shipment_identification_number'] = isset($data['shipment_identification_number']) ? $data['shipment_identification_number'] : null;
        $this->container['use_own_shipment_identification_number'] = isset($data['use_own_shipment_identification_number']) ? $data['use_own_shipment_identification_number'] : null;
        $this->container['label_type'] = isset($data['label_type']) ? $data['label_type'] : null;
        $this->container['label_template'] = isset($data['label_template']) ? $data['label_template'] : null;
        $this->container['archive_label_template'] = isset($data['archive_label_template']) ? $data['archive_label_template'] : null;
        $this->container['customs_invoice_template'] = isset($data['customs_invoice_template']) ? $data['customs_invoice_template'] : null;
        $this->container['shipment_receipt_template'] = isset($data['shipment_receipt_template']) ? $data['shipment_receipt_template'] : null;
        $this->container['paperless_trade_enabled'] = isset($data['paperless_trade_enabled']) ? $data['paperless_trade_enabled'] : null;
        $this->container['parent_shipment_identification_number'] = isset($data['parent_shipment_identification_number']) ? $data['parent_shipment_identification_number'] : null;
        $this->container['request_transliterate_response'] = isset($data['request_transliterate_response']) ? $data['request_transliterate_response'] : null;
        $this->container['request_additional_information'] = isset($data['request_additional_information']) ? $data['request_additional_information'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['document_images'] = isset($data['document_images']) ? $data['document_images'] : null;
        $this->container['label_options'] = isset($data['label_options']) ? $data['label_options'] : null;
        $this->container['special_services'] = isset($data['special_services']) ? $data['special_services'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['drop_off_type'] === null) {
            $invalidProperties[] = "'drop_off_type' can't be null";
        }
        if ($this->container['service_type'] === null) {
            $invalidProperties[] = "'service_type' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['unit_of_measurement'] === null) {
            $invalidProperties[] = "'unit_of_measurement' can't be null";
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
     * Gets drop_off_type
     *
     * @return string
     */
    public function getDropOffType()
    {
        return $this->container['drop_off_type'];
    }

    /**
     * Sets drop_off_type
     *
     * @param string $drop_off_type drop_off_type
     *
     * @return $this
     */
    public function setDropOffType($drop_off_type)
    {
        $this->container['drop_off_type'] = $drop_off_type;

        return $this;
    }

    /**
     * Gets service_type
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     *
     * @param string $service_type service_type
     *
     * @return $this
     */
    public function setServiceType($service_type)
    {
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets local_service_type
     *
     * @return string|null
     */
    public function getLocalServiceType()
    {
        return $this->container['local_service_type'];
    }

    /**
     * Sets local_service_type
     *
     * @param string|null $local_service_type local_service_type
     *
     * @return $this
     */
    public function setLocalServiceType($local_service_type)
    {
        $this->container['local_service_type'] = $local_service_type;

        return $this;
    }

    /**
     * Gets account
     *
     * @return string|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string|null $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets unit_of_measurement
     *
     * @return string
     */
    public function getUnitOfMeasurement()
    {
        return $this->container['unit_of_measurement'];
    }

    /**
     * Sets unit_of_measurement
     *
     * @param string $unit_of_measurement unit_of_measurement
     *
     * @return $this
     */
    public function setUnitOfMeasurement($unit_of_measurement)
    {
        $this->container['unit_of_measurement'] = $unit_of_measurement;

        return $this;
    }

    /**
     * Gets shipment_identification_number
     *
     * @return string|null
     */
    public function getShipmentIdentificationNumber()
    {
        return $this->container['shipment_identification_number'];
    }

    /**
     * Sets shipment_identification_number
     *
     * @param string|null $shipment_identification_number shipment_identification_number
     *
     * @return $this
     */
    public function setShipmentIdentificationNumber($shipment_identification_number)
    {
        $this->container['shipment_identification_number'] = $shipment_identification_number;

        return $this;
    }

    /**
     * Gets use_own_shipment_identification_number
     *
     * @return string|null
     */
    public function getUseOwnShipmentIdentificationNumber()
    {
        return $this->container['use_own_shipment_identification_number'];
    }

    /**
     * Sets use_own_shipment_identification_number
     *
     * @param string|null $use_own_shipment_identification_number use_own_shipment_identification_number
     *
     * @return $this
     */
    public function setUseOwnShipmentIdentificationNumber($use_own_shipment_identification_number)
    {
        $this->container['use_own_shipment_identification_number'] = $use_own_shipment_identification_number;

        return $this;
    }

    /**
     * Gets label_type
     *
     * @return string|null
     */
    public function getLabelType()
    {
        return $this->container['label_type'];
    }

    /**
     * Sets label_type
     *
     * @param string|null $label_type label_type
     *
     * @return $this
     */
    public function setLabelType($label_type)
    {
        $this->container['label_type'] = $label_type;

        return $this;
    }

    /**
     * Gets label_template
     *
     * @return string|null
     */
    public function getLabelTemplate()
    {
        return $this->container['label_template'];
    }

    /**
     * Sets label_template
     *
     * @param string|null $label_template label_template
     *
     * @return $this
     */
    public function setLabelTemplate($label_template)
    {
        $this->container['label_template'] = $label_template;

        return $this;
    }

    /**
     * Gets archive_label_template
     *
     * @return string|null
     */
    public function getArchiveLabelTemplate()
    {
        return $this->container['archive_label_template'];
    }

    /**
     * Sets archive_label_template
     *
     * @param string|null $archive_label_template archive_label_template
     *
     * @return $this
     */
    public function setArchiveLabelTemplate($archive_label_template)
    {
        $this->container['archive_label_template'] = $archive_label_template;

        return $this;
    }

    /**
     * Gets customs_invoice_template
     *
     * @return string|null
     */
    public function getCustomsInvoiceTemplate()
    {
        return $this->container['customs_invoice_template'];
    }

    /**
     * Sets customs_invoice_template
     *
     * @param string|null $customs_invoice_template customs_invoice_template
     *
     * @return $this
     */
    public function setCustomsInvoiceTemplate($customs_invoice_template)
    {
        $this->container['customs_invoice_template'] = $customs_invoice_template;

        return $this;
    }

    /**
     * Gets shipment_receipt_template
     *
     * @return string|null
     */
    public function getShipmentReceiptTemplate()
    {
        return $this->container['shipment_receipt_template'];
    }

    /**
     * Sets shipment_receipt_template
     *
     * @param string|null $shipment_receipt_template shipment_receipt_template
     *
     * @return $this
     */
    public function setShipmentReceiptTemplate($shipment_receipt_template)
    {
        $this->container['shipment_receipt_template'] = $shipment_receipt_template;

        return $this;
    }

    /**
     * Gets paperless_trade_enabled
     *
     * @return string|null
     */
    public function getPaperlessTradeEnabled()
    {
        return $this->container['paperless_trade_enabled'];
    }

    /**
     * Sets paperless_trade_enabled
     *
     * @param string|null $paperless_trade_enabled paperless_trade_enabled
     *
     * @return $this
     */
    public function setPaperlessTradeEnabled($paperless_trade_enabled)
    {
        $this->container['paperless_trade_enabled'] = $paperless_trade_enabled;

        return $this;
    }

    /**
     * Gets parent_shipment_identification_number
     *
     * @return string|null
     */
    public function getParentShipmentIdentificationNumber()
    {
        return $this->container['parent_shipment_identification_number'];
    }

    /**
     * Sets parent_shipment_identification_number
     *
     * @param string|null $parent_shipment_identification_number parent_shipment_identification_number
     *
     * @return $this
     */
    public function setParentShipmentIdentificationNumber($parent_shipment_identification_number)
    {
        $this->container['parent_shipment_identification_number'] = $parent_shipment_identification_number;

        return $this;
    }

    /**
     * Gets request_transliterate_response
     *
     * @return string|null
     */
    public function getRequestTransliterateResponse()
    {
        return $this->container['request_transliterate_response'];
    }

    /**
     * Sets request_transliterate_response
     *
     * @param string|null $request_transliterate_response request_transliterate_response
     *
     * @return $this
     */
    public function setRequestTransliterateResponse($request_transliterate_response)
    {
        $this->container['request_transliterate_response'] = $request_transliterate_response;

        return $this;
    }

    /**
     * Gets request_additional_information
     *
     * @return string|null
     */
    public function getRequestAdditionalInformation()
    {
        return $this->container['request_additional_information'];
    }

    /**
     * Sets request_additional_information
     *
     * @param string|null $request_additional_information request_additional_information
     *
     * @return $this
     */
    public function setRequestAdditionalInformation($request_additional_information)
    {
        $this->container['request_additional_information'] = $request_additional_information;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \MyDHL\Model\Billing|null
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \MyDHL\Model\Billing|null $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets document_images
     *
     * @return \MyDHL\Model\DocumentImages|null
     */
    public function getDocumentImages()
    {
        return $this->container['document_images'];
    }

    /**
     * Sets document_images
     *
     * @param \MyDHL\Model\DocumentImages|null $document_images document_images
     *
     * @return $this
     */
    public function setDocumentImages($document_images)
    {
        $this->container['document_images'] = $document_images;

        return $this;
    }

    /**
     * Gets label_options
     *
     * @return \MyDHL\Model\LabelOptions|null
     */
    public function getLabelOptions()
    {
        return $this->container['label_options'];
    }

    /**
     * Sets label_options
     *
     * @param \MyDHL\Model\LabelOptions|null $label_options label_options
     *
     * @return $this
     */
    public function setLabelOptions($label_options)
    {
        $this->container['label_options'] = $label_options;

        return $this;
    }

    /**
     * Gets special_services
     *
     * @return \MyDHL\Model\SpecialServices|null
     */
    public function getSpecialServices()
    {
        return $this->container['special_services'];
    }

    /**
     * Sets special_services
     *
     * @param \MyDHL\Model\SpecialServices|null $special_services special_services
     *
     * @return $this
     */
    public function setSpecialServices($special_services)
    {
        $this->container['special_services'] = $special_services;

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


