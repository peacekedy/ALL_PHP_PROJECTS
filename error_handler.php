<?php

function handler(
    int $errno,
    string $errstr,
    string $errfile = null,
    int $errline = null,
    array $errcontext = null

){
   echo 'on number', $errno.':'. $errstr . 'in' . $errfile . 'on line' . $errline . $errcontext;

   exit;
}

error_reporting(E_ALL & ~E_WARNING);
set_error_handler('handler', E_ALL);

echo $X;

?>