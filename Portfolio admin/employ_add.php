<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['add'])){
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$UserName = $_POST['UserName'];
		$Email = $_POST['Email'];
		$Employee_Id = $_POST['Employee_Id'];
		$Password = $_POST['Password'];
		$Department = $_POST['Department'];
		$Designation = $_POST['Designation'];
		$Phone = $_POST['Phone'];

		//print_r($_FILES["Picture"]);
		$Picture = $_FILES["Picture"]["name"];
		$tmp_name = $_FILES["Picture"]["tmp_name"];
		$folder = "img_employees/".$Picture;
		move_uploaded_file($tmp_name,$folder);
		
		//Password Encryption to login
		$Password = password_hash($Password,PASSWORD_DEFAULT);
		
		$sql = "INSERT INTO employees (FirstName, LastName, UserName, Email, Password, Employee_Id, Phone, Picture, Department, Designation) VALUES ('$FirstName', '$LastName', '$UserName', '$Email', '$Password', '$Employee_Id', '$Phone', '$Picture', '$Department', '$Designation')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Employee has been added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: employees-list.php');
?>