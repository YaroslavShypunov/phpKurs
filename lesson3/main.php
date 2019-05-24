<?php

// ? :
echo $result = (2 > 3) ? 'yes' : 'no';
echo '<br>';
// <=>
$a = 6;
$b = 7;
switch($a <=> $b){
    case 1:
        echo 'a > b';
        break;
    case 0:
        echo 'a = b';
        break;
    case -1:
        echo 'a < b';
        break;
}
echo '<br>';

// gettype()

$c  = 'Test';

echo gettype($c);
echo '<br>';

// magic variables - __DIR__ __LINE__;

echo __LINE__;
echo '<br>';
echo __DIR__;

// unset() -> delete variable

$unsetTest = 2;

var_dump($unsetTest);

unset($unsetTest);

var_dump($unsetTest);

// compact -> create array

$city = 'Kyiv';
$position = 'Ukraine';

$res= compact('city','position');
print_r($res);
