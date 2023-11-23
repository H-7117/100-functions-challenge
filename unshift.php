<?php
include('./Count.php');


function my_array_unshift($Array,$add){
    global $array;
    $store[0]=$add;

    print_r($store);
    echo "<br>";
    $count = MY_counter($Array);
    // echo $count;
    echo '<br>';
    for($i = 0 ; $i < $count ;$i++){
        $store[$i+1] = $Array[$i];
        
        print_r($store[$i+1]);
        echo '<br>';

    }
    $array = $store;
    return $store;
}


my_array_unshift($array,10);
print_r($array);




?>
