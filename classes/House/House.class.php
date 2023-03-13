<?php 

namespace House;

class House{
    public $house;

    public function address(){
        return $this->house . '<br>';
    }
}

?>