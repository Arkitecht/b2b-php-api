<?php

namespace Arkitecht\B2B\SOAP\VMI;

class VMICustomerLocation
{

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $FullName
     */
    protected $FullName = null;

    /**
     * @var int $LocationID
     */
    protected $LocationID = null;

    /**
     * @var string $PrimaryFax
     */
    protected $PrimaryFax = null;

    /**
     * @var string $PrimaryPhone
     */
    protected $PrimaryPhone = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $StateCode
     */
    protected $StateCode = null;

    /**
     * @var string $Store
     */
    protected $Store = null;

    /**
     * @var float $TimeZone
     */
    protected $TimeZone = null;

    /**
     * @var string $ZIP
     */
    protected $ZIP = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
      return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return \B2B\SOAP\VMI\VMICustomerLocation
     */
    public function setAddress1($Address1)
    {
      $this->Address1 = $Address1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \B2B\SOAP\VMI\VMICustomerLocation
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \B2B\SOAP\VMI\VMICustomerLocation
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \B2B\SOAP\VMI\VMICustomerLocation
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \B2B\SOAP\VMI\VMICustomerLocation
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
      return $this->FullName;
    }

    /**
     * @param string $FullName
     * @return \B2B\SOAP\VMI\VMICustomerLocation
     */
    public function setFullName($FullName)
    {
      $this->FullName = $FullName;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param int $LocationID
     * @return \B2B\SOAP\VMI\VMICustomerLocation
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrimaryFax()
    {
      return $this->PrimaryFax;
    }

    /**
     * @param string $PrimaryFax
     * @return \B2B\SOAP\VMI\VMICustomerLocation
     */
    public function setPrimaryFax($PrimaryFax)
    {
      $this->PrimaryFax = $PrimaryFax;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrimaryPhone()
    {
      return $this->PrimaryPhone;
    }

    /**
     * @param string $PrimaryPhone
     * @return \B2B\SOAP\VMI\VMICustomerLocation
     */
    public function setPrimaryPhone($PrimaryPhone)
    {
      $this->PrimaryPhone = $PrimaryPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \B2B\SOAP\VMI\VMICustomerLocation
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getStateCode()
    {
      return $this->StateCode;
    }

    /**
     * @param string $StateCode
     * @return \B2B\SOAP\VMI\VMICustomerLocation
     */
    public function setStateCode($StateCode)
    {
      $this->StateCode = $StateCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStore()
    {
      return $this->Store;
    }

    /**
     * @param string $Store
     * @return \B2B\SOAP\VMI\VMICustomerLocation
     */
    public function setStore($Store)
    {
      $this->Store = $Store;
      return $this;
    }

    /**
     * @return float
     */
    public function getTimeZone()
    {
      return $this->TimeZone;
    }

    /**
     * @param float $TimeZone
     * @return \B2B\SOAP\VMI\VMICustomerLocation
     */
    public function setTimeZone($TimeZone)
    {
      $this->TimeZone = $TimeZone;
      return $this;
    }

    /**
     * @return string
     */
    public function getZIP()
    {
      return $this->ZIP;
    }

    /**
     * @param string $ZIP
     * @return \B2B\SOAP\VMI\VMICustomerLocation
     */
    public function setZIP($ZIP)
    {
      $this->ZIP = $ZIP;
      return $this;
    }

}
