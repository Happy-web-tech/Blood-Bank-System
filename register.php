<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./Styles/register.css">
	<title>Register</title>
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
		<div class="container">
			<div class="loginTitle">Register For</div>
			<div class="hospitalLogin">Hospital</div>
			<div class="receiverLogin">Receiver</div>
		</div>
	</main>

	<?php
		include("footer.html");
	?>

	<script type="text/javascript" src="./Js/register.js"></script>
</body>
</html>