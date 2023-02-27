<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Department = $_POST['Department'];
		$Designation = $_POST['Designation'];
		$sql = "UPDATE designations SET Designation = '$Designation' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Designation updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating Designation';
		}
	}
	else{
		$_SESSION['error'] = 'Select Designation to edit first';
	}

	header('location: designations.php');

?>