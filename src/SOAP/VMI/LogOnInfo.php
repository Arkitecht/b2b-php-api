<?php

namespace Arkitecht\B2B\SOAP\VMI;

class LogOnInfo
{

    /**
     * @var string $CompanyCode
     */
    protected $CompanyCode = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $ServiceCode
     */
    protected $ServiceCode = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $VendorCode
     */
    protected $VendorCode = null;


    public function __construct($CompanyCode='',$ServiceCode='',$UserName='',$Password='',$VendorCode='')
    {
        $this->CompanyCode = $CompanyCode;
        $this->ServiceCode = $ServiceCode;
        $this->UserName = $UserName;
        $this->Password = $Password;
        $this->VendorCode = $VendorCode;
    }

    /**
     * @return string
     */
    public function getCompanyCode()
    {
      return $this->CompanyCode;
    }

    /**
     * @param string $CompanyCode
     * @return \B2B\SOAP\VMI\LogOnInfo
     */
    public function setCompanyCode($CompanyCode)
    {
      $this->CompanyCode = $CompanyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \B2B\SOAP\VMI\LogOnInfo
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceCode()
    {
      return $this->ServiceCode;
    }

    /**
     * @param string $ServiceCode
     * @return \B2B\SOAP\VMI\LogOnInfo
     */
    public function setServiceCode($ServiceCode)
    {
      $this->ServiceCode = $ServiceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \B2B\SOAP\VMI\LogOnInfo
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorCode()
    {
      return $this->VendorCode;
    }

    /**
     * @param string $VendorCode
     * @return \B2B\SOAP\VMI\LogOnInfo
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
      return $this;
    }

}
