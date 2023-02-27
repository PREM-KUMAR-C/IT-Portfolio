<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['add_invoice'])){
		$Clients = $_POST['Clients'];
		$Project_name = $_POST['Project_name'];
		$Company = $_POST['Company'];
		$Email = $_POST['Email'];
		$Address = $_POST['Address'];
		$Invoice_date = $_POST['Invoice_date'];
		$Due_date = $_POST['Due_date'];
		$Invoice_id = $_POST['Invoice_id'];
		$Bank_name = $_POST['Bank_name'];
		$Bank_address = $_POST['Bank_address'];
		$Project_cost = $_POST['Project_cost'];
		$Qty = $_POST['Qty'];
		$Amount = $_POST['Amount'];
		$Sum_total = $_POST['Sum_total'];
		$Gst_price = $_POST['Gst_price'];
		$grand_total_pay = $_POST['grand_total_pay'];
		$Description = $_POST['Description'];
		$Discount_percentage = $_POST['Discount_percentage'];

		
		$sql = "INSERT INTO invoice (Clients, Project_name, Company, Email, Invoice_date, Address, Bank_name, Due_date, Invoice_id, Bank_address, Project_cost, Qty, Amount, Sum_total, Gst_price, grand_total_pay, Description, Discount_percentage) VALUES ('$Clients', '$Project_name', '$Company', '$Email', '$Invoice_date', '$Address', '$Bank_name', '$Due_date', '$Invoice_id', '$Bank_address', '$Project_cost', '$Qty', '$Amount', '$Sum_total', '$Gst_price', '$grand_total_pay', '$Description', '$Discount_percentage')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Invoice has been added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: invoices.php');
?>