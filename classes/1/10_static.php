<?php

class Employee{
    public static $employee_count = 0;

    public static function add_employee(){
        self::$employee_count++;
    }
}

class PartTimeEmployee extends Employee{

}

Employee::$employee_count = 11;
echo Employee::$employee_count;
echo '<br>';
Employee::add_employee();
echo Employee::$employee_count;
echo '<br>';
echo 'Number of Part time Employee Count' . PartTimeEmployee::$employee_count;
echo '<br>';
PartTimeEmployee::$employee_count = 22;
echo 'New of Part time Employee Count' . PartTimeEmployee::$employee_count;

?>