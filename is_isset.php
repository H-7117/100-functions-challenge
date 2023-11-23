<?php
function my_isset($val){
if($val == null){
    return false;
}return true;
}
$x = null;
echo my_isset($x);
?>