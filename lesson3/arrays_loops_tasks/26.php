<?php
$arr = [];
$result = 0;

for($i = 0; $i < 100; $i++){
    array_push($arr, rand(1,100));
}
foreach ($arr as $key=>$value){
    if($key === 0) {
        $result = $value;
        continue;
    }if($key%2 === 0 && $value > 0){
        $result = $result * $value;
    }
}

echo $result . '<br>';

foreach ($arr as $key => $value){
    if($key%2 !== 0 && $value > 0){
        echo  $value . ', ';
    }
}


