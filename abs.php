<?php
function my_abs($value){
    if($value < 0){
        $value = ($value)*-1;
        return $value;
    }
    return $value;
}

echo my_abs(-1065);




;

?>