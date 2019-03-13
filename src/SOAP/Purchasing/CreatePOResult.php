<?php

namespace Arkitecht\B2B\SOAP\Purchasing;

class CreatePOResult
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
     * @var string $PurchaseOrderId
     */
    protected $PurchaseOrderId = null;

    /**
     * @var string $PurchaseOrderNumber
     */
    protected $PurchaseOrderNumber = null;

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
     * @return \B2B\SOAP\Purchasing\CreatePOResult
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
     * @return \B2B\SOAP\Purchasing\CreatePOResult
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrderId()
    {
      return $this->PurchaseOrderId;
    }

    /**
     * @param string $PurchaseOrderId
     * @return \B2B\SOAP\Purchasing\CreatePOResult
     */
    public function setPurchaseOrderId($PurchaseOrderId)
    {
      $this->PurchaseOrderId = $PurchaseOrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
      return $this->PurchaseOrderNumber;
    }

    /**
     * @param string $PurchaseOrderNumber
     * @return \B2B\SOAP\Purchasing\CreatePOResult
     */
    public function setPurchaseOrderNumber($PurchaseOrderNumber)
    {
      $this->PurchaseOrderNumber = $PurchaseOrderNumber;
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
     * @return \B2B\SOAP\Purchasing\CreatePOResult
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
