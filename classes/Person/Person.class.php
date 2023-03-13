<?php

namespace Person;

class Person{

    public $person_name;
    public $eye_color;
    public $age;

    public function set_person(string $new_name){
        $this->person_name = $new_name;
    }

    public function get_person(){
        return $this->person_name;
    }


}

?>