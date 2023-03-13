<?php 

class UsersView extends Users{
    
    public function show_user($name){
        $results = $this->get_user($name);
        echo 'Full Name: ' . $results[0]['first_name'];
        echo 'User Email: ' . $results[2]['email'];
    }
}

?>