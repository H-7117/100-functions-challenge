<?php
//9
function my_array_sum($array) {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value ;
    }

    return $sum;
}

echo my_array_sum(array(1, 2, 3, 4, 5));


?>