<?php

	$dept = $_GET["dept"];
	$name = $_GET["name"];
    $nid = $_GET["nid"];
    $birth = $_GET["birth"];
    $address = $_GET["address"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO teacher VALUES ( '', '$dept', '$name' ,'$nid', '$birth' , '$address')" )

		or die("Can not execute query");



	echo "Record inserted:<br> dept = $dept <br> name = $name <br> nid= $nid <br> birth= $birth <br> address = $address ;



	echo "<p><a href=readTeacher.php>READ all records</a>";
  
    

?>