<?php

namespace Arkitecht\B2B\ComplexTypes;

use Arkitecht\B2B\B2BObject;

class CouponParam extends B2BObject
{
    /**
     * @var boolean
     */
    public $isPrintWithSalesRecept; //: false,
    /**
     * @var boolean
     */
    public $isPrintAllTransactions; //: true,
    /**
     * @var boolean
     */
    public $isPrintActivationTransactionsOnly; //: false,
    /**
     * @var boolean
     */
    public $isAllEffectiveDay; //: false,
    /**
     * @var boolean
     */
    public $isAllEffectiveTime; //: false,
    /**
     * @var string Time in format HH:mm:ss
     */
    public $effectiveTimeFrom; //: "00:00:00",
    /**
     * @var string Time in format HH:mm:ss
     */
    public $effectiveTimeTo; //: "23:59:50",
    /**
     * @var string
     */
    public $shortDescription; //: "string",
    /**
     * @var string
     */
    public $fullDescription; //: "string",

    /**
     * CouponParam constructor.
     */
    public function __construct($shortDescription = '', $fullDescription = '')
    {
        $this->shortDescription = $shortDescription;
        $this->fullDescription = $fullDescription;
    }
}