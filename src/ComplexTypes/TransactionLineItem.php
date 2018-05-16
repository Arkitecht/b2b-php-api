<?php

namespace Arkitecht\B2B\ComplexTypes;


class TransactionLineItem
{
    /**
     * @var int
     */
    public $idPos; // "50"
    /**
     * @var string
     */
    public $itemAction; // "S"
    /**
     * @var string
     */
    public $productType; // "PRD"
    /**
     * @var string
     */
    public $vendorSku; // "819907010001"
    /**
     * @var string
     */
    public $upc; // "819907010001"
    /**
     * @var string
     */
    public $description; // "HD360 High Performance Sound Isolation In-Ear Headphones, Black"
    /**
     * @var string
     */
    public $serial; // ""
    /**
     * @var int
     */
    public $quantity; // 1
    /**
     * @var float
     */
    public $unitPrice; // 99.95
    /**
     * @var float
     */
    public $discount; // 10.0
    /**
     * @var float
     */
    public $taxRate; // 6.0
    /**
     * @var float
     */
    public $extendedPrice; // 89.95
    /**
     * @var float
     */
    public $taxValue; // 5.4
    /**
     * @var string
     */
    public $activationInfo; // null
    /**
     * @var Discount[]
     */
    public $appliedDiscounts; // []
}