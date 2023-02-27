<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Clients = $_POST['Clients'];
		$Project_name = $_POST['Project_name'];
		$Address = $_POST['Address'];
		$Email = $_POST['Email'];
		$Invoice_date = $_POST['Invoice_date'];
		$Due_date = $_POST['Due_date'];
		$sql = "UPDATE invoice SET Clients = '$Clients',  Project_name = '$Project_name', Address = '$Address', Email = '$Email', Invoice_date = '$Invoice_date', Due_date = '$Due_date' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Invoice has been updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select Invoice to edit first';
	}

	header('location: invoices.php');

?>