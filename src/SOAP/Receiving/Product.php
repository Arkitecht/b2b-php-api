<?php

namespace Arkitecht\B2B\SOAP\Receiving;

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
     * @var string $Serial1
     */
    protected $Serial1 = null;

    /**
     * @var string $Serial2
     */
    protected $Serial2 = null;

    /**
     * @var string $Serial3
     */
    protected $Serial3 = null;

    /**
     * @var string $Serial4
     */
    protected $Serial4 = null;

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
     * @return \B2B\SOAP\Receiving\Product
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
     * @return \B2B\SOAP\Receiving\Product
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
     * @return \B2B\SOAP\Receiving\Product
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
     * @return \B2B\SOAP\Receiving\Product
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
     * @return \B2B\SOAP\Receiving\Product
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
     * @return \B2B\SOAP\Receiving\Product
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
     * @return \B2B\SOAP\Receiving\Product
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
     * @return \B2B\SOAP\Receiving\Product
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
     * @return \B2B\SOAP\Receiving\Product
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerial1()
    {
      return $this->Serial1;
    }

    /**
     * @param string $Serial1
     * @return \B2B\SOAP\Receiving\Product
     */
    public function setSerial1($Serial1)
    {
      $this->Serial1 = $Serial1;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerial2()
    {
      return $this->Serial2;
    }

    /**
     * @param string $Serial2
     * @return \B2B\SOAP\Receiving\Product
     */
    public function setSerial2($Serial2)
    {
      $this->Serial2 = $Serial2;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerial3()
    {
      return $this->Serial3;
    }

    /**
     * @param string $Serial3
     * @return \B2B\SOAP\Receiving\Product
     */
    public function setSerial3($Serial3)
    {
      $this->Serial3 = $Serial3;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerial4()
    {
      return $this->Serial4;
    }

    /**
     * @param string $Serial4
     * @return \B2B\SOAP\Receiving\Product
     */
    public function setSerial4($Serial4)
    {
      $this->Serial4 = $Serial4;
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
     * @return \B2B\SOAP\Receiving\Product
     */
    public function setUPC($UPC)
    {
      $this->UPC = $UPC;
      return $this;
    }

}
