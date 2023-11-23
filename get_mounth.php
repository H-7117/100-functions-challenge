<?php
function get_month($month) {
    $data = explode('/', $month);

    $m = $data[1];

    return $m;
}
echo get_month('09/11/2023');
?>