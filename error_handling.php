
<?php
//https://www.php.net/manual/en/function.set-error-handler.php REFFERENCE
//error hundler function
function myerrorHandler($errno, $errstr,$errfile,$errline){
  
    if(!(error_reporting()& $errno)){
        return false;
    }
    //$errstr may need to be escaped

    $errstr = htmlspecialchars($errstr);

    switch($errno){

     case E_USER_ERROR:
        echo "<b>My ERROR</B> [$errno] $errstr<br />";
        echo "Fatal error online  $errline in file $errfile";
        echo  "PHP".  PHP_VERSION. "(". PHP_OS .")<br />\n";
        echo "Aborting....<br />\n";
        break;

     case E_USER_WARNING:
        echo "<br>My WARNING</b> [$errno] $errstr<br/>";
        break;

    case E_USER_NOTICE:
        echo "<b>My NOTICE</b> [$errno] $errstr <br />\n";
        break;

    default:
      echo "unkown error type: [$errno] $errstr<br />\n";
      break;
    
    }
}


//function to check ERROR HANDLING

function scale_by_log($vect, $scale){

    if(!is_numeric($scale) || $scale<=0){
      trigger_error("log(X) for x <= 0 is undefined, you used: scale = $scale", E_USER_ERROR);
    }


    if(!is_array($vect)){
  trigger_error("incorrect input vector, array of values expected", E_USER_WARNING);
   return null;    
}

$temp = array();
foreach ($vect as $pos => $value){
    if(!is_numeric($value)){
        trigger_error("value at position $pos is not a number, using 0 (zere)",E_USER_NOTICE);
        $value = 0;
    }
  $temp[$pos] = log($scale) * $value;
    
}
return $temp;

}

$old_error_handler = set_error_handler("myErrorHandler");

echo "vector a\n";
$array = array(2,3,"foo",5.5,43.3,21.11);
print_r($a);

//now let generate second array
echo "==========\n b - a notice(b=log(PI) * a)\n";

//value at position $pos is not number, using 0(zero)
$b= scale_by_log($a, M_PI);
print_r($b);

//this is truoble we pass a string instead of array

$c = scale_by_log("not array",2.3);
var_dump($c);

//this is the critical error, log of zero of negative number is undefinced
echo"--------\n vector d - fatal error\n ";

//log(x) for x <= 0 is undefined, you used: scale = $scale

$d= scale_by_log($a, -2.5);
var_dump($d);

?>