<?php


function my_in_array( $value, $array) {
    foreach ($array as $arrays) {
        if ($arrays == $value) {
            return true;
        }
    }

    return false;
}


$search_array = array('first', 'second',2);

// if (my_in_array( 2, $search_array )) {
//     echo "the value is exist";
// } else {
//     echo "the value do not is exist";
// }


?>