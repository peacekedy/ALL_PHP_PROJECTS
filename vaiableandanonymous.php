<?php

/**variable, anonymous and arrow function */

//VARIABLES

function sum(int|float...$number): int|float{
return array_sum($number);

}

$x = 'sum';

echo $x(1,2,3);

function (int|float ...$num): int|float{
   
    return array_sum($num);


};


$number = 'multiplication';

if(is_callable($number)){
echo $number(2,4,6);
}else{
    echo 'Not callables';
}

?>


