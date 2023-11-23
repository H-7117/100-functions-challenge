<?php

function my_strcmp($val1,$val2){
    if($val1 == $val2 ){
        return 0;
    }
    else{
        return 1;
    }
}

$reslut =  my_strcmp('Hi','HI');
if ($reslut != 0) {

    echo "The strings are not equal.";
} else{
    echo "The strings are equal.";    
}
?>