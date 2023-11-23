<?php

include('./strlen.php');
include('./array_key_exisit.php');

function my_strtolower($word)
{
    $letters = array(
        'A' => 'a',
        'B' => 'b',
        'C' => 'c',
        'D' => 'd',
        'E' => 'e',
        'F' => 'f',
        'G' => 'g',
        'H' => 'h',
        'I' => 'i',
        'J' => 'j',
        'K' => 'k',
        'L' => 'l',
        'M' => 'm',
        'N' => 'n',
        'O' => 'o',
        'P' => 'p',
        'Q' => 'q',
        'R' => 'r',
        'S' => 's',
        'T' => 't',
        'U' => 'u',
        'V' => 'v',
        'W' => 'w',
        'X' => 'x',
        'Y' => 'y',
        'Z' => 'z'
    );


    $coverted = "";
    for ($i = 0; $i < my_strlen($word); $i++) {
        $letter = $word[$i];
        if (my_array_key_exisit($letter, $letters)) {
            $coverted .= $letters[$letter];
            
        } else {
            $coverted .= $letter;
            
        }
    }
    return $coverted;
}

echo my_strtolower('HAMOOD');
