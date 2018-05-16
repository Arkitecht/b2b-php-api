<?php

namespace Arkitecht\B2B\ComplexTypes;

use Arkitecht\B2B\B2BObject;

class CouponDetails extends B2BObject
{
    /**
     * @var string
     */
    public $sku; //: "ARKTEST",

    /**
     * @var string
     */
    public $couponName; //: "ARK TEST",

    /**
     * @var string
     */
    public $description; //: "ARK TEST",

    /**
     * @var string Date in format YYYY-MM-DDT00:00:00
     */
    public $effectiveDateFrom; //: "2017-11-29T00:00:00",

    /**
     * @var string Date in format YYYY-MM-DDT00:00:00
     */
    public $effectiveDateTo; //: "2018-12-29T00:00:00",
    /**
     * @var array
     */
    public $locationIds = ["ALL"];

    /**
     * @var string
     */
    //public $dealerCode;

    public function __construct($sku, $couponName, $description)
    {
        $this->sku = $sku;
        $this->couponName = $couponName;
        $this->description = $description;
    }

    public function setEffectiveDates($start, $end, $endAllDay = true)
    {
        $this->effectiveDateFrom = $this->formatDate($start);
        $this->effectiveDateTo = $this->formatDate($end, $endAllDay);

        return $this;
    }

    public function setEffectiveDate($date)
    {
        $this->effectiveDateFrom = $this->formatDate($date);
        $this->effectiveDateTo = $this->formatDate($date, true);

        return $this;
    }

}