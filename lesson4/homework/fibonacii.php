<?php
$result = [];
for($i = 0; $i < 50; $i++){
    $result[$i] = ($i === 0 || $i === 1) ? 1 : $result[$i-1] + $result[$i-2];
    echo $result[$i] . ' ';
}
