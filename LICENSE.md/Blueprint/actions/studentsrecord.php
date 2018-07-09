<?php
// Create connection
require('connection.php');




$studID = 	$_POST['studID'];
$fullname = $_POST['fullname'];
$section = $_POST['section'];
$week = $_POST['week'];
$description = $_POST['description'];
$remark = "pending";
$date = date('d-m-Y');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = mysql_query("INSERT INTO `studentsrecord` (`studID`, `fullname`, 
								`section`,`week`,`description`, `remark`,
								`date`)
		VALUES ('$studID', '$fullname',
				 '$section', 
				 '$week','$description', '$remark', '$date')")
	or die(mysql_error());

echo "<script> alert('Record upload successful');window.location.href=('../studentsportal.php')</script>";
?>

