<?php

if(isset($_POST['submit'])){
    $numbers = str_split($_POST['number']);
   $result = array_sum($numbers);
    echo $result;
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
<form action="23.php" method="post">
    <input type="text" name="number">
    <input type="submit" name="submit">
</form>

</body>
</html>
