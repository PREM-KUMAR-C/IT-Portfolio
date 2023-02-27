<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['add'])){
		$Project_name = $_POST['Project_name'];
		$Client = $_POST['Client'];
		$Project_id = $_POST['Project_id'];
		$Start_date = $_POST['Start_date'];
		$Deadline = $_POST['Deadline'];
		$Project_cost = $_POST['Project_cost'];
		$leader_1 = $_POST['leader_1'];
		$Team_1 = $_POST['Team_1'];
		$Team_2 = $_POST['Team_2'];
		$Team_3 = $_POST['Team_3'];
		$Team_4 = $_POST['Team_4'];
		$Description = $_POST['Description'];

		//print_r($_FILES["Picture"]);
		$leader_1p = $_FILES["leader_1p"]["name"];
		$tmp_name = $_FILES["leader_1p"]["tmp_name"];
		$Team_1p = $_FILES["Team_1p"]["name"];
		$tmp_name1 = $_FILES["Team_1p"]["tmp_name"];
		$Team_2p = $_FILES["Team_2p"]["name"];
		$tmp_name2 = $_FILES["Team_2p"]["tmp_name"];
		$Team_3p = $_FILES["Team_3p"]["name"];
		$tmp_name3 = $_FILES["Team_3p"]["tmp_name"];
		$Team_4p = $_FILES["Team_4p"]["name"];
		$tmp_name4 = $_FILES["Team_4p"]["tmp_name"];
		
		$folder = "img_projects/".$leader_1p;
		move_uploaded_file($tmp_name,$folder);
		$folder = "img_projects/".$Team_1p;
		move_uploaded_file($tmp_name1,$folder);
		$folder = "img_projects/".$Team_2p;
		move_uploaded_file($tmp_name2,$folder);
		$folder = "img_projects/".$Team_3p;
		move_uploaded_file($tmp_name3,$folder);
		$folder = "img_projects/".$Team_4p;
		move_uploaded_file($tmp_name4,$folder);
		
		//Password Encryption to login
		//$Password = password_hash($Password,PASSWORD_DEFAULT);
		
		$sql = "INSERT INTO projects (Project_name, Client, Project_id, Start_date, Deadline, Team_1, leader_1, Team_2, Project_cost, Team_3, Team_4, Description, leader_1p, Team_1p, Team_2p, Team_3p, Team_4p) VALUES ('$Project_name', '$Client', '$Project_id', '$Start_date', '$Deadline', '$Team_1', '$leader_1', '$Team_2', '$Project_cost', '$Team_3', '$Team_4', '$Description', '$leader_1p', '$Team_1p', '$Team_2p', '$Team_3p', '$Team_4p')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Project has been added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: projects-list.php');
?>