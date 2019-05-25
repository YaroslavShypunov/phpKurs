<?php

if($_FILES){
    $dir = './images';

    $type = explode('/',$_FILES['image']['type']);

    if($type[0] === 'image') {
        $uploaded = $dir . DIRECTORY_SEPARATOR . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $uploaded);
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploaded)) {
            echo "Your image: {$_FILES['image']['name']} sent <br>";
        } else {
            echo "Your image did not send ";
        }
    } else{
        echo 'It is not image';
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
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" name="send">
    <input type="submit" name="showImages" value="Show Images">
</form>

<?php
if(isset($_POST['showImages'])){
    foreach (glob('./images/*.*') as $filename) {
        echo "<img width='200px' src=\"{$filename}\" alt=\"\">";
    }
}
?>

</body>
</html>
