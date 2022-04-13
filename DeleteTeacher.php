<?php

	$id = $_GET["id"];



	require_once('dbStudent_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM teacher WHERE id=$id" )

		or die("Can not execute query");



	echo "Record deleted<br>";



	echo "<p><a href=readTeacher.php>READ all records</a>";

?>