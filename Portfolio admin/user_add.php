<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['add'])){
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$UserName = $_POST['UserName'];
		$Email = $_POST['Email'];
		$Password = $_POST['Password'];
		$Client_id = $_POST['Client_id'];
		$Phone = $_POST['Phone'];
		$Address = $_POST['Address'];

		//Password Encryption to login
		$Password = password_hash($Password,PASSWORD_DEFAULT);

		//print_r($_FILES["Picture"]);
		$Picture = $_FILES["Picture"]["name"];
		$tmp_name = $_FILES["Picture"]["tmp_name"];
		$folder = "img_users/".$Picture;
		move_uploaded_file($tmp_name,$folder);

		$sql = "INSERT INTO users (FirstName, LastName, UserName, Email, Password, Client_id, Phone, Address, Picture) VALUES ('$FirstName', '$LastName', '$UserName', '$Email', '$Password', '$Client_id', '$Phone', '$Address', '$Picture')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'User has been added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: users.php');
?>