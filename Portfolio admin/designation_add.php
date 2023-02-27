<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['add'])){
		$Department = $_POST['Department'];
		$Designation = $_POST['Designation'];
		$sql = "INSERT INTO designations (Department,Designation) VALUES ('$Department','$Designation')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Designation added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: designations.php');
?>