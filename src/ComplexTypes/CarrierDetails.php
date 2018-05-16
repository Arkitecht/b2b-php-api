<?php

namespace Arkitecht\B2B\ComplexTypes;

use Arkitecht\B2B\B2BObject;

class CarrierDetails extends B2BObject
{
    /**
     * @var int
     */
    public $carrierId;
    /**
     * @var string
     */
    public $carrierName;
    /**
     * @var string
     */
    public $carrierReference;
}