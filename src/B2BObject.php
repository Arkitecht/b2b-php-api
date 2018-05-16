<?php

namespace Arkitecht\B2B;


use Carbon\Carbon;

abstract class B2BObject implements \JsonSerializable
{

    public function jsonSerialize()
    {
        $data = (array)$this;
        foreach ($data as $key => $value) {
            /* if (is_array($value) && !$value) {
                 $data[ $key ] = null;
             }*/
        }

        return $data;
    }

    public static function fromJson($json)
    {
        if (is_string($json)) {
            $json = json_decode($json);
        }

        if (is_array($json)) {
            $json = $json[0];
        }

        $mapper = new \JsonMapper();
        $mapper->bStrictNullTypes = false;
        try {
            $coupon = $mapper->map($json, new static());

            return $coupon;
        } catch (\JsonMapper_Exception $e) {
            dd($e);
        }

        return null;
    }

    function formatDate($date, $allDay = false)
    {
        $formattedDate = Carbon::parse($date)->format('Y-m-d');
        $formattedDate .= 'T';

        if ($allDay) {
            $formattedDate .= '23:59:59';
        } else {
            $formattedDate .= '00:00:00';
        }

        return $formattedDate;
    }

    public function toJson()
    {
        return json_encode($this, JSON_PRETTY_PRINT);
    }

}