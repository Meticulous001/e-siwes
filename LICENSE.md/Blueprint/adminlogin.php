<!DOCTYPE html>
<html lang="en">
<head>
	<title>eSiwes Portal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<style>
body{
	background: linear-gradient(to right, #e6e6e6, white);
	background-size: cover;
	font-family: BEBOPMedium;
	
}
#ban1{
	background: linear-gradient(black, gray);
	border-bottom:2px solid black;
	max-height:300px;
	padding:30px;
	box-shadow: 2px 3px 3px;

}
#es{
	font-size: 60px;
}
@media (max-width: 991px) {
	#es{
	font-size: 30px;
}
}
#adm{
	background-color: white;
	padding: 15px;

}
</style>
<body>
	<div class="container-fluid" id="ban1">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="#"><img src="images/logo.png" class="img-responsive"></a>
				</div>
				<div class="col-sm-8">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php" style="color:white">Home</a></li>
							<li><a href="#" style="color:white">FAQ</a></li>
						</ul>
				</div>
			</div>	
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-7"><br><br><br>
				<h1 id="es">e-Siwes is an intermediary between students and their lecturers...</h1>
				<button class="btn btn-lg" action="studentsportal.php">Read More</button>
			</div>
			<br><br><br><br>
			<div class="col-sm-5" id="adm" >
				<center>
                      <h3><b>Admin Log in </b><h3>                        
                             <form class="form-group" method="POST" action="actions/admlogin.php">
                                    <input type="username" name="username" class="form-control" placeholder="username" required><br>
                                    <input type="admpassword" name="admpassword" class="form-control" placeholder="password" required><br>
                                    <button class="btn btn-block btn-fill">Log in</button> 
                					
                            </form>
                </center>
                
			</div>
			
		</div>

		

	</div>
	<hr>
	<footer class="text-center">Created by <a href="">Codesquad Dev</a></footer>


</body>

</html>