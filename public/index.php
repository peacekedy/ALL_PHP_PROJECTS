<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root .'transaction_files'  . DIRECTORY_SEPARATOR);
define('VIEW_PATH', $root .'views'.DIRECTORY_SEPARATOR);

//your code (instruction in README.md)

require APP_PATH ."App.php";

 $files = getTransactionFiles(FILES_PATH);

   //var_dump($files);

   $transactions = [];
   foreach($files as $file){

    $transactions = array_merge($transactions, getTransaction($file, 'extractTransaction'));

   } 

   $total = calcuateTotal($transactions);
   //print_r($transactions);

require VIEW_PATH . 'transaction.php';



?>