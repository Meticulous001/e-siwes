<!DOCTYPE html>
<html lang="en">
<head>
	<title>eSiwes_Admin </title>
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
	max-height:300px;
	padding:30px;
	box-shadow: 2px 3px 3px;

}
a{
	color:black;
}
a:hover{
	text-decoration: none !important;
}
a.active{
	color:blue;
}

#sdbar{
	background: linear-gradient(gray, black);
	height: 1000px;
	border-right:1px solid black;
	box-shadow: 2px 2px 2px;
	padding:20px;
}
#ic{
	font-size: 300px;
	background-color: white;
	padding:10px;
	border:1px dotted gray;

}
#ech{
	border:1px solid gray;
	padding:10px;
	background: rgba(0,0,0,0.7);
	color:white;
	border-radius: 10px;
}
#e{
	color:white;
}
#e1{
	color:white;
}
#e2{
	color:white;
}
#pro{
	padding:10px;
}
#pro1{
	padding:10px;
	background-color:#e6e6e6;
}

@media (max-width: 991px) {
#sdbar{
	height:1000px;
}
#ban1{
	display:;
}	
#ic{
	font-size: auto;
}
#e,#e1,#e2{
	font-size: 10px !important;
}
#ee1{
	font-size: 15px;
}
}

</style>
<body>
	<div class="container-fluid" id="ban1">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="index.php"><img src="images/logo.png" class="img-responsive"></a>
				</div>
				<div class="col-sm-7">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="admin.php" style="color:white">Home</a></li>
							<li><a href="index.php" style="color:white">Log out</a></li>
							<li class="dropdown">
					        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
					        <span style="color:red"> (5)</span> <span style="color:white"class="glyphicon glyphicon-bell"></span><span style="color:white" class="caret"></span></a>
					        <ul class="dropdown-menu">
					          <li><a href="#">logbook submitted</a></li>
					          <li><a href="#">new students assigned</a></li>
					        </ul>
					      	</li>
      	
						</ul>
				</div>
			</div>	
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div id="sdbar" class="col-sm-2 col-xs-4">
				<a id="e" href="admin.php"><h4 id="ee1"><span class="glyphicon glyphicon-list-alt"></span> All Students</h4></a><br>
				<a id="e1" href="alllecturers.php"><h4 id="ee1"><span class="glyphicon glyphicon-modal-window"></span> All Lecturers</h4></a><br>
				<a id="e2" href="assignstudents.php"><h4 id="ee1"><span class="glyphicon glyphicon-scale"></span> Assign Students </h4></a><br>
				<a id="e2" href="studentslecturerassigned.php"><h4 id="ee1"><span class="glyphicon glyphicon-briefcase"></span> Lecturer & Students </h4></a>
			</div>
		<div class="col-sm-10 col-xs-8" id="dboard">
				<center>
				<h1> All Students </h1></center>
			<div class="table-responsive">
				<table class="table table-bordered">
				    <thead>
				    	
				      <tr class="danger">
				        <th>S/N</th>
				        <th>Student Fullname</th>
				        <th>Department</th>
				        <th>Matric No</th>
				        <th>Company Attached</th>
				      </tr>
				    </thead>
				    <?php 
					    		require('/actions/connection.php');
					    		$sql = mysql_query("SELECT * FROM `studentsinfo`") or die(mysql_error());
					    		while($row=mysql_fetch_assoc($sql)){
								
					    		
					    	?>
				    <tbody>
				      <tr>
				        <td><?php echo $row['ID']; ?></td>
				        <td><?php echo $row['fullname']; ?></td>
				        <td><?php echo $row['course']; ?></td>
				        <td><?php echo $row['matricNo']; ?></td>
				        <td><?php echo $row['company']; ?></td>
				      </tr>
				      <?php 
					  		}
					  ?>
				    </tbody>
				  </table>
			</div>
		</div>
		
		
				
			
			
		</div>
		</div>

	</div>
</body>

</html>