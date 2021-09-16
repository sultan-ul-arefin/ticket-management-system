<?php

if (isset($_POST['vehicle'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $seat = $_POST['seat'];
    $coach = $_POST['coach'];
    $startfrom = $_POST['startfrom'];
    $endto = $_POST['endto'];
}
if (!empty($name) && !empty($type) && !empty($seat) && !empty($coach) && !empty($startfrom) && !empty($endto)) {
    require('db.php');
    $INSERT = "INSERT INTO `vehicle_info` (`id`, `name`, `type`, `seat`, `coach`, `startfrom`, `endto`) VALUES (NULL, '$name', '$type', '$seat', '$coach', '$startfrom', '$endto')";
    $result =  mysqli_query($connection, $INSERT);
    $_SESSION['message'] = "Insert Vehicle Information Successfully Done , Please See <a href=" . 'vechiclelist.php' . ">Vechicle list!</a>";
    $connection->close();
} else {
    $_SESSION['message'] = "Every field is required!";
}
