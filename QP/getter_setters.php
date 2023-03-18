<?php


class Database
{
    public $hostname = 'localhost';
    public $dbname = 'mydb';

    function __construct($hostname = 'localhost', $dbname = 'mydb')
    {
    }

    // except __construct and __decontruct must be public modifier
    public function __set($name, $value)
    {
        // echo 'Settings';
        $this->$name = $value;
    }

    public function __get($name)
    {
        // echo 'this property does not exists';
        // $this->$name = "N/A";
        // return $this->name;
        return  $this->get_data();
    }

    private function get_data()
    {
        $arr[] = array();
        $arr['id'] = 1;
        $arr['name'] = 'vidusha';
        $arr['age'] = 32;
        $arr['gender'] = 'male';

        $row[] = $arr;
        $arr[] = array();
        $arr['id'] = 2;
        $arr['name'] = 'vidusasdsadha';
        $arr['age'] = 3213;
        $arr['gender'] = 'male';

        $row[] = $arr;
        $arr[] = array();
        $arr['id'] = 3;
        $arr['name'] = 'adadvidusha';
        $arr['age'] = 23;
        $arr['gender'] = 'male';

        return $row;
    }
}

$db = new Database();
// $db->name = 'Vidusha Wijekoon';
var_dump($db->name);
