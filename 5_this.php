<?php

class Employee{
    public $first_name;
    public $last_name;

    function full_name(){
        return $this->first_name . ' ' . $this->last_name; 
    }
}

$emp1 = new Employee;

$emp1->first_name = 'Vidusha'; 
$emp1->last_name = 'Wijekoon';

echo $emp1->full_name();

?>