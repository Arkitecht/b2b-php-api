<?php

namespace Arkitecht\B2B\SOAP\VMI;

class VMISKUDataResult
{

    /**
     * @var ResultCode $Code
     */
    protected $Code = null;

    /**
     * @var ArrayOfVMISKU $Data
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
     * @return \B2B\SOAP\VMI\VMISKUDataResult
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return ArrayOfVMISKU
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param ArrayOfVMISKU $Data
     * @return \B2B\SOAP\VMI\VMISKUDataResult
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
     * @return \B2B\SOAP\VMI\VMISKUDataResult
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
