<?php
session_start();
require('connection.php');


$lecEmail = $_POST['lecEmail'];
$lecPassword = $_POST['lecPassword'];


//exit($id);


$sql = mysql_query("SELECT * FROM `lecturerinfo` WHERE `lecEmail` = '$lecEmail' AND `lecPassword`= '$lecPassword'") or die(mysql_error());
$row = mysql_fetch_assoc($sql);
if ($row) {
	$_SESSION['ID'] = $row['ID'];
	$_SESSION['lecEmail'] = $row['lecEmail'];
	$_SESSION['lecPassword'] = $row['lecPassword'];
	$_SESSION['lectName'] = $row['lectName'];
	$_SESSION['lectInstitution'] = $row['lectInstitution'];
	$_SESSION['lectdepartment'] = $row['lectdepartment'];
	$_SESSION['lectIDno'] = $row['lectIDno'];
	header("location:../lecturersportal.php");
}
else{
	echo  "<script> alert('invalid login'); window.location.href=('../index.php') </script>";
}

?>

