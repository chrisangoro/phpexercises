<?php

$test = 'Christian';

function swapString($string) {
    $res = '';

    for ($i = strlen($string) -1; $i > -1; $i--) {
        $res = $res . $string[$i];
    }

    return $res;
}

echo swapString($test);
