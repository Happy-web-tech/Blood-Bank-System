<?php

	require("./Database/dbConnection.php");

	$userExists=0;
	// user exits -> 1

	function runQuery($query)
	{
		GLOBAL $con;
		$res=mysqli_query($con,$query);
		return $res;
	}

	function userExists($username)
	{
		$query="select * from hospital where hospital.hospitalName='{$username}'";
		$res=runQuery($query);
		$noOfRows=mysqli_num_rows($res);
		if($noOfRows==0)
			return false;
		else
			return true;
	}

	if (isset($_POST['register']))
	{
		$username=htmlentities($_POST['username']);
		$password=$_POST['password'];
		$forgotPassword=$_POST['forgotPasswordQno'];
		$answer=strtolower(htmlentities($_POST['answer']));

		if(userExists($username))
			$userExists=1;
		else
		{
			$query="insert into hospital values('{$username}','{$password}',{$forgotPassword},'{$answer}')";
			$res=runQuery($query);
			if(!$res)
	            $userExists=3;
	        else
	            $userExists=2;
	        header("Location:./loginHospital.php");
		}
	}
	
?>

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
	<!-- <main class="mainPart"> -->

		<div class="container">
			<div class="Rtitle">Hospital Registration</div>
			<form class="registrationForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<span class="label">Username</span>
				<input type="text" name="username" class="inputForm  username" id="usernameId">
				<span class="note">Note: Hospital name is your username</span>
				<?php 
					if($userExists==1)
					{
				 ?>
						<span class="wrong1">Username already exits!</span>
						<!-- wrong1 after form submission  span created only afetr php submit-->
					<?php
					} 
					else if($userExists==3)
					{
				 ?>

					<span class="wrong1">Invalid Username!</span>

				<?php 
					}
				 ?>
				 <span class="wrong">Invalid Username!</span>
				<!--  -->
				<span class="label">Password</span>
				<input type="password" name="password" class="inputForm password">
				<span class="wrong">Invalid Password!</span>
				<!--  -->
				<span class="label"> Confirm Password</span>
				<input type="password" name="confirmPassword" class="inputForm confirmPassword">
				<span class="wrong">Passwords must be same!</span>
				<!--  -->
				<span class="label forgotPassword">Security Question</span>
				
				<select name="forgotPasswordQno" class="inputForm selectInp">
					<option class="option" value="1">What was your childhood nickname?</option>
					<option class="option" value="2">What is your favorite game?</option>
					<option class="option" value="3">Who is your childhood sports hero?</option>
				</select>

				<input type="text" name="answer" class="inputForm answerPassQ">
				<span class="wrong">Invalid answer!</span>
				<!--  -->
				<input type="submit" name="register" value="Register" class="registerButton">
				<span class="wrong">Invalid username or password!</span>
			</form>
		</div>

	<!-- </main> -->
	<?php
		include("footer.html");
	?>
	<script type="text/javascript" src="./Js/registerHospital.js"></script>
	<?php
		if(isset($_POST['register']))
		{
			//after form submission on focus event on wrong1 and display none
		?>
		<script type="text/javascript" src="./Js/afterForm.js"></script>
		<?php
		}
	?>
</body>
</html>