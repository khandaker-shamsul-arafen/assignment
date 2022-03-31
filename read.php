<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT dept ,batch FROM student" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo " <th>dept</th><th>name</th>  <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		 $id  ;
		echo "<td> $dept </td>";
		echo "<td> $name </td>";
		  $nid ;
		 $birth ;
		 $address;
		echo "<td> <a href = 'delete.php?id=$id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$id&f0=$f0&f1=$f1'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_input.php>CREATE  new record</a>";
?>