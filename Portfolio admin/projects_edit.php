<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Project_name = $_POST['Project_name'];
		$Project_id = $_POST['Project_id'];
		$Start_date = $_POST['Start_date'];
		$Deadline = $_POST['Deadline'];
		$Project_cost = $_POST['Project_cost'];
		$sql = "UPDATE projects SET Project_name = '$Project_name',  Project_id = '$Project_id', Start_date = '$Start_date', Deadline = '$Deadline', Project_cost = '$Project_cost' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Project has been updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select Project to edit first';
	}

	header('location: projects-list.php');

?>