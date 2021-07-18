<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="bloodbank";

	$con=mysqli_connect($host,$user,$password,$db);

	if(!$con)
	{
?>
	<script type="text/javascript">
		alert("Error: Unable to connect to the Database");
	</script>
<?php
	}
?>