<?php
if($_POST){
    $file = fopen('comments.txt', 'a+');
    $text = $_POST['text'];
    if(mb_stripos($text,'сука') !== false || mb_stripos($text,'блять') !== false || mb_stripos($text,'хуйня') !== false || mb_stripos($text,'бред') !== false){
        echo 'Некорректный комментарий <br>';
    } else {
        echo $text;
        $text2 = strip_tags($text, '<b>');

        fwrite($file, $text2 . PHP_EOL);
        fclose($file);
    }
}
$file2 = fopen('comments.txt','r');
echo '<pre> ' . fread($file2,filesize('comments.txt'));
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
<form action="8.php" method="post">
    Your comment :  <input name='text' type="text" required> <br>
    <input type="submit" value="Send">
</form>
</body>
</html>
