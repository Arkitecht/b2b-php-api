<?php

namespace Arkitecht\B2B\ComplexTypes;


use Arkitecht\B2B\B2BObject;

class DealerCode extends B2BObject
{
    /**
     * @var string
     */
    public $dealerCode;
    /**
     * @var CarrierDetails
     */
    public $carrierDetails;
}