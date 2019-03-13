<?php

namespace Arkitecht\B2B\SOAP\Receiving;

class PurchaseOrderReceiving
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var ArrayOfstring $PurchaseOrderId
     */
    protected $PurchaseOrderId = null;

    /**
     * @var string $ReferenceNum
     */
    protected $ReferenceNum = null;

    /**
     * @var float $ShippingCost
     */
    protected $ShippingCost = null;

    /**
     * @var DocStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $VendorCode
     */
    protected $VendorCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \B2B\SOAP\Receiving\PurchaseOrderReceiving
     */
    public function setDate(\DateTime $Date = null)
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getPurchaseOrderId()
    {
      return $this->PurchaseOrderId;
    }

    /**
     * @param ArrayOfstring $PurchaseOrderId
     * @return \B2B\SOAP\Receiving\PurchaseOrderReceiving
     */
    public function setPurchaseOrderId($PurchaseOrderId)
    {
      $this->PurchaseOrderId = $PurchaseOrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNum()
    {
      return $this->ReferenceNum;
    }

    /**
     * @param string $ReferenceNum
     * @return \B2B\SOAP\Receiving\PurchaseOrderReceiving
     */
    public function setReferenceNum($ReferenceNum)
    {
      $this->ReferenceNum = $ReferenceNum;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingCost()
    {
      return $this->ShippingCost;
    }

    /**
     * @param float $ShippingCost
     * @return \B2B\SOAP\Receiving\PurchaseOrderReceiving
     */
    public function setShippingCost($ShippingCost)
    {
      $this->ShippingCost = $ShippingCost;
      return $this;
    }

    /**
     * @return DocStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param DocStatus $Status
     * @return \B2B\SOAP\Receiving\PurchaseOrderReceiving
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorCode()
    {
      return $this->VendorCode;
    }

    /**
     * @param string $VendorCode
     * @return \B2B\SOAP\Receiving\PurchaseOrderReceiving
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
      return $this;
    }

}
