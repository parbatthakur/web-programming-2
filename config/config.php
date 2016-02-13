<?php
function connect(){
	$con=mysqli_connect("localhost", "username", "password", "database");
	if(!con)
		die("Couldn't connect to mysql server");
	return($con);
}
function disconnect($con){
	mysqli_close($con);
}

?>
