<?php

namespace Arkitecht\B2B\SOAP\Purchasing;

class ClosePOResponse
{

    /**
     * @var ClosePOResult $ClosePOResult
     */
    protected $ClosePOResult = null;

    /**
     * @param ClosePOResult $ClosePOResult
     */
    public function __construct($ClosePOResult = null)
    {
      $this->ClosePOResult = $ClosePOResult;
    }

    /**
     * @return ClosePOResult
     */
    public function getClosePOResult()
    {
      return $this->ClosePOResult;
    }

    /**
     * @param ClosePOResult $ClosePOResult
     * @return \B2B\SOAP\Purchasing\ClosePOResponse
     */
    public function setClosePOResult($ClosePOResult)
    {
      $this->ClosePOResult = $ClosePOResult;
      return $this;
    }

}
