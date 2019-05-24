<?php
if(isset($_FILES['file'])){
$file = $_FILES['file'];
copy($file['tmp_name'], "gallery/{$file['name']}");

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
<table>
    <?php
    $dir = opendir('gallery');
    while(($f = readdir($dir)) !== false) {
        if($f !== '.' && $f !== '..') {
            echo "<tr>
        <td><img src='gallery/" . $f . "' alt=''></td>
    </tr>";
        }
    }
    ?>
</table>
<form action="6.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="submit" value="Send">
</form>
</body>
</html>
