<?php

	$id = $_GET["id"];

	$dept = $_GET["dept"];
	
	$name = $_GET["name"];

	$nid = $_GET["nid"];

	$birth = $_GET["birth"];

	$address = $_GET["address"];
	
	


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");




	$id = $_GET["id"];
	mysqli_query( $connect, "INSERT INTO teacher VALUE ('$id ', '$dept', '$name', '$nid' , '$birth' , '$address')" )

		or die("Error");



	echo "Record inserted";


?>