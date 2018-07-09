<?php
// Create connection
require('connection.php');

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = mysql_query("INSERT INTO `lecturersreg` (`fullname`,`email`,`password`) VALUES ('$fullname','$email','$password')") or die(mysql_error());

if ($sql) {

echo "<script> alert('one more step to go;');window.location.href=('../lecturerinfoupdate.php')</script>";

}
?>