<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM users WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'User has been deleted successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select User to delete first';
	}

	header('location: users.php');
?>