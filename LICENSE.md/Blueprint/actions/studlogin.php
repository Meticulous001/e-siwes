<?php
session_start();
require('connection.php');
$email = $_POST['email'];
$password = $_POST['password'];


//exit($id);


$sql = mysql_query("SELECT * FROM `studentsinfo` WHERE `email` = '$email' AND `password`= '$password'") or die(mysql_error());
$row = mysql_fetch_assoc($sql);
if ($row) {
	$_SESSION['ID'] = $row['ID'];
	$_SESSION['fullname'] = $row['fullname'];
	$_SESSION['institution'] = $row['institution'];
	$_SESSION['matricNo'] = $row['matricNo'];
	$_SESSION['course'] = $row['course'];
	$_SESSION['faculty'] = $row['faculty'];
	$_SESSION['company'] = $row['company'];
	$_SESSION['level'] = $row['level'];
	$_SESSION['studID'] = $row['studID'];
	header("location:../studentsportal.php");
}
else{
	echo  "<script> alert('invalid login'); window.location.href=('../index.php') </script>";
}

?>