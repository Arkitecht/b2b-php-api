<?php

namespace Arkitecht\B2B\SOAP\Purchasing;

class LogOnInfo
{

    /**
     * @var string $CompanyCode
     */
    protected $CompanyCode = null;

    /**
     * @var string $DealerCode
     */
    protected $DealerCode = null;

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


    public function __construct($CompanyCode='',$DealerCode='',$UserName='',$Password='',$ServiceCode='')
    {
        $this->CompanyCode = $CompanyCode;
        $this->DealerCode = $DealerCode;
        $this->UserName = $UserName;
        $this->Password = $Password;
        $this->ServiceCode = $ServiceCode;
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
     * @return \B2B\SOAP\Purchasing\LogOnInfo
     */
    public function setCompanyCode($CompanyCode)
    {
      $this->CompanyCode = $CompanyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDealerCode()
    {
      return $this->DealerCode;
    }

    /**
     * @param string $DealerCode
     * @return \B2B\SOAP\Purchasing\LogOnInfo
     */
    public function setDealerCode($DealerCode)
    {
      $this->DealerCode = $DealerCode;
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
     * @return \B2B\SOAP\Purchasing\LogOnInfo
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
     * @return \B2B\SOAP\Purchasing\LogOnInfo
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
     * @return \B2B\SOAP\Purchasing\LogOnInfo
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

}
