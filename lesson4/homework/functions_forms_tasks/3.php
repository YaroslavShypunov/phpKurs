<?php
$secArr = [];
function filterArr($n){
    global $secArr;
    $num = $_POST['n'] ;
if(mb_strlen($n,'UTF-8') <= $num){

     array_push($secArr, $n);
}
}
if($_POST){
    $text = 'Це текст-"риба", що використовується в друкарстві та дизайні.  є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів. "Риба" не тільки успішно пережила п\'ять століть, але й прижилася в електронному верстуванні, залишаючись по суті незмінною. Вона популяризувалась в 60-их роках минулого сторіччя завдяки виданню зразків шрифтів , які містили уривки з , і вдруге - нещодавно завдяки програмам комп\'ютерного верстування на кшталт , які використовували різні версії.';
    $arr = explode(' ',$text);
    array_filter($arr,'filterArr');

    echo join($secArr, ' ');
}
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
<form action="3.php" method="post">
    <input name='n' type="text" required>N <br>
    <input type="submit" value="Send">
</form>
</body>
</html>
