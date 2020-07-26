<?php

		include 'connection.php';

		if(isset($_POST['sub'])){
			$name=$_POST['name'];
			$fname=$_POST['fname'];
			$designation=$_POST['designation'];
			$email=$_POST['email'];
			$department=$_POST['department'];
			$salary=$_POST['salary'];

			$query="INSERT INTO `crudoperation`(`name`, `fathername`, `designation`, `email`, `department`, `salary`) VALUES ('$name','$fname','$designation','$email','$department','$salary')";


			$q=mysqli_query($connection,$query);
			header('location:Data.php');
		}






?>

<!DOCTYPE html>
<html>
<head>



	<title>Crud Operation</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="col-lg-6 m-auto">
	
<form method="post">
	
	<br><div class="card">

		<div class="card-header bg-dark">
			<h1 class="text-white text-center">Insertion</h1>
		</div>

		<label>Name:</label>
		<input type="text" name="name" placeholder="Enter Your Name" class="form-control"><br>

		<label>Father's Name:</label>
		<input class="form-control" type="text" name="fname" placeholder="Enter Your Father's Name"><br>

		<label>Designation:</label>
		<input class="form-control" type="text" name="designation" placeholder="Enter Your Desination"><br>

		<label>Email:</label>
		<input class="form-control" type="text" name="email" placeholder="Enter Your Email"><br>

		<label>Department:</label>
		<input class="form-control" type="text" name="department" placeholder="Enter Your Department"><br>

		<label>Salary:</label>
		<input class="form-control" type="text" name="salary" placeholder="Enter Your Salary"><br>

		<button class="btn btn-success" type="submit" name="sub"> Submit </button><br><br>
	</div>

<br><button class='btn btn-warning'><a href="Data.php" class='text-white'>Data Table</a></button>
</form><br><br>



</div>




</body>
</html>