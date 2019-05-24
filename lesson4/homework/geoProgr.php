<?php
if(isset($_GET['submit'])){
    $result = [];
    for($i = 0; $i < 50; $i++){
        $result[$i] = ($i === 0) ?  $_GET['firstNumber'] : $result[$i-1] * $_GET['number'];
        echo $result[$i] . ' ';
    }
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
<form action="geoProgr.php" method="get">
    <input type="text" name="firstNumber" placeholder="Первое число" required>
    <input type="text" name="number" placeholder="Знаменатель прогрессии" required>
    <input type="submit" name='submit' value="Send">
</form>
</body>
</html>
