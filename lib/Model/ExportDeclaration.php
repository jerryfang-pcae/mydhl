<?php
/**
 * ExportDeclaration
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
 * ExportDeclaration Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExportDeclaration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExportDeclaration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'destination_port' => 'string',
        'exporter_code' => 'string',
        'exporter_id' => 'string',
        'export_license' => 'string',
        'export_reason' => 'string',
        'import_license' => 'string',
        'invoice_date' => 'string',
        'invoice_number' => 'string',
        'package_marks' => 'string',
        'payer_gstvat' => 'string',
        'recipient_reference' => 'string',
        'terms_of_payment' => 'string',
        'invoice_signature' => '\MyDHL\Model\InvoiceSignature',
        'invoice_declaration_texts' => '\MyDHL\Model\InvoiceDeclarationTexts',
        'export_line_items' => '\MyDHL\Model\ExportLineItems'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'destination_port' => null,
        'exporter_code' => null,
        'exporter_id' => null,
        'export_license' => null,
        'export_reason' => null,
        'import_license' => null,
        'invoice_date' => null,
        'invoice_number' => null,
        'package_marks' => null,
        'payer_gstvat' => null,
        'recipient_reference' => null,
        'terms_of_payment' => null,
        'invoice_signature' => null,
        'invoice_declaration_texts' => null,
        'export_line_items' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'destination_port' => false,
        'exporter_code' => false,
        'exporter_id' => false,
        'export_license' => false,
        'export_reason' => false,
        'import_license' => false,
        'invoice_date' => false,
        'invoice_number' => false,
        'package_marks' => false,
        'payer_gstvat' => false,
        'recipient_reference' => false,
        'terms_of_payment' => false,
        'invoice_signature' => false,
        'invoice_declaration_texts' => false,
        'export_line_items' => false
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
        'destination_port' => 'DestinationPort',
        'exporter_code' => 'ExporterCode',
        'exporter_id' => 'ExporterID',
        'export_license' => 'ExportLicense',
        'export_reason' => 'ExportReason',
        'import_license' => 'ImportLicense',
        'invoice_date' => 'InvoiceDate',
        'invoice_number' => 'InvoiceNumber',
        'package_marks' => 'PackageMarks',
        'payer_gstvat' => 'PayerGSTVAT',
        'recipient_reference' => 'RecipientReference',
        'terms_of_payment' => 'TermsOfPayment',
        'invoice_signature' => 'InvoiceSignature',
        'invoice_declaration_texts' => 'InvoiceDeclarationTexts',
        'export_line_items' => 'ExportLineItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destination_port' => 'setDestinationPort',
        'exporter_code' => 'setExporterCode',
        'exporter_id' => 'setExporterId',
        'export_license' => 'setExportLicense',
        'export_reason' => 'setExportReason',
        'import_license' => 'setImportLicense',
        'invoice_date' => 'setInvoiceDate',
        'invoice_number' => 'setInvoiceNumber',
        'package_marks' => 'setPackageMarks',
        'payer_gstvat' => 'setPayerGstvat',
        'recipient_reference' => 'setRecipientReference',
        'terms_of_payment' => 'setTermsOfPayment',
        'invoice_signature' => 'setInvoiceSignature',
        'invoice_declaration_texts' => 'setInvoiceDeclarationTexts',
        'export_line_items' => 'setExportLineItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destination_port' => 'getDestinationPort',
        'exporter_code' => 'getExporterCode',
        'exporter_id' => 'getExporterId',
        'export_license' => 'getExportLicense',
        'export_reason' => 'getExportReason',
        'import_license' => 'getImportLicense',
        'invoice_date' => 'getInvoiceDate',
        'invoice_number' => 'getInvoiceNumber',
        'package_marks' => 'getPackageMarks',
        'payer_gstvat' => 'getPayerGstvat',
        'recipient_reference' => 'getRecipientReference',
        'terms_of_payment' => 'getTermsOfPayment',
        'invoice_signature' => 'getInvoiceSignature',
        'invoice_declaration_texts' => 'getInvoiceDeclarationTexts',
        'export_line_items' => 'getExportLineItems'
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
        $this->setIfExists('destination_port', $data, null);
        $this->setIfExists('exporter_code', $data, null);
        $this->setIfExists('exporter_id', $data, null);
        $this->setIfExists('export_license', $data, null);
        $this->setIfExists('export_reason', $data, null);
        $this->setIfExists('import_license', $data, null);
        $this->setIfExists('invoice_date', $data, null);
        $this->setIfExists('invoice_number', $data, null);
        $this->setIfExists('package_marks', $data, null);
        $this->setIfExists('payer_gstvat', $data, null);
        $this->setIfExists('recipient_reference', $data, null);
        $this->setIfExists('terms_of_payment', $data, null);
        $this->setIfExists('invoice_signature', $data, null);
        $this->setIfExists('invoice_declaration_texts', $data, null);
        $this->setIfExists('export_line_items', $data, null);
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
     * Gets destination_port
     *
     * @return string|null
     */
    public function getDestinationPort()
    {
        return $this->container['destination_port'];
    }

    /**
     * Sets destination_port
     *
     * @param string|null $destination_port destination_port
     *
     * @return $this
     */
    public function setDestinationPort($destination_port)
    {


        if (is_null($destination_port)) {
            throw new \InvalidArgumentException('non-nullable destination_port cannot be null');
        }

        $this->container['destination_port'] = $destination_port;

        return $this;
    }

    /**
     * Gets exporter_code
     *
     * @return string|null
     */
    public function getExporterCode()
    {
        return $this->container['exporter_code'];
    }

    /**
     * Sets exporter_code
     *
     * @param string|null $exporter_code exporter_code
     *
     * @return $this
     */
    public function setExporterCode($exporter_code)
    {


        if (is_null($exporter_code)) {
            throw new \InvalidArgumentException('non-nullable exporter_code cannot be null');
        }

        $this->container['exporter_code'] = $exporter_code;

        return $this;
    }

    /**
     * Gets exporter_id
     *
     * @return string|null
     */
    public function getExporterId()
    {
        return $this->container['exporter_id'];
    }

    /**
     * Sets exporter_id
     *
     * @param string|null $exporter_id exporter_id
     *
     * @return $this
     */
    public function setExporterId($exporter_id)
    {


        if (is_null($exporter_id)) {
            throw new \InvalidArgumentException('non-nullable exporter_id cannot be null');
        }

        $this->container['exporter_id'] = $exporter_id;

        return $this;
    }

    /**
     * Gets export_license
     *
     * @return string|null
     */
    public function getExportLicense()
    {
        return $this->container['export_license'];
    }

    /**
     * Sets export_license
     *
     * @param string|null $export_license export_license
     *
     * @return $this
     */
    public function setExportLicense($export_license)
    {


        if (is_null($export_license)) {
            throw new \InvalidArgumentException('non-nullable export_license cannot be null');
        }

        $this->container['export_license'] = $export_license;

        return $this;
    }

    /**
     * Gets export_reason
     *
     * @return string|null
     */
    public function getExportReason()
    {
        return $this->container['export_reason'];
    }

    /**
     * Sets export_reason
     *
     * @param string|null $export_reason export_reason
     *
     * @return $this
     */
    public function setExportReason($export_reason)
    {


        if (is_null($export_reason)) {
            throw new \InvalidArgumentException('non-nullable export_reason cannot be null');
        }

        $this->container['export_reason'] = $export_reason;

        return $this;
    }

    /**
     * Gets import_license
     *
     * @return string|null
     */
    public function getImportLicense()
    {
        return $this->container['import_license'];
    }

    /**
     * Sets import_license
     *
     * @param string|null $import_license import_license
     *
     * @return $this
     */
    public function setImportLicense($import_license)
    {


        if (is_null($import_license)) {
            throw new \InvalidArgumentException('non-nullable import_license cannot be null');
        }

        $this->container['import_license'] = $import_license;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param string|null $invoice_date invoice_date
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {


        if (is_null($invoice_date)) {
            throw new \InvalidArgumentException('non-nullable invoice_date cannot be null');
        }

        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string|null $invoice_number invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {


        if (is_null($invoice_number)) {
            throw new \InvalidArgumentException('non-nullable invoice_number cannot be null');
        }

        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets package_marks
     *
     * @return string|null
     */
    public function getPackageMarks()
    {
        return $this->container['package_marks'];
    }

    /**
     * Sets package_marks
     *
     * @param string|null $package_marks package_marks
     *
     * @return $this
     */
    public function setPackageMarks($package_marks)
    {


        if (is_null($package_marks)) {
            throw new \InvalidArgumentException('non-nullable package_marks cannot be null');
        }

        $this->container['package_marks'] = $package_marks;

        return $this;
    }

    /**
     * Gets payer_gstvat
     *
     * @return string|null
     */
    public function getPayerGstvat()
    {
        return $this->container['payer_gstvat'];
    }

    /**
     * Sets payer_gstvat
     *
     * @param string|null $payer_gstvat payer_gstvat
     *
     * @return $this
     */
    public function setPayerGstvat($payer_gstvat)
    {


        if (is_null($payer_gstvat)) {
            throw new \InvalidArgumentException('non-nullable payer_gstvat cannot be null');
        }

        $this->container['payer_gstvat'] = $payer_gstvat;

        return $this;
    }

    /**
     * Gets recipient_reference
     *
     * @return string|null
     */
    public function getRecipientReference()
    {
        return $this->container['recipient_reference'];
    }

    /**
     * Sets recipient_reference
     *
     * @param string|null $recipient_reference recipient_reference
     *
     * @return $this
     */
    public function setRecipientReference($recipient_reference)
    {


        if (is_null($recipient_reference)) {
            throw new \InvalidArgumentException('non-nullable recipient_reference cannot be null');
        }

        $this->container['recipient_reference'] = $recipient_reference;

        return $this;
    }

    /**
     * Gets terms_of_payment
     *
     * @return string|null
     */
    public function getTermsOfPayment()
    {
        return $this->container['terms_of_payment'];
    }

    /**
     * Sets terms_of_payment
     *
     * @param string|null $terms_of_payment terms_of_payment
     *
     * @return $this
     */
    public function setTermsOfPayment($terms_of_payment)
    {


        if (is_null($terms_of_payment)) {
            throw new \InvalidArgumentException('non-nullable terms_of_payment cannot be null');
        }

        $this->container['terms_of_payment'] = $terms_of_payment;

        return $this;
    }

    /**
     * Gets invoice_signature
     *
     * @return \MyDHL\Model\InvoiceSignature|null
     */
    public function getInvoiceSignature()
    {
        return $this->container['invoice_signature'];
    }

    /**
     * Sets invoice_signature
     *
     * @param \MyDHL\Model\InvoiceSignature|null $invoice_signature invoice_signature
     *
     * @return $this
     */
    public function setInvoiceSignature($invoice_signature)
    {


        if (is_null($invoice_signature)) {
            throw new \InvalidArgumentException('non-nullable invoice_signature cannot be null');
        }

        $this->container['invoice_signature'] = $invoice_signature;

        return $this;
    }

    /**
     * Gets invoice_declaration_texts
     *
     * @return \MyDHL\Model\InvoiceDeclarationTexts|null
     */
    public function getInvoiceDeclarationTexts()
    {
        return $this->container['invoice_declaration_texts'];
    }

    /**
     * Sets invoice_declaration_texts
     *
     * @param \MyDHL\Model\InvoiceDeclarationTexts|null $invoice_declaration_texts invoice_declaration_texts
     *
     * @return $this
     */
    public function setInvoiceDeclarationTexts($invoice_declaration_texts)
    {


        if (is_null($invoice_declaration_texts)) {
            throw new \InvalidArgumentException('non-nullable invoice_declaration_texts cannot be null');
        }

        $this->container['invoice_declaration_texts'] = $invoice_declaration_texts;

        return $this;
    }

    /**
     * Gets export_line_items
     *
     * @return \MyDHL\Model\ExportLineItems|null
     */
    public function getExportLineItems()
    {
        return $this->container['export_line_items'];
    }

    /**
     * Sets export_line_items
     *
     * @param \MyDHL\Model\ExportLineItems|null $export_line_items export_line_items
     *
     * @return $this
     */
    public function setExportLineItems($export_line_items)
    {


        if (is_null($export_line_items)) {
            throw new \InvalidArgumentException('non-nullable export_line_items cannot be null');
        }

        $this->container['export_line_items'] = $export_line_items;

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


