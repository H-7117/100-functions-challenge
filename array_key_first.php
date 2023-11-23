<?php

$array = ['a' => 1, 'b' => 2, 'c' => 3];

function my_array_key_first ($array) {
    
  foreach ($array as $key => $value) {
      return $key;
      break;
    }
  }

  echo array_key_first ($array);

  
?>