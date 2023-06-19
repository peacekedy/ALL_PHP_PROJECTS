<?php
//https://www.php.net/manual/en/function.chgrp.php  REFFERENCE
//Working with filesystem
 $peacefile = scandir(__DIR__);
 
 //we can even loop to check if directory is a file

 var_dump(fileowner($peacefile[5]));

//mkdir for creating directory and subdirectory
//mkdir('AUCA/Courses', recursive:true);
//rmdir used to delete the directory
 //rmdir('Namahoro');

 if(file_exists('file.txt'))
 {
    echo filesize('file.txt');
 }else{
    echo 'file not find';
 }
?>