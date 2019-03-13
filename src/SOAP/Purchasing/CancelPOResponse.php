<?php

namespace Arkitecht\B2B\SOAP\Purchasing;

class CancelPOResponse
{

    /**
     * @var CancelPOResult $CancelPOResult
     */
    protected $CancelPOResult = null;

    /**
     * @param CancelPOResult $CancelPOResult
     */
    public function __construct($CancelPOResult = null)
    {
      $this->CancelPOResult = $CancelPOResult;
    }

    /**
     * @return CancelPOResult
     */
    public function getCancelPOResult()
    {
      return $this->CancelPOResult;
    }

    /**
     * @param CancelPOResult $CancelPOResult
     * @return \B2B\SOAP\Purchasing\CancelPOResponse
     */
    public function setCancelPOResult($CancelPOResult)
    {
      $this->CancelPOResult = $CancelPOResult;
      return $this;
    }

}
