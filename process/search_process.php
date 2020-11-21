<?php 

if(isset($_POST['submit'])){
    $destination = $_POST['destination'];
    $date_from = $_POST['date_from'];
    $date_to = $_POST['date_to'];
    $quantity = $_POST['quantity'];
}
    echo "<div style='text-align: center;'>";
    echo "<h2>Your destination - ".$destination. "!</h2>"; 
    echo "<h4>Start Date - ".$date_from. "!</h4>"; 
    echo "<h4>End Date - ".$date_to. "!</h4>"; 
    echo "<h4>Seat quantity - ".$quantity. "!</h4>"; 
    echo "</div>";
