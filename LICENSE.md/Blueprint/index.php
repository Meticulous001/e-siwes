<!DOCTYPE html>
<html lang="en">
<head>
	<title>eSiwes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<style>
body{
	background:url(images/backg.jpg);
	background-size: cover;
	background-attachment: fixed;
	margin-top: 50px;
	font-family:trebuchet MS;
}
#ig{
	box-shadow: 1px 2px 5px 10px;
	padding:10px;
	border-radius: 50%;
}
#navv{
	background-color: black;
	border: 0px;
	border-radius: 0px;
}
#es{
	color: black;
	font-size: 45px;
}
</style>
<body>
	<div class="container">
	<img id="ig" src="images/siwes.png">
	<p style="float:right;color:white;padding:15px;"><img src="images/logo.png"><br><b>INDUSTRIAL TRAINING FUND</b></p>
	</div>
<br>
	<nav id="navv" class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">FAQ</a></li> 
       
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Portal
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="studentslogin.php">Students Portal</a></li>
          <li><a href="lecturersportallogin.php">Lecturers Portal</a></li>
        </ul>
        <li><a href="adminlogin.php">Admin</a></li>
      	</li>
    </ul>
  </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h1 id="es"><b>e-Siwes is an intermediary between students and their lecturers...</h1>
				<button class="btn btn-danger" action="studentsportal.php">Read More</button>
		</div>
	</div>
</div>




</body>

</html>