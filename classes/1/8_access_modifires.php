<?php

class Employee{

    public $short_name = 'Razor';
    private $emp_id = 112;
    protected $salary = 2800;

    protected  function employee_info(){
        echo '<br>';
        echo 'Short Name:' . $this->short_name . '<br>';
        echo 'Emp ID:' . $this->emp_id . '<br>';
        echo 'Salary:' . $this->salary . '<br>';
    }
}

class FullTimeEmployee extends Employee{

    public function call_employee_info(){
        $this->employee_info();
    }
}

$emp = new Employee;
echo $emp->short_name = 'Vidusha';
// echo $emp->emp_id = 112;
// echo $emp->salary = 2800;
// echo $emp->employee_info();

$emp2 = new  FullTimeEmployee;
echo $emp2->call_employee_info();

?>