<?php
// Create connection
require('connection.php');




$newID = 	$_POST['newID'];
$studName = $_POST['studName'];
$lectName = $_POST['lectName'];
$department = $_POST['department'];
$section = $_POST['section'];
$week = $_POST['week'];
$remark = $_POST['remark'];


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = mysql_query("INSERT INTO `lecturersreport` (`newID`, `studName`, 
								`lectName`, `department`,`section`,`week`,`remark`)
		VALUES ('$newID', '$studName',
				 '$lectName', '$department','$section', '$week','$remark')")
	or die(mysql_error());

$update = mysql_query("UPDATE `studentsrecord` SET `remark` = '$remark' WHERE fullname = '$studName' ")or die(mysql_error());


echo "<script> alert('action successful');window.location.href=('../lecturersportal.php')</script>";
?>

