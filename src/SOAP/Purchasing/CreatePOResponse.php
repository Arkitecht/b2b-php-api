<?php

namespace Arkitecht\B2B\SOAP\Purchasing;

class CreatePOResponse
{

    /**
     * @var CreatePOResult $CreatePOResult
     */
    protected $CreatePOResult = null;

    /**
     * @param CreatePOResult $CreatePOResult
     */
    public function __construct($CreatePOResult = null)
    {
      $this->CreatePOResult = $CreatePOResult;
    }

    /**
     * @return CreatePOResult
     */
    public function getCreatePOResult()
    {
      return $this->CreatePOResult;
    }

    /**
     * @param CreatePOResult $CreatePOResult
     * @return \B2B\SOAP\Purchasing\CreatePOResponse
     */
    public function setCreatePOResult($CreatePOResult)
    {
      $this->CreatePOResult = $CreatePOResult;
      return $this;
    }

}
