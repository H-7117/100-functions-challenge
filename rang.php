<?php
//10
function my_range($start,$end,$number){
    $output = "";
    while ($start <= $end) {
        $output .= $start . "\n";
        $start += $number;
    }
    return $output;
}

echo my_range(1,15,2);

?>