<?php
include 'header.php';
include 'sidenav.php';
?>
<h1 style="text-align:center">All Vehicle List</h1>
<div class="main">
    <div class="header">
        <?php include 'alart.php'; ?>
    </div>

    <div class="dashboard">
        <div class="booking-form">
            <?php
            require('db.php');
            $SELECT = "SELECT * FROM `vehicle_info`";
            $results = mysqli_query($connection, $SELECT);
            ?>

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Seat</th>
                        <th>Coach</th>
                        <th>From</th>
                        <th>To</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['seat']; ?></td>
                        <td><?php echo $row['coach']; ?></td>
                        <td><?php echo $row['startfrom']; ?></td>
                        <td><?php echo $row['endto']; ?></td>
                        <td>
                            <a class="link_submit_button" href="vechicleedit.php?edit=<?php echo $row['id']; ?>" style="padding: 5px;">Edit</a>
                        </td>
                        <td>
                            <a class="link_submit_button" href="response.php?deletevechicle=<?php echo $row['id']; ?>" style=" padding: 5px;">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>