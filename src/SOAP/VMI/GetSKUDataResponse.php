<?php

namespace Arkitecht\B2B\SOAP\VMI;

class GetSKUDataResponse
{

    /**
     * @var VMISKUDataResult $GetSKUDataResult
     */
    protected $GetSKUDataResult = null;

    /**
     * @param VMISKUDataResult $GetSKUDataResult
     */
    public function __construct($GetSKUDataResult = null)
    {
      $this->GetSKUDataResult = $GetSKUDataResult;
    }

    /**
     * @return VMISKUDataResult
     */
    public function getGetSKUDataResult()
    {
      return $this->GetSKUDataResult;
    }

    /**
     * @param VMISKUDataResult $GetSKUDataResult
     * @return \B2B\SOAP\VMI\GetSKUDataResponse
     */
    public function setGetSKUDataResult($GetSKUDataResult)
    {
      $this->GetSKUDataResult = $GetSKUDataResult;
      return $this;
    }

}
