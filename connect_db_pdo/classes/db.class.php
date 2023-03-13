(<?php

class DB{
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpassword = '';
    private $dbname = 'test';

    protected function connection(){
        $dns = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname;
        $pdo = new PDO($dns, $this->dbuser, $this->dbpassword);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}

?>