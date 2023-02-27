<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Employee = $_POST['Employee'];
		$Promotion_from = $_POST['Promotion_from'];
		$Promotion_to = $_POST['Promotion_to'];
		$Promotion_date = $_POST['Promotion_date'];
		$sql = "UPDATE promotion SET Employee = '$Employee',  Promotion_from = '$Promotion_from', Promotion_to = '$Promotion_to', Promotion_date = '$Promotion_date' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Promotion has been updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select Promotion to edit first';
	}

	header('location: promotion.php');

?>