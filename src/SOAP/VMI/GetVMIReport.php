<?php

namespace Arkitecht\B2B\SOAP\VMI;

class GetVMIReport
{

    /**
     * @var LogOnInfo $logon
     */
    protected $logon = null;

    /**
     * @var ArrayOfstring $dealerCodes
     */
    protected $dealerCodes = null;

    /**
     * @var \DateTime $dateFrom
     */
    protected $dateFrom = null;

    /**
     * @var \DateTime $dateEnd
     */
    protected $dateEnd = null;

    /**
     * @param LogOnInfo $logon
     * @param ArrayOfstring $dealerCodes
     * @param \DateTime $dateFrom
     * @param \DateTime $dateEnd
     */
    public function __construct($logon = null, $dealerCodes = null, \DateTime $dateFrom = null, \DateTime $dateEnd = null)
    {
      $this->logon = $logon;
      $this->dealerCodes = $dealerCodes;
      $this->dateFrom = $dateFrom ? $dateFrom->format(\DateTime::ATOM) : (new \DateTime())->modify('first day of this month')->setTime(0,0,0)->format(\DateTime::ATOM);
      $this->dateEnd = $dateEnd ? $dateEnd->format(\DateTime::ATOM) : (new \DateTime())->setTime(23,59,59)->format(\DateTime::ATOM);
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
     * @return \B2B\SOAP\VMI\GetVMIReport
     */
    public function setLogon($logon)
    {
      $this->logon = $logon;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getDealerCodes()
    {
      return $this->dealerCodes;
    }

    /**
     * @param ArrayOfstring $dealerCodes
     * @return \B2B\SOAP\VMI\GetVMIReport
     */
    public function setDealerCodes($dealerCodes)
    {
      $this->dealerCodes = $dealerCodes;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateFrom()
    {
      if ($this->dateFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateFrom
     * @return \B2B\SOAP\VMI\GetVMIReport
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
      $this->dateFrom = $dateFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateEnd()
    {
      if ($this->dateEnd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateEnd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateEnd
     * @return \B2B\SOAP\VMI\GetVMIReport
     */
    public function setDateEnd(\DateTime $dateEnd)
    {
      $this->dateEnd = $dateEnd->format(\DateTime::ATOM);
      return $this;
    }

}
