<?php

class Product{
    public static $categoty = "General Product";

    public static function show_category(){
        echo 'Product Category ' . static::$categoty . '<br>';
    }
}

class Computer extends Product{
    public static $categoty = 'Computer';
}

Product::show_category();
Computer::show_category();

?>