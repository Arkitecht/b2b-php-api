<?php

namespace Arkitecht\B2B\SOAP\Purchasing;

class ShipPOResponse
{

    /**
     * @var ShipPOResult $ShipPOResult
     */
    protected $ShipPOResult = null;

    /**
     * @param ShipPOResult $ShipPOResult
     */
    public function __construct($ShipPOResult = null)
    {
      $this->ShipPOResult = $ShipPOResult;
    }

    /**
     * @return ShipPOResult
     */
    public function getShipPOResult()
    {
      return $this->ShipPOResult;
    }

    /**
     * @param ShipPOResult $ShipPOResult
     * @return \B2B\SOAP\Purchasing\ShipPOResponse
     */
    public function setShipPOResult($ShipPOResult)
    {
      $this->ShipPOResult = $ShipPOResult;
      return $this;
    }

}
