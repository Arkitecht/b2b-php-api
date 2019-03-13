<?php

namespace Arkitecht\B2B\SOAP\VMI;

class KeyValueOfanyTypeanyType
{

    /**
     * @var anyType $Key
     */
    protected $Key = null;

    /**
     * @var anyType $Value
     */
    protected $Value = null;

    /**
     * @param anyType $Key
     * @param anyType $Value
     */
    public function __construct($Key = null, $Value = null)
    {
      $this->Key = $Key;
      $this->Value = $Value;
    }

    /**
     * @return anyType
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param anyType $Key
     * @return \B2B\SOAP\VMI\KeyValueOfanyTypeanyType
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anyType $Value
     * @return \B2B\SOAP\VMI\KeyValueOfanyTypeanyType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
