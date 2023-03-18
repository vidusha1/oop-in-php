<?php
# class and intentiation

# Blueprint / Mold / Pattern /  Factory for Object

use Product as GlobalProduct;

class Product
{
    // Properties -> Variables
    private $price = 2;
    public $qty = 2;
    private $color = 'green';
    // public static $total = 0;
    public static $total = 0;

    // Method -> funtions
    private static function calculate_total()
    {
        // $this->total = 10 * 20;
        // return $this->total;
        self::$total = 10 * 20;
    }

    public function generate_id()
    {
        return rand(1, 9999);
    }

    public function read()
    {
        self::calculate_total();
        return self::$total;
        // return $this->total;

    }
}

$book = new Product; // instantiation
// echo $book->calculate_total();
echo '<br>';
echo $book::$total;
echo '<br>';
echo $book->read();

// echo $book::$total;

// echo '<br>';
// echo Product::$total;

// echo 'Book: ' . $book->price;

// $book->calculate_total();

// $book = new Product; // instantiation
// echo 'Phone: ' . $book->price;

// $number = Product::$price;
// echo $number;
// $number = Product::generate_id();
// echo $number;
