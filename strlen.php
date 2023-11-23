<?php

function my_strlen (string $string){
    $length= 0;
    $store = '';

    for ($i=0; $string != '\0' ; $i++) { 
        $store .= $string[$i];
        $length++;

        if ($store == $string) {
            break;
        }
    }
    return $length;
}
// echo my_strlen("aazll");
?>