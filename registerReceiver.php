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
		$query="select * from receiver where receiver.username='{$username}'";
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
		$fisrtName=htmlentities($_POST['firstName']);
		$lastName=htmlentities($_POST['lastName']);
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$bloodType=$_POST['bloodType'];
		$email=$_POST['email'];
		$mobNo=$_POST['mobNo'];		
		$password=$_POST['password'];
		$forgotPassword=$_POST['forgotPasswordQno'];
		$answer=strtolower(htmlentities($_POST['answer']));

		if(userExists($username))
			$userExists=1;
		else
		{
			$query="insert into receiver values('{$username}','{$firstName} {$lastName}','{$gender}','{$dob}','{$bloodType}','{$email}','{$mobNo}','{$password}',{$forgotPassword},'{$answer}')";
			$res=runQuery($query);
			if(!$res)
	            $userExists=3;
	        else
	            $userExists=2;
	        header("Location:./loginReceiver.php");
		}
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./Styles/registerReceiver.css">
	<title>Register Receiver</title>
</head>
<body>
	<?php
		include("header.php");
	?>
	<div class="container">
			<div class="Rtitle">Receiver Registration</div>
			<form class="registrationForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<span class="label">Username</span>
				<input type="text" name="username" class="inputForm  username" id="usernameId">
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
				<span class="label">Full Name</span>
				<input type="text" name="firstName" class="inputForm firstName">
				<span class="wrong">Invalid First Name!</span>
				<!--  -->
				<span class="label">Last Name</span>
				<input type="text" name="lastName" class="inputForm lastName">
				<span class="wrong">Invalid Last Name!</span>
				<!--  -->
				<span class="label">Gender</span>
				<select name="gender" class="inputForm selectInp gender">
					<option class="option" value="M">Male</option>
					<option class="option" value="F">Female</option>
				</select>
				<!--  -->
				<span class="label">DOB</span>
				<input type="date" name="dob" class="inputForm dob">
				<span class="wrong">Invalid DOB!</span>
				<!--  -->
				<span class="label">Blood Type</span>
				<select name="bloodType" class="inputForm selectInp bloodType">
					<option class="option" value="A+">A+</option>
					<option class="option" value="A-">A-</option>
					<option class="option" value="B+">B+</option>
					<option class="option" value="B-">B-</option>
					<option class="option" value="AB+">AB+</option>
					<option class="option" value="AB-">AB-</option>
					<option class="option" value="O+">O+</option>
					<option class="option" value="O-">O-</option>
				</select>
				<!--  -->
				<span class="label">Email</span>
				<input type="email" name="email" class="inputForm email">
				<span class="wrong">Invalid Email!</span>
				<!--  -->
				<span class="label">Mobile No.</span>
				<input type="text" name="mobNo" class="inputForm mobNo">
				<span class="wrong">Invalid Mobile No.!</span>
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
				<span class="wrong">Invalid Details!</span>
			</form>
		</div>

	<!-- </main> -->
	<?php
		include("footer.html");
	?>
	<script type="text/javascript" src="./Js/registerReceiver.js"></script>
	<?php
		if(isset($_POST['register']))
		{
			//after form submission on focus event on wrong1 and display none
		?>
		<!-- <script type="text/javascript" src="./Js/afterForm.js"></script> -->
		<?php
		}
	?>
</body>
</html>