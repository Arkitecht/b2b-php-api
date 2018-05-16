<?php

class B2BIntegrationTest extends PHPUnit_Framework_TestCase
{

    private $config;

    public function setUp()
    {
        if ( !$this->config ) {
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
        $b2b = new \Arkitecht\B2B\B2B($this->config['auth_token']);
    }

    /** @test */
    function can_add_scopes_by_array()
    {
        $b2b = new \Arkitecht\B2B\B2B($this->config['auth_token']);
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
        $b2b = new \Arkitecht\B2B\B2B($this->config['auth_token']);
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
        $b2b = new \Arkitecht\B2B\B2B($this->config['auth_token'], 'wsTransactionAPI wsTransactionAPI.Read wsCouponAPI wsCouponAPI.Read wsCouponAPI.Write');
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
        $b2b = new \Arkitecht\B2B\B2B($this->config['auth_token'], $this->config['scopes'], false);
        $b2b->setOlrId($this->config['olrid'])->getStores();
    }
}
