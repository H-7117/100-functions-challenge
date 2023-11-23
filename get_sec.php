<?php
function get_sec($sec) {
    $data = explode(':', $sec);

    $s = $data[2];

    return $s;
}
echo get_sec('10:50:11');
?>