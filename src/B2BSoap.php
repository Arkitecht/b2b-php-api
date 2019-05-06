<?php

namespace Arkitecht\B2B;

use Arkitecht\B2B\SOAP\VMI\LogOnInfo;

class B2BSoap
{
    private $service_code;
    private $username;
    private $password;
    private $vendor_code;

    /**
     * B2bSoap constructor.
     *
     * @param string $serviceCode
     * @param string $username
     * @param string $password
     * @param string $vendorCode
     */
    public function __construct($serviceCode, $username, $password, $vendorCode)
    {
        $this->service_code = $serviceCode;
        $this->username = $username;
        $this->password = $password;
        $this->vendor_code = $vendorCode;
    }


    public function getLogonObject($companyCode)
    {
        return new LogOnInfo(
            $companyCode,
            $this->service_code,
            $this->username,
            $this->password,
            $this->vendor_code
        );
    }
}