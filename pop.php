<?php
include('./Count.php');

function my_pop($pop){
    $newArray=[] ;
    $count = MY_counter($pop);
    for($i = 0 ; $i <= $count-2 ;$i++){
        $newArray[] = $pop[$i];
      
    }
    return $newArray;
}


print_r(my_pop(array(1,2,3,4,5,6)));
echo "<br>";
echo "<br>";

?>