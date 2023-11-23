<?php
function get_mins($mins) {
    $data = explode(':', $mins);

    $m = $data[1];

    return $m;
}
echo get_mins('10:50:11');
?>