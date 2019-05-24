<?php
function xTwo($n){
    return $n * $n;
}

$nums = [26, 17, 136, 12, 79, 15];
$nums = array_map('xTwo', $nums);
$result = 0;
foreach ($nums as $num){
 $result += $num;
}

echo $result;