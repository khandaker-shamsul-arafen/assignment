<?php
    $payment_id = $_POST['payment_id'];
    $student_id = $_POST['student_id'];
    $amount = $_POST['amount'] ;
    $payment_date = $_POST['payment_date'] ;
    
    require_once "db_connect.php";
    $query = "UPDATE payment SET payment_id='$payment_id', payment_id='$payment_id',amount='$amount',payment_id='$payment_id' WHERE payment_id= $payment_id";
    mysqli_query($conn,$query);
?>
