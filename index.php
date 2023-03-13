<?php
// Strick Mode
declare(strict_types = 1);
require_once 'includes/autoloader.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Classes In PHP</title>
</head>
<body>
    <?php 

    $house1 = new House\House;
    $house1->house = 'Gulf Light';
    echo $house1->address();

    try{

        $person1 = new Person\Person;
        $person1->set_person('Vidusha');
        echo $person1->get_person();
    }catch(TypeError $e){
        echo 'Error' . $e->getMessage();
    }

    $person1 = new Person\Person;
    $person1->set_person('Vidusha');
    echo $person1->get_person();

    ?>
</body>
</html>