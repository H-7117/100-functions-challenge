<?php
function My_is_object($obj){
    if(gettype($obj) === 'object'){
        return true;
    }
    else return false;
}
// echo My_is_object();
?>