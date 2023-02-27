<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM payments WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Payment has been deleted successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select Payment to delete first';
	}

	header('location: salary.php');
?>