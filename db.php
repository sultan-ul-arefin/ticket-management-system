<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'ticket';

session_start();
$connection = new mysqli($db_host, $db_username, $db_password, $db_name);
if (mysqli_connect_errno()) {
    $_SESSION['message'] = ("Could not connect to the database: <br />" . mysqli_connect_error());
}
mysqli_select_db($connection, $db_name);
