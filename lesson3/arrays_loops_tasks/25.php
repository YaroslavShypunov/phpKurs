<?php

$arr = [];
for($i = 0; $i < 100; $i++){
    array_push($arr, rand(0,1000));
}
$maxEl = max($arr);
$minEl = min($arr);
$elMax = array_search($maxEl,$arr);
$elMin = array_search($minEl,$arr);
echo 'Max: ' . $maxEl . ' Key: ' . $elMax . '<br>';
echo 'Min: ' . $minEl . ' Key: ' . $elMin . '<br>';
$arr[$elMin] = $maxEl;
$arr[$elMax] = $minEl;
$maxEl = max($arr);
$minEl = min($arr);
$elMax = array_search($maxEl,$arr);
$elMin = array_search($minEl,$arr);
echo 'Changed: <br>';
echo 'Max: ' . $maxEl . ' Key: ' . $elMax . '<br>';
echo 'Min: ' . $minEl . ' Key: ' . $elMin . '<br>';



echo '<pre>';
var_dump($arr);
echo '</pre>';

