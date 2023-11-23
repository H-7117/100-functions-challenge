<?php
//11
function my_is_numeric($value) {
    $number = is_int($value) || is_float($value);
    if($number){
        
    }
    else
    {
        echo 0;
    }
    return $number;
}
echo my_is_numeric(5);





?>