<?php

//function test(){
//    echo __FUNCTION__;
//}
//
//test();


//function sum($number, $secondNumber){
//    echo $number + $secondNumber . '<br>';
//}
//
//$fn = 4;
//$sn= 5;
//
//sum($fn, $sn);
//
//
//sum(4,20);

//function view($ar){
//    if(is_array($ar)){
//        echo '<pre>';
//        var_dump($ar);
//        echo '</pre>';
//    } else{
//        echo 'error';
//    }
//}
//
//
//
//view([1,2,3,4]);


//function sayHi($name){
//    echo 'Hello,' . $name .'! <br>';
//    $name = 'Rud';
//}
//
//$name = 'Andrej';
//sayHi($name);
//
//echo $name;


//function sayHi2($name){
//    echo 'Hello,' . $name .'! <br>';
//    global $name;
//    $name = 'Rud';
//}
//
//$name = 'Andrej';
//sayHi2($name);
//
//echo $name;


//function recursion($a){
//    if($a < 20){
//        echo "{$a} \n";
//        recursion($a+1);
//    }
//}
//recursion(1);
//
//
//function arProgresive($startNumber, $step){
//    if($startNumber < 200) {
//        $result = $startNumber + $step;
//        echo $result . ' <br>';
//        arProgresive($result, $step);
//    }
//
//}
//arProgresive(1,10);

//function stepen($i, $stepen){
//    $num = $i;
//   for($j = 1; $j < $stepen; $j++){
//       $i = $i * $num;
//   }
//   echo $i . '<br>';
//}
//
//stepen(2,3 );
//echo '<br>';
//
//function myPow($number, $pow){
//    if($number == 1 ){
//        return 1;
//    } elseif ($pow == 0){
//        return 0;
//    } elseif ($pow == 1){
//        return $number;
//    }
//    return $number * myPow($number, $pow-1);
//}
//
//$z = myPow(2,4);
//echo $z;

//function myDeForencre(){
//    return [
//        'sasaf',
//        'safsaf',
//        'safsaf',
//        '4',
//        '5',
//        [
//            '61',
//            '62',
//            '63',
//            '64',
//        ]
//    ];
//}
//echo '<pre>';
//var_dump(myDeForencre()[5][1]);
//echo '</pre>';

//function differentArgs(){
//    echo '<pre>';
//var_dump(func_num_args());
//echo '</pre>';
//
//    echo '<pre>';
//    var_dump(func_get_args());
//    echo '</pre>';
//}
//
//
//differentArgs('12','24','sf','afsfsa');

//
//function task1(){
//    $result = 0;
//    for($i = 0; $i <  func_num_args(); $i++ ){
//        $result += func_get_arg($i);
//    }
//return $result;
//}
//
//echo task1(1,6,1,7,1);
//
//function arr(){
//    $arrType = 0;
//    $numType = 0;
//    $stringType = 0;
//    $elements = func_get_args();
//    foreach ($elements as $element){
//        if(is_array($element)){
//            $arrType++;
//        } elseif (is_int($element)){
//            $numType++;
//        }elseif (is_string($element)){
//            $stringType++;
//        }
//    }
//    return "String: {$stringType} ; Int: {$numType} ; Array: {$arrType}";
//}
//
//echo arr(1,'daas',[1,2,4],4,[1242,214,2],6,'safsaf','safaf',32,['sa','saf']);

//function myStatic(){
//    static $count = 0;
//    echo $count . '<br>';
//    $count++;
//}
//
//myStatic();
//myStatic();
//myStatic();
//myStatic();
//myStatic();
//myStatic();
//myStatic();
$filepath = 'text.txt';
$file = fopen($filepath,'a+');
// fwrite($file,"12345");
$content = fread($file, filesize($filepath));


// fwrite($file,"12345");

 echo $content;



fclose($file);
