<?php

$search_array = array('first' => 1, 'second' => 4);

function my_array_key_exisit( $val , $array ){
    if (isset($array[$val])) {
        return true;
    }
    else{
        
        return false;
    }
}


if (my_array_key_exisit('first', $search_array)) {
    echo "The 'first' element is in the array";
}else{
    echo 'the key not found';
}
?>