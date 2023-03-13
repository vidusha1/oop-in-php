<?php

class Employee {
    public function calc_salary(){
        echo 'Calculate Salary....<br>';
    }
}

class SeniorEmployee extends Employee{
    public function calc_salary(){
        echo 'Add Additional Allowance...<br>';
        parent::calc_salary();
    }
}

$emp1 = new SeniorEmployee;
$emp1->calc_salary();

?>