<?php

$nums = [4, 2, 5, 19, 13, 0, 10];

foreach ($nums as $num){
    if($num === 2 || $num === 3 || $num === 4){
        echo 'Есть <br>';
    } else{
        echo 'Нет <br>';
    }
}