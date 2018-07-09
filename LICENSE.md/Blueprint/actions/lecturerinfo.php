<?php
// Create connection
require('connection.php');

// Check connection

$lecEmail = $_POST['lecEmail'];
$lecPassword = $_POST['lecPassword'];
$lectName = $_POST['lectName'];
$lectInstitution = $_POST['lectInstitution'];
$lectdepartment = $_POST['lectdepartment'];
$lectIDno = rand();

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], '../uploads/' . $lectName . '.jpg');


$sql = mysql_query("INSERT INTO `lecturerinfo` (`lecEmail`,`lecPassword`,`lectName`,`lectInstitution`,`lectdepartment`,`lectIDno`) 
					VALUES ('$lecEmail','$lecPassword','$lectName','$lectInstitution','$lectdepartment','$lectIDno')") or die(mysql_error());

if ($sql) {

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], '../uploads/' . $lectName . '.jpg');
echo "<script> alert('Sign up successful');window.location.href=('../lecturersportallogin.php')</script>";

}
?>

