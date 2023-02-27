<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['add'])){
		$Employee = $_POST['Employee'];
		$Starting_At = $_POST['Starting_At'];
		$Ending_On = $_POST['Ending_On'];
		$Days = $_POST['Days'];
		$Reason = $_POST['Reason'];
		$sql = "INSERT INTO leaves (Employee, Starting_At, Ending_On, Days, Reason) VALUES ('$Employee', '$Starting_At', '$Ending_On', '$Days', '$Reason')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Leave has been added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: leaves-employee.php');
?>