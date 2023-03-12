<?php 

class Employee{
    var $emp_id = 1000;
    var $first_name;
    var $last_name;
    var $is_active;
}

$employee_1 = new Employee;
$employee_2 = new Employee;


$employee_1->emp_id = 10;
$employee_1->first_name = 'Vidusha';
$employee_1->last_name = 'Wijekoon';

$employee_2->emp_id = 20;
$employee_2->first_name ='john';
$employee_2->last_name = 'doe';

echo 'Details of the employee 1';
echo '<br>';
echo 'Employee ID' . $employee_1->emp_id;
echo 'Employee Full Name: ' . $employee_1->first_name . " " . $employee_1->last_name;

echo '<br>';
echo 'Details of the employee 2';
echo '<br>'; 
echo 'Employee ID' . $employee_2->emp_id;
echo 'Employee Full Name: ' . $employee_2->first_name . " " . $employee_2->last_name;

echo '<br>'; 
// get_class_vars this function return array
$class_vars = get_class_vars('Employee');
var_dump($class_vars);
echo '<br>'; 
print_r($class_vars);

$object_vars = get_object_vars($employee_1);
echo '<pre>'; 
print_r($object_vars);
echo '<pre>'; 

$exists_properties = property_exists('Employee', 'first_name');
if($exists_properties){
    echo "First name has found in Employee Class";
}else{
    echo "First name not found in Employee Class";
}

?>