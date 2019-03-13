<?php

namespace Arkitecht\B2B\SOAP\VMI;

class VMIReportEntity implements \JsonSerializable
{

    /**
     * @var string $FullDescription
     */
    public $FullDescription = null;

    /**
     * @var int $InStockSalableQty
     */
    public $InStockSalableQty = null;

    /**
     * @var int $InStockTotalQty
     */
    public $InStockTotalQty = null;

    /**
     * @var int $Max
     */
    public $Max = null;

    /**
     * @var int $Min
     */
    public $Min = null;

    /**
     * @var int $OnOrderQty
     */
    public $OnOrderQty = null;

    /**
     * @var int $ProductID
     */
    public $ProductID = null;

    /**
     * @var int $Received
     */
    public $Received = null;

    /**
     * @var int $Return
     */
    public $Return = null;

    /**
     * @var int $Sale
     */
    public $Sale = null;

    /**
     * @var string $ShortDescription
     */
    public $ShortDescription = null;

    /**
     * @var string $Store
     */
    public $Store = null;

    /**
     * @var int $SuggReorderQty
     */
    public $SuggReorderQty = null;

    /**
     * @var int $TransitInQty
     */
    public $TransitInQty = null;

    /**
     * @var string $VendorSKU
     */
    public $VendorSKU = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getFullDescription()
    {
        return $this->FullDescription;
    }

    /**
     * @param string $FullDescription
     *
     * @return VMIReportEntity
     */
    public function setFullDescription($FullDescription)
    {
        $this->FullDescription = $FullDescription;

        return $this;
    }

    /**
     * @return int
     */
    public function getInStockSalableQty()
    {
        return $this->InStockSalableQty;
    }

    /**
     * @param int $InStockSalableQty
     *
     * @return VMIReportEntity
     */
    public function setInStockSalableQty($InStockSalableQty)
    {
        $this->InStockSalableQty = $InStockSalableQty;

        return $this;
    }

    /**
     * @return int
     */
    public function getInStockTotalQty()
    {
        return $this->InStockTotalQty;
    }

    /**
     * @param int $InStockTotalQty
     *
     * @return VMIReportEntity
     */
    public function setInStockTotalQty($InStockTotalQty)
    {
        $this->InStockTotalQty = $InStockTotalQty;

        return $this;
    }

    /**
     * @return int
     */
    public function getMax()
    {
        return $this->Max;
    }

    /**
     * @param int $Max
     *
     * @return VMIReportEntity
     */
    public function setMax($Max)
    {
        $this->Max = $Max;

        return $this;
    }

    /**
     * @return int
     */
    public function getMin()
    {
        return $this->Min;
    }

    /**
     * @param int $Min
     *
     * @return VMIReportEntity
     */
    public function setMin($Min)
    {
        $this->Min = $Min;

        return $this;
    }

    /**
     * @return int
     */
    public function getOnOrderQty()
    {
        return $this->OnOrderQty;
    }

    /**
     * @param int $OnOrderQty
     *
     * @return VMIReportEntity
     */
    public function setOnOrderQty($OnOrderQty)
    {
        $this->OnOrderQty = $OnOrderQty;

        return $this;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
        return $this->ProductID;
    }

    /**
     * @param int $ProductID
     *
     * @return VMIReportEntity
     */
    public function setProductID($ProductID)
    {
        $this->ProductID = $ProductID;

        return $this;
    }

    /**
     * @return int
     */
    public function getReceived()
    {
        return $this->Received;
    }

    /**
     * @param int $Received
     *
     * @return VMIReportEntity
     */
    public function setReceived($Received)
    {
        $this->Received = $Received;

        return $this;
    }

    /**
     * @return int
     */
    public function getReturn()
    {
        return $this->Return;
    }

    /**
     * @param int $Return
     *
     * @return VMIReportEntity
     */
    public function setReturn($Return)
    {
        $this->Return = $Return;

        return $this;
    }

    /**
     * @return int
     */
    public function getSale()
    {
        return $this->Sale;
    }

    /**
     * @param int $Sale
     *
     * @return VMIReportEntity
     */
    public function setSale($Sale)
    {
        $this->Sale = $Sale;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return $this->ShortDescription;
    }

    /**
     * @param string $ShortDescription
     *
     * @return VMIReportEntity
     */
    public function setShortDescription($ShortDescription)
    {
        $this->ShortDescription = $ShortDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getStore()
    {
        return $this->Store;
    }

    /**
     * @param string $Store
     *
     * @return VMIReportEntity
     */
    public function setStore($Store)
    {
        $this->Store = $Store;

        return $this;
    }

    /**
     * @return int
     */
    public function getSuggReorderQty()
    {
        return $this->SuggReorderQty;
    }

    /**
     * @param int $SuggReorderQty
     *
     * @return VMIReportEntity
     */
    public function setSuggReorderQty($SuggReorderQty)
    {
        $this->SuggReorderQty = $SuggReorderQty;

        return $this;
    }

    /**
     * @return int
     */
    public function getTransitInQty()
    {
        return $this->TransitInQty;
    }

    /**
     * @param int $TransitInQty
     *
     * @return VMIReportEntity
     */
    public function setTransitInQty($TransitInQty)
    {
        $this->TransitInQty = $TransitInQty;

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
     *
     * @return VMIReportEntity
     */
    public function setVendorSKU($VendorSKU)
    {
        $this->VendorSKU = $VendorSKU;

        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'full_description'    => $this->getFullDescription(),
            'available_quantity'  => $this->getInStockSalableQty(),
            'in_stock_quantity'   => $this->getInStockTotalQty(),
            'max'                 => $this->getMax(),
            'min'                 => $this->getMin(),
            'on_order'            => $this->getOnOrderQty(),
            'product_id'          => $this->getProductID(),
            'received'            => $this->getReceived(),
            'returns'             => $this->getReturn(),
            'sales'               => $this->getSale(),
            'short_description'   => $this->getShortDescription(),
            'store'               => $this->getStore(),
            'salesforce_id'       => $this->getStore(),
            'reorder_quantity'    => $this->getSuggReorderQty(),
            'in_transit_quantity' => $this->getTransitInQty(),
            'vendor_sku'          => $this->getVendorSKU(),
        ];
    }

}
