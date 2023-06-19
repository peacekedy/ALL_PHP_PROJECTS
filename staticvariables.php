<!--?php

$x=5;

function peace(){

    $GLOBALS['x']=10;

    echo $GLOBALS['x'];
}

peace();

echo $x;
?-->

<!--?php
 
 $values=10;
  function getValue(){
    $values=SomeVeryExpensiveFunctions();
    
    return $values;

  }

function SomeVeryExpensiveFunctions(){
    sleep(2);

    return 20;
}

echo getValue(). '<br />';
echo getValue(). '<br />';
echo getValue(). '<br />';
?-->


<?php
 
function getValue(){

static $values=null;

if($values === null){
    //$values = someValues();
}

//some more processing wit $values

return $values;

}

function SomeVeryExpensiveFunctions(){
    sleep(2);
     
    echo 'Processing';
    return 30;
}

echo getValue(). '<br />';
echo getValue(). '<br />';
echo getValue(). '<br />';

?>