<?php

namespace Tests;

use Arkitecht\B2B\B2B;
use Arkitecht\B2B\PurchaseOrder;
use PHPUnit\Framework\Attributes\Test;
use Carbon\Carbon;

class B2BIntegrationTest extends BaseB2bTest
{
    /** @test */
    #[Test]
    function can_create_b2b_service_object()
    {
        $b2b = new B2B($this->config['auth_token']);
        $this->assertInstanceOf(B2B::class, $b2b);
    }

    /** @test */
    #[Test]
    function can_add_scopes_by_array()
    {
        $b2b = new B2B($this->config['auth_token']);
        $b2b->addScope(['wsTransactionAPI', 'wsTransactionAPI.Read']);

        $this->assertEquals([
            'wsTransactionAPI',
            'wsTransactionAPI.Read',
        ], $b2b->scopes());

        $b2b->addScope(['wsCouponAPI']);
        $this->assertEquals([
            'wsTransactionAPI',
            'wsTransactionAPI.Read',
            'wsCouponAPI',
        ], $b2b->scopes());

        $b2b->addScope(['wsCouponAPI.Read', 'wsCouponAPI.Write']);
        $this->assertEquals([
            'wsTransactionAPI',
            'wsTransactionAPI.Read',
            'wsCouponAPI',
            'wsCouponAPI.Read',
            'wsCouponAPI.Write',
        ], $b2b->scopes());

    }

    /** @test */
    #[Test]
    function can_add_scopes_by_string()
    {
        //'wsTransactionAPI wsTransactionAPI.Read wsCouponAPI wsCouponAPI.Read wsCouponAPI.Write wsProductAPI wsProductAPI.Reserve wsProductAPI.ReadDict',
        $b2b = new B2B($this->config['auth_token']);
        $b2b->addScope('wsTransactionAPI wsTransactionAPI.Read');

        $this->assertEquals([
            'wsTransactionAPI',
            'wsTransactionAPI.Read',
        ], $b2b->scopes());

        $b2b->addScope('wsCouponAPI');
        $this->assertEquals([
            'wsTransactionAPI',
            'wsTransactionAPI.Read',
            'wsCouponAPI',
        ], $b2b->scopes());

        $b2b->addScope('wsCouponAPI.Read wsCouponAPI.Write');
        $this->assertEquals([
            'wsTransactionAPI',
            'wsTransactionAPI.Read',
            'wsCouponAPI',
            'wsCouponAPI.Read',
            'wsCouponAPI.Write',
        ], $b2b->scopes());
    }

    /** @test */
    #[Test]
    function can_get_scopes_as_string()
    {
        $b2b = new B2B($this->config['auth_token'], 'wsTransactionAPI wsTransactionAPI.Read wsCouponAPI wsCouponAPI.Read wsCouponAPI.Write');
        $this->assertEquals([
            'wsTransactionAPI',
            'wsTransactionAPI.Read',
            'wsCouponAPI',
            'wsCouponAPI.Read',
            'wsCouponAPI.Write',
        ], $b2b->scopes());

        $this->assertEquals('wsTransactionAPI wsTransactionAPI.Read wsCouponAPI wsCouponAPI.Read wsCouponAPI.Write', $b2b->scopes(true));
    }

