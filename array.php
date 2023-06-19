<?php
//ERRAYS

//$array = array("Peace","23868","Namahoro","ID number");

//echo'<pre>';
//var_dump($array);
//echo'<pre>';

 echo '<pre>';
$array = array('peace' => 23868, 'Namahoro' => 23867);
  
var_dump($array);

//array example 2
echo '===============================================================';

$array2 = ['Peace' => 30, 'Namahoro' =>12];

print_r($array2);

echo '===================================================================';

//typcasting and overwrite

$array3 = array(1=>"a","1"=>"b",1.5 => "c",true =>"d",);
var_dump($array3);

echo '===================================================================';
//mixing int and string

$array4 =array("foo"=>"bar","bar"=>"foo",100=>12,200=>20);
print_r($array4);
//var_dump($array4);


echo '===================================================================';
//index array without keys

$array5 = array("Peace","Namahoro","Software","Developer",100);
print_r($array5);
var_dump($array5);

echo '===================================================================';

//keys not all element

$array6 =array(
    "a",
    "b",
 6=>"c",
    "d",
);

//var_dump($array6);
print_r($array6);


echo '===================================================================';
//complex Type Casting and Overwrite the example

$array7= array(
    1=>'a',
   '1'=>'b',
   1.5=>'c',
   -1=>'d',
   '01'=>'e',
   true=>'g',
   false=>'h',
   ''=>'j',
   null=>'l',
   2 => 'l'
);

var_dump($array7);

echo '==================================================================='. '<br />';
//Accessing array elements and multi dimenstions
$array8=array(
      "school"=>"AUCA",
      "semester" =>"semester 6",
      42 => 42,
      "multi"=> array(
        "dimension"=>"foo",
      )

);
var_dump($array8["school"]);
var_dump($array8["semester"]);
var_dump($array8[42]);
var_dump($array8["multi"]["dimension"]);


?>

