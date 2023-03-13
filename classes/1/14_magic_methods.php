<?php

class Employee{
    public function __construct(){
        echo 'New Employee Created... <br>';
    }
}

class PartTimeEmployee extends Employee{

}

$emp1 = new Employee;
$emp2 = new Employee;
$emp3 = new PartTimeEmployee;

?>