<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
<script type="text/javascript" src="js/view.js"></script>

</head>
<body id="main_body" >
	<img id="top" src="images/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Login Form</a></h1>
		<form id="formLogin" class="appnitro"  method="POST" action="login.php">
					<div class="form_description">
			<h2>Login Form</h2>
			<p>Please enter your credentials for accessing the system.</p>
			<?php 
				if ($_SESSION['message']) {
					echo $_SESSION['message'];
					unset($_SESSION['message']);
				} ?>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="username">Username </label>
		<div>
			<input id="username" name="username" class="element text medium" type="text" maxlength="255" value="<?php echo $_COOKIE['username'];?>"/> 
		</div><p class="guidelines" id="guide_1"><small>Please enter your username</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="password">Password </label>
		<div>
			<input id="password" name="password" class="element text medium" type="password" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_2"><small>Enter your password.</small></p> 
		</li>		<li id="li_3" >
		<label class="description" for="remember">&nbsp;</label>
		<span>
			<input id="remember" name="remember" class="element checkbox" 
			type="checkbox" <?php if ($_COOKIE['username']) {?> checked="checked" <?php } ?>value="1" />
<label class="choice" for="remember">Remember Me</label>

		</span><p class="guidelines" id="guide_3"><small>Click for save your username and password.</small></p> 
		</li>
			
					<li class="buttons">
				<button id="saveForm" class="button_text" type="submit" >Submit</button>
		</li>
			</ul>
		</form>	
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="images/bottom.png" alt="">
	</body>
</html>