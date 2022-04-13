<?php
	require_once('dbStudent_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM teacher" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>dept</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $dept </td>";
		echo "<td> <a href = 'deleteTeacher.php?id=$id'> Delete </a> </td>";
		echo "<td> <a href = 'updateTeacher_input.php?id=$id&dept=$dept'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=createTeacher_input.php>CREATE a new record</a>";
?>