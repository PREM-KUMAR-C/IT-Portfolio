<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['add'])){
		$Employee = $_POST['Employee'];
		$Department = $_POST['Department'];
		$Promotion_from = $_POST['Promotion_from'];
		$Promotion_to = $_POST['Promotion_to'];
		$Promotion_date = $_POST['Promotion_date'];
		$sql = "INSERT INTO promotion (Employee, Department, Promotion_from, Promotion_to, Promotion_date) VALUES ('$Employee', '$Department', '$Promotion_from', '$Promotion_to', '$Promotion_date')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Promotion has been added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: promotion.php');
?>