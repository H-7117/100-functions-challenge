<?php
include('./in_array.php');

$arr1 = ['1', '2', '3', '9'];
$arr2 = ['1','2','3'];


function my_array_diff($arr1, $arr2) {
    $diff = [];
  
    foreach ($arr1 as $value) {
      if (!my_in_array($value, $arr2)) {
        $diff = $value;
      }
    }
  
    return $value;
  }

echo "The difference between arrays: " . my_array_diff($arr1,$arr2);




?>