<?php

use Arkitecht\B2B\B2B;
use Arkitecht\B2B\PurchaseOrder;
use Arkitecht\B2B\SOAP\VMI\VMIService;

class VmiReportTest extends PHPUnit_Framework_TestCase
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
    function can_get_vmi_report()
    {
        /*
         * $logon = $this->b2bSoap->getLogonObject($this->config['olrid']);

        $service = new VMIService();
        $report = new \Arkitecht\B2B\SOAP\VMI\GetVMIReport();
        $report->setLogon($logon);
        $report->setDateFrom(\Carbon\Carbon::parse('7 days ago')->startOfDay());
        $report->setDateEnd(\Carbon\Carbon::now());
        $report->setDealerCodes($this->config['soap']['dealer_codes']);
         */
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], true);
        try {
            $b2b->setDebug();
            $data = $b2b->setOlrId($this->config['olrid'])->getVmiReport([1, 2, 3, 4, 5], 'REF#REF#REF', [
                'StartDate' => '2019-08-21',
                'EndDate'   => '2019-08-23',
                /*'UPC'       => [
                    '190198047922',
                ],*/
                'SKU'       => [
                    'LGLS676ABB',
                ],
                'Period'    => 'TwoWeeks',
            ]);

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            dd('exception!');
            dd($e->getRequest(), $e->getResponse()->getBody()->getContents());
        }
        //362, 359, 360, 284
        print_r(json_decode($data));
    }

    /** @test */
    function can_get_prod_vmi_report()
    {

        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false, 'production');
        try {
            $b2b->setDebug();
            $data = $b2b->setOlrId(9900803)->getVmiReport([167], 'REF#ELEV#VIP', [
                'StartDate' => '2019-08-29',
                'EndDate'   => '2019-09-04',
            ]);

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            dd('exception!');
            dd($e->getRequest(), $e->getResponse()->getBody()->getContents());
        }
        //362, 359, 360, 284
        print_r(json_decode($data));
    }

    /** @test */
    function can_get_item_movement_report()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes']);
        $b2b->setDebug();
        $data = $b2b->setOlrId(9901948)->getItemMovementReport('2019-08-01', '2019-08-30', [
            'Department' => ['Devices', 'android', 'EOL/Legacy']
            //'SKU' => ['819907010001']
        ]);

        $data = json_decode($data);
        print_r($data);
        $locationOne = $data->locationList[0];
        $products = $locationOne->productsList;
        foreach ($products as $product) {
            if ($product->sale > 0) {
                print_r($product);
            }
        }
    }

}
