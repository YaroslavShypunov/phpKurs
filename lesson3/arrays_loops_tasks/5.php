<?php

$people = ['Коля' => '200', 'Вася' => '300', 'Петя' => '400'];

foreach ($people as $man=>$money){
    echo "{$man} — зарплата {$money} долларов. <br>";
}