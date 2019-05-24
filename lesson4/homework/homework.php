<?php
if(isset($_POST['submit'])){
    $points = 0;
    $goodResults = [];
if($_POST['one'] == 4){
    $points++;
} else{
   $goodResults["bad: {$_POST['one']}"] = 4;
}
    if($_POST['two'] == 30){
        $points++;
    } else{
        $goodResults["bad: {$_POST['two']}"] = 30;
    }
    if($_POST['three'] == 30){
        $points++;
    } else{
        $goodResults["bad: {$_POST['three']}"] = 30;
    }
    if($_POST['four'] == 5){
        $points++;
    } else{
        $goodResults["bad: {$_POST['four']}"] = 5;
    }
    if(isset($_POST['five1'])){
        $points++;
    }  else{
        $goodResults["bad: 9 * 3 == false "] = '9 * 3 == true';
    }
    if(isset($_POST['five2'])){
        $goodResults["bad: 2 * 2"] = '9 * 3 или 3 * 3 * 3';
    }
    if(isset($_POST['five3'])){
        $points++;
    } else{
        $goodResults["bad: 3 * 3 * 3 == false "] = '3 * 3 * 3 == true';
    }
    if($_POST['six'] == 27){
        $points++;
    } else{
        $goodResults["bad: {$_POST['six']}"] = 27;
    }
    if($_POST['seven'] == 30 ){
        $points++;
    } else{
        $goodResults["bad: {$_POST['seven']}"] = 30;
    }
    if($_POST['eight'] == 75){
        $points++;
    } else{
        $goodResults["bad: {$_POST['eight']}"] = 75;
    }
    if($_POST['nine'] == 2){
        $points++;
    } else{
        $goodResults["bad: {$_POST['nine']}"] = 2;
    }


    echo  "Вы сдали экзамен на {$points}0% <br>";
        foreach ($goodResults as $key=>$value){
            echo "Твой ответ {$key}, должен быть {$value} <br>";
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
<form action="homework.php" method="post">
    <h1>Homework</h1>
    <div>
        <label for="">1) 2 + 2</label><br>
        <input type="text" name="one" required>
    </div>
    <div>
        <label for="">2) 10 * 3</label><br>
        <input type="text" name="two" required>
    </div>
    <div>
        <label for="">3) 40 - 10</label><br>
        <input type="text" name="three" required>
    </div>
    <div>
        <label for="">4) 10 - 5</label><br>
        <input type="text" name="four" required>
    </div>
    <div>
        <label for="">5) 27</label><br>
        <input type="checkbox" name="five1" value="oneFive" > 9 * 3
        <input type="checkbox" name="five2" value="twoFive" > 2 * 2
        <input type="checkbox" name="five3" value="threeFive" > 3 * 3 * 3
    </div>
    <div>
        <label for="">6) 3 * 3 * 3</label><br>
        <select name="six" required>
            <option value="27">27</option>
            <option value="9">9</option>
            <option value="18">18</option>
            <option value="12">12</option>
        </select>
    </div>
    <div>
        <label for="">7) 10 + 10 + 10</label><br>
        <input type="radio" value='30' name="seven" required> 30
        <input type="radio" value='40' name="seven" required> 40
    </div>
    <div>
        <label for="">8) 25 + 25 + 25</label> <br>
        <input type="radio" name="eight" value="75" required> 75
        <input type="radio" name="eight" value="100" required> 100
    </div>
    <div>
        <label for="">9) 1 + 1</label><br>
        <input type="text" name="nine" required>
    </div>
    <div>
        <input type="submit" name="submit">
    </div>
</form>
</body>
</html>
