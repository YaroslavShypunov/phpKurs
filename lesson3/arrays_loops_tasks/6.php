<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$ru = [];
$en = [];
foreach($arr as $english=>$russian){
    array_push($ru, $russian);
    array_push($en, $english);
}

print_r($ru);
print_r($en);