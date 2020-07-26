<?php

		include 'connection.php';

			$id = isset($_POST['id']) ? $_POST['id'] : '';
			$name=isset($_POST['name']) ? $_POST['name'] : '';
			$fname=isset($_POST['fname']) ? $_POST['fname'] : '';
			$designation=isset($_POST['designation']) ? $_POST['designation'] : '';
			$email=isset($_POST['email']) ? $_POST['email'] : '';
			$department=isset($_POST['department']) ? $_POST['department'] : '';
			$salary=isset($_POST['salary']) ? $_POST['salary'] : '';

			$query=" SELECT * FROM `crudoperation` ";


			$q=mysqli_query($connection,$query);
		





?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="col-lg-12"><br>
		<h1 class="text-center">DataTable Grid View</h1>

		<br><table class="table table-striped table-bordered table-hover">
			<tr class="bg-dark text-white taxt-center">
				<th>Id</th>
				<th>Name</th>
				<th>Father's Name</th>
				<th>Designation</th>
				<th>Email Address</th>
				<th>Department</th>
				<th>Salary</th>
				<th>Update</th>
				<th>Delete</th>
				

			</tr>

<?php

		include 'connection.php';
        $query="select * from crudoperation";
		$q=mysqli_query($connection,$query);
		
		while($result=mysqli_fetch_array($q)){

?>

			<tr class="text-center">
				<td><?php echo $result['id']; ?></td>
				<td><?php echo $result['name']; ?></td>
				<td><?php echo $result['fathername']; ?></td>
				<td><?php echo $result['designation']; ?></td>
				<td><?php echo $result['email']; ?></td>
				<td><?php echo $result['department']; ?></td>
				<td><?php echo $result['salary']; ?></td>
				<td><button class='btn btn-warning'><a href="update.php?id=<?php echo $result['id']; ?>" class="text-white">Update</a></button></td>
				<td><button class='btn btn-danger'><a href="delete.php?id=<?php echo $result['id']; ?>" class="text-white">Delete</a></button></td>
				

			</tr>
<?php } ?>	
		</table>


<button class='btn btn-primary'><a href="insertion.php" class='text-white'>Insert Data</a></button><br><br>



	</div>


</div>




</body>
</html>