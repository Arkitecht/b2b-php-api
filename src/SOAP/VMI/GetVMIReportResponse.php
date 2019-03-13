<?php

namespace Arkitecht\B2B\SOAP\VMI;

class GetVMIReportResponse
{

    /**
     * @var VMIReportResult $GetVMIReportResult
     */
    protected $GetVMIReportResult = null;

    /**
     * @param VMIReportResult $GetVMIReportResult
     */
    public function __construct($GetVMIReportResult = null)
    {
      $this->GetVMIReportResult = $GetVMIReportResult;
    }

    /**
     * @return VMIReportResult
     */
    public function getGetVMIReportResult()
    {
      return $this->GetVMIReportResult;
    }

    /**
     * @param VMIReportResult $GetVMIReportResult
     * @return \B2B\SOAP\VMI\GetVMIReportResponse
     */
    public function setGetVMIReportResult($GetVMIReportResult)
    {
      $this->GetVMIReportResult = $GetVMIReportResult;
      return $this;
    }

}
