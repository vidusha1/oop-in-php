<?php 

class UserController extends Users{
    
    public function create_user($first_name, $last_name, $email){
        $this->set_user($first_name, $last_name, $email);
    }
    
}

?>