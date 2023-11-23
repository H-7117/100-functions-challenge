<?php
function My_is_float($float){
    if(gettype($float) === 'double'){
        return true;
    }
    else return false;
}
// echo My_is_object();
?>