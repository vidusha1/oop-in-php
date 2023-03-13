<?php

class Users extends DB{

    protected function get_user($name){
        $sql = "SELECT * FROM users WHERE first_name = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$name]);

        $result = $stmt->fetchAll();
        return $result;
    }

    public function set_users($first_name, $last_name, $email){
        $sql = "INSERT INTO users (first_name, last_name, email) VALUES(?, ?, ?)";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$first_name, $last_name, $email]);
        
    }

}

?>