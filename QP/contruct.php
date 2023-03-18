<?php

class Product
{
    public $mytime = '';
    public $dbname = '';
    public $hostname = '';

    function __construct($mytime, $dbname, $hostname)
    {
        $this->mytime = time();
        echo $this->hostname = $hostname;
        echo $this->dbname = $dbname;
        echo 'Time is: ' . $this->mytime . '<br>';
    }

    function __destruct()
    {
        echo 'Instance Destroyed <br>';
    }
}

$pro1 = new Product('now()', 'localhost', 'myfb');
