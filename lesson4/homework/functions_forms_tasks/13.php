<?php

$text = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

$text = explode(' ', $text);

$text = array_count_values($text);
$arr = [];
    foreach ($text as $key => $value) {
        $arr[$key] =  $value;
}
arsort($arr);
foreach ($arr as $key=>$value){
    echo "{$key} - {$value} <br>";
}