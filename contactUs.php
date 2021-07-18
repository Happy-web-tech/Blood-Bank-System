<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./Styles/contactUs.css">
	<title>Contact Us</title>
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
		<content class="contactUsContent">
			This Web Application is developed by Hradyesh Singh.
		</content>
	</main>

	<?php
		include("footer.html");
	?>
</body>
</html>