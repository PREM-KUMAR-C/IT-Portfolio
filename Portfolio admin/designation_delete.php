<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM designations WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Designation deleted successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting Designation';
		}
	}
	else{
		$_SESSION['error'] = 'Select Designation to delete first';
	}

	header('location: designations.php');
?>