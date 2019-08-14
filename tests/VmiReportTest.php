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
        $b2b = new B2B($this->config['auth_token']);
        try {
            $b2b->setDebug();
            $data = $b2b->setOlrId($this->config['olrid'])->getVmiReport(4, 'REF#BOOSTMOBILE', 'SevenDays');

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            dd('exception!');
            dd($e->getRequest(), $e->getResponse()->getBody()->getContents());
        }
        //362, 359, 360, 284
        print_r($data);
    }

}
