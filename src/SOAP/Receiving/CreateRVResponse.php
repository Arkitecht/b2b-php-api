<?php

namespace Arkitecht\B2B\SOAP\Receiving;

class CreateRVResponse
{

    /**
     * @var CreateRVResult $CreateRVResult
     */
    protected $CreateRVResult = null;

    /**
     * @param CreateRVResult $CreateRVResult
     */
    public function __construct($CreateRVResult = null)
    {
      $this->CreateRVResult = $CreateRVResult;
    }

    /**
     * @return CreateRVResult
     */
    public function getCreateRVResult()
    {
      return $this->CreateRVResult;
    }

    /**
     * @param CreateRVResult $CreateRVResult
     * @return \B2B\SOAP\Receiving\CreateRVResponse
     */
    public function setCreateRVResult($CreateRVResult)
    {
      $this->CreateRVResult = $CreateRVResult;
      return $this;
    }

}
