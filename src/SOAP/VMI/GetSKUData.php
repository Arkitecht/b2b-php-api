<?php

namespace Arkitecht\B2B\SOAP\VMI;

class GetSKUData
{

    /**
     * @var LogOnInfo $logon
     */
    protected $logon = null;

    /**
     * @param LogOnInfo $logon
     */
    public function __construct($logon = null)
    {
      $this->logon = $logon;
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
     * @return \B2B\SOAP\VMI\GetSKUData
     */
    public function setLogon($logon)
    {
      $this->logon = $logon;
      return $this;
    }

}
