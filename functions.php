<?php
require_once('config/config.php');
	
	function fetchWithQuery($query){
         $con = connect();
         $result = mysqli_query($con, $query);
	 disconnect($con);
	return $result;
        }
        
    function selectUserWithUserName($username){
    	$query = "Select * from Users where Users.Users_name = '".$username."'";
    	$result = fetchWithQuery($query);
    	$rows = $result->num_rows;
    	if($rows == 0)
    		return false;
    	else 
    		return mysqli_fetch_assoc($result);
    }
    
    function authenticateUser($username, $password){
    	$user = selectUserWithUserName($username);
    	if(!$user)
    		return false;
    	else if($user['Password'] != $password)
    		return false;	
    	return $user;
    }
?>