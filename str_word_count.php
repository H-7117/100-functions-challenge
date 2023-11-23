<?php
include('./strlen.php');

function my_str_word_count($string){
    $number =0;

    for($i = 0;$i < my_strlen($string);$i++){
        $count = $i+1;
        if( $string[$i] == ' ' && isset($string[$count]) && $string[$count] != ' '){
            ++$number;
        }
    }
    return ++$number;
}

$string = 'as cc ee ww ee';
echo my_str_word_count($string);

?>