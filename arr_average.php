<?php
function arr_avr($array){
    $sum = 0;
    $count =count($array);
    foreach ($array as $value) {
        $sum += $value / $count;
    }

    return $sum;
}
$s = array(1,2,3,4,5);
echo arr_avr($s);
?>