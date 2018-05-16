<?php

namespace Arkitecht\B2B\ComplexTypes;


use Arkitecht\B2B\B2BObject;

class MainDiscountedItems extends B2BObject
{
    /**
     * @var string
     * 'AllProducts' – all items from dealers catalog
     * 'Products' – specific products discount is available for
     * 'Department' – Department with all items that belong to it
     * 'Category' – Category with all items that belong to it
     * 'Manufacturers' – Manufacturer with all products from dealer Catalog that have it assigned,
     * 'CustomerEquipment' – used for bundles in cases when activated device does not belong to dealer Stock
     */
    public $coupApplyingCriteriaId = "AllProducts";
    /**
     * @var array Department with all items that belong to it, if coupApplyingCriteriaId = 'Department'
     */
    public $departmentIds; //: [],
    /**
     * @var array Category with all items that belong to it, if coupApplyingCriteriaId = 'Category'
     */
    public $categoryIds; //: [],
    /**
     * @var array Manufacturer with all products from dealer Catalog that have it assigned, if coupApplyingCriteriaId =
     *      'Manufacturers'
     */
    public $manufacturerIds; //: [],
    /**
     * @var array List of SKUs of products discount is available for, if coupApplyingCriteriaId = 'Products'
     */
    public $productSkus; //: [],
    /**
     * @var array Contract Term, Carrier if isProductDriven = false
     */
    public $contractTermIds; //: [],
    /**
     * @var array Service plan codes, Carrier, if isProductDriven = false
     */
    public $servicePlansIds; //: [],
    /**
     * @var array Feature codes, Carrier if isProductDriven = false
     */
    public $servicePlanOptionsIds; //: [],
    /**
     * @var array List of days discount is going to be available at
     */
    public $effectiveDayIds = ["1", "2", "3", "4", "5", "6", "7",];
    /**
     * @var array List of users who can apply the discount
     */
    public $userIds = ["ALL",];
    /**
     * @var array Contract Types (Activation, upgrade, etc.), if isProductDriven = false
     */
    public $contractTypeIds; //: [],

    public function setProductsSkus($skus)
    {
        if (!is_array($skus)) {
            $skus = func_get_args();
        }

        $this->coupApplyingCriteriaId = 'Products';
        $this->productSkus = $skus;

        return $this;
    }

}