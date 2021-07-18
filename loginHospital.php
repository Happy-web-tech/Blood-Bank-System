<?php
	require("./Database/dbConnection.php");

	$WRONG_PASSWORD = 0; 
    /*  0->Not set yet 
        1->not set  
        2->everyting perfect */
    
    $INVALID_USER = 0;

    ob_start();
    if(isset($_COOKIE['username']))
        header("Location:./hospital.php");

    function runQuery($query)
    {
        GLOBAL $con;
        $res = mysqli_query($con,$query);
        return $res;
    }

    function userExists($userName)
    {
        $query = "SELECT * from hospital where hospitalName='{$userName}'";
        $res = runQuery($query);
        $noOfRows = mysqli_num_rows($res);
        if($noOfRows == 0)
            return false;
        return true;
    }

    function checkPassword($userName, $password)
    {
        $query = "SELECT * from hospital where hospitalName='{$userName}'";

        $res = runQuery($query);

                
        $res = mysqli_fetch_assoc($res);

        if($res["password"] == $password)
            return true;
        else
            return false;
    }

    if(isset($_POST['login']))
    {
        $userName = htmlentities($_POST["username"]);
        $password = $_POST["password"];
        
        if(userExists($userName))
        {
            if(checkPassword($userName, $password))
            {
                //username1->cookie for receiver and username->cookie for hospital
                if(isset($_COOKIE['username1']))
                    setcookie("username1", "", time()-36000,"/");//it will logout receiver
                setcookie("username", $userName, time() + 3600*24, '/');
                $WRONG_PASSWORD = 2;
                $INVALID_USER = 2;
                header("Location:./hospital.php");
            }    
            else
            {
                $WRONG_PASSWORD = 1;             
            }          
        }
        else
        {
            $INVALID_USER = 1;
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./Styles/loginHospital.css">
	<title>Login</title>
</head>
<body>
	<?php
		include("header.php");
	?>
	
	<main class="parentContainer">
		<div class="container">
			<div class="welcome">Login Hospital</div>

			<!-- login form detalis -->

			<div class="loginForm">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form">
                	<span class="label">Username</span>
                	<input type="text" name="username" class="input username">

                	<span class="wrong">Invalid Username!</span>

                	<span class="label">Password</span>
                	<input type="password" name="password" class="input password">

                	<span class="wrong">Invalid Password!</span>

                	<span class="forgotPassword"><a href="forgotPassword.php">Forgot Password?</a></span>

                	<input type="submit" value="Login" name="login" class="loginButton">

                	<?php if($INVALID_USER==1 || $WRONG_PASSWORD==1 ): ?>
                    	<span class="incorrect visible">Incorrect Username or Password! Try Again!</span>
                	<?php else: ?>
                    	<span class="incorrect">Incorrect Username or Password! Try Again!</span>
                	<?php endif ?>
			
					<span class="registerLink"><a href="signUp.php">New User? Click Here</a></span>
				</form>
			</div>	
		</div>		
	</main>

	<?php
		include("footer.html");
	?>

	<script type="text/javascript" src="./Js/loginHospital.js"></script>
</body>
</html>