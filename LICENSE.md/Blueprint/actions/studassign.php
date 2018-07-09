<?php
// Create connection
require('connection.php');

// Check connection


$studID = $_POST['studID'];
$studName = $_POST['studName'];
$studDep = $_POST['studDep'];
$lectIDno = $_POST['lectIDno'];
$lectName = $_POST['lectName'];
$lectdepartment = $_POST['lectdepartment'];
$date = date('d-m-Y');
$newID = rand();
$StudStatus = 1;



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 $sql = mysql_query("INSERT INTO `studassign` (`studID`, `studName`,
 								`studDep`, `lectIDno`,`lectName`,`lectdepartment`,
 								`date`, `newID`)
 		VALUES ('$studID','$studName','$studDep', '$lectIDno','$lectName','$lectdepartment','$date','$newID')")
 				or die(mysql_error());


$sql = mysql_query("INSERT INTO `bind` (`lectID`,`studID`) 
					VALUES ('$lectIDno','$studID')	")	
	or die(mysql_error());

$update = mysql_query("UPDATE `studentsinfo` SET `StudStatus` = '$StudStatus' WHERE studID = '$studID' ")or die(mysql_error());
$update = mysql_query("UPDATE `studassign` SET `StudStatus` = '$StudStatus' ")or die(mysql_error());

echo "<script> alert('student assigned successful');window.location.href=('../assignstudents.php')</script>";
?>