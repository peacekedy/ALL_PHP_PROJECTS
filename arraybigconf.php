<?php
echo '<pre>';
$array=array(1,2,3,4);
print_r($array);

//delete all items
foreach($array as $i =>$value){
    unset($array[$i]);
}
print_r($array);

//Append an item(note that new key is 5 instead of 5);
$array[]=9;
print_r($array);

//Re-index
$array=array_values($array);
$array[]=10;
print_r($array);
echo'<pre>';

echo '===================================================================='.'<br>';

//Array Destructuring

$array_destruction=["In","God","We","Trust"];
[$In,$God,$We,$Trust]=$array_destruction;

echo $In . '<br />';
echo $God . '<br />';
echo $We  . '<br />';
echo $Trust . '<br />';

echo '===================================================================='.'<br>';
//Array distruction used in For Each is used to destruct multiple dimensions

$array_foreach=[
    [1,'Peace'],
    [2,'Namahoro'],
];

foreach($array_foreach as [$fname, $lname]){
    //login with firstname and lastname;

echo '===================================================================='.'<br>';
//Associative Array can destructured too

$associative_array=['foo'=>1,'bar'=>3, 'baz'=>4];

//assign the element at index 'baz' to the variable three

['bar'=>$three]=$associative_array;

echo $three;  //prints the value of baz
}
?>