<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Department = $_POST['Department'];
		$sql = "UPDATE department SET Department = '$Department' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Department updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating Department';
		}
	}
	else{
		$_SESSION['error'] = 'Select Department to edit first';
	}

	header('location: department.php');

?>