<?php

$number = 123456789; // 123,456,789

function addCommas($number) {
    $result = '';
    $count = 0;

    while ($number > 0) {

        if ($count === 3) {
            $result .= ',';
            $count = 0;
        }

        $digit = $number % 10;
        $result .= $digit;
        $number = ($number - $digit) / 10;
        $count++;
    }

    return strrev($result);
}

echo addCommas($number);