<?php
$student = array(
    array('id' => 1 , 'firstName' => 'hamood' ),
    array('id' => 2 , 'firstName' => 'hasan' )
);

function My_array_column($array, $val) {
    $result = [];

    foreach ($array as $arrays) {
        if (isset($arrays[$val])) {
            $result[] = $arrays[$val];
        }
    }

    return $result;
}



print_r(My_array_column($student, 'id' )) ;

?>