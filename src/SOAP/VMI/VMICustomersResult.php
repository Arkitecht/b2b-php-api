<?php

namespace Arkitecht\B2B\SOAP\VMI;

class VMICustomersResult
{

    /**
     * @var ResultCode $Code
     */
    protected $Code = null;

    /**
     * @var ArrayOfVMICustomerLocation $Data
     */
    protected $Data = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ResultCode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param ResultCode $Code
     * @return \B2B\SOAP\VMI\VMICustomersResult
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return ArrayOfVMICustomerLocation
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param ArrayOfVMICustomerLocation $Data
     * @return \B2B\SOAP\VMI\VMICustomersResult
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \B2B\SOAP\VMI\VMICustomersResult
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
