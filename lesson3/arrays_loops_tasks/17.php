<?php

$arr = ['January', 'February', 'March', 'April', 'May', 'June', 'Jule', 'August', 'September', 'October', 'November', 'December'];
$month = 'May';
foreach($arr as $value){
    if($value === $month){
        echo "<b> {$value} </b> <br> ";
        continue;
    }
    echo $value . '<br>';
}