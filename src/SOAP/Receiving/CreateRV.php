<?php

namespace Arkitecht\B2B\SOAP\Receiving;

class CreateRV
{

    /**
     * @var LogOnInfo $logon
     */
    protected $logon = null;

    /**
     * @var PurchaseOrderReceiving $order
     */
    protected $order = null;

    /**
     * @var ArrayOfProduct $products
     */
    protected $products = null;

    /**
     * @param LogOnInfo $logon
     * @param PurchaseOrderReceiving $order
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
     * @return \B2B\SOAP\Receiving\CreateRV
     */
    public function setLogon($logon)
    {
      $this->logon = $logon;
      return $this;
    }

    /**
     * @return PurchaseOrderReceiving
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param PurchaseOrderReceiving $order
     * @return \B2B\SOAP\Receiving\CreateRV
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
     * @return \B2B\SOAP\Receiving\CreateRV
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

}
