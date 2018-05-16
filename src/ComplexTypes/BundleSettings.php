<?php

namespace Arkitecht\B2B\ComplexTypes;


use Arkitecht\B2B\B2BObject;

class BundleSettings extends B2BObject
{
    /**
     * @var integer
     */
    public $bundledCouponQty; //: 0,
    /**
     * @var integer
     */
    public $bundledCouponAffectedQty; //: 0,
    /**
     * @var array
     */
    public $departmentIdsDiscounted; //: [],
    /**
     * @var array
     */
    public $manufacturerIdsDiscounted; //: [],
    /**
     * @var array
     */
    public $categoryIdsDiscounted; //: [],
    /**
     * @var array
     */
    public $productSkusDiscounted; //: [],
    /**
     * @var array
     */
    public $contractTermIdsDiscounted; //: [],
    /**
     * @var array
     */
    public $contractTypeIdsDiscounted; //: [],
}