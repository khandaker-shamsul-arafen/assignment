<!-- Crate payment -->
<?php
    $student_id = $_GET['id'];
?>
    <h1>Payment</h1>
    <form action="create_payment_code.php" method="POST">
        <label>Student ID</label>  <br>
        <input name="student_id" readonly type="text" value=<?=$student_id?>> <br>
        <label>Amount</label>  <br>
        <input name="amount" type="text" placeholder="Enter Amount"> <br>
        <label>Date</label> <br>
        <input name="payment_date" type="date">  <br> <br>
        <button type="submit">Create Payment</button>
        
    </form>
    <br>
<?php
   
?>