<?php
function get_hour($hour) {
    $data = explode(':', $hour);

    $h = $data[0];

    return $h;
}
echo get_hour('10:50:11');
?>