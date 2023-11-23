<?php

include('./strlen.php');
include('./array_key_exisit.php');

function my_strtoupper($word)
{
    $letters = array(
        'a' => 'A',
        'b' => 'B',
        'c' => 'C',
        'd' => 'D',
        'e' => 'E',
        'f' => 'F',
        'g' => 'G',
        'h' => 'H',
        'i' => 'I',
        'j' => 'J',
        'k' => 'K',
        'l' => 'L',
        'm' => 'M',
        'n' => 'N',
        'o' => 'O',
        'p' => 'P',
        'q' => 'Q',
        'r' => 'R',
        's' => 'S',
        't' => 'T',
        'u' => 'U',
        'v' => 'V',
        'w' => 'W',
        'x' => 'X',
        'y' => 'Y',
        'z' => 'Z'
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

echo my_strtoupper('hammod');
