<?php

namespace Arkitecht\B2B\SOAP\Purchasing;

class ShipPO
{

    /**
     * @var LogOnInfo $logon
     */
    protected $logon = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @param LogOnInfo $logon
     * @param string $id
     */
    public function __construct($logon = null, $id = null)
    {
      $this->logon = $logon;
      $this->id = $id;
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
     * @return \B2B\SOAP\Purchasing\ShipPO
     */
    public function setLogon($logon)
    {
      $this->logon = $logon;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \B2B\SOAP\Purchasing\ShipPO
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
