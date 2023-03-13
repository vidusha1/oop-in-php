<?php

spl_autoload_register('auto_loader');

function auto_loader($classname){
    // $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL'];

    // if(strpos($url, 'includes') !== false){
    //     $path = '../classes/';
    // }
    // else{
    //     $path = './classes/';
    // }
    
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