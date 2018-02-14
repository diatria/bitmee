<?php

namespace App\Helper;

class NumberHelper
{
    public static function NumberFormat($value)
    {
        return number_format($value, 0, '.', '.');
    }
}
