<?php

$x = 100;
$y = & $x;

echo 'X value is: ' . $x . '<br>';
echo 'Y value is: ' . $y . '<br>';
echo '<hr>';


$y = 500;

echo 'X value is: ' . $x . '<br>';
echo 'Y value is: ' . $y . '<br>';
echo '<hr>';

class Product{
    public $description;
    public $price;

    public function __construct($desc, $price){
        $this->desc = $desc;
        $this->price = $price;
    }
}
 
$pro1 = new Product('Dell', 160000);
$pro2 = clone $pro1;
echo 'Product 1: ' . $pro1->desc . ' ' . '<br>';
echo 'Product 1: ' . $pro1->price . ' ' .  '<br>';
echo '<hr>';

$pro2 = new Product('Lenovo', 160000);
echo 'Product 1: ' . $pro2->desc . ' ' . '<br>';
echo 'Product 1: ' . $pro2->price . ' ' .  '<br>';
echo '<hr>';
?>