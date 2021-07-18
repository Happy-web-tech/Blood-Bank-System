<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./Styles/registerHospital.css">
	<title>Register Hospital</title>
</head>
<body>
	<?php
		include("header.php");
	?>
	<main class="mainPart">

		<div class="container">
			<form class="registrationForm">
				<span class="note">Note: Hospital name is your username</span>
				<span class="label username">Username</span>
				<input type="text" name="username" class="input">
				<!--  -->
				<span class="label password">Password</span>
				<input type="text" name="password" class="input">
				<!--  -->
				<span class="label confirmPassword"> Confirm Password</span>
				<input type="text" name="confirmPassword" class="input">
				<!--  -->
				<span class="label forgotPassword">Security Question</span>
				
				<select>
					<option class="option" value="1">What was your childhood nickname?</option>
					<option class="option" value="2">What is your favorite game?</option>
					<option class="option" value="3">Who is your childhood sports hero?</option>
				</select>

				<input type="text" name="answer" class="input">
				<!--  -->
				<input type="submit" name="register" value="Register">
			</form>
		</div>

	</main>
	<?php
		include("footer.html");
	?>

</body>
</html>