<?php

if($_POST){
    function top($text){
        $words = explode(' ', $text);
        $top = [''];

        for($i = 0; $i < 3; $i++){
            $keyN = '';
                    $big = '';
            foreach ($words as $key=>$word){
                if(strlen($big) < strlen($word)){
                    $big = $word;
                    $keyN = $key;
                }

            }
            unset($words[$keyN]);
            array_push($top,$big);
        }
        return join(' top: ', $top);
    }

    echo top($_POST['top']) . '<br>';
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
<form action="2.php" method="post">
    <textarea name="top" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Send">
</form>
</body>
</html>
