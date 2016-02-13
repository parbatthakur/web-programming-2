<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Log In</title>
<link rel="stylesheet" href="style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
<?php
	session_start();
	$msg="";
	require_once 'functions.php';
	if(isset($_POST['login'])){
		$user = authenticateUser($_POST['username'], $_POST['password']);
		if(!$user){
			$msg="No such User!";
		}
		else{
			$_SESSION["user"]=$_POST['username'];
			if(isset($_SESSION["user"])){
			header('Location:user.php');
			}
		}
	}
?>
<div id="login">
			<h1>Login</h1>
			<label class="<?php if($msg!="") { echo "error"; } ?>"><?php if($msg!="") { echo $msg; } ?></label>
			<form method="POST" id="login_form">
				<p>Username: <input type="text" name="username" size="25"></p>
				<p>Password: <input type="Password" name="password" size="25"></p>
				<input type="submit" value="Login" name="login" class="button">
			</form>
		</div>
</body>
</html>