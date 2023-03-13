<?php

class Employee
{
    public $employee_name;

    public function __construct($emp_name){
        $this->employee_name = $emp_name;
        return 'Employee {$this->employee_name} has been created...';
    }
}


?>