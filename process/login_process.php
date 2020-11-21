<?php

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}
if (!empty($email) && !empty($password)) {
    require('../db.php');
    $SELECT = "SELECT `email` FROM admin_account WHERE `email` = `$email` LIMIT 1"; // to check email alrady register or not
    if ($statement = $connection->prepare($SELECT)) {
        $statement->execute();
        echo $statement;
        if ($statement->num_rows == 0) {
            // check if email alrady register or not , if register then row != 0
            echo "Email not found , Please Register First!";
        } else {
        }
    }
}
