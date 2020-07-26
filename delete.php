<?php

include 'connection.php';

$id = $_GET['id'];

$query = " DELETE FROM `crudoperation` WHERE id = $id ";

mysqli_query($connection, $query);

header('location:Data.php');

?>