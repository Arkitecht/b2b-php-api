<?php

namespace Arkitecht\B2B\SOAP\Purchasing;

class ClosePOResult
{

    /**
     * @var ResultCode $Code
     */
    protected $Code = null;

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
     * @return \B2B\SOAP\Purchasing\ClosePOResult
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \B2B\SOAP\Purchasing\ClosePOResult
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
