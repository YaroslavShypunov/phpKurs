<?php


function findWord($dir,$word){
    if(is_dir($dir)) {
        $dh = opendir($dir);
    while(($file = readdir($dh)) !== false ){

        $num = strripos($file,$word);
        if($num !== false){
            echo "мы нашли искомое слово {$word} в {$file} <br>";
        }
    }
    }
}

findWord('../functions_forms_tasks', '1');

