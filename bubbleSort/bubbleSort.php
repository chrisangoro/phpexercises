<?php

$disordered = [6, 4, 1, 5, 2, 3, 10, 9, 10, 9, 9, 9 ,-1];

function bubbleSort($array = []) {
    for ($i = count($array) - 1; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            if ($array[$j] > $array[$j+1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
            }
        }
    }

    return $array;
}

echo json_encode(bubbleSort($disordered));