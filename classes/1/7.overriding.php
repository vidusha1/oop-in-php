<?php
class Product{
 var $product_name;
 var $cost_price;
 var $sales_price;
 var $category = 'General';

 function display(){
    echo 'Product Info: <br>';
    echo 'Name of the product: <b>' . $this->product_name . '<b><br>';
    echo 'Sales Price: <b>' . $this->sales_price . '<b><br>';
    echo 'Sales Price: <b>' . $this->category . '<b><br>';
} 
}

class Computer extends Product{
    var $processor;
    var $hard_disk;
    var $ram;
    var $category = 'Computer';
    
    function display(){
        echo 'Product Info: <br>';
        echo 'Name of the product: <b>' . $this->product_name . '<b><br>';
        echo 'Sales Price: <b>' . $this->sales_price . '<b><br>';
        echo 'Sales Price: <b>' . $this->processor . '<b><br>';
        echo 'Sales Price: <b>' . $this->hard_disk . '<b><br>';
        echo 'Sales Price: <b>' . $this->ram . '<b><br>';
        echo 'Sales Price: <b>' . $this->category . '<b><br>';
 }
}

$general_product = new Product;
$general_product->product_name = 'Table';
$general_product->cost_price = 5000;
$general_product->sales_price = 5000;

$general_product->display();

$computer = new Computer;
$computer->product_name = 'Macbook Pro';
$computer->cost_price = '150000';
$computer->sales_price = '150000';
$computer->processor = 'Intel';
$computer->hard_disk = '256GB';
$computer->ram = '8GB';

$computer->display();

?>