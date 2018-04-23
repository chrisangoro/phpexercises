<?php

$maxLimit = 100;

function getPrimes($n) {
    $res = [];

    for ($i = 2; $i <= $n; $i++) {
        $isPrime = true;

        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
            }
        }

        if ($isPrime) {
            array_push($res, $i);
        }
    }

    return $res;
}

echo json_encode(getPrimes($maxLimit));