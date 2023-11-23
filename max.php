<?php

//8
function my_Max(...$number) {
    $Max = 0;
    for ($i = 0; $i < count($number); $i++) {
        if ($number[$i] > $Max) {
            $Max = $number[$i];
        }
    }
    return $Max;
}

echo my_Max(1, 4, 20, 5, 3);

?>