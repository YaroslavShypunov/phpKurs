<?php

$week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

foreach($week as $day){
    $day = ($day === 'Sunday' || $day === 'Saturday') ? "<b> {$day} </b> <br>": $day . ' <br>';
    echo $day;
}