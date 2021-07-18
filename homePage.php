<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./Styles/homePage.css">
	<title>Home</title>
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
	<main class="mainPart">
		<content class="container">
			<div class="img"></div>
			<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>	
		</content>
		
	</main>
	<?php
		include("footer.html");
	?>

</body>
</html>