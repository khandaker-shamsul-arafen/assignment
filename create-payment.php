<!-- createPayment( payment_id, student_id, amount, date ) -->
<?php
    $student_id = $_GET['id'];
?>
    <h1>Payment</h1>
    <form action="create_payment_code.php" method="POST">
        <label>Student ID</label>  <br>
        <input name="student_id" readonly type="text" value=<?=$student_id?>> <br>
        
    </form>
    <br>
<?php
   
?>