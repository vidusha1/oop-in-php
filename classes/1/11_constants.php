<?php

echo  'PHP Version ' . phpversion();

class Employee{
    public const EPF_RATE  = 0.08;
    public $basic_salary = 50000;

    public function calc_salary(){
        return $this->basic_salary * self::EPF_RATE;
    }
}

$emp_1 = new Employee;
// each 'EPF Rate: ' . Employee::EPF_RATE;
echo '<br>';
echo $emp_1->calc_salary();

?>