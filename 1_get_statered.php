<?php 

class Employee{

}

echo"<pre>";
print_r($classes = get_declared_classes());
echo"</pre>";

$class_name = 'Customer';

if(class_exists("Employee")){
    echo "This class ". $class_name ." already exsists";
}else{
    echo "no details" . $class_name . "are available";
}

?>