<?php
function My_is_array($array){
    if(gettype($array) === 'array'){
        return true;
    }
    else return false;
}
// echo My_is_array();
?>