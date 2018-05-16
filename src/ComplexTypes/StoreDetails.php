<?php

namespace Arkitecht\B2B\ComplexTypes;


class StoreDetails
{
    /**
     * @var int
     */
    public $storeId; // 4,
    /**
     * @var string
     */
    public $storeName; // "ARK Store 1",
    /**
     * @var \Arkitecht\B2B\ComplexTypes\Address
     */
    public $storeAddress; // []
    /**
     * @var ContactDetail[]
     */
    public $contactDetails; // []
    /**
     * @var DealerCode[]
     */
    public $dealerCodes;

    public function getSalesforceId()
    {
        return $this->getDealerCode(13);
    }

    public function getDealerCode($carrierId)
    {
        foreach ($this->dealerCodes as $dealerCode) {
            if ($dealerCode->carrierDetails->carrierId == $carrierId) {
                return $dealerCode->dealerCode;
            }
        }

        return null;
    }
}