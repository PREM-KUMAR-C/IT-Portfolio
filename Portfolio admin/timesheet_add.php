<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['add'])){
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$Date = $_POST['Date'];
		$Completed_days = $_POST['Completed_days'];
		$Projects = $_POST['Projects'];
		$Assigned_days = $_POST['Assigned_days'];
		$Description = $_POST['Description'];
		$Designation = $_POST['Designation'];

		//print_r($_FILES["Picture"]);
		$Picture = $_FILES["Picture"]["name"];
		$tmp_name = $_FILES["Picture"]["tmp_name"];
		$folder = "img_timesheets/".$Picture;
		move_uploaded_file($tmp_name,$folder);
		
		//Password Encryption to login
		$Password = password_hash($Password,PASSWORD_DEFAULT);
		
		$sql = "INSERT INTO timesheets (FirstName, LastName, Date, Completed_days, Assigned_days, Projects, Description, Designation, Picture) VALUES ('$FirstName', '$LastName', '$Date', '$Completed_days', '$Assigned_days', '$Projects', '$Description', '$Designation', '$Picture')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Timesheet has been added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: timesheet.php');
?>