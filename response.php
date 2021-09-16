<?php
include 'header.php';
if (isset($_POST['registration'])) {
    include './process/registration_process.php';
}
if (isset($_POST['login'])) {
    include './process/login_process.php';
}
if (isset($_POST['vehicle'])) {
    include './process/addvechicle_process.php';
}
if (isset($_POST['vehicleedit'])) {
    include './process/editvechicle_process.php';
}
if (isset($_GET['deletevechicle'])) {
    $id = $_GET['deletevechicle'];
    require('db.php');
    $DELETE = "DELETE FROM vehicle_info WHERE id=$id";
    mysqli_query($connection, $DELETE);
    $_SESSION['message'] = "Vehicle Information Deleted Successfully! , Please See <a href=" . 'vechiclelist.php' . ">Vechicle list!</a>";
}
?>
<h1 style="text-align:center">Result!</h1>
<div class="main">

    <div class="container">
        <div class="header">
            <?php include 'alart.php'; ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>