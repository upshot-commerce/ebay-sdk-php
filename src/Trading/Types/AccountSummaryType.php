<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Enums\AccountStateCodeType $AccountState
 * @property \DTS\eBaySDK\Trading\Types\AmountType $InvoicePayment
 * @property \DTS\eBaySDK\Trading\Types\AmountType $InvoiceCredit
 * @property \DTS\eBaySDK\Trading\Types\AmountType $InvoiceNewFee
 * @property \DTS\eBaySDK\Trading\Types\AdditionalAccountType[] $AdditionalAccount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $AmountPastDue
 * @property string $BankAccountInfo
 * @property \DateTime $BankModifyDate
 * @property integer $BillingCycleDate
 * @property \DateTime $CreditCardExpiration
 * @property string $CreditCardInfo
 * @property \DateTime $CreditCardModifyDate
 * @property \DTS\eBaySDK\Trading\Types\AmountType $CurrentBalance
 * @property string $Email
 * @property \DTS\eBaySDK\Trading\Types\AmountType $InvoiceBalance
 * @property \DateTime $InvoiceDate
 * @property \DTS\eBaySDK\Trading\Types\AmountType $LastAmountPaid
 * @property \DateTime $LastPaymentDate
 * @property boolean $PastDue
 * @property \DTS\eBaySDK\Trading\Enums\SellerPaymentMethodCodeType $PaymentMethod
 */
class AccountSummaryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AccountState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AccountState'
        ],
        'InvoicePayment' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoicePayment'
        ],
        'InvoiceCredit' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoiceCredit'
        ],
        'InvoiceNewFee' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoiceNewFee'
        ],
        'AdditionalAccount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AdditionalAccountType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'AdditionalAccount'
        ],
        'AmountPastDue' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountPastDue'
        ],
        'BankAccountInfo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BankAccountInfo'
        ],
        'BankModifyDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BankModifyDate'
        ],
        'BillingCycleDate' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BillingCycleDate'
        ],
        'CreditCardExpiration' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreditCardExpiration'
        ],
        'CreditCardInfo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreditCardInfo'
        ],
        'CreditCardModifyDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreditCardModifyDate'
        ],
        'CurrentBalance' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CurrentBalance'
        ],
        'Email' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Email'
        ],
        'InvoiceBalance' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoiceBalance'
        ],
        'InvoiceDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoiceDate'
        ],
        'LastAmountPaid' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastAmountPaid'
        ],
        'LastPaymentDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastPaymentDate'
        ],
        'PastDue' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PastDue'
        ],
        'PaymentMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
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