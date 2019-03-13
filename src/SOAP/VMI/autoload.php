<?php


 function autoload_ceba93598dca5ab74e79bb90947dbbf5($class)
{
    $classes = array(
        'Arkitecht\B2BB\SOAP\VMI\VMIService' => __DIR__ .'/VMIService.php',
        'Arkitecht\B2BB\SOAP\VMI\GetVMIReport' => __DIR__ .'/GetVMIReport.php',
        'Arkitecht\B2BB\SOAP\VMI\LogOnInfo' => __DIR__ .'/LogOnInfo.php',
        'Arkitecht\B2BB\SOAP\VMI\GetVMIReportResponse' => __DIR__ .'/GetVMIReportResponse.php',
        'Arkitecht\B2BB\SOAP\VMI\VMIReportResult' => __DIR__ .'/VMIReportResult.php',
        'Arkitecht\B2BB\SOAP\VMI\ResultCode' => __DIR__ .'/ResultCode.php',
        'Arkitecht\B2BB\SOAP\VMI\ArrayOfVMIReportEntity' => __DIR__ .'/ArrayOfVMIReportEntity.php',
        'Arkitecht\B2BB\SOAP\VMI\VMIReportEntity' => __DIR__ .'/VMIReportEntity.php',
        'Arkitecht\B2BB\SOAP\VMI\ServiceFault' => __DIR__ .'/ServiceFault.php',
        'Arkitecht\B2BB\SOAP\VMI\GetCustomerLocations' => __DIR__ .'/GetCustomerLocations.php',
        'Arkitecht\B2BB\SOAP\VMI\GetCustomerLocationsResponse' => __DIR__ .'/GetCustomerLocationsResponse.php',
        'Arkitecht\B2BB\SOAP\VMI\VMICustomersResult' => __DIR__ .'/VMICustomersResult.php',
        'Arkitecht\B2BB\SOAP\VMI\ArrayOfVMICustomerLocation' => __DIR__ .'/ArrayOfVMICustomerLocation.php',
        'Arkitecht\B2BB\SOAP\VMI\VMICustomerLocation' => __DIR__ .'/VMICustomerLocation.php',
        'Arkitecht\B2BB\SOAP\VMI\GetSKUData' => __DIR__ .'/GetSKUData.php',
        'Arkitecht\B2BB\SOAP\VMI\GetSKUDataResponse' => __DIR__ .'/GetSKUDataResponse.php',
        'Arkitecht\B2BB\SOAP\VMI\VMISKUDataResult' => __DIR__ .'/VMISKUDataResult.php',
        'Arkitecht\B2BB\SOAP\VMI\ArrayOfVMISKU' => __DIR__ .'/ArrayOfVMISKU.php',
        'Arkitecht\B2BB\SOAP\VMI\VMISKU' => __DIR__ .'/VMISKU.php',
        'Arkitecht\B2BB\SOAP\VMI\ArrayOfstring' => __DIR__ .'/ArrayOfstring.php',
        'Arkitecht\B2BB\SOAP\VMI\ArrayOfKeyValueOfanyTypeanyType' => __DIR__ .'/ArrayOfKeyValueOfanyTypeanyType.php',
        'Arkitecht\B2BB\SOAP\VMI\KeyValueOfanyTypeanyType' => __DIR__ .'/KeyValueOfanyTypeanyType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ceba93598dca5ab74e79bb90947dbbf5');

// Do nothing. The rest is just leftovers from the code generation.
{
}
