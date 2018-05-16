<?php

namespace Arkitecht\B2B;

use Arkitecht\B2B\ComplexTypes\CompanyReceiptDetails;
use Arkitecht\B2B\ComplexTypes\CustomerDetails;
use Arkitecht\B2B\ComplexTypes\Payment;
use Arkitecht\B2B\ComplexTypes\SalesRepDetails;
use Arkitecht\B2B\ComplexTypes\StoreDetails;
use Arkitecht\B2B\ComplexTypes\TransactionLineItem;

class Transaction extends B2BObject
{
    /**
     * @var int
     */
    public $receiptNumber; // "49",
    /**
     * @var string
     */
    public $createdTs; // "2018-03-20T12:13:19.763",
    /**
     * @var \Arkitecht\B2B\ComplexTypes\StoreDetails
     */
    public $storeDetails; // [],
    /**
     * @var \Arkitecht\B2B\ComplexTypes\CustomerDetails
     */
    public $customerDetails; // [],
    /**
     * @var \Arkitecht\B2B\ComplexTypes\SalesRepDetails
     */
    public $salesRepDetails; // [],
    /**
     * @var \Arkitecht\B2B\ComplexTypes\TransactionLineItem[]
     */
    public $transactionLineItemsList; // [],
    /**
     * @var \Arkitecht\B2B\ComplexTypes\Payment[]
     */
    public $paymentsList; // [],
    /**
     * @var \Arkitecht\B2B\ComplexTypes\CompanyReceiptDetails
     */
    public $companyReceiptDetails; // [],

    /**
     * Get the Salesforce Id of the location on this transaction
     *
     * @return null|string
     */
    public function getSalesforceId()
    {
        return $this->storeDetails->getSalesforceId();
    }

}