<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$UserName = $_POST['UserName'];
		$Email = $_POST['Email'];
		$Password = $_POST['Password'];
		$Phone = $_POST['Phone'];
		$Company = $_POST['Company'];
		$ClientId = $_POST['ClientId'];
		$sql = "UPDATE clients SET FirstName = '$FirstName',  LastName = '$LastName', UserName = '$UserName', Email = '$Email', Password = '$Password', Phone = '$Phone', Company = '$Company', ClientId = '$ClientId' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Client has been updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select Client to edit first';
	}

	header('location: clients-list.php');

?>