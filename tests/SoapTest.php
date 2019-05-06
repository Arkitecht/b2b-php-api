<?php

use Arkitecht\B2B\SOAP\VMI\VMIService;

class SoapTest extends PHPUnit_Framework_TestCase
{

    private $config;
    private $b2bSoap;

    public function setUp()
    {
        if (!$this->config) {
            $this->config = require dirname(__FILE__) . '/config.php';
        }
        $this->b2bSoap = new \Arkitecht\B2B\B2BSoap(
            $this->config['soap']['service_code'],
            $this->config['soap']['username'],
            $this->config['soap']['password'],
            $this->config['soap']['vendor_code']
        );
    }

    /** @test */
    function can_get_vmi_report()
    {
        ini_set('memory_limit', '2G');
        $logon = $this->b2bSoap->getLogonObject($this->config['olrid']);

        $service = new VMIService();
        $report = new \Arkitecht\B2B\SOAP\VMI\GetVMIReport();
        $report->setLogon($logon);
        $report->setDateFrom(\Carbon\Carbon::parse('7 days ago')->startOfDay());
        $report->setDateEnd(\Carbon\Carbon::now());
        $report->setDealerCodes($this->config['soap']['dealer_codes']);

        $response = $service->GetVMIReport($report);
        $result = $response->getGetVMIReportResult();

        /*print_r($result->fromJson());
        exit();*/
        print_r(collect($result->fromJson()->data)->reject(function ($item) {
            return $item->sales == 0 || !preg_match('/Apple iPhone 6/', $item->full_description);
        })->groupBy('salesforce_id')->map(function ($data, $sfid) {
            return $data->map(function ($item) {
                return $item;
            });
        }));
    }
}