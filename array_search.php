<?php
include('./is_isset.php');
$search_array = array('first' => 1, 'second' => 4);


function my_array_search($val, $array) {
    if (my_isset($array[$val])) {
 
        return $array[$val];
 
    } else {
 
        return false;
 
    }
}


echo $key = my_array_search('second', $search_array);
?>