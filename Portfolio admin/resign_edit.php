<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Employee = $_POST['Employee'];
		$Notice_date = $_POST['Notice_date'];
		$Resignation_date = $_POST['Resignation_date'];
		$sql = "UPDATE resignation SET Employee = '$Employee',  Notice_date = '$Notice_date', Resignation_date = '$Resignation_date' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Resignation has been updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select Resignation to edit first';
	}

	header('location: resignation.php');

?>