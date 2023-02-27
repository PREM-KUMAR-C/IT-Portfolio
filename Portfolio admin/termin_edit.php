<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Employee = $_POST['Employee'];
		$Notice_date = $_POST['Notice_date'];
		$Termin_date = $_POST['Termin_date'];
		$sql = "UPDATE termination SET Employee = '$Employee',  Notice_date = '$Notice_date', Termin_date = '$Termin_date' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Termination has been updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select Termination to edit first';
	}

	header('location: termination.php');

?>