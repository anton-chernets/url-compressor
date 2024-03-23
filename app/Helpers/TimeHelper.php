<?php

namespace App\Helpers;

class TimeHelper
{
    public static function checkOnExpire($expired_at): bool
    {
        return now() < $expired_at;
    }
}
