<?php

namespace Arkitecht\B2B\SOAP\Purchasing;

class Product
{

    /**
     * @var ProductClass $Class
     */
    protected $Class = null;

    /**
     * @var float $Cost
     */
    protected $Cost = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Manufacturer
     */
    protected $Manufacturer = null;

    /**
     * @var float $MinimumPrice
     */
    protected $MinimumPrice = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $RetailPrice
     */
    protected $RetailPrice = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $UPC
     */
    protected $UPC = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductClass
     */
    public function getClass()
    {
      return $this->Class;
    }

    /**
     * @param ProductClass $Class
     * @return \B2B\SOAP\Purchasing\Product
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
      return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->Cost;
    }

    /**
     * @param float $Cost
     * @return \B2B\SOAP\Purchasing\Product
     */
    public function setCost($Cost)
    {
      $this->Cost = $Cost;
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
     * @return \B2B\SOAP\Purchasing\Product
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
      return $this->Manufacturer;
    }

    /**
     * @param string $Manufacturer
     * @return \B2B\SOAP\Purchasing\Product
     */
    public function setManufacturer($Manufacturer)
    {
      $this->Manufacturer = $Manufacturer;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinimumPrice()
    {
      return $this->MinimumPrice;
    }

    /**
     * @param float $MinimumPrice
     * @return \B2B\SOAP\Purchasing\Product
     */
    public function setMinimumPrice($MinimumPrice)
    {
      $this->MinimumPrice = $MinimumPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \B2B\SOAP\Purchasing\Product
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \B2B\SOAP\Purchasing\Product
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getRetailPrice()
    {
      return $this->RetailPrice;
    }

    /**
     * @param float $RetailPrice
     * @return \B2B\SOAP\Purchasing\Product
     */
    public function setRetailPrice($RetailPrice)
    {
      $this->RetailPrice = $RetailPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param string $SKU
     * @return \B2B\SOAP\Purchasing\Product
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getUPC()
    {
      return $this->UPC;
    }

    /**
     * @param string $UPC
     * @return \B2B\SOAP\Purchasing\Product
     */
    public function setUPC($UPC)
    {
      $this->UPC = $UPC;
      return $this;
    }

}
