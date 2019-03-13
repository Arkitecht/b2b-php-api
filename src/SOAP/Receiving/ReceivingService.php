<?php

namespace Arkitecht\B2B\SOAP\Receiving;

class ReceivingService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'CreateRV' => 'B2B\\SOAP\\Receiving\\CreateRV',
      'LogOnInfo' => 'B2B\\SOAP\\Receiving\\LogOnInfo',
      'PurchaseOrderReceiving' => 'B2B\\SOAP\\Receiving\\PurchaseOrderReceiving',
      'ArrayOfProduct' => 'B2B\\SOAP\\Receiving\\ArrayOfProduct',
      'Product' => 'B2B\\SOAP\\Receiving\\Product',
      'CreateRVResponse' => 'B2B\\SOAP\\Receiving\\CreateRVResponse',
      'CreateRVResult' => 'B2B\\SOAP\\Receiving\\CreateRVResult',
      'ArrayOfstring' => 'B2B\\SOAP\\Receiving\\ArrayOfstring',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://wspsdk.retailpossupport.com/ReceivingService/?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param CreateRV $parameters
     * @return CreateRVResponse
     */
    public function CreateRV(CreateRV $parameters)
    {
      return $this->__soapCall('CreateRV', array($parameters));
    }

}
