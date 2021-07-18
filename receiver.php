<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./Styles/receiver.css">
	<title>Receiver</title>
</head>
<body>
	<?php
		include("header.php");
		if(isset($_COOKIE['username1']) || isset($_COOKIE['username1']))
		{
	?>
	<script type="text/javascript">
		var logout=document.getElementById('logout');
		var loginNameContainer=document.getElementsByClassName('loginNameContainer')[0];
		logout.style.display="block";
		loginNameContainer.style.display="flex"
	</script>
	<?php
		}
	?>
	<main>
		<span class="ReceiverPage">Receiver</span>
		<div class="container">

			<div class="availableSamplesinReceiver">Available samples</div>
			<div class="RequestBlood">Request Blood</div>
		</div>
	</main>

	<?php
		include("footer.html");
	?>
	<script type="text/javascript" src="./Js/receiver.js"></script>
</body>
</html>