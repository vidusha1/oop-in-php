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

}

$my_product = new Computer;
$my_product->product_name = 'HP';
$my_product->cost_price = 15000;
$my_product->calculate_sales_price();
var_dump($my_product);
$my_array = get_object_vars($my_product);
print_r($my_array);

?>