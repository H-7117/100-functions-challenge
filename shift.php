<?php
include('./Count.php');


function my_array_shift($shift){
    $newArray=[] ;
    $count = MY_counter($shift);
    for($i = 0 ; $i < $count-1 ;$i++){
        $newArray[] = $shift[$i+1];
        // print_r($shift[$i+1]);
        
    }
    return $newArray;
}
echo '<br>';
print_r(my_array_shift(array(1,2,3,4,5)));

?>