<?php
	session_start();
	include_once('includes/config.php');

	if(isset($_POST['add_invoice'])){
		$Employee_name = $_POST['Employee_name'];
		$Employee_id = $_POST['Employee_id'];
		$Salary_month = $_POST['Salary_month'];
		$Email = $_POST['Email'];
		$Designations = $_POST['Designations'];
		$Joining_date = $_POST['Joining_date'];
		$Address = $_POST['Address'];
		$Payslip_id = $_POST['Payslip_id'];
		$Basic_salary = $_POST['Basic_salary'];
		$HRA = $_POST['HRA'];
		$Conveyance = $_POST['Conveyance'];
		$Other_allowance = $_POST['Other_allowance'];
		$Total_earning = $_POST['Total_earning'];
		$TDS = $_POST['TDS'];
		$Provident_fund = $_POST['Provident_fund'];
		$ESI = $_POST['ESI'];
		$Loan = $_POST['Loan'];
		$Total_deductions = $_POST['Total_deductions'];
		$Net_salary = $_POST['Net_salary'];
		$salary_words = $_POST['salary_words'];

		$sql = "INSERT INTO payments (Employee_name, Employee_id, Salary_month, Email, Designations, Joining_date, Address, Payslip_id, Basic_salary, HRA, Conveyance, Other_allowance, Total_earning, TDS, Provident_fund, ESI, Loan, Total_deductions, Net_salary, salary_words) VALUES ('$Employee_name', '$Employee_id', '$Salary_month', '$Email', '$Designations', '$Joining_date', '$Address', '$Payslip_id', '$Basic_salary', '$HRA','$Conveyance','$Other_allowance','$Total_earning','$TDS','$Provident_fund','$ESI','$Loan','$Total_deductions','$Net_salary','$salary_words')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Payslip has been added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: salary.php');
?>