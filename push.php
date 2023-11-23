<?php
include('./Count.php');
function my_array_push($push,$add){
    $count = MY_counter($push);
    echo $count;
    echo '<br>';
    $push[$count]=$add;
    echo $push[$count];
    echo '<br>';
    return $push;
}

$array = array(1,2,3,4,5);
print_r(my_array_push($array,6));

?>