<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$paymentstatus = 1 ;

switch($paymentstatus){

    case 1:
        echo 'Paid';
        break;
   
   case 2:
        echo 'Paiment declained';
           break;

   case 3:
       echo 'Pending';
          break;

          default:
             echo "Unknown payment please checkwell";

}
   echo '<br />';



$paymentstatusdisplay = match($paymentstatus)
{

   1 => 'Paid',
    1.2 => 'Payment Declined',
    0 => 'pyment pending in the process'
};
      echo $paymentstatusdisplay;
?>
 
 <!--IF STATEMENT-->
<!--?php

function x(){
   sleep(3);
   echo 'Done <br/>';

   return 3;

}

if(x() == 1)
{
    echo 1;
}elseif(X() == 2)
  {
    echo 2;
  }elseif(x() == 3){
    echo 3;
  } else{
    echo 4;
  }
?-->  
</body>
</html>