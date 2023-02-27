<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['add'])){
		$Department = $_POST['Department'];
		$sql = "INSERT INTO department (Department) VALUES ('$Department')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Department added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: department.php');
?>