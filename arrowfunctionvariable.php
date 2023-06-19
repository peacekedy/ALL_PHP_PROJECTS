<?php
 //arrow functions

$array = [1,2,3];
$y=2;

//we only have a single line expression in arrow funtion in php 8.0
$array2 = array_map(fn($element)=> $element * $element * $y, $array);

echo '<pre>';
print_r($array2);
echo '<pre>';
echo $y;


?>