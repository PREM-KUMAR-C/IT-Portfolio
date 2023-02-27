<?php
	session_start();
	include_once('includes/config.php');
	include_once('includes/functions.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Date = $_POST['Date'];
		$Projects = $_POST['Projects'];
		$Assigned_days = $_POST['Assigned_days'];
		$Completed_days = $_POST['Completed_days'];
		$Designation = $_POST['Designation'];
		$Description = $_POST['Description'];
		$sql = "UPDATE timesheets SET Date = '$Date', Projects = '$Projects', Assigned_days = '$Assigned_days', Completed_days = '$Completed_days', Designation = '$Designation', Description = '$Description' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Timesheet has been updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select Timesheet to edit first';
	}

	header('location: timesheet.php');

?>