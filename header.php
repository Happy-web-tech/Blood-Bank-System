<header>
	<link rel="stylesheet" type="text/css" href="./Styles/header.css">
	<div class="headerContainer">
		<div class="part1">
			<div class="bloodImg">
			</div>
			<div class="title"><h1>Blood Bank</h1></div>
		</div>

		<div class="part2">
			<nav class="home">Home</nav>	
			<nav class="login">Log in</nav>	
			<nav class="register">Register</nav>	
			<nav class="availableSamples">Available Blood Samples</nav>
			<nav class="contactUs">Contact Us</nav>
			
			<form action="logout.php" method="POST" class="logoutForm">
				<input type="submit" value="Logout" id="logout">
			</form>
		</div>
		<div class="loginNameContainer">
			<div class="loginImg"></div>
			<div class="welcomeUser">
				<?php
					if(isset($_COOKIE['username']))
						echo $_COOKIE['username'];
					else if(isset($_COOKIE['username1']))
						echo $_COOKIE['username1'];
					else
						echo "";
				?>
			
			</div>
		</div>


	</div>
	<script type="text/javascript" src="./Js/header.js"></script>
</header>