<?php

namespace Arkitecht\B2B;

use App\Libraries\Utils;
use Hashids\Hashids;

class CouponSerial extends B2BObject
{
    /**
     * @var string
     */
    public $couponSku;
    /**
     * @var string
     */
    public $dealerCode;
    /**
     * @var int
     */
    public $locationId;
    /**
     * @var int
     */
    public $maxUse = 1;
    /**
     * @var string
     */
    public $serial;

    public function __construct($couponSku, $serial = '')
    {
        $this->couponSku = $couponSku;
        $this->serial = $serial;
    }

    public function generateSerial($number)
    {
        /*$pool = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
        $salt = base64_decode(Utils::getBase64EncryptionKey());
        $hashids = new Hashids($salt, 8, $pool);
        $this->serial = $hashids->encode($number);*/

        $pool = '0123456789';
        $this->serial = substr(str_shuffle(str_repeat($pool, 16)), 0, 8);

        return $this;
    }

}

