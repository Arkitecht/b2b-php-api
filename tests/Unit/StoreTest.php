<?php

class StoreTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        parent::setUp();
    }

    /** @test */
    function can_get_dealer_code()
    {
        $store = \Arkitecht\B2B\Store::fromJson('{"storeId":4,"storeName":"ARK Store 1","storeFullName":"ARK Store 1","timeZone":-5,"isDayLightSaving":true,"isActive":true,"locationTypeName":"Retail","address1":"","address2":"","city":"","state":" ","zip":"","primaryPhone":"0","primaryFax":"0","parentId":3,"locationTypeId":4,"dealerCodes":[{"dealerCode":"SALESFORCEID123","carrierDetails":{"carrierId":13,"carrierName":"Boost Mobile","carrierReference":"BILLPAYMENT_BOOST"}}]}');

        $this->assertEquals('SALESFORCEID123', $store->getDealerCode(13));
        $this->assertNull($store->getDealerCode(21));
    }

    /** @test */
    function can_get_salesforce_id()
    {
        $store = \Arkitecht\B2B\Store::fromJson('{"storeId":4,"storeName":"ARK Store 1","storeFullName":"ARK Store 1","timeZone":-5,"isDayLightSaving":true,"isActive":true,"locationTypeName":"Retail","address1":"","address2":"","city":"","state":" ","zip":"","primaryPhone":"0","primaryFax":"0","parentId":3,"locationTypeId":4,"dealerCodes":[{"dealerCode":"SALESFORCEID123","carrierDetails":{"carrierId":13,"carrierName":"Boost Mobile","carrierReference":"BILLPAYMENT_BOOST"}}]}');

        $this->assertEquals('SALESFORCEID123', $store->getSalesforceId());

        $store = \Arkitecht\B2B\Store::fromJson('{"storeId":4,"storeName":"ARK Store 1","storeFullName":"ARK Store 1","timeZone":-5,"isDayLightSaving":true,"isActive":true,"locationTypeName":"Retail","address1":"","address2":"","city":"","state":" ","zip":"","primaryPhone":"0","primaryFax":"0","parentId":3,"locationTypeId":4,"dealerCodes":[{"dealerCode":"SALESFORCEID123","carrierDetails":{"carrierId":21,"carrierName":"Boost Mobile","carrierReference":"BILLPAYMENT_BOOST"}}]}');

        $this->assertNull($store->getSalesforceId());
    }

    /** @test */
    function can_check_dealer_code()
    {
        $store = \Arkitecht\B2B\Store::fromJson('{"storeId":4,"storeName":"ARK Store 1","storeFullName":"ARK Store 1","timeZone":-5,"isDayLightSaving":true,"isActive":true,"locationTypeName":"Retail","address1":"","address2":"","city":"","state":" ","zip":"","primaryPhone":"0","primaryFax":"0","parentId":3,"locationTypeId":4,"dealerCodes":[{"dealerCode":"SALESFORCEID123","carrierDetails":{"carrierId":13,"carrierName":"Boost Mobile","carrierReference":"BILLPAYMENT_BOOST"}}]}');

        $this->assertTrue($store->hasDealerCode('SALESFORCEID123'));
        $this->assertTrue($store->hasDealerCode('SALESFORCEID123',13));
        $this->assertFalse($store->hasDealerCode('SALESFORCEID124'));
        $this->assertFalse($store->hasDealerCode('SALESFORCEID123',21));

    }

}