<?php


 function autoload_b4d312beece2a07af3afc03bb0444fa4($class)
{
    $classes = array(
        'B2B\SOAP\Purchasing\PurchasingService' => __DIR__ .'/PurchasingService.php',
        'B2B\SOAP\Purchasing\CreatePO' => __DIR__ .'/CreatePO.php',
        'B2B\SOAP\Purchasing\LogOnInfo' => __DIR__ .'/LogOnInfo.php',
        'B2B\SOAP\Purchasing\PurchaseOrder' => __DIR__ .'/PurchaseOrder.php',
        'B2B\SOAP\Purchasing\ArrayOfProduct' => __DIR__ .'/ArrayOfProduct.php',
        'B2B\SOAP\Purchasing\Product' => __DIR__ .'/Product.php',
        'B2B\SOAP\Purchasing\ProductClass' => __DIR__ .'/ProductClass.php',
        'B2B\SOAP\Purchasing\CreatePOResponse' => __DIR__ .'/CreatePOResponse.php',
        'B2B\SOAP\Purchasing\CreatePOResult' => __DIR__ .'/CreatePOResult.php',
        'B2B\SOAP\Purchasing\ResultCode' => __DIR__ .'/ResultCode.php',
        'B2B\SOAP\Purchasing\FaultCode' => __DIR__ .'/FaultCode.php',
        'B2B\SOAP\Purchasing\CancelPO' => __DIR__ .'/CancelPO.php',
        'B2B\SOAP\Purchasing\CancelPOResponse' => __DIR__ .'/CancelPOResponse.php',
        'B2B\SOAP\Purchasing\CancelPOResult' => __DIR__ .'/CancelPOResult.php',
        'B2B\SOAP\Purchasing\ShipPO' => __DIR__ .'/ShipPO.php',
        'B2B\SOAP\Purchasing\ShipPOResponse' => __DIR__ .'/ShipPOResponse.php',
        'B2B\SOAP\Purchasing\ShipPOResult' => __DIR__ .'/ShipPOResult.php',
        'B2B\SOAP\Purchasing\ClosePO' => __DIR__ .'/ClosePO.php',
        'B2B\SOAP\Purchasing\ClosePOResponse' => __DIR__ .'/ClosePOResponse.php',
        'B2B\SOAP\Purchasing\ClosePOResult' => __DIR__ .'/ClosePOResult.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_b4d312beece2a07af3afc03bb0444fa4');

// Do nothing. The rest is just leftovers from the code generation.
{
}
