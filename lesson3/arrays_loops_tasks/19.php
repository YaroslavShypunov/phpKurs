<?php

$day = 'Thursday';

$week = ['Sunday', 'Monday', 'Tuesday' , 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

foreach ($week as $value){
   $d =  ($day === $value) ? "<i> {$value} </i> <br>" : $value . "<br";
   echo $d;
}