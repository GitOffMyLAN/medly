<?php
	$con = mysql_connect("localhost","root","");
	if(! $con)
	{
    die('Connection Failed'.mysql_error());
	}
	$email = $_POST['user_email'];
	$username = $_POST['user_name'];
	$password = $_POST['user_password'];
	session_start();
	//The session will start and I will set some varibles
?>
