<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['add'])){
		$Employee = $_POST['Employee'];
		$Department = $_POST['Department'];
		$Reason = $_POST['Reason'];
		$Notice_date = $_POST['Notice_date'];
		$Termin_type = $_POST['Termin_type'];
		$Termin_date = $_POST['Termin_date'];
		$sql = "INSERT INTO termination (Employee, Department, Reason, Notice_date, Termin_type, Termin_date) VALUES ('$Employee', '$Department', '$Reason', '$Notice_date', '$Termin_type', '$Termin_date')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Termination has been added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: termination.php');
?>