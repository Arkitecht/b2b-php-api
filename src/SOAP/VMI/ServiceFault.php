<?php

namespace Arkitecht\B2B\SOAP\VMI;

class ServiceFault
{

    /**
     * @var ArrayOfKeyValueOfanyTypeanyType $Data
     */
    protected $Data = null;

    /**
     * @var guid $Id
     */
    protected $Id = null;

    /**
     * @var string $MessageText
     */
    protected $MessageText = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfKeyValueOfanyTypeanyType
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param ArrayOfKeyValueOfanyTypeanyType $Data
     * @return \B2B\SOAP\VMI\ServiceFault
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

    /**
     * @return guid
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param guid $Id
     * @return \B2B\SOAP\VMI\ServiceFault
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
      return $this->MessageText;
    }

    /**
     * @param string $MessageText
     * @return \B2B\SOAP\VMI\ServiceFault
     */
    public function setMessageText($MessageText)
    {
      $this->MessageText = $MessageText;
      return $this;
    }

}
