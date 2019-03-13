<?php

namespace Arkitecht\B2B\SOAP\VMI;

class GetCustomerLocationsResponse
{

    /**
     * @var VMICustomersResult $GetCustomerLocationsResult
     */
    protected $GetCustomerLocationsResult = null;

    /**
     * @param VMICustomersResult $GetCustomerLocationsResult
     */
    public function __construct($GetCustomerLocationsResult = null)
    {
      $this->GetCustomerLocationsResult = $GetCustomerLocationsResult;
    }

    /**
     * @return VMICustomersResult
     */
    public function getGetCustomerLocationsResult()
    {
      return $this->GetCustomerLocationsResult;
    }

    /**
     * @param VMICustomersResult $GetCustomerLocationsResult
     * @return \B2B\SOAP\VMI\GetCustomerLocationsResponse
     */
    public function setGetCustomerLocationsResult($GetCustomerLocationsResult)
    {
      $this->GetCustomerLocationsResult = $GetCustomerLocationsResult;
      return $this;
    }

}
