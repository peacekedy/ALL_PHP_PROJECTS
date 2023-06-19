<?php

//php init and configuration

//erro_reporting, error log, display error

var_dump(ini_get('error_reporting'));
var_dump(E_ALL);
$array=[1];

//displaying error

var_dump(ini_get('display_error'));
var_dump(E_ALL);
echo $array;
//ini_set('display_error' , 0); OR

var_dump(ini_get('memory_limit'));
ini_set('max_execution_time',3);
sleep(5);
echo 'hello world';
//error_log   


//for loop statement
var_dump(ini_get('memory_list'));
$string = 'x';

for($i=0; $i < 1000; $i++){
    $string =$string;
}

echo $string;

?>