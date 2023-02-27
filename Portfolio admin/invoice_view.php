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

<?php
	$invid=intval($_GET['id']);
	$sql="select * from invoice where id=:invid";
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
    <title>Invoice - Portfolio admin</title>

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
                            <h3 class="page-title">Invoice</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Invoice</li>
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

                <div class="row" id="printpdf">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-muted">🌸 शक्ति | प्रेम | शांति | आनंदश्च 🌸</div>
                                <div class="row">
                                    <div class="col-sm-6 m-b-20">
                                        <img src="assets/img/logo 2.svg" class="inv-logo" alt="">
                                        <ul class="list-unstyled">
                                            <li>Shakthi Technologies</li>
                                            <li>352 Sri Ranganatha Street,</li>
                                            <li>Bengaluru, KA, 560101</li>
                                            <li>GST No: 29SPC20103033S5</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 m-b-20">
                                        <div class="invoice-details">
                                            <h3 class="text-uppercase">Invoice
                                                <?php echo  htmlentities($row->Invoice_id);?>
                                            </h3>
                                            <ul class="list-unstyled">
                                                <li>Date: <span><?php echo  htmlentities($row->Invoice_date);?></span>
                                                </li>
                                                <li>Due date: <span><?php echo  htmlentities($row->Due_date);?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-7 col-xl-8 m-b-20">
                                        <h5>Invoice to:</h5>
                                        <ul class="list-unstyled">
                                            <li>
                                                <h5><strong><?php echo  htmlentities($row->Clients);?></strong></h5>
                                            </li>
                                            <li><span><?php echo  htmlentities($row->Company);?></span></li>
                                            <li><?php echo  htmlentities($row->Address);?></li>
                                            <li>India</li>
                                            <li>999-000-6655</li>
                                            <li><a href="#"><?php echo  htmlentities($row->Email);?></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-lg-5 col-xl-4 m-b-20">
                                        <span class="text-muted">Payment Details:</span>
                                        <ul class="list-unstyled invoice-payment-details">
                                            <li>
                                                <h5>Total Due: <span
                                                        class="text-right"><?php echo  htmlentities($row->grand_total_pay);?></span>
                                                </h5>
                                            </li>
                                            <li>Bank name: <span><?php echo  htmlentities($row->Bank_name);?></span>
                                            </li>
                                            <li>Country: <span>India</span></li>
                                            <li>City: <span><?php echo  htmlentities($row->Bank_address);?></span></li>
                                            <li>Address: <span>334 Lokmanya Tilak Street</span></li>
                                            <li>IBAN: <span>ABC377887657540</span></li>
                                            <li>SWIFT code: <span>XBN3K</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ITEM</th>
                                                <th class="d-none d-sm-table-cell">DESCRIPTION</th>
                                                <th>UNIT COST</th>
                                                <th>QUANTITY</th>
                                                <th class="text-right">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $cnt;?></td>
                                                <td><?php echo  htmlentities($row->Project_name);?></td>
                                                <td class="d-none d-sm-table-cell">
                                                    <?php echo  htmlentities($row->Description);?>
                                                </td>
                                                <td>₹<?php echo  htmlentities($row->Project_cost);?></td>
                                                <td><?php echo  htmlentities($row->Qty);?></td>
                                                <td class="text-right">₹<?php echo  htmlentities($row->Amount);?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <div class="row invoice-payment">
                                        <div class="col-sm-7">
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="m-b-20">
                                                <div class="table-responsive no-border">
                                                    <table class="table mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th>Subtotal:</th>
                                                                <td class="text-right">
                                                                    ₹<?php echo  htmlentities($row->Sum_total);?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tax (GST): <span class="text-regular">(18%)</span>
                                                                </th>
                                                                <td class="text-right">
                                                                    ₹<?php echo  htmlentities($row->Gst_price);?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total:</th>
                                                                <td class="text-right text-primary">
                                                                    <h5>₹<?php echo  htmlentities($row->grand_total_pay);?>
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-info">
                                        <h5>Other information :</h5>
                                        <p class="text-muted">Your Invoice is due for payment on
                                            <?php echo  htmlentities($row->Due_date);?>. Please
                                            Check the Account you linked with our services.<br> Payment or Service
                                            Question? Call 987-6543-210.<br>Shakthi Technology Corporations, Bengaluru
                                            560101, India<br>&copy;2022 Shakthi all rights reserved.</p>
                                    </div>
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