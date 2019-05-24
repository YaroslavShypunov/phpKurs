<?php

function folder($dir){
    $directory = opendir($dir);
    while(($file = readdir($directory)) !== false){
        echo $file .'<br>';
    }
}

folder('../functions_forms_tasks');