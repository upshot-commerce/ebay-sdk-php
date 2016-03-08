<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property string $ProductName
 * @property integer $ProductID
 * @property string $CustomLabel
 * @property integer $QuantityAvailable
 * @property \DTS\eBaySDK\Trading\Types\AmountType $UnitCost
 * @property integer $FolderID
 * @property boolean $RestockAlert
 * @property integer $RestockThreshold
 * @property \DTS\eBaySDK\Trading\Types\SellingManagerVendorDetailsType $VendorInfo
 * @property string $Note
 */
class SellingManagerProductDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ProductName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductName'
        ],
        'ProductID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ],
        'CustomLabel' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CustomLabel'
        ],
        'QuantityAvailable' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailable'
        ],
        'UnitCost' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnitCost'
        ],
        'FolderID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FolderID'
        ],
        'RestockAlert' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RestockAlert'
        ],
        'RestockThreshold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RestockThreshold'
        ],
        'VendorInfo' => [
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerVendorDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VendorInfo'
        ],
        'Note' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Note'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}