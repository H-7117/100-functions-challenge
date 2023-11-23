<?php
include('./strlen.php');

function my_strrev($string){
    $store = '';
    for($i= my_strlen($string)-1 ;$i >= 0; $i--){
        $store = $store.$string[$i];
    }

    return $store;
}

echo my_strrev('hamood');
?>