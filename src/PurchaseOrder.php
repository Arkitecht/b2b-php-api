<?php

namespace Arkitecht\B2B;

class PurchaseOrder extends B2BObject
{
    /**
     * @var int // 0
     */
    public $storeId;
    /**
     * @var string // "string"
     */
    public $vendorCode;
    /**
     * @var string // "2018-05-16T19:20:09.924Z"
     */
    public $date;
    /**
     * @var string // "string"
     */
    public $referenceNum;
    /**
     * @var float // 0
     */
    public $shippingCost = 0;
    /**
     * @var \Arkitecht\B2B\ComplexTypes\Product[]
     */
    public $products = [];

    public function addProduct(\Arkitecht\B2B\ComplexTypes\Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * @param int $storeId
     *
     * @return PurchaseOrder
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;

        return $this;
    }

    /**
     * @param string $vendorCode
     *
     * @return PurchaseOrder
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;

        return $this;
    }

    /**
     * @param string $date
     *
     * @return PurchaseOrder
     */
    public function setDate($date)
    {
        $this->date = $this->formatDate($date);

        return $this;
    }

    /**
     * @param string $referenceNum
     *
     * @return PurchaseOrder
     */
    public function setReferenceNum($referenceNum)
    {
        $this->referenceNum = $referenceNum;

        return $this;
    }

    /**
     * @param float $shippingCost
     *
     * @return PurchaseOrder
     */
    public function setShippingCost($shippingCost)
    {
        $this->shippingCost = $shippingCost;

        return $this;
    }

    /**
     * @param \Arkitecht\B2B\ComplexTypes\Product[] $products
     *
     * @return PurchaseOrder
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }
}