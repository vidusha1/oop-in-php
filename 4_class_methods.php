<?php

class Employee{

    function greed(){
        return 'Vidusha Wijekoon';
    }

    function get_basic_salary(){

    }
}

$emp_1 = new Employee;
echo $emp_1->greed();

//get_class_methods
$class_methods = get_class_methods('Employee');
echo '<pre>';
print_r($class_methods);
echo '</pre>';

$method_exists = method_exists('Employee', 'greed');
if($method_exists){
    echo 'method already used';
}else{
    echo 'method not in use';
}

echo '<br>';

$method_exists1 = method_exists('Employee', 'name');
if($method_exists1){
    echo 'method already used';
}else{
    echo 'method not in use';
}

?>