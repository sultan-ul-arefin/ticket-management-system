<?php

if (isset($_POST['vehicleedit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $seat = $_POST['seat'];
    $coach = $_POST['coach'];
}
if (!empty($name) && !empty($type) && !empty($seat) && !empty($coach)) {
    require('db.php');
    $UPDATE = "UPDATE vehicle_info SET name = '$name', type = '$type', seat = '$seat', coach = '$coach' WHERE id=$id";
    // echo "$UPDATE";
    $result =  mysqli_query($connection, $UPDATE);
    $_SESSION['message'] = "Vehicle Information Updated Successfully Done , Please See <a href=" . 'vechiclelist.php' . ">Vechicle list!</a>";
    $connection->close();
} else {
    $_SESSION['message'] = "Every field is required!";
}
