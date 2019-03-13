<?php

namespace Arkitecht\B2B\SOAP\Receiving;

class CreateRVResult
{

    /**
     * @var ResultCode $Code
     */
    protected $Code = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $PurchaseOrderReceivingId
     */
    protected $PurchaseOrderReceivingId = null;

    /**
     * @var string $PurchaseOrderReceivingNumber
     */
    protected $PurchaseOrderReceivingNumber = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    
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
     * @return \B2B\SOAP\Receiving\CreateRVResult
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
     * @return \B2B\SOAP\Receiving\CreateRVResult
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrderReceivingId()
    {
      return $this->PurchaseOrderReceivingId;
    }

    /**
     * @param string $PurchaseOrderReceivingId
     * @return \B2B\SOAP\Receiving\CreateRVResult
     */
    public function setPurchaseOrderReceivingId($PurchaseOrderReceivingId)
    {
      $this->PurchaseOrderReceivingId = $PurchaseOrderReceivingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrderReceivingNumber()
    {
      return $this->PurchaseOrderReceivingNumber;
    }

    /**
     * @param string $PurchaseOrderReceivingNumber
     * @return \B2B\SOAP\Receiving\CreateRVResult
     */
    public function setPurchaseOrderReceivingNumber($PurchaseOrderReceivingNumber)
    {
      $this->PurchaseOrderReceivingNumber = $PurchaseOrderReceivingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return \B2B\SOAP\Receiving\CreateRVResult
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
