<?php

class Test extends DB{

    public function get_users(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connection()->query($sql);
        while($row = $stmt->fetch()){
            echo $first_name = $row['first_name'] . '<br>';
            echo $last_name= $row['last_name'] . '<br>';
            echo $email = $row['email'] . '<br>';
        }
    }

    public function get_users_stmt($first_name, $last_name){
        $sql = "SELECT * FROM users WHERE first_name = ? AND last_name = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$first_name, $last_name]);
        while($x = $stmt->fetch()){
            echo $x_first_name = $x['first_name'];
        }
    
    }

    public function set_users_stmt($first_name, $last_name, $email){
        $sql = "INSERT INTO users (first_name, last_name, email) VALUES(?, ?, ?)";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$first_name, $last_name, $email]);
    
    }
}

?>