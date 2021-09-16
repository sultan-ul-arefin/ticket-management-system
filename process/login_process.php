<?php

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = MD5($_POST['password']);
}
if (!empty($email) && !empty($password)) {
    require('db.php');
    $SELECT = "SELECT * FROM `admin_account` WHERE `email` = '$email' AND `password` =  '$password' LIMIT 1";
    // to check email alrady register or not
    $record = mysqli_query($connection, $SELECT);
    if (mysqli_num_rows($record) == 1) {
        // check if email alrady register or not , if register then record == 1
        $_SESSION['message'] = "Successfully Login! Go to your <a href=" . 'dashboard.php' . ">Dashboard</a> !";
        $connection->close();
    } else {
        $_SESSION['message'] = "Please check your information and <a href=" . 'login.php' . ">login</a> agen!";
        $connection->close();
    }
} else {
    $_SESSION['message'] = "Every field is required!";
}
