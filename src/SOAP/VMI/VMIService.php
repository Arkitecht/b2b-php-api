<?php

namespace Arkitecht\B2B\SOAP\VMI;

class VMIService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = [
        'GetVMIReport'                    => 'Arkitecht\\B2B\\SOAP\\VMI\\GetVMIReport',
        'LogOnInfo'                       => 'Arkitecht\\B2B\\SOAP\\VMI\\LogOnInfo',
        'GetVMIReportResponse'            => 'Arkitecht\\B2B\\SOAP\\VMI\\GetVMIReportResponse',
        'VMIReportResult'                 => 'Arkitecht\\B2B\\SOAP\\VMI\\VMIReportResult',
        'ArrayOfVMIReportEntity'          => 'Arkitecht\\B2B\\SOAP\\VMI\\ArrayOfVMIReportEntity',
        'VMIReportEntity'                 => 'Arkitecht\\B2B\\SOAP\\VMI\\VMIReportEntity',
        'ServiceFault'                    => 'Arkitecht\\B2B\\SOAP\\VMI\\ServiceFault',
        'GetCustomerLocations'            => 'Arkitecht\\B2B\\SOAP\\VMI\\GetCustomerLocations',
        'GetCustomerLocationsResponse'    => 'Arkitecht\\B2B\\SOAP\\VMI\\GetCustomerLocationsResponse',
        'VMICustomersResult'              => 'Arkitecht\\B2B\\SOAP\\VMI\\VMICustomersResult',
        'ArrayOfVMICustomerLocation'      => 'Arkitecht\\B2B\\SOAP\\VMI\\ArrayOfVMICustomerLocation',
        'VMICustomerLocation'             => 'Arkitecht\\B2B\\SOAP\\VMI\\VMICustomerLocation',
        'GetSKUData'                      => 'Arkitecht\\B2B\\SOAP\\VMI\\GetSKUData',
        'GetSKUDataResponse'              => 'Arkitecht\\B2B\\SOAP\\VMI\\GetSKUDataResponse',
        'VMISKUDataResult'                => 'Arkitecht\\B2B\\SOAP\\VMI\\VMISKUDataResult',
        'ArrayOfVMISKU'                   => 'Arkitecht\\B2B\\SOAP\\VMI\\ArrayOfVMISKU',
        'VMISKU'                          => 'Arkitecht\\B2B\\SOAP\\VMI\\VMISKU',
        'ArrayOfstring'                   => 'Arkitecht\\B2B\\SOAP\\VMI\\ArrayOfstring',
        'ArrayOfKeyValueOfanyTypeanyType' => 'Arkitecht\\B2B\\SOAP\\VMI\\ArrayOfKeyValueOfanyTypeanyType',
        'KeyValueOfanyTypeanyType'        => 'Arkitecht\\B2B\\SOAP\\VMI\\KeyValueOfanyTypeanyType',
    ];

    /**
     * @param array  $options A array of config values
     * @param string $wsdl    The wsdl file to use
     */
    public function __construct(array $options = [], $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][ $key ])) {
                $options['classmap'][ $key ] = $value;
            }
        }
        $options = array_merge([
            'features' => 1,
            'location' => 'https://wspsdk.retailpossupport.com/VMIService',
        ], $options);
        if (!$wsdl) {
            $wsdl = 'https://wspsdk.retailpossupport.com/VMIService/?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param GetVMIReport $parameters
     *
     * @return GetVMIReportResponse
     */
    public function GetVMIReport(GetVMIReport $parameters)
    {
        return $this->__soapCall('GetVMIReport', [$parameters]);
    }

    /**
     * @param GetCustomerLocations $parameters
     *
     * @return GetCustomerLocationsResponse
     */
    public function GetCustomerLocations(GetCustomerLocations $parameters)
    {
        return $this->__soapCall('GetCustomerLocations', [$parameters]);
    }

    /**
     * @param GetSKUData $parameters
     *
     * @return GetSKUDataResponse
     */
    public function GetSKUData(GetSKUData $parameters)
    {
        return $this->__soapCall('GetSKUData', [$parameters]);
    }

}
