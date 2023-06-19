<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- while loop */
<!-?php
  $i=0;

  while(true)

  if( $i >=15 ){

    break;
  }


    {
       echo $i++;
    }
    ?--> 
    
    <!--for Loop-->
    
<!--?php
$text = ['a', 'b', 'c', 'd'];
$lengt=count($text);

for($i = 0; $i < $lengt; $i++){

   echo $text[$i] .'<br />';

}


?-->

<!---Forearch --->

  <?php

use JetBrains\PhpStorm\Language;

     $programLanguages = ['PHP','Java','c++','python','laravel'];

     foreach($programLanguages as $Language){

        echo $Language. '<br/>';

     }
  
  ?>


<?php

$user = [
    'name' => 'Peace',
    'emaile' => 'peaceked309@gmail.com',
    'phone'   => '0784634309'
];

foreach ($user as $key => $value)

{

if(is_array($value)){
    $value = implode('.', $value);
}

    echo $key . ':'. $value. '</br s>';
}
 
?>  


</body>
</html>