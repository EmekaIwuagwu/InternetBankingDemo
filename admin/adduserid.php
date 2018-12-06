<?php
require_once('inc/config.php');

$con = mysqli_connect($host, $user, $pass, $db) or die ('Cannot Connect : '.mysqli_error());

$Fullname = mysqli_real_escape_string($con,$_POST['Fullname']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$address2 = mysqli_real_escape_string($con,$_POST['address2']);
$Email = mysqli_real_escape_string($con,$_POST['Email']);
$telephone = mysqli_real_escape_string($con,$_POST['telephone']);
$dob = mysqli_real_escape_string($con,$_POST['dob']);
$userid = mysqli_real_escape_string($con,$_POST['userid']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$balance = mysqli_real_escape_string($con,$_POST['balance']);
$accountNo = mysqli_real_escape_string($con,$_POST['accountNo']);

$sql = "insert into customer_table (Fullname,address,address2,Email,telephone,dob,userid,password,balance,accountNo) values ('".$Fullname."','".$address."','".$address2."','".$Email."','".$telephone."','".$dob."','".$userid."','".$password."','".$balance."','".$accountNo."')";
mysqli_query($con,$sql) or die ('Failed Query: '.mysqli_error($con));
mysqli_close($con);

echo("<script language ='javascript'>window.alert('User Created!'); window.location.href='/';</script>");

?>