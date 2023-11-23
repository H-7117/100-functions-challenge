<?php
function get_year($year) {
    $data = explode('/', $year);

    $y = $data[2];

    return $y;
}
echo get_year('09/11/2023')
?>