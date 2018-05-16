<?php

namespace Arkitecht\B2B\ComplexTypes;


class Payment
{
    /**
     * @var string
     */
    public $paymentType; // "CashPayment"
    /**
     * @var float
     */
    public $amount; // 100.0
    /**
     * @var string
     */
    public $paymentTs; // "2018-03-20T12:29:52.753"
    /**
     * @var string
     */
    public $status; // "Success"
    /**
     * @var boolean
     */
    public $isCompleted; // true
    /**
     * @var string
     */
    public $giftCardNumber; // ""
    /**
     * @var string
     */
    public $checkNumber; // ""
}