<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./Styles/login.css">
	<title>Login</title>
</head>
<body>
	<?php
		include("header.php");
		//if cookie is set show logout and username
		//it is showing user is currently logged in
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
			<div class="loginTitle">Login AS</div>
			<div class="hospitalLogin">Hospital</div>
			<div class="receiverLogin">Receiver</div>
		</div>
	</main>
	<?php
		include("footer.html");
	?>

	<script type="text/javascript" src="./Js/login.js"></script>
</body>
</html>