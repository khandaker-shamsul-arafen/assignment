<?php
    $id = $_POST['id'] ;
    $dept = $_POST['dept'] ;
    $title = $_POST['title'] ;
    $credit = $_POST['credit'] ;
    $syllabus = $_POST['syllabus'] ;

    //Database
    require_once "includes/dbcon.php";
    $query ="INSERT INTO course (id,dept,title,credit,syllabus) VALUES ('$id','$dept','$title','$credit','$syllabus')";
    mysqli_query($conn,$query);
    header("location:index.php")
?>