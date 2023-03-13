<?php include_once 'includes/class-autoload.inc.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connect Using OOP-PDO</title>
</head>
<body>
    <?php
    
    // $test = new Test;
    // echo '<pre>';
    // $test->get_users();
    // echo '</pre>';

    // $test1 = new Test;
    // echo '<pre>';
    // $test1->get_users_stmt('Vidusha', 'Wijekoon');
    // echo '</pre>';
    
    // $test2 = new Test;
    // echo '<pre>';
    // echo $test2->set_users_stmt('John', 'Doe', 'vidusha.wijekoon11@gmail.com');
    // echo '</pre>';

    $users = new UsersView();
    $users->show_user('Vidusha');
    

    $create_user = new UserController();
    $create_user->create_user('same', 'daym', 'lifemake@happy.com');

    ?>
</body>
</html>