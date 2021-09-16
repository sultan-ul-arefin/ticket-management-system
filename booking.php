<?php include 'header.php'; ?>
<h1 style="text-align:center">Make your booking done!</h1>
<div class="main">
    <?php
    if (isset($_GET['seats'])) {
        $seats = $_GET['seats'];
        if (isset($_GET['vechicleid'])) {
            $id = $_GET['vechicleid'];
            require('db.php');
            $SELECT = "SELECT * FROM vehicle_info WHERE id=$id";
            $record = mysqli_query($connection, $SELECT);
            if (mysqli_num_rows($record) != 0) {

                if (isset($_GET['quantity'])) {
                    if (isset($_GET['date'])) {
                        $date = new DateTime($_GET['date']);
                        $now = new DateTime();
                        if ($date < $now) {
                            $_SESSION['message'] = "Past Date Booking Not Permitted ! Please Try<a href=" . 'index.php' . ">Again!</a>";
                        } else {

                            while ($row = mysqli_fetch_array($record)) {
                                $name = $row['name'];
                                $type = $row['type'];
                                $seat = $row['seat'];
                                $coach = $row['coach'];
                                $startfrom = $row['startfrom'];
                                $endto = $row['endto'];

                                $seat = ($row['seat']) - ($_GET['quantity']);
                                if ($seat > 0) {
                                    // all validation check successfully
                                    // seat is abalible
                                    $bookedSeat = ($_GET['quantity']);
                                    $bookedDate = ($_GET['date']);

                                    $INSERT = "INSERT INTO `booking_info` (`id`, `booked_seatno`, `booked_date`, `vehicle_info`) VALUES (NULL, '$bookedSeat', '$bookedDate', '$id')";
                                    if (mysqli_query($connection, $INSERT)) {
                                        $latest_id =  mysqli_insert_id($connection);
                                    }

                                    // $UPDATE = "UPDATE vehicle_info SET seat = '$seat' WHERE id=$id";
                                    // mysqli_query($connection, $UPDATE);

                                    $_SESSION['message'] = "Your seat is booked successfully! Go Back to <a href=" . 'index.php' . ">Home!</a>";

                                    $SELECT = "SELECT * FROM booking_info WHERE id=$latest_id";
                                    $record = mysqli_query($connection, $SELECT);
                                    if (mysqli_num_rows($record) != 0) {
                                        while ($row = mysqli_fetch_array($record)) {

                                            $ticketid = $row['id'];
                                            $booked_seatno = $row['booked_seatno'];
                                            $booked_date = $row['booked_date'];
                                        }
                                    }
                                } else {
                                    $_SESSION['message'] = "All seat are booked !  Please try<a href=" . 'index.php' . ">Again!</a>";
                                }
                            }
                        }
                    } else {
                        $_SESSION['message'] = "Booking Date Not Found !  Please try<a href=" . 'index.php' . ">Again!</a>";
                    }
                } else {
                    $_SESSION['message'] = "Quantity Not Found !  Please try<a href=" . 'index.php' . ">Again!</a>";
                }
            } else {
                $_SESSION['message'] = "No Vehicle Information Found at Database !  Please try<a href=" . 'index.php' . ">Again!</a>";
            }
        } else {
            $_SESSION['message'] = "Vehicle ID Not Found !  Please try<a href=" . 'index.php' . ">Again!</a>";
        }
    } else {
        $_SESSION['message'] = "Please Select minimum one seat for booking !  Please try<a href=" . 'index.php' . ">Again!</a>";
    }

    ?>

    <div class="container">
        <div class="header">
            <?php include 'alart.php'; ?>

            <?php

            echo    "<div id='printTicket' class='fuselage'>";
            echo "Your booking Information <br>";
            echo "<ul>";

            echo "<li> Vehicle Name : " . $name . "</li>";
            echo "<li> Vehicle type : " . $type . "</li>";
            echo "<li> Vehicle coach : " . $coach . "</li>";
            echo "<li> Start Point : " . $startfrom . "</li>";
            echo "<li> Destination : " . $endto . "</li>";
            echo "<li> Booked Date : " . $booked_date . "</li>";
            echo "<li> Total Seat : " . $booked_seatno . "</li>";
            echo "<li> Booking Date : " . $bookedDate . "</li>";
            echo "<li> Booking Id : " . $ticketid . "</li>";
            echo "<li> Booking seat No :";
            foreach ($seats as $seat) {
                echo "<li style='margin-left: 20px;'>" . $seat . "</li>";
            }
            echo "</li>";

            echo "</ul>";
            echo "</div>";


            ?>
            <div>

                <div class="form-submit">
                    <input type="button" class="submit" value="Print Your Ticket" onclick="printTicket();" />
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
        function printTicket() {
            var divToPrint = document.getElementById('printTicket');
            var popupWin = window.open('', '_blank', 'width=500,height=800');
            popupWin.document.open();
            popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
        }
    </script>
    <?php include 'footer.php'; ?>