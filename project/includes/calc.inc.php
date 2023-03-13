<?php

require_once 'class_autoload.php';
require_once '../classes/Calc.class.php';

$oper = $_POST['oprt'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$calcu = new  Calc($oper, (int)$num1, (int)$num2);
echo $calcu->calcutor();

?>