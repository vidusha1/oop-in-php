<?php

spl_autoload_register('myAutoLoad');

function myAutoLoad($classname){
    $path = 'classes/';
    $extension = '.class.php';
    $full_path = $path . $classname . $extension;

    // Error Handler
    if(!file_exists($full_path)){
        return false;
    }

    require_once $full_path;

}


?>