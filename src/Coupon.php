<?php

namespace Arkitecht\B2B;

use Arkitecht\B2B\B2BObject;
use Arkitecht\B2B\ComplexTypes\AdvancedParameters;
use Arkitecht\B2B\ComplexTypes\ApplyingCriteria;
use Arkitecht\B2B\ComplexTypes\BundleSettings;
use Arkitecht\B2B\ComplexTypes\CalculationRules;
use Arkitecht\B2B\ComplexTypes\CouponDetails;
use Arkitecht\B2B\ComplexTypes\CouponParam;
use Arkitecht\B2B\ComplexTypes\MainDiscountedItems;

class Coupon extends B2BObject
{

    /**
     * @var boolean
     */
    public $isSerial = false;

    /**
     * @var string
     */
    public $typeDiscountId = "Discount"; //'Discount', 'Coupon', 'BundleCoupon'

    /**
     * @var boolean
     */
    public $isProductDriven = true;

    /**
     * @var boolean
     */
    public $isActive = true;

    /**
     * @var boolean
     */
    public $isTypeBundle = false;

    /**
     * @var integer
     */
    public $multipleLimitPerProduct = 999;

    /**
     * @var boolean
     */
    public $isMultipleApplyingAvailablePerProduct = true;

    /**
     * @var integer
     */
    public $sourceId = 0; //: 2,

    /**
     * @var \Arkitecht\B2B\ComplexTypes\CouponDetails
     */
    public $couponDetails;

    /**
     * @var \Arkitecht\B2B\ComplexTypes\CalculationRules
     */
    public $calculationRules;

    /**
     * @var \Arkitecht\B2B\ComplexTypes\AdvancedParameters
     */
    public $advancedParameters;

    /**
     * @var \Arkitecht\B2B\ComplexTypes\ApplyingCriteria
     */
    public $applyingCriteria;

    /**
     * @var \Arkitecht\B2B\ComplexTypes\CouponParam
     */
    public $couponParam;

    /**
     * @var \Arkitecht\B2B\ComplexTypes\MainDiscountedItems
     */
    public $mainDiscountedItems;

    /**
     * @var \Arkitecht\B2B\ComplexTypes\BundleSettings
     */
    public $bundleSettings;


    public function __construct($sku = '', $couponName = '', $description = '', $discountValue = 0, $coupDiscountMethodId = 'DiscountAmount')
    {
        $this->couponDetails = new CouponDetails($sku, $couponName, $description);
        $this->calculationRules = new CalculationRules($coupDiscountMethodId, $discountValue);
        $this->advancedParameters = new AdvancedParameters();
        $this->applyingCriteria = new ApplyingCriteria();
        $this->couponParam = new CouponParam($description, $description);
        $this->mainDiscountedItems = new MainDiscountedItems();
        $this->bundleSettings = new BundleSettings();
    }

    public function setActive($active = true)
    {
        $this->isActive = $active;

        return $this;
    }

    public function setSerialized($isSerial = true)
    {
        $this->isSerial = $isSerial;

        return $this;
    }

    public function forUpdate()
    {
        unset($this->isTypeBundle);
        unset($this->isProductDriven);
        unset($this->typeDiscountId);

        return $this;
    }

    public static function retrieve($olrId, $sku)
    {
        $response = \App\Facades\B2B::setOlrId($olrId)->getCoupon($sku);

        return static::fromJson($response);
    }
}