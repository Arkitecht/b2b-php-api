<?php

use Arkitecht\B2B\SOAP\VMI\VMIService;

class SoapTest extends PHPUnit_Framework_TestCase
{

    private $config;

    public function setUp()
    {
        if (!$this->config) {
            $this->config = require dirname(__FILE__) . '/config.php';
        }
    }

    /** @test */
    function can_get_vmi_report()
    {
        ini_set('memory_limit', '2G');
        $logon = new \Arkitecht\B2B\SOAP\VMI\LogOnInfo(
            $CompanyCode = $this->config['olrid'],
            $ServiceCode = $this->config['soap']['service_code'],
            $UserName = $this->config['soap']['username'],
            $Password = $this->config['soap']['password'],
            $VendorCode = $this->config['soap']['vendor_code']
        );

        $service = new VMIService();
        $report = new \Arkitecht\B2B\SOAP\VMI\GetVMIReport();
        $report->setLogon($logon);
        $report->setDateFrom(\Carbon\Carbon::parse('2018-12-17')->startOfDay());
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