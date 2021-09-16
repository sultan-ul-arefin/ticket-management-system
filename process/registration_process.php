<?php

if (isset($_POST['registration'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = MD5($_POST['password']);
}

if (!empty($email) && !empty($password) && !empty($first_name) && !empty($last_name)) {
    require('db.php');
    $SELECT = "SELECT * FROM `admin_account` WHERE `email` = '$email' LIMIT 1"; // to check email alrady register or not
    $record = mysqli_query($connection, $SELECT);
    if (mysqli_num_rows($record) != 1) {
        // check if email alrady register or not , if not register then record != 1
        $INSERT = "INSERT INTO `admin_account` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL, '$first_name', '$last_name', '$email', '$password')";
        // "INSERT INTO admin_account ( 'first_name', 'last_name' , 'email' , 'password') VALUES ('', '','','')";
        $result =  mysqli_query($connection, $INSERT);

        $_SESSION['message'] = "Registration Successfully Done , Please <a href=" . 'login.php' . ">Login!</a>";
        $connection->close();
        //  header('location: login.php');
    } else {
        $_SESSION['message'] = "Your email has already bean registered, Please <a href=" . 'login.php' . ">Login!</a>";
        $connection->close();
        // header('location: login.php');
    }
} else {
    $_SESSION['message'] = "Every field is required!";
}
