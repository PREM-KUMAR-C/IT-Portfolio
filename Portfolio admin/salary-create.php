<!--
/* 2022 Shakthi Prakash Copyright all rights reserved
Author       : Shakthi
Template Name: Shakthi - Portfolio Admin
*/
-->

<?php 
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}
 ?>
<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 4); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Shakthi - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Create Salary - Portfolio admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/css/select2.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <?php include_once("includes/header.php"); ?>
        <!-- /Header -->

        <!-- Sidebar -->
        <?php include_once("includes/sidebar.php"); ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Create Salary</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Create Salary</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-sm-12">
                        <form method="POST" action="salary_add.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Employee <span
                                                class="text-danger">*</span></label>
                                        <select class="select floating" name="Employee_name" id="Employee_name"
                                            required>
                                            <option value="" selected>- Select -</option>
                                            <?php
                                            $sql = "SELECT * FROM employees";
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$row['id']."'>".$row['FirstName']."</option>
                                                ";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Employee ID<span
                                                class="text-danger">*</span></label>
                                        <select class="select floating" name="Employee_id" id="Employee_id" required>
                                            <option value="" selected>- Select -</option>
                                            <?php
                                            $sql = "SELECT * FROM employees";
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$row['id']."'>".$row['Employee_Id']."</option>
                                                ";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Payment Month <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="Salary_month">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                        <select class="select floating" name="Email" id="Email" required>
                                            <option value="" selected>- Select -</option>
                                            <?php
                                            $sql = "SELECT * FROM employees";
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$row['id']."'>".$row['Email']."</option>
                                                ";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Designation <span
                                                class="text-danger">*</span></label>
                                        <select class="select floating" name="Designations" id="Designations" required>
                                            <option value="" selected>- Select -</option>
                                            <?php
                                            $sql = "SELECT * FROM employees";
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$row['id']."'>".$row['Designation']."</option>
                                                ";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Joining Date <span
                                                class="text-danger">*</span></label>
                                        <select class="select floating" name="Joining_date" id="Joining_date" required>
                                            <option value="" selected>- Select -</option>
                                            <?php
                                            $sql = "SELECT * FROM employees";
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$row['id']."'>".$row['Joining_Date']."</option>
                                                ";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Address <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="Address">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Payslip ID <span
                                                class="text-danger">*</span></label>
                                        <input name="Payslip_id" readonly type="text" value="<?php echo '#PAY-'.$id; ?>"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <h4 class="m-b-10"><strong>Earnings</strong></h4>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Basic Salary</strong> <span class="float-right">
                                                                <input class="form-control" type="text" min="0"
                                                                    name="Basic_salary" id="Basic_salary"
                                                                    onkeyup="add();"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>House Rent Allowance (H.R.A.)</strong> <span
                                                                class="float-right"><input class="form-control"
                                                                    type="text" min="0" name="HRA" id="HRA"
                                                                    onkeyup="add();"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Conveyance</strong> <span class="float-right"><input
                                                                    class="form-control" type="text" min="0"
                                                                    name="Conveyance" id="Conveyance"
                                                                    onkeyup="add();"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Other Allowance</strong> <span
                                                                class="float-right"><input class="form-control"
                                                                    type="text" min="0" name="Other_allowance"
                                                                    id="Other_allowance" onkeyup="add();"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Total Earnings</strong> <span
                                                                class="float-right"><strong><input class="form-control"
                                                                        type="text" name="Total_earning"
                                                                        id="Total_earning" readonly></strong></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>
                                            <h4 class="m-b-10"><strong>Deductions</strong></h4>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Tax Deducted at Source (T.D.S.)</strong> <span
                                                                class="float-right"><input class="form-control"
                                                                    type="text" min="0" name="TDS" id="TDS"
                                                                    onkeyup="add();"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Provident Fund</strong> <span
                                                                class="float-right"><input class="form-control"
                                                                    type="text" min="0" name="Provident_fund"
                                                                    id="Provident_fund" onkeyup="add();"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>ESI</strong> <span class="float-right"><input
                                                                    class="form-control" type="text" min="0" name="ESI"
                                                                    id="ESI" onkeyup="add();"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Loan</strong> <span class="float-right"><input
                                                                    class="form-control" type="text" min="0" name="Loan"
                                                                    id="Loan" onkeyup="add();"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Total Deductions</strong> <span
                                                                class="float-right"><strong><input class="form-control"
                                                                        type="text" min="0" name="Total_deductions"
                                                                        id="Total_deductions" readonly></strong></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <strong>Net Salary:<input class="col-sm-6 form-control" type="text"
                                                name="Net_salary" id="Net_salary" onclick="numwords();"
                                                readonly></strong>
                                        <p><span name="salary_words" class="result"></span></p>
                                    </div>
                                </div>
                                <div class="modal-footer submit-section">
                                    <button type="button" class="btn btn-default"> Cancel</button>
                                    <button type="submit" name="add_invoice" class="btn btn-primary submit-btn">
                                        Save</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
    <script>
    //Earnings
    function add() {
        var one = document.getElementById("Basic_salary").value;
        var two = document.getElementById("HRA").value;
        var three = document.getElementById("Conveyance").value;
        var four = document.getElementById("Other_allowance").value;
        var Total = parseFloat(one) + parseFloat(two) + parseFloat(three) + parseFloat(four);
        document.getElementById("Total_earning").value = Total;

        //Deductions
        var five = document.getElementById("Loan").value;
        var six = document.getElementById("ESI").value;
        var seven = document.getElementById("Provident_fund").value;
        var eight = document.getElementById("TDS").value;
        var ded_Total = parseFloat(five) + parseFloat(six) + parseFloat(seven) + parseFloat(eight);
        document.getElementById("Total_deductions").value = ded_Total;

        //Net Salary
        var Net_salary = Total - ded_Total;
        document.getElementById("Net_salary").value = Net_salary.toFixed(2);

    }

    //number to words
    function numwords() {
        let result = document.querySelector('.result');
        result.innerText = numberToWords.toWords(Net_salary.value);
    }
    </script>

    <!--Num to word js-->
    <script src="assets/js/numtoword.min.js"></script>
    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <!-- Select2 JS -->
    <script src="assets/js/select2.min.js"></script>

    <!-- Datetimepicker JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>