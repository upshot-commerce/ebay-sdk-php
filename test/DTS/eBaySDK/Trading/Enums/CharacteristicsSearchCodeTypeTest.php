<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Enums\Test;

use DTS\eBaySDK\Trading\Enums\CharacteristicsSearchCodeType;

class CharacteristicsSearchCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CharacteristicsSearchCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\CharacteristicsSearchCodeType', $this->obj);
    }
}