<?php 

spl_autoload_register('auto_load');

function auto_load($classname){
    $path = 'classes/';
    $extention = '.class.php';
    $full_path = $path . $classname . $extention;

    if(!file_exists($full_path)){
        return false;
    }

    include_once $path . $classname . $extention;
}

?>