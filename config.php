<?php

// Require the class files
spl_autoload_register(function($class_name)
{
    $filename = "class". DIRECTORY_SEPARATOR ."{$class_name}.php";
    
    if(file_exists($filename)){

        require_once($filename);
    
    }
});

// Show error logs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

