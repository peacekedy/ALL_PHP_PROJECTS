<!---?php

declare(strict_types=1);

function peace(int|float $x, int|float $y){

    return $x * $y;
}

echo peace(5.2, 10);
?-->
  
<!--?php

//functions 

//declare(strict_types=1);

function sum( int|float $x, int|float $y)
{
    return $x + $y;
}
$a = 5.2;
$b =  6;

echo sum($a, $b). '<br />';
echo 'the total amount by adding the following sum';
?-->


<?php

//declare(strict_types=1);

function foo(int $x, int $y): int{

   if($x % $y ==0){
    return $x / $y;
   }
    
  return $x;

}

$arr = ['x' => 1, 'y' =>2];

echo foo($arr);
?>

<!--?php

function peace(int $a, int $b)
{
    if($a % $b ==0){
        return $a/$b;
    }

    return $a;

   
}
$answer = ['a' => 5, 'b'=> 10];
echo peace($answer);

?-->


