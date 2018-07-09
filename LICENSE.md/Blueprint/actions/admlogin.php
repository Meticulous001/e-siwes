<?php
session_start();
require('connection.php');
$username = $_POST['username'];
$admpassword = $_POST['admpassword'];

//exit($id);


$sql = mysql_query("SELECT * FROM `adm` WHERE `username` = '$username' AND `admpassword`= '$admpassword'") or die(mysql_error());
$row = mysql_fetch_assoc($sql);
if ($sql) {
	$_SESSION['id'] = $row['id'];
	header("location:../admin.php");
}
else{
	echo "Invalid Login";
}

?>