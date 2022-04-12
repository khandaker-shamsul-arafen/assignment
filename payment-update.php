<h1>Update your Payment</h1>
<?php
require_once "db_connect.php";
$payment_id = $_GET['id'];
$query = "SELECT * FROM payment WHERE payment_id = $payment_id";
$result = mysqli_query($conn, $query);
?>
<form action="update_payment_code.php" method="post">
    <?php
    foreach ($result as $payment) {
    ?>
        <label>Payment Id</label> <br>
        <input readonly name="payment_id" value=<?=$payment['payment_id']?>> <br>
        <label>Student Id</label> <br>
        <input readonly name="student_id" value=<?=$payment['student_id']?>> <br>
        <label>Amount</label> <br>
        <input value=<?=$payment['amount']?> type="text" name="amount"> <br>
        <label>Payment Date</label> <br>
        <input name="payment_date" value=<?=$payment['payment_date']?> type="text"> <br>
        <button type="submit">Update</button>
</form>
<?php
    }
?>