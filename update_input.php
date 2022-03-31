<?php

$id = $_GET["id"];

$dept = $_GET["dept"];

$name = $_GET["name"];

$nid = $_GET["nid"];

$birth = $_GET["birth"];

$address = $_GET["address"];

?>



<h1>Update Record</h1>



<form method=get action=update_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>

	<p>

	dept: <input type=text name="dept"> <br>

	<p>
	
	name: <input type=text name="name"> <br>

	<p>
	
	nid: <input type=text name="nid"> <br>

	<p>
	birth: <input type=text name="birth"> <br>

<p>

address: <input type=text name="address"> <br>


	
	<input type=submit value=Update>

</form>
