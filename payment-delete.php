<?php
    $payment_id = $_GET['id'];
    require "db_connect.php";
    $query = "DELETE FROM payment WHERE payment_id = $payment_id";
    mysqli_query($conn,$query);
?>