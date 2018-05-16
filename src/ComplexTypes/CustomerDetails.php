<?php

namespace Arkitecht\B2B\ComplexTypes;


class CustomerDetails
{
    /**
     * @var int
     */
    public $customerId; // 0
    /**
     * @var string
     */
    public $customerType; // "Business"
    /**
     * @var string
     */
    public $companyName; // "No Customer"
    /**
     * @var string
     */
    public $firstName; // ""
    /**
     * @var string
     */
    public $lastName; // ""
    /**
     * @var string
     */
    public $middleName; // ""
    /**
     * @var string
     */
    public $accountNumber; // null
    /**
     * @var Address
     */
    public $address; // []
    /**
     * @var array
     */
    public $contacts; // []
}