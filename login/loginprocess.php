<?php
require("../controllers/customer_controller.php");
require("../settings/core.php");
session_start();


$login_email = $_POST['login_email'];
$login_password = $_POST['login_password'];

// check whether function works
$login_check = login_customer_ctrl($login_email, $login_password);


if ($login_check == null) {
	echo "Login Failed";
	//header("Location: ../index.php");
}

else {
	echo "Login Successful";
	session_login ($login_check['customer_id'], $login_check['user_role']);
	header("Location: ../index.php");
}
?>
