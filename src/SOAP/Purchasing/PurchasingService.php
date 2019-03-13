<?php

namespace Arkitecht\B2B\SOAP\Purchasing;

class PurchasingService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = [
        'CreatePO'         => 'Arkitecht\\B2B\\SOAP\\Purchasing\\CreatePO',
        'LogOnInfo'        => 'Arkitecht\\B2B\\SOAP\\Purchasing\\LogOnInfo',
        'PurchaseOrder'    => 'Arkitecht\\B2B\\SOAP\\Purchasing\\PurchaseOrder',
        'ArrayOfProduct'   => 'Arkitecht\\B2B\\SOAP\\Purchasing\\ArrayOfProduct',
        'Product'          => 'Arkitecht\\B2B\\SOAP\\Purchasing\\Product',
        'CreatePOResponse' => 'Arkitecht\\B2B\\SOAP\\Purchasing\\CreatePOResponse',
        'CreatePOResult'   => 'Arkitecht\\B2B\\SOAP\\Purchasing\\CreatePOResult',
        'CancelPO'         => 'Arkitecht\\B2B\\SOAP\\Purchasing\\CancelPO',
        'CancelPOResponse' => 'Arkitecht\\B2B\\SOAP\\Purchasing\\CancelPOResponse',
        'CancelPOResult'   => 'Arkitecht\\B2B\\SOAP\\Purchasing\\CancelPOResult',
        'ShipPO'           => 'Arkitecht\\B2B\\SOAP\\Purchasing\\ShipPO',
        'ShipPOResponse'   => 'Arkitecht\\B2B\\SOAP\\Purchasing\\ShipPOResponse',
        'ShipPOResult'     => 'Arkitecht\\B2B\\SOAP\\Purchasing\\ShipPOResult',
        'ClosePO'          => 'Arkitecht\\B2B\\SOAP\\Purchasing\\ClosePO',
        'ClosePOResponse'  => 'Arkitecht\\B2B\\SOAP\\Purchasing\\ClosePOResponse',
        'ClosePOResult'    => 'Arkitecht\\B2B\\SOAP\\Purchasing\\ClosePOResult',
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
            'location' => 'https://wspsdk.retailpossupport.com/PurchasingService',
        ], $options);
        if (!$wsdl) {
            $wsdl = 'https://wspsdk.retailpossupport.com/PurchasingService/?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param CreatePO $parameters
     *
     * @return CreatePOResponse
     */
    public function CreatePO(CreatePO $parameters)
    {
        return $this->__soapCall('CreatePO', [$parameters]);
    }

    /**
     * @param CancelPO $parameters
     *
     * @return CancelPOResponse
     */
    public function CancelPO(CancelPO $parameters)
    {
        return $this->__soapCall('CancelPO', [$parameters]);
    }

    /**
     * @param ShipPO $parameters
     *
     * @return ShipPOResponse
     */
    public function ShipPO(ShipPO $parameters)
    {
        return $this->__soapCall('ShipPO', [$parameters]);
    }

    /**
     * @param ClosePO $parameters
     *
     * @return ClosePOResponse
     */
    public function ClosePO(ClosePO $parameters)
    {
        return $this->__soapCall('ClosePO', array($parameters));
    }

}
