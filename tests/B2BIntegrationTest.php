<?php

use Arkitecht\B2B\B2B;
use Arkitecht\B2B\PurchaseOrder;

class B2BIntegrationTest extends PHPUnit_Framework_TestCase
{

    private $config;

    public function setUp()
    {
        if (!$this->config) {
            $this->config = require dirname(__FILE__) . '/config.php';
        }
    }

    private function getConfig()
    {
        $this->config = require_once dirname(__FILE__) . '/config.php';
    }

    /** @test */
    function can_create_b2b_service_object()
    {
        $b2b = new B2B($this->config['auth_token']);
    }

    /** @test */
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
    function can_get_a_list_of_stores()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $b2b->setOlrId($this->config['olrid'])->getStores();
    }

    /** @test */
    function can_add_a_purchase_order()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
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
            ->setShippingCost(5.00)
            ->setVendorCode('REF#ONDIGO');

        $purchaseOrder->addProduct((new \Arkitecht\B2B\ComplexTypes\Product())
            ->setCost(125.55)
            ->setQuantity(5)
            ->setName('SUPERONDIGOSKU')
            ->setClass(\Arkitecht\B2B\ComplexTypes\ProductClass::StandardAccessory)
            ->setManufacturer('Ondigo')
            ->setUpc('SUPERONDIGOSKU')
            ->setDescription('Brand New Ondigo SKU')
            ->setSku('SUPERONDIGOSKU'));

        $response = $b2b->setOlrId($this->config['olrid'])->addPurchaseOrder($purchaseOrder);
        if (is_a($response, \GuzzleHttp\Exception\ClientException::class)) {
            $this->fail($response->getMessage());
        }

        print_r($response);
    }

    /** @test */
    function can_set_environment_to_production()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false, 'production');
        $this->assertEquals('production', $b2b->getEnvironment());
        $this->assertEquals('https://api.b2bsoft.com', $b2b->getEndpoint());
        $this->assertEquals('https://sso.b2bsoft.com', $b2b->getSsoEndpoint());
    }

    /** @test */
    function can_create_production_b2b_service_object()
    {
        $b2b = new B2B($this->config['prod_auth_token'], $this->config['scopes'], true, 'production');
        $this->assertEquals('production', $b2b->getEnvironment());
        $this->assertEquals('https://api.b2bsoft.com', $b2b->getEndpoint());
        $this->assertEquals('https://sso.b2bsoft.com', $b2b->getSsoEndpoint());
    }

    /** @test */
    function can_get_stores()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getStores();
        print_r($response);
    }

    /** @test */
    function can_get_coupons()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getCoupons();
        $this->assertObjectHasAttribute('items', json_decode($response));
    }

    /** @test */
    function can_get_pos()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getPurchaseOrders();
        print_r($response);
    }

    /** @test */
    function can_get_po()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getPurchaseOrder('89b4e4ef-d312-4b2e-a070-c5349996f7b0');
        $this->assertObjectHasAttribute('documentId', json_decode($response));
    }

    /** @test */
    function can_get_po_receipts()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getPurchaseOrderReceipts(null, 'Ondigo');
        print_r($response);
    }

    /** @test */
    function can_get_po_receipt()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getPurchaseOrderReceipt('6c6c9f03-9a39-4c5c-b6e9-082010444326');
        print_r($response);
    }

    /** @test */
    function can_get_products()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getProductsInStock();
        print_r($response);
    }

    /** @test */
    function can_get_store_products()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getStoreProductsInStock(4,['Upc'=>'819907010001']);
        $items = json_decode($response);
        print_r($items);
    }

    /** @test */
    function can_get_products_with_filter()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false);
        $response = $b2b->setOlrId($this->config['olrid'])->getProducts(['Sku'=>'MOT1766ABB']);
        $items = json_decode($response);
        print_r($items);
    }


}
