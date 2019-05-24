<?php

if($_POST){
    $file = fopen('comments.txt', 'a+');
    fwrite($file,$_POST['text'] . PHP_EOL);
    fclose($file);
}
$file2 = fopen('comments.txt', 'r');
echo '<pre>' . fread($file2, filesize('comments.txt')) . '</pre>';
fclose($file2);

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
<form action="7.php" method="post">
    Your comment :  <input name='text' type="text" required> <br>
    <input type="submit" value="Send">
</form>
</body>
</html>
