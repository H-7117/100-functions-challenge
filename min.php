<?php

function my_Min(...$number) {

    $Min = $number[0];
    for ($i = 0; $i < count($number); $i++) {
        if ($number[$i] < $Min) {
            $Min = $number[$i];
        }
    }
    return $Min;

}

echo my_Min(10, 4, 2, 5, 3);
 
?>