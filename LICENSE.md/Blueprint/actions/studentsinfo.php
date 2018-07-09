<?php
// Create connection
require('connection.php');

// Check connection

$email = $_POST['email'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$institution = $_POST['institution'];
$course = $_POST['course'];
$matricNo = $_POST['matricNo'];
$level = $_POST['level'];
$company = $_POST['company'];
$faculty = $_POST['faculty'];
$studID = rand();

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], '../uploads/' . $fullname . '.jpg');


$sql = mysql_query("INSERT INTO `studentsinfo` (`email`,`password`,`fullname`,`institution`,`course`,`matricNo`,`level`,`company`,`faculty`,`studID`) 
					VALUES ('$email','$password','$fullname','$institution','$course','$matricNo','$level','$company','$faculty','$studID')") or die(mysql_error());

if ($sql) {
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], '../uploads/' . $fullname . '.jpg');
echo "<script> alert('Sign up successful');window.location.href=('../studentslogin.php')</script>";

}
?>