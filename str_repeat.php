<?php
//1
function myStr_Repeat($word, $rep){
    $number = '';

    for ($i = 0; $i < $rep; $i++) {
        $number .= $word . '&nbsp';
    }

    return $number;
}

echo  myStr_Repeat('Hello',7);

?>