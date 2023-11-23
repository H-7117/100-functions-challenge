<?php
function my_substr( $string , $start ,$step){
$sub = '';
$j = 0;
for($i = $start ; $j < $step ;$i++){
    ++$j;
    $sub .= $string[$i];
}
return $sub;
}

$string = 'hamood';
echo my_substr($string,2,4);
?>