<?php

namespace Arkitecht\B2B\ComplexTypes;

use Arkitecht\B2B\B2BObject;

class CalculationRules extends B2BObject
{

    /**
     * @var string
     * 'DiscountAmount' – dollar value of discount
     * 'DiscountPercentage' – discount amount in percents,
     * 'PriceMatch' – item goes for free,
     * 'PriceAmount – The Price value of the item with which item is going to be sold'
     */
    public $coupDiscountMethodId; //: "DiscountAmount",

    /**
     * @var int
     */
    public $discountValue; //: 1.0,

    /**
     * @var string
     * 'NotSet' – no limit
     * 'MaximumDiscount' – max discount amount
     * 'ValueDrivenMinimumPrice' – minimum price of the item after discount
     * 'CostDrivenMinimumPrice' minimum price of the item based on COST
     * 'MaximumDiscountPercentage' – max discount percentage after discount is applied to the product
     */
    public $coupLimitTypeId = "NotSet";

    /**
     * @var float
     */
    public $limitValue; //: 0.0,

    /**
     * CalculationRules constructor.
     *
     * @param string $coupDiscountMethodId
     * @param int    $discountValue
     */
    public function __construct($coupDiscountMethodId = 'DiscountAmount', $discountValue = 0)
    {
        $this->coupDiscountMethodId = $coupDiscountMethodId;
        $this->discountValue = $discountValue;
    }

}