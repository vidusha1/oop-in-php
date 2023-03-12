<?php

class Employee{
    private $basic_salary = 5000;

    public function set_basic_salary($new_salary){
        $this->basic_salary = $new_salary;
    }

    public function get_basic_salary(){
        return 'Basic Salary' . $this->basic_salary . '<br>';
    }
}

class FullTimeEmployee extends Employee{

}

$emp1 = new FullTimeEmployee;
echo $emp1->basic_salary = 100000;
echo '<br>';
echo $emp1->get_basic_salary();
echo '<br>';
$emp1->set_basic_salary(15000);
echo $emp1->get_basic_salary();
?>