<!DOCTYPE html>
<html lang="en">

<?php

	require("settings/core.php");

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
   
</head>

<body>

<?php
	//checking if the user is logged in.
	if (logged_in() == false){
?>
		<button type="button" onclick = "document.location= 'login/register.php'"><b>Register</b></button> 
	| 
		<button type="button" onclick = "document.location= 'login/login.php'"><b>Login</b></button>
<?php

	//checking if the user is an admin so they can access admin privileges.
	}else 
    { if ($_SESSION['user_role'] == 1) {	
?>
	<button type="button" onclick = "document.location= 'login/register.php'"><b>Register</b></button> 
	| 
	<button type="button" onclick = "document.location= 'login/logout.php'"><b>Logout</b></button>
	|
	<button type="button" onclick = "document.location= 'view/brandmgt.php'"><b>Brand</b></button>
<?php
    
}

else{ ?> 
	<button type="button" onclick = "document.location= 'login/logout.php'"><b>Logout</b></button> 
	| 
	<button type="button" onclick = "document.location= 'login/register.php'"><b>Register</b></button>	
<?php
}
    }
?>

<!-- 
<p><a href="../register/login/login.php" class="btn btn-primary btn-lg" role="button">Login</a></p>

<p><a href="../register/login/register.php" class="btn btn-primary btn-lg" role="button">Register</a></p>

<p><a href="../add_brand/view/brandmgt.php" class="btn btn-primary btn-lg" role="button">Brand</a></p>

<p><a href="../register/login/logout.php" class="btn btn-primary btn-lg" role="button">Logout</a></p> -->


</body>

</html>


	