<?php

//ANONYMOUS VARIABLES
// here we don't need function name we just declare it before
//$num=100;
//$sum = function (int|float ...$number) use ($num): int|float{
 
  //  echo $num;
    //return array_sum($number);
//};
//echo $sum(1,2,3);


$array = [1,2,3];

$sum = array_map(function($element){
    return $element * 2;
}, $array);

echo '<pre>';
 print_r($array);

 print_r($sum);
 echo '<pre>';
 //==================================================================

 //we can even use defined function with a name


 $sum = function(callable $callback, int|float ...$number):int|float
{
    return $callback(array_sum($number));
};

echo $sum('foo',1,2,3);

function foo($element){
    return $element*2;
}
 
?>