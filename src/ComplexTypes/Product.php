<?php

namespace Arkitecht\B2B\ComplexTypes;


use Arkitecht\B2B\B2BObject;

class Product extends B2BObject
{
    /**
     * @var int // 0
     */
    public $categoryId;
    /**
     * @var string // "string"
     */
    public $sku;
    /**
     * @var int // 0
     */
    public $quantity;
    /**
     * @var float // 0
     */
    public $cost;
    /**
     * @var string // "string"
     */
    public $name;
    /**
     * @var string // "string"
     */
    public $description;
    /**
     * @var string // "string"
     */
    public $upc;
    /**
     * @var float // 0
     */
    public $retailPrice;
    /**
     * @var float   // 0
     */
    public $minimumPrice = 0;
    /**
     * @var string // "CellPhone"
     */
    public $class;
    /**
     * @var string // "string"
     */
    public $manufacturer;

    /**
     * @param int $categoryId
     *
     * @return Product
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * @param string $sku
     *
     * @return Product
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @param int $quantity
     *
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param float $cost
     *
     * @return Product
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param string $upc
     *
     * @return Product
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;

        return $this;
    }

    /**
     * @param float $retailPrice
     *
     * @return Product
     */
    public function setRetailPrice($retailPrice)
    {
        $this->retailPrice = $retailPrice;

        return $this;
    }

    /**
     * @param float $minimumPrice
     *
     * @return Product
     */
    public function setMinimumPrice($minimumPrice)
    {
        $this->minimumPrice = $minimumPrice;

        return $this;
    }

    /**
     * @param string $class
     *
     * @return Product
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * @param string $manufacturer
     *
     * @return Product
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }
}