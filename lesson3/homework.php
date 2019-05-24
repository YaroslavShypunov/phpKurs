<?php

$name = 'Yaroslav';
$age = 21;

echo "1) Меня зовут {$name}. <br>";
echo "2) Мне  {$age} лет. <br>";

if(18 <= $age && $age <= 59){
    echo "3) Вам еще работать и работать. <br>";
} else if ($age > 59 ){
    echo "3) Вам пора на пенсию. <br>";
}  else if (0 <= $age && $age <= 17){
    echo "3) Вам еще рано работать. <br>";
} else if ( $age < 0) {
    echo "3) Неизвестный возраст. <br>";
}

$day = 1;

switch ($day){
    case 1 <= $day && $day <= 5:
        echo "4) Это рабочий день. <br>";
        break;
    case 6 <= $day && $day <= 7:
        echo "4) Это выходной день. <br>";
        break;
    default:
        echo "4) Неизвестный день. <br>";
        break;
}

$s = 150;
$t = 60;
$speedHours = $s / $t;
$speedSec = ($s * 1000) / ($t * 60);

echo "5) Скорость автомобиля {$speedHours} км/ч <br>";
echo "5) Скорость автомобиля {$speedSec} м/с <br>";

$foo = 'bar';
$bar = 10;

echo "10) ${$foo} <br>";

if(isset($_POST['submit'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $operator = $_POST['operator'];
    $result = 0;
    switch($operator){
        case "+":
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            if($b === '0' || $b === 0){
                $result = 'На ноль делить нельзя, попробуйте задать другое число.';
                break;
            }
            $result = $a / $b;
            break;
        case '%':
            $result = $a % $b;
            break;
        default:
            $result = 'Не верно задан оператор.';
            break;
    }
    echo '11) ' . $result . '<br>';
}

if(isset($_POST['submit12'])){
    $a12 = $_POST['a12'];
    $b12 = $_POST['b12'];
    $result12 = ($a12 < $b12) ? $b12 : $a12;
    $result12 = ($a12 === $b12) ? 'Числа равны' : $result12;
    echo '12) ' . $result12 . '<br>';
}


$a13 = '78';
$b13 = 78;
$result13 = 0 ;
$result14 = 0 ;
$result13 = ($a13 === $b13) ? "13) Числа a = {$a13}  и b = {$b13} Равны <br>": "13) Числа a = {$a13}  и b = {$b13} Не равны <br>";
$result14 = ($a13 == $b13) ?  "14) Числа a = {$a13}  и b = {$b13} Эквивалентны <br>" : "14) Числа a = {$a13}  и b = {$b13} Не эквивалентны <br>";
echo $result13;
echo $result14;
echo "<pre>";
var_dump($result13);
echo "</pre>";

$a16 = 20;
echo '16) ' . (boolean) $a16 . ' Так как все что не является NULL является true , а true это 1 в бинарном значение (истина) <br>';

$a17 = 0;
echo '17) ' . (boolean) $a17 . '  NULL -> false ,  0 в бинарном значение (ложь) <br>';
$a18 = -20;
echo '18) ' . (boolean) $a18 . ' Так как все что не является NULL является true , а true это 1 в бинарном значение (истина) <br>';

print_r('19) Hello world ! </br>');
echo '19) Hello world ! </br>';
var_dump('19) Hello world ! </br>');

// 20) Hello world !
/*
 * 20) Hello world !
 */
# 20) Hello world !


define("DAYS_COUNT" , 7);
define("MONTH_COUNT", 12);

const DAYS_COUNT2 = 7;
const MONTH_COUNT2 = 12;


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="homework.php" method="post">
    <h2>11) Калькулятор</h2>
    <input name='a' type="text" placeholder="А">
    <input name='operator' type="text" placeholder="Оператор">
    <input name="b" type="text" placeholder="В">
    <input name='submit' type="submit">
</form>

<form action="homework.php" method="post">
    <h2>12) Максимальное число</h2>
    <input name='a12' type="text" placeholder="А">
    <input name="b12" type="text" placeholder="В">
    <input name='submit12' type="submit">
</form>
<?= '&lt;?= это короткий echo который можно вставлять в html' ?>
</body>
</html>
