<?php

namespace Arkitecht\B2B\SOAP\Purchasing;

class CreatePO
{

    /**
     * @var LogOnInfo $logon
     */
    protected $logon = null;

    /**
     * @var PurchaseOrder $order
     */
    protected $order = null;

    /**
     * @var ArrayOfProduct $products
     */
    protected $products = null;

    /**
     * @param LogOnInfo $logon
     * @param PurchaseOrder $order
     * @param ArrayOfProduct $products
     */
    public function __construct($logon = null, $order = null, $products = null)
    {
      $this->logon = $logon;
      $this->order = $order;
      $this->products = $products;
    }

    /**
     * @return LogOnInfo
     */
    public function getLogon()
    {
      return $this->logon;
    }

    /**
     * @param LogOnInfo $logon
     * @return \B2B\SOAP\Purchasing\CreatePO
     */
    public function setLogon($logon)
    {
      $this->logon = $logon;
      return $this;
    }

    /**
     * @return PurchaseOrder
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param PurchaseOrder $order
     * @return \B2B\SOAP\Purchasing\CreatePO
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return ArrayOfProduct
     */
    public function getProducts()
    {
      return $this->products;
    }

    /**
     * @param ArrayOfProduct $products
     * @return \B2B\SOAP\Purchasing\CreatePO
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

}
