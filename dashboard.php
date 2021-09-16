<?php
include 'header.php';
include 'sidenav.php';
?>
<h1 style="text-align:center">Welcome To Dashboard</h1>
<div class="main">
    <div class="header">
        <?php include 'alart.php'; ?>
    </div>

    <div class="dashboard">
        <div class="booking-form">
            <table>
                <thead>
                    <tr>
                        <th>Booked Date</th>
                        <th>Booked Seat</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Seat</th>
                        <th>Coach</th>
                        <th>From</th>
                        <th>To</th>
                    </tr>
                </thead>

                <?php
                require('db.php');
                $SELECT = "SELECT * FROM `booking_info`";
                $results = mysqli_query($connection, $SELECT);
                while ($row = mysqli_fetch_array($results)) {
                    $booked_seatno = $row['booked_seatno'];
                    $booked_date = $row['booked_date'];
                ?>
                    <tr>
                        <td><?php echo $booked_date; ?></td>
                        <td><?php echo $booked_seatno; ?></td>
                        <?php
                        $vehicle_id = $row['vehicle_info'];
                        $SELECTVECHICLE = "SELECT * FROM vehicle_info WHERE id=$vehicle_id";
                        $vechiledata = mysqli_query($connection, $SELECTVECHICLE);
                        while ($vrow = mysqli_fetch_array($vechiledata)) {
                            $name =    $vrow['name'];
                            $type = $vrow['type'];
                            $seat = $vrow['seat'];
                            $coach = $vrow['coach'];
                            $from = $vrow['startfrom'];
                            $to = $vrow['endto'];
                        ?>


                            <td><?php echo $name; ?></td>
                            <td><?php echo $type; ?></td>
                            <td><?php echo $seat; ?></td>
                            <td><?php echo $coach; ?></td>
                            <td><?php echo $from; ?></td>
                            <td><?php echo $to; ?></td>
                    </tr>
            <?php
                        }
                    }

            ?>
            </table>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>