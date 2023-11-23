<?php
function my_power($n,$p){
    $result = 1;
    for ($i=1; $i <= $p; $i++) { 
        $result *= $n;
    }

    return $result;
}


echo '<br>';
echo my_power(2,3);

echo '<br>';
echo '<br>';

?>