    /** @test */
    #[Test]
    function can_get_a_list_of_stores()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $data = $b2b->setOlrId($this->config['olrid'])->getStores();
        $this->assertNotEmpty($data);
    }

    /** @test */
    #[Test]
    function can_add_a_purchase_order()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false, 'production');
        $b2b->setDebug();

        /*$purchaseOrder = (new  PurchaseOrder())
            ->setStoreId(4)
            ->setDate(\Carbon\Carbon::now())
            ->setReferenceNum('TESTREST123' . time())
            ->setShippingCost(5.00)
            ->setVendorCode('REF#ELEV#VIP');

        $purchaseOrder->addProduct((new \Arkitecht\B2B\ComplexTypes\Product())
            ->setCost(99.99)
            ->setQuantity(5)
            ->setName('BLGTributeDynasty')
            ->setClass(\Arkitecht\B2B\ComplexTypes\ProductClass::CellPhone)
            ->setManufacturer('LG')
            ->setUpc('652810819046')
            ->setDescription('LG Tribute Dynasty')
            ->setSku('652810819046'));*/

        $purchaseOrder = (new  PurchaseOrder())
            ->setStoreId(4)
            ->setDate(\Carbon\Carbon::now())
            ->setReferenceNum('TESTREST123' . time())
            ->setShippingCost(0)
            ->setVendorCode('REF#ONDIGO');

        $purchaseOrder->addProduct((new \Arkitecht\B2B\ComplexTypes\Product())
            ->setCost(3.2)
            ->setQuantity(2)
            ->setName('AMPD 3-in-1 Dual Protection Case w/ Kickstand\Clip')
            ->setClass(\Arkitecht\B2B\ComplexTypes\ProductClass::StandardAccessory)
            ->setManufacturer('Ondigo')
            ->setUpc('21150170011')
            ->setDescription('AMPD Black')
            ->setCategoryId(1011)
            ->setSku('AA-SCREWSLIM-STYLO3-BLK'));

        $purchaseOrder->addProduct((new \Arkitecht\B2B\ComplexTypes\Product())
            ->setCost(3.2)
            ->setQuantity(3)
            ->setName('AMPD 3-in-1 Dual Protection Case w/ Kickstand/Clip')
            ->setClass(\Arkitecht\B2B\ComplexTypes\ProductClass::StandardAccessory)
            ->setManufacturer('Ondigo')
            ->setUpc('211150170028')
            ->setDescription('AMPD Black')
            ->setCategoryId(1011)
            ->setSku('AA-SCREWSLIM-STYLO3-RED'));

        $response = $b2b->setOlrId($this->config['olrid'])->addPurchaseOrder($purchaseOrder);
        if (is_a($response, \GuzzleHttp\Exception\ClientException::class)) {
            $this->fail($response->getMessage());
        }

        $this->assertNotEmpty($response);
    }

    /** @test */
    #[Test]
    function can_set_environment_to_production()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false, 'production');
        $this->assertEquals('production', $b2b->getEnvironment());
        $this->assertEquals('https://apigateway.b2bsoft.com', $b2b->getEndpoint());
        $this->assertEquals('https://sso.b2bsoft.com', $b2b->getSsoEndpoint());
    }

    /** @test */
    #[Test]
    function can_create_production_b2b_service_object()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], true, 'production');
        $this->assertEquals('production', $b2b->getEnvironment());
        $this->assertEquals('https://apigateway.b2bsoft.com', $b2b->getEndpoint());
        $this->assertEquals('https://sso.b2bsoft.com', $b2b->getSsoEndpoint());
    }

    /** @test */
    #[Test]
    function can_get_stores()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getStores();
        print_r($response);
        $this->assertNotEmpty($response);
    }

    /** @test */
    #[Test]
    function can_get_coupons()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getCoupons();
        $items = json_decode($response);
        print_r($items);
        $this->assertNotEmpty($items);
    }

    /** @test */
    #[Test]
    function can_get_pos()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getPurchaseOrders();
        print_r($response);
        $this->assertNotEmpty($response);
    }

    /** @test */
    #[Test]
    function can_get_po()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getPurchaseOrder('e6c4eb49-aa28-4925-8372-00c6ea159215');
        $this->assertNotEmpty($response);
        $this->assertTrue(array_key_exists('documentId', json_decode($response, JSON_OBJECT_AS_ARRAY)));
    }

    /** @test */
    #[Test]
    function can_get_po_receipts()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getPurchaseOrderReceipts(null, 'Ondigo');
        // print_r($response);
    }

    /** @test */
    #[Test]
    function can_get_po_receipt()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getPurchaseOrderReceipt('6c6c9f03-9a39-4c5c-b6e9-082010444326');
        print_r($response);
        $this->assertNotEmpty($response);
    }

    /** @test */
    #[Test]
    function can_get_products()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getProductsInStock();
        print_r($response);
        $this->assertNotEmpty($response);
    }

    /** @test */
    #[Test]
    function can_get_store_products()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getStoreProductsInStock(1);
        $items = json_decode($response);
        print_r($items);
        $this->assertNotEmpty($items);
    }

    /** @test */
    #[Test]
    function can_get_products_with_filter()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getProducts(['Sku' => 'MOT1766ABB']);
        $items = json_decode($response);
        print_r($items);
        $this->assertNotEmpty($items);
    }

    /** @test */
    #[Test]
    function can_get_products_in_production()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], true, 'production');
        $this->assertEquals('production', $b2b->getEnvironment());
        $this->assertEquals('https://apigateway.b2bsoft.com', $b2b->getEndpoint());
        $this->assertEquals('https://sso.b2bsoft.com', $b2b->getSsoEndpoint());
        $b2b->setDebug(true);
        $response = $b2b->setOlrId($this->config['olrid'])->getProducts();
        print_r($response);
        $items = json_decode($response);
        $this->assertNotNull($items);
    }

    /** @test */
    #[Test]
    function can_get_categories()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false, 'production');
        $response = $b2b->setOlrId($this->config['olrid'])->getSystemCategories();
        $items = json_decode($response);
        print_r($items);
        $this->assertNotNull($items);
    }

    /** @test */
    #[Test]
    function can_get_departments_in_production()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false, 'production');
        $response = $b2b->setOlrId($this->config['olrid'])->getSystemCategories();
        $items = json_decode($response);
        print_r($items);
        $this->assertNotNull($items);
    }

    /** @test */
    #[Test]
    function can_get_vmi_report()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false, 'production');
        $b2b->setDebug();
        $response = $b2b->setOlrId(9905501)->getVmiReport(7, 'REF#ELEV#ELEV', [
            'StartDate' => Carbon::now()->toDateString(),
            'EndDate'   => Carbon::now()->toDateString(),
        ]);

        print_r($response);

        $data = json_decode($response);
        print_r($data);
    }

}
