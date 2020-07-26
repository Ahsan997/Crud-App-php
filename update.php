<?php

include 'connection.php';
if(isset($_POST['sub'])){
			$id=$_GET['id'];
			$name=$_POST['name'];
			$fname=$_POST['fname'];
			$designation=$_POST['designation'];
			$email=$_POST['email'];
			$department=$_POST['department'];
			$salary=$_POST['salary'];

			// $query="update crudoperation set id=$id, name='$name', fname='$fname', designation='$designation', email='$email', department='$department', salary=$salary where id=$id ";

			$query=" UPDATE `crudoperation` SET `id`=$id,`name`='$name',`fathername`='$fname',`designation`='$designation',`email`='$email',`department`='$department',`salary`='$salary' WHERE `id`=$id ";

			$q=mysqli_query($connection,$query);
			header('location:Data.php');

		}

?>


<!DOCTYPE html>
<html>
<head>



	<title> </title>

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
			<h1 class="text-white text-center">Updation</h1>
		</div>

		<?php
		include 'connection.php';
		$id=$_GET['id'] ;
		$data = " SELECT * FROM `crudoperation` WHERE `id`=$id " ;
		$q=mysqli_query($connection,$data);
		$result=mysqli_fetch_array($q);
		?>
		<!-- <?php echo $result['name']; ?> -->
		<label>Name:</label>
		<input type="text" name="name" value="<?php if (isset($result)) echo $result['name']; ?>" class="form-control"><br>

		<label>Father's Name:</label>
		<input class="form-control" type="text" name="fname" value="<?php if (isset($result)) echo $result['fathername']; ?>"><br>

		<label>Designation:</label>
		<input class="form-control" type="text" name="designation" value="<?php if (isset($result)) echo $result['designation']; ?>"><br>

		<label>Email:</label>
		<input class="form-control" type="text" name="email" value="<?php if (isset($result)) echo $result['email']; ?>"><br>

		<label>Department:</label>
		<input class="form-control" type="text" name="department" value="<?php if (isset($result)) echo $result['department']; ?>"><br>

		<label>Salary:</label>
		<input class="form-control" type="text" name="salary" value="<?php if (isset($result)) echo $result['salary']; ?>"><br>

		<button class="btn btn-success" type="submit" name="sub"> Submit </button><br><br>
	</div>


</form>



</div>




</body>
</html>