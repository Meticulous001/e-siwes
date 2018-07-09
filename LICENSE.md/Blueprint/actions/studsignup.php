<?php
// Create connection
require('connection.php');

// Check connection


$fullname = $_POST['fullname'];
$email = $_POST['email'];
$passwrd = $_POST['password'];



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO studentsreg (fullname, 
								email,
								password) ".
		"VALUES ('$fullname',
				 '$email', 
				 '$passwrd')";
mysql_query($sql)
	or die(mysql_error());

echo "<script> alert('One step to go, kindly complete the form');window.location.href=('../studinfo.php')</script>";
?>