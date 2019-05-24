<?php
if(isset($_POST['submit'])){
    $rows = $_POST['rows'];
    $cols = $_POST['cols'];
    $colors = array('red','yellow','blue','gray','maroon','brown','green');
    echo '<table>';
    for($i = 0; $i < $cols; $i++){
        echo '<tr>';
        for($j = 0; $j < $rows; $j++){
            echo '<td style="background: ' .  $colors[rand(0,6)] . '">' . rand(0,10000) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
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
<form action="27.php" method="post">
    <input type="text" placeholder="rows" name="rows">
    <input type="text" placeholder="cols" name="cols">
    <input type="submit" name="submit">
</form>
</body>
</html>
