<?php
function getCommonWords($a,$b){
    $a = explode( ' ',$a);
    $b = explode( ' ', $b);
    return array_intersect($a,$b);
}
if($_POST){
    $arr =getCommonWords($_POST['a'], $_POST['b']);

    var_dump($arr);
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
<form action="1.php" method="post">
    <textarea name="a" id="" cols="30" rows="10"></textarea>
    <textarea name="b" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Send">
</form>
</body>
</html>
