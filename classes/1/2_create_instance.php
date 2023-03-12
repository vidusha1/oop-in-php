<?php 

class Employee{

}

class Customer{

}

// Create instance
$vidusha = new  Employee;
$wijekoon = new  Employee;
$john = new  Customer;
// echo $john = new Customer 

echo "<br>";
// get_class method
// print_r(get_class($vidusha));
if(get_class($vidusha)){
    echo "Found" . "<br>";
}else{
    echo "Not Found !" . "<br>";
}
echo "<br>";

// is_a method
if(is_a($john, 'Customer')){
    echo " Belongs to Customer Class" . "<br>";
}else{
    echo "Not Belongs to the Customer Class" . "<br>";
}

?>