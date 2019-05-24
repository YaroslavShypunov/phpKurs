<?php



// global variable

function sayHi2($name){
    echo 'Hello,' . $name .'! <br>';
    global $name;
    $name = 'Rud';
}

$name = 'Andrej';
sayHi2($name);

echo $name;



// recursion function call in the same function


function bla($a){
    if($a < 20){
        echo "{$a} \n";
        bla($a+1);
    }
}
bla(1);


//  return array

function myDeForencre(){
    return [
        'sasaf',
        'safsaf',
        'safsaf',
        '4',
        '5',
        [
            '61',
            '62',
            '63',
            '64',
        ]
    ];
}
echo '<pre>';
var_dump(myDeForencre()[5][1]);
echo '</pre>';

// func_num_args() - число аргементов , func_get_args() - возвращает массив аргументов
function differentArgs(){
    echo '<pre>';
var_dump(func_num_args());
echo '</pre>';

    echo '<pre>';
    var_dump(func_get_args());
    echo '</pre>';
}


differentArgs('12','24','sf','afsfsa');