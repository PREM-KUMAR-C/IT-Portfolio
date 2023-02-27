<!--
/* 2022 Shakthi Prakash Copyright all rights reserved
Author       : Shakthi
Name: Shakthi - Portfolio Admin
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

<?php
	$invid=intval($_GET['id']);
	$sql="select distinct payments.*,employees.FirstName,employees.Email,employees.Employee_Id,employees.Joining_Date,employees.Designation from employees join payments on employees.id=payments.Employee_name WHERE payments.id=:invid";
    $query = $dbh -> prepare($sql);
	$query->bindParam(':invid',$invid,PDO::PARAM_STR);
	$query->execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);
	$cnt=1;
	if($query->rowCount() > 0)
	{
	foreach($results as $row)
	{               
	?>


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
    <title>Salary - Portfolio admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">

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
        <?php include_once("includes/header.php");?>
        <!-- /Header -->

        <!-- Sidebar -->
        <?php include_once("includes/sidebar.php");?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Payslip</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Payslip</li>
                            </ul>
                        </div>
                        <div class="col-auto float-right ml-auto">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-white">CSV</button>
                                <button class="btn btn-white" OnClick="CallPrint(this.value)">PDF</button>
                                <button class="btn btn-white" OnClick="CallPrint(this.value)"><i
                                        class="fa fa-print fa-lg"></i> Print</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-muted">🌸 शक्ति | प्रेम | शांति | आनंदश्च 🌸</div>
                                <div class="row">
                                    <div class="col-sm-6 m-b-20">
                                        <img src="./assets/img/logo 2.svg" alt="inv-logo" width="150" height="130">
                                        <ul class="list-unstyled mb-0">
                                            <li>Shakthi Technologies</li>
                                            <li>352 Sri Ranganatha Street,</li>
                                            <li>Bengaluru, KA 560101</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 m-b-20">
                                        <div class="invoice-details">
                                            <h3 class="text-uppercase">Payslip
                                                <?php echo  htmlentities($row->Payslip_id);?></h3>
                                            <ul class="list-unstyled">
                                                <li>Salary Month:
                                                    <span><?php echo  htmlentities($row->Salary_month);?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 m-b-20">
                                        <ul class="list-unstyled">
                                            <li>
                                                <h5 class="mb-0">
                                                    <strong><?php echo  htmlentities($row->FirstName);?></strong>
                                                </h5>
                                            </li>
                                            <li><span><?php echo  htmlentities($row->Designation);?></span></li>
                                            <li>Employee ID: <?php echo  htmlentities($row->Employee_Id);?></li>
                                            <li>Joining Date: <?php echo  htmlentities($row->Joining_Date);?></li>
                                            <li>Address: <?php echo  htmlentities($row->Address);?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <h4 class="m-b-10"><strong>Earnings</strong></h4>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Basic Salary</strong> <span
                                                                class="float-right">₹<?php echo  htmlentities($row->Basic_salary);?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>House Rent Allowance (H.R.A.)</strong> <span
                                                                class="float-right">₹<?php echo  htmlentities($row->HRA);?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Conveyance</strong> <span
                                                                class="float-right">₹<?php echo  htmlentities($row->Conveyance);?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Other Allowance</strong> <span
                                                                class="float-right">₹<?php echo  htmlentities($row->Other_allowance);?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Total Earnings</strong> <span
                                                                class="float-right"><strong>₹<?php echo  htmlentities($row->Total_earning);?></strong></span>
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
                                                                class="float-right">₹<?php echo  htmlentities($row->TDS);?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Provident Fund</strong> <span
                                                                class="float-right">₹<?php echo  htmlentities($row->Provident_fund);?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>ESI</strong> <span
                                                                class="float-right">₹<?php echo  htmlentities($row->ESI);?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Loan</strong> <span
                                                                class="float-right">₹<?php echo  htmlentities($row->Loan);?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Total Deductions</strong> <span
                                                                class="float-right"><strong>₹<?php echo  htmlentities($row->Total_deductions);?></strong></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <p><strong>Net Salary: ₹<?php echo  htmlentities($row->Net_salary);?></strong>
                                            <?php echo  htmlentities($row->salary_words);?></p>
                                    </div>
                                </div>
                                <div class="invoice-info">
                                    <h5>Other information :</h5>
                                    <p class="text-muted">This payslip is strictly for information purpose only. Please
                                        Check the Account you linked with our services.<br> Payment or Service
                                        Question? Call 987-6543-210.<br>Shakthi Technology Corporations, Bengaluru
                                        560101, India<br>&copy;2022 Shakthi all rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- /Print PDF-->
    <script>
    function CallPrint(strid) {
        var prtContent = document.getElementById("printpdf");
        var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
    </script>
    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>
<?php
                                 $cnt=$cnt+1;
                                 }
                                 } 
                                 ?>