<?php
function get_day($day) {
    $data = explode('/', $day);

    $d = $data[0];

    return $d;
}
echo get_day('09/11/2023');
?>