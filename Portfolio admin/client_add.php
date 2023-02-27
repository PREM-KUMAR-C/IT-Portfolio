<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['add'])){
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$UserName = $_POST['UserName'];
		$Email = $_POST['Email'];
		$ClientId = $_POST['ClientId'];
		$Password = $_POST['Password'];
		$Company = $_POST['Company'];
		$Phone = $_POST['Phone'];
		$Address = $_POST['Address'];

		//print_r($_FILES["Picture"]);
		$Picture = $_FILES["Picture"]["name"];
		$tmp_name = $_FILES["Picture"]["tmp_name"];
		$folder = "img clients/".$Picture;
		move_uploaded_file($tmp_name,$folder);
		
		//Password Encryption to login
		$Password = password_hash($Password,PASSWORD_DEFAULT);
		
		$sql = "INSERT INTO clients (FirstName, LastName, UserName, Email, Password, ClientId, Phone, Picture, Company, Address) VALUES ('$FirstName', '$LastName', '$UserName', '$Email', '$Password', '$ClientId', '$Phone', '$Picture', '$Company', '$Address')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Client has been added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: clients-list.php');
?>