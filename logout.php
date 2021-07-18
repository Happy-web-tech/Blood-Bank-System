<?php
    
    setcookie("username", "", time()-36000,"/");
    setcookie("username1", "", time()-36000,"/");
    header("Location:login.php");
?>