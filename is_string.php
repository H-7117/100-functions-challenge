<?php
function My_is_string($val){
    if(gettype($val) === 'string'){
        return true;
    }
    else return false;
}
echo My_is_string('6');
?>