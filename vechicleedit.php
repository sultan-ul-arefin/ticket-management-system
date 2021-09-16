<?php
include 'header.php';
include 'sidenav.php';
?>

<h1 style="text-align:center">Edit Vehicle Information</h1>

<div class="main">
    <div class="header">
        <?php include 'alart.php'; ?>
    </div>

    <div class="dashboard">
        <?php
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
        }
        require('db.php');
        $SELECT = "SELECT * FROM `vehicle_info` WHERE `id`=$id";
        $results = mysqli_query($connection, $SELECT);
        if (mysqli_num_rows($results) == 1) {
            $edit = mysqli_fetch_array($results);
            $name = $edit['name'];
            $type = $edit['type'];
            $seat = $edit['seat'];
            $coach = $edit['coach'];
        }
        ?>
        <form class="booking-form" action='response.php' method="POST">

            <label>Name of the vehicle</label>
            <input type="text" id="name" name="name" value="<?php echo $name ?>" placeholder="Eg.    Ena Paribahon" />

            <label>Type</label>
            <input type="text" id="type" name="type" value="<?php echo  $type ?>" placeholder="Eg.    BUS" />

            <label>Total Seat</label>
            <input type="text" id="seat" name="seat" value="<?php echo $seat ?>" placeholder="Eg.    40" />

            <label>Coach Type</label>
            <input type="text" id="coach" name="coach" value="<?php echo $coach ?>" placeholder="Eg.    AC/Non AC" />

            <input type="hidden" name="id" id="id" value="<?php echo $id ?>" />

            <div class="form-submit">
                <input type="submit" name="vehicleedit" id="vehicleedit" class="submit" value="Update" />
            </div>

        </form>
    </div>
</div>