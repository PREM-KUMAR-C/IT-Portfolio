<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['add'])){
		$Employee = $_POST['Employee'];
		$Department = $_POST['Department'];
		$Reason = $_POST['Reason'];
		$Notice_date = $_POST['Notice_date'];
		$Resignation_date = $_POST['Resignation_date'];
		$sql = "INSERT INTO resignation (Employee, Department, Reason, Notice_date, Resignation_date) VALUES ('$Employee', '$Department', '$Reason', '$Notice_date', '$Resignation_date')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Resignation has been added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: resignation.php');
?>