<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./Styles/hospital.css">
	<title>Hospital</title>
</head>
<body>
	<?php
		include("header.php");
		if(isset($_COOKIE['username']) || isset($_COOKIE['username1']))
		{
	?>
	<script type="text/javascript">
		var logout=document.getElementById('logout');
		var loginNameContainer=document.getElementsByClassName('loginNameContainer')[0];
		logout.style.display="block";
		loginNameContainer.style.display="flex";
	</script>
	<?php
		}
	?>
	<main>
		<span class="HospitalPage">Hospital</span>
		<div class="container">

			<div class="addBloodInfo">Add Blood Information</div>
			<div class="viewRequest">View Request</div>
		</div>
	</main>

	<?php
		include("footer.html");
	?>
	<script type="text/javascript" src="./Js/hospital.js"></script>
</body>
</html>