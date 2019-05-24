<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach($arr as $key=>$value){
    echo $key . '<br>';
}
echo '<br>';
foreach($arr as $value){
    echo $value . '<br>';
}
