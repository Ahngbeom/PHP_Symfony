<?php
function array2hash($array) {
    $length = count($array);
    $idx = 0;
    while ($idx < $length)
    {
        $hash[$array[$idx][1]] = $array[$idx][0];
        $idx++;
    }
    print_r($hash);
}
?>
