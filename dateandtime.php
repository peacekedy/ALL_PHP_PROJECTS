<?php

echo time();

$currenttime= time();

echo $currenttime . '<br>';
echo $currenttime +5 *24 * 60 * 60 . '<br>';//here we are finding the number of current time plus five days
echo $currenttime-60*60*24 . '<br>'; //here we are finding the number of current time  yesterday
echo date('m/d/y g:ia'). '<br>';
echo date('m/d/y g:ia', $currenttime +5 *24 * 60 * 60 ). '<br>'; // current time in next five days
echo date('m/d/y g:ia', $currenttime-60*60*24 ). '<br>'; //yesterday date and time


echo '======================================================';
echo date_default_timezone_get(). '<br />';

date_default_timezone_set('UTC');

echo date('m/d/y g:ia'). '<br>';
echo date('m/d/y g:ia', $currenttime +5 *24 * 60 * 60 ). '<br>'; // current time in next five days
echo date('m/d/y g:ia', $currenttime-60*60*24 ). '<br>';
echo date_default_timezone_get(). '<br />';

//we can also use function called mktime to get the unix time based on the agrement that you parsed

echo date('m/d/y g:ia', mktime(0,0,0,6,7,null)) . '<br />' ;

//we can also use keywords strtotime 

echo date( 'm/d/y g:ia',strtotime('2023-06-17 07:00:00')). '<br />';

//we can also use function strtotime by writing words or sentences

echo '======================================================'; 

echo 'the last day of april 2023' . '<br />';
echo '<pre>';
echo date('m/d/y g:ia', strtotime('last day of april 2023'));
echo '<pre>';


echo 'the Second friday of january' . '<br />';
echo '<pre>';
echo date('m/d/y g:ia', strtotime('second friday of january'));
echo '<pre>';


echo 'last day of may 2023' . '<br />';
echo '<pre>';
echo date('m/d/y g:ia', strtotime('last day of may'));
echo '<pre>';
 
//lastly we can get date and time and get all details 

echo '======================================================';

 $date= date('m/d/y g:ia', strtotime('last day of august 2022'));
   echo '<pre>';
     print_r(date_parse_from_format('m/d/y g:ia', $date));
   echo '<pre>';


?>