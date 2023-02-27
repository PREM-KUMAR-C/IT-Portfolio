<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM invoice WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Invoice has been deleted successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select Invoice to delete first';
	}

	header('location: invoices.php');
?>