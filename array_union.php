<?php


function my_array_union($array,$array2){
    $tmp = [];

    foreach($array as $val){
        $tmp[] = $val;
    }

    foreach($array2 as $val){
        if(!in_array($val,$tmp)){

            $tmp[] = $val;
        }
    }

    return $tmp;
}

print_r(my_array_union([1,2,3],[1,2,3,4]));
?>