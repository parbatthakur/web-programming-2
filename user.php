<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<head>
<title>Log In</title>
<link rel="stylesheet" href="style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="script.js"></script>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['user'])){
	$usr=$_SESSION['user'];
	$_SESSION['lastactive']=time();
}
else{
	header('Location:index.php');
}
?>
<div id="wrap">
<div id="header">
<h3>Welcome <? echo $usr ?>&nbsp;&nbsp;&nbsp;<label id="logout"><a href="user.php?logout">Log Out</a></label></h3>
</div>
<div id="info">
<h3 id="heading">This is Heading</h3>
<p id="fontchange">Hello this is test. I am testing. I am tester. I couldn't figure out why I was not able to use onchange markup for javascript</p>
<h4>Configure your setting</h4>
	<form id="configuration" method="get">
		<label>Select Font Coulour</label><select id="fontcolours">
						<option value="red">Red</option>
						<option value="white">White</option>
						<option value="black">Black</option>
						<option value="purple">Purple</option>
					</select>
		<label>Select Font Size</label><select id="fontsize">
						<option value="one">1.1</option>
						<option value="two">1.3</option>
						<option value="three">1.5</option>
						<option value="four">1.7</option>
					</select>
		<label>Select Colour</label><select id="bgcolours">
						<option value="red">Red</option>
						<option value="white">White</option>
						<option value="green">Green</option>
						<option value="purple">Purple</option>
					</select>
	</form>
<?php
if(isset($_GET['logout'])){
	session_destroy();
	session_unset();
	header("Location: index.php");
}
if(isset($_POST['active'])){
	$_SESSION['lastactive']=time();
	unset($_POST['active']);
}
elseif(isset($_SESSION['lastactive']) &&(time()-$_SESSION['lastactive']>900)){
	session_unset();
	session_destroy();
}
?>
</div>
</div>
</body>