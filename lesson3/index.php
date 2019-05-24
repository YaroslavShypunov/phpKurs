<?php
// first

//$first = 'First';
//echo $first;

// second

//$text = 'Мысли ласкает живот, порождаем мечты
//И фон горящих окон, себя открыла мне ты.
//Нежно-яркий цветок, нетронутый, как дитя.
//Наивная на любовь, солнечная вся.';
//echo "<pre>";
//
//// echo $text;
//
//echo "</pre>";


// three

//$first = '323';
//
//$second = 4;
//
//var_dump($second + $first);

//four

//print <<< 'TEST'
//stddsgsgds "dsgdsgdsg"
//TEST;

// five

//const TEST = 3.14;
//define('CONST_TEST','Hello World');
//echo TEST;
//echo '<br>';
//echo CONST_TEST;

// six магические константы
//
//echo __DIR__;
//echo '<br>';
//echo __LINE__;


// seven types of variables


// 1) boolean true false
// 2) integer -- number 123
// 3) float 3123.2
// 4) string 'safsafsafsf'
// 5) array
// 6) object
// 7) resource
// 8) null
// псевдотипы
// 9) mixed
// 10) number
// 11) callback


//$x =true;
//$a = 1234;
//echo $a;
//echo "<br>";
//
//$a = -1234;
//echo $a;
//echo "<br>";
//
//$a = 0234;
//
//echo $a;
//echo "<br>";
//
//$a = 0X1A;
//echo $a;
//echo "<br>";
//
//$fruts = ['apple', 'orange', 'pineapple'];
//echo '<pre>';
// var_dump($fruts);
//echo '</pre>';
//
//$automobiles = ['cars' => 'Mersedes', 'bus' => 'Volvo'];
//echo '<pre>';
// var_dump($automobiles);
// echo '</pre>';

//$user = [
//    [
//        "name" => "yaroslav",
//        "login" => 'user1',
//        "age" => '21',
//    ],
//    [
//        "name" => "peter",
//        "login" => 'user2',
//        "age" => '21',
//    ],
//    [
//        "name" => "angela",
//        "login" => 'user3',
//        "age" => '21',
//    ],
//    [
//        "name" => "ivan",
//        "login" => 'user4',
//        "age" => '21',
//    ],
//];
//echo '<pre>';
//var_dump($user);
//echo '</pre>';

//class People{
//    function run(){
//        echo 'run run run';
//    }
//}
//
// $people = new People();
//
//$type =  '12124';
//
//echo $people->run();
//echo '<br>';
//echo gettype($type);
//$type = (int) $type;
//echo '<br>';
//echo gettype($type);

//function run($name, $do){
//   return  $name . ', you must ' . $do .'!';
//}
//
//echo run('Andrej', 'run');

//$test = 5;
//
//echo isset($test);
//echo '<br>';
//echo is_int($test);
//echo '<br>';
//if(is_int($test)){
//    echo 'run';
//}

//$a = 5;
//$b = 5;

//echo $a <=> $b;
//
//switch($a <=> $b){
//    case 1:
//        echo 'a > b';
//        break;
//    case 0:
//        echo 'a = b';
//        break;
//    case -1:
//        echo 'a < b';
//        break;
//}

// eight
//if($a):
//    echo 111;
//elseif (true):
//    echo 'sasasaf';
//else:
//    echo 'else';
//endif;

//$a = ['a' => 1, 'b' => 2, 'c' => 3, 'e' => 4];
//$b = ['a' => 1, 'b' => 2, 'c' => 3, 'e' => 4];
//$result = ($a <=> $b);
//echo $result;

// nine
// echo $result = (2 > 3) ? 'yes' : 'no';

// ten
//
//$first = 5;
//switch($first){
//    case 5:
//        echo 5;
//        break;
//    case 7:
//        echo 'boo';
//        break;
//    case 100:
//        echo 'foo';
//        break;
//}
//
//$user = [
//    [
//        "name" => "yaroslav",
//        "login" => 'user1',
//        "age" => '21',
//    ],
//    [
//        "name" => "peter",
//        "login" => 'user2',
//        "age" => '21',
//    ],
//    [
//        "name" => "angela",
//        "login" => 'user3',
//        "age" => '21',
//    ],
//    [
//        "name" => "ivan",
//        "login" => 'user4',
//        "age" => '21',
//    ],
//];
//$second = 4;
//
//echo '<pre>';
//var_dump($user);
//echo '</pre>';
//echo '<br>';
//
//echo $user[0]['name'];
//
//echo '<br>';
//
//unset($user[0]);
//
//echo '<pre>';
//var_dump($user);
//echo '</pre>';
//echo '<br>';

//$menus = [
//'Home',
// "About",
//  'Delivery',
//'Menu',
//];

//echo "<ul>";
//foreach($menus as $menu ){
//    echo "<li> {$menu} </li>";
//}
//echo '</ul>';
//var_dump($menus);
//$res = array_shift($menus);
//print_r($res);

//$city = 'Kyiv';
//$position = 'Ukraine';
//
//$new = [$city, $position];
//
//$res= compact('city','position');
//print_r($res);
//
//$test = $_SESSION;
//print_r($test);

$arr = [1,2,56,12,5,6,965,1];

foreach ($arr as $key=>$item){
    if($item ==12){
        echo '<br> key:' .$key;
        continue;
    }
    echo $key++;
}
var_dump($arr);

$i = 0;
while($i <=10){
    echo '<br>'. $i;
    $i++;
}

$t =0;

do{
    echo '<br>' .$t;
    $t++;
}while($t<0);
