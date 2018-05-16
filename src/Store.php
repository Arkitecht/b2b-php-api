<?php

namespace Arkitecht\B2B;

use Arkitecht\B2B\ComplexTypes\DealerCode;

class Store extends B2BObject
{
    /**
     * @var int
     */
    public $storeId; //1
    /**
     * @var string
     */
    public $storeName; //"Default Division"
    /**
     * @var string
     */
    public $storeFullName; //"Default Division"
    /**
     * @var int
     */
    public $timeZone; //0
    /**
     * @var boolean
     */
    public $isDayLightSaving; //false
    /**
     * @var boolean
     */
    public $isActive; //true
    /**
     * @var string
     */
    public $address1; //""
    /**
     * @var string
     */
    public $address2; //""
    /**
     * @var string
     */
    public $city; //""
    /**
     * @var string
     */
    public $state; //""
    /**
     * @var string
     */
    public $zip; //""
    /**
     * @var string
     */
    public $primaryPhone; //""
    /**
     * @var string
     */
    public $primaryFax; //""
    /**
     * @var int
     */
    public $parentId; //0
    /**
     * @var int
     */
    public $locationTypeId; //1
    /**
     * @var ComplexTypes\DealerCode[]
     */
    public $dealerCodes; //[]
}