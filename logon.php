<?php

	session_start();
	require_once('inc/config.php');
	
	$con = mysqli_connect($host, $user, $pass, $db) or die ('Cannot connect: '.mysqli_error());
	
	$username = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	
	$sql = "select * from customer_table where userid='".$username."' and password='".$password."' ";
	$result = mysqli_query($con,$sql) or die ('Failed, Reason: '.mysqli_error($con));
	if(mysqli_num_rows($result)== 1)
	{
			$_SESSION['username'] = $username;
			header('Location: dashboard.php');
	}else
	{
		echo("<script language ='javascript'>window.alert('[Error 300 ]: Invalid username or Password!'); window.location.href='index.php';</script>");
	}


?>