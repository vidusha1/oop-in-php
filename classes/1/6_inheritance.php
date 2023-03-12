<?php

class Product{
 public $product_name;
 public $cost_price;
 public $sales_price;

 function calculate_sales_price(){
    return $this->sales_price = round($this->cost_price * 1.2, 2);
 }
}

class Computer extends Product{
 public $model;
 public $speed;
 public $hard_disk;
 public $ram;
}

class MobilePhone extends Computer{

}

class Garment extends Product{

}


$my_product = new Computer;
$my_product->product_name = 'HP';
$my_product->cost_price = 15000;
$my_product->calculate_sales_price();
$my_product->model = 'Elitebook 840 G5';
$my_product->processor = 'Intel';
$my_product->speed = '2.40Ghz';
$my_product->hard_disk = '256GB';
$my_product->ram = '8GB';

$my_garment = new Garment;

var_dump($my_product);
$my_array = get_object_vars($my_product);
echo '<pre>';
print_r($my_array);
echo '</pre>';

echo get_parent_class($my_product);
echo '<br>';
echo get_parent_class($my_garment);
echo '<br>';

if(is_subclass_of('Computer', 'Product')){
    echo 'is subclass <br>';
}else{
    echo 'no a subclass <br>';
}

if(is_subclass_of('Something', 'Product')){
    echo 'is subclass <br>';
}else{
    echo 'no a subclass <br>';
} 

print_r(class_parents('Computer'));
echo '<br>';
print_r(class_parents('MobilePhone'));
echo '<br>';
?>