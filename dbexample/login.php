<?php
require "config/db.php";

// check you have get the data from user.

if (!empty($_POST['username']) &&  !empty($_POST['password'])) {
	extract($_POST);
	$userName = $username;
	$userPassword = md5($password);

	try {
		// Get users details according to the username and passwords.
		$sql = "SELECT * FROM " .USERS. "
				WHERE `username` = '" .$userName. "' AND 
				`password` = '" .$userPassword. "'";

		$result = mysql_query($sql);
		$userDetails =  mysql_fetch_assoc($result);
		if (!$userDetails) {
			$_SESSION['message'] = "<p style='color:red;'>We applogies for this but we are not found any account associated with this credentials.
			Please enter valid credentials for accessing your account.</p>";
		} else {

			if ($_POST['remember'] == 1) {
				setcookie("username",$userDetails['username'],time()+3600*24*30);
			} else {
				setcookie("username","",time()-3600);
			}
			// setting user details in seesion for future use.
			$_SESSION['user'] = array();
			$_SESSION['user']['username'] = $userDetails['username'];
			@header("Location:dashboard.php");
			exit;			
		}
	} catch (Exception $e) {
		$_SESSION['message'] = "<p style='color:red;'>".$e->getMessage()."</p>";
	}
} else {
	$_SESSION['message'] = "<p style='color:red;'>Enter valid username and password for access the system</p>";
} 

// redirect back to login if we found any error message.
if ($_SESSION['message']) {
	@header("Location:index.php");
	exit;
}