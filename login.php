<?php
ob_start();
session_start();
include_once 'dbconfig.php';

if( isset($_POST['username']) ) {

	$username = $_POST['username'];
	$password = $_POST['password'];

  	$res=mysql_query("SELECT * FROM users WHERE username='$username'") or die(mysql_error());
  	$row=mysql_fetch_array($res);
  	$count = mysql_num_rows($res); 
  
  	if( $count == 1 && $row['password'] == $password ) {
  		$_SESSION['user'] = $row['id'];
   		header("Location: CrewMembers.php");
  	} else {
   		$errMSG = "Incorrect user or password";
   		header("Location: index.php?error=error");
  	}

}


?>