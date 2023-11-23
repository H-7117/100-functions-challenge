<?php
include('./Count.php');

function my_sort($arr){
    global $arr;
    for($i=0;$i< MY_counter($arr);$i++){

        for($j = $i+1 ; $j <  MY_counter($arr) ;$j++){
            if($arr[$i]<$arr[$j]){
                $tmp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j]=$tmp;
            }
        }
    }
    return $arr;
}

$arr=['9','1','u','n','z','w'];
my_sort($arr);
print_r($arr);
echo "<br>";
?>