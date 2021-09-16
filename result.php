<?php include 'header.php'; ?>
<h1 style="text-align:center">Search Results</h1>
<div class="main">
    <div class="container">

        <?php
        if (isset($_POST['search'])) {
            $from = $_POST['from'];
            $to = $_POST['to'];
            $date = $_POST['date'];
            $quantity = $_POST['quantity'];
        }
        if (!empty($from) && !empty($to)) {
            if (!empty($date)) {
                $datecheck = new DateTime($date);
                $now = new DateTime();
                if ($datecheck < $now) {
                    $_SESSION['message'] = "Past Date Booking Not Permitted ! Please Try<a href=" . 'index.php' . ">Again!</a>";
                } else {
                    if ($quantity > 0) {
                        // form validation success
                        require('db.php');
                        $SEARCH = "SELECT * FROM `vehicle_info` WHERE `startfrom` = '$from' AND `endto` = '$to'"; // to check email alrady register or not
                        $record = mysqli_query($connection, $SEARCH);
                        if (mysqli_num_rows($record) > 0) {
                            while ($row = mysqli_fetch_array($record)) { ?>
                                <div class="content_container">
                                    <div class="element"><span class="element-left">Vehicle Name:</span><span class="element-right"> <?php echo $row['name']; ?></span></div>
                                    <div class="element"><span class="element-left">Vehicle Type:</span><span class="element-right"> <?php echo $row['type']; ?></span></div>
                                    <!-- <div class="element"><span class="element-left">Avableable Seat:</span><span class="element-right">
                                         <?php echo $row['seat']; ?>
                                        
                                    </span></div> -->
                                    <div class="element"><span class="element-left">Coach Type:</span><span class="element-right"> <?php echo $row['coach']; ?></span></div>
                                    <div class="element"><span class="element-left">Start From:</span><span class="element-right"> <?php echo $row['startfrom']; ?></span></div>
                                    <div class="element"><span class="element-left">Destination:</span><span class="element-right"> <?php echo $row['endto']; ?></span></div>
                                    <div class="link_submit">
                                        <a class="link_submit_button" href="seat.php?vechicleid=<?php echo $row['id']; ?>&quantity=<?php echo $quantity; ?>&date=<?php echo $date; ?>">Choose Seat!</a>
                                    </div>
                                </div>
        <?php
                            }
                        } else {
                            $_SESSION['message'] = "No Results found for booking, Please Try <a href=" . 'index.php' . "> Again!</a>";
                        }
                    } else {
                        $_SESSION['message'] = "You must have to select one seat for booking, Please Try <a href=" . 'index.php' . "> Again!</a>";
                    }
                }
            } else {
                $_SESSION['message'] = "Select a date for booking, Please Try <a href=" . 'index.php' . "> Again!</a>";
            }
        } else {
            $_SESSION['message'] = "Destination is required, Please Try <a href=" . 'index.php' . "> Again!</a>";
        }

        ?>
        <div class="header">
            <?php include 'alart.php'; ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>