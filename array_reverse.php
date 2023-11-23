<?php
include('./Count.php');


function my_array_reverse($array) {
    $revArray = [];

    for ($i = MY_counter($array) - 1; $i >= 0; $i--) {
        $revArray[] = $array[$i];
    }
    return $revArray;
}


$number = my_array_reverse(array(1,2,3,4,5,6));

print_r($number);


?>