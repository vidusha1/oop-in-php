<?php

function my_auto_load($classname){
    if(file_exists('class/' . $classname . '.class.php')){
        require_once('class/' . $classname . '.class.php');
    }else{
        echo 'class ' . $classname . 'not found';
    }
}

spl_autoload_register('my_auto_load');

$emp1 = new Employee('Vidusha');

?>