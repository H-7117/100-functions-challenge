<?php

function my_floor(int|float $num){
    if($num>0){
      return (int)$num;
    }
    else{
      return (int)$num-1;
    }
  }

  echo my_floor(7);
?>