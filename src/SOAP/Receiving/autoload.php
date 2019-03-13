<?php


 function autoload_99814940c1e45574c421e56fb10aeeae($class)
{
    $classes = array(
        'B2B\SOAP\Receiving\ReceivingService' => __DIR__ .'/ReceivingService.php',
        'B2B\SOAP\Receiving\CreateRV' => __DIR__ .'/CreateRV.php',
        'B2B\SOAP\Receiving\LogOnInfo' => __DIR__ .'/LogOnInfo.php',
        'B2B\SOAP\Receiving\PurchaseOrderReceiving' => __DIR__ .'/PurchaseOrderReceiving.php',
        'B2B\SOAP\Receiving\DocStatus' => __DIR__ .'/DocStatus.php',
        'B2B\SOAP\Receiving\ArrayOfProduct' => __DIR__ .'/ArrayOfProduct.php',
        'B2B\SOAP\Receiving\Product' => __DIR__ .'/Product.php',
        'B2B\SOAP\Receiving\ProductClass' => __DIR__ .'/ProductClass.php',
        'B2B\SOAP\Receiving\CreateRVResponse' => __DIR__ .'/CreateRVResponse.php',
        'B2B\SOAP\Receiving\CreateRVResult' => __DIR__ .'/CreateRVResult.php',
        'B2B\SOAP\Receiving\ResultCode' => __DIR__ .'/ResultCode.php',
        'B2B\SOAP\Receiving\FaultCode' => __DIR__ .'/FaultCode.php',
        'B2B\SOAP\Receiving\ArrayOfstring' => __DIR__ .'/ArrayOfstring.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_99814940c1e45574c421e56fb10aeeae');

// Do nothing. The rest is just leftovers from the code generation.
{
}
