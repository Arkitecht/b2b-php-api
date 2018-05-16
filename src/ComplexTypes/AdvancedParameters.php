<?php

namespace Arkitecht\B2B\ComplexTypes;


use Arkitecht\B2B\B2BObject;

class AdvancedParameters extends B2BObject
{
    /**
     * @var boolean
     */
    public $isCanBeCombined = true;
    /**
     * @var boolean
     */
    public $isAutomaticallyApplied = false;
    /**
     * @var boolean
     */
    public $isPriceProfileApplied = true;
    /**
     * @var boolean
     */
    public $isCouponPresentReguired = false;
    /**
     * @var boolean
     */
    public $isMultipleApplyingAvailable = true;
    /**
     * @var integer
     */
    public $multipleLimit = 1000;

    public function __construct()
    {

    }
}