<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Starting_At = $_POST['Starting_At'];
		$Ending_On = $_POST['Ending_On'];
		$Days = $_POST['Days'];
		$sql = "UPDATE leaves SET Starting_At = '$Starting_At', Ending_On = '$Ending_On', Days = '$Days' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Leave has been updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select Leave to edit first';
	}

	header('location: leaves-employee.php');

?>