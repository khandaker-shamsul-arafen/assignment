<?php
    $id = $_POST['id'];
    $dept = $_POST['dept'] ;
    $title = $_POST['title'] ;
    $credit = $_POST['credit'] ;
    $syllabus = $_POST['syllabus'] ;

    //Database
    require_once "includes/dbcon.php";
    $query = "UPDATE course SET id='$id', dept='$dept', title='$title', credit='$credit', syllabus='$syllabus' WHERE id= $id";
    mysqli_query($conn,$query);
?>