<?php

namespace Arkitecht\B2B\SOAP\VMI;

class VMISKU
{

    /**
     * @var string $Active
     */
    protected $Active = null;

    /**
     * @var int $CustomerSKU
     */
    protected $CustomerSKU = null;

    /**
     * @var boolean $EndofLife
     */
    protected $EndofLife = null;

    /**
     * @var string $LongDesc
     */
    protected $LongDesc = null;

    /**
     * @var string $ShortDesc
     */
    protected $ShortDesc = null;

    /**
     * @var string $VendorSKU
     */
    protected $VendorSKU = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param string $Active
     * @return \B2B\SOAP\VMI\VMISKU
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerSKU()
    {
      return $this->CustomerSKU;
    }

    /**
     * @param int $CustomerSKU
     * @return \B2B\SOAP\VMI\VMISKU
     */
    public function setCustomerSKU($CustomerSKU)
    {
      $this->CustomerSKU = $CustomerSKU;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEndofLife()
    {
      return $this->EndofLife;
    }

    /**
     * @param boolean $EndofLife
     * @return \B2B\SOAP\VMI\VMISKU
     */
    public function setEndofLife($EndofLife)
    {
      $this->EndofLife = $EndofLife;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongDesc()
    {
      return $this->LongDesc;
    }

    /**
     * @param string $LongDesc
     * @return \B2B\SOAP\VMI\VMISKU
     */
    public function setLongDesc($LongDesc)
    {
      $this->LongDesc = $LongDesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortDesc()
    {
      return $this->ShortDesc;
    }

    /**
     * @param string $ShortDesc
     * @return \B2B\SOAP\VMI\VMISKU
     */
    public function setShortDesc($ShortDesc)
    {
      $this->ShortDesc = $ShortDesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorSKU()
    {
      return $this->VendorSKU;
    }

    /**
     * @param string $VendorSKU
     * @return \B2B\SOAP\VMI\VMISKU
     */
    public function setVendorSKU($VendorSKU)
    {
      $this->VendorSKU = $VendorSKU;
      return $this;
    }

}
