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
    <title>Create Invoice - Portfolio admin</title>

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
                            <h3 class="page-title">Create Invoice</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Create Invoice</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-sm-12">
                        <form method="POST" action="invoice_add.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Client <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="Clients">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Project <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="Project_name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Company Name</label>
                                        <input class="form-control" type="text" name="Company">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Email</label>
                                        <input class="form-control" type="text" name="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Client Address</label>
                                        <input class="form-control" type="text" name="Address">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Billing Address</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Invoice Date</label>
                                        <div class="cal-icon">
                                            <input name="Invoice_date" class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Due Date <span
                                                class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input name="Due_date" class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Invoice Number <span
                                                class="text-danger">*</span></label>
                                        <input name="Invoice_id" readonly type="text" value="<?php echo '#INV-'.$id; ?>"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Tax</label>
                                        <input class="form-control" type="text" placeholder="GST" readonly disabled>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Bank Name <span
                                                class="text-danger">*</span></label>
                                        <input name="Bank_name" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Bank Address <span
                                                class="text-danger">*</span></label>
                                        <input name="Bank_address" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-white">
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-2">Item</th>
                                                    <th class="col-md-6">Description</th>
                                                    <th style="width:100px;">Unit Cost</th>
                                                    <th style="width:80px;">Qty</th>
                                                    <th>Amount</th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input class="form-control" type="text" name="Project_name">
                                                    </td>
                                                    <td style="width:500px">
                                                        <input name="Description" class="form-control" type="text">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" name="Project_cost">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" min="0" name="Qty"
                                                            id="Qty" onkeyup="add();">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" min="0" name="Amount"
                                                            id="Amount" onkeyup="add();">
                                                    </td>
                                                    <td><a href="javascript:void(0)" class="text-success font-18"
                                                            title="Add More"><i class="fa fa-plus"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-white">
                                            <tbody>
                                                <tr>
                                                    <td colspan="5" class="text-right">Total ₹</td>
                                                    <td><input name="Sum_total" type="text" class="form-control"
                                                            id="Sum_total" readonly>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="text-right">Tax (18% GST)</td>
                                                    <td><input name="Gst_price" type="text" class="form-control"
                                                            id="Gst_price" readonly>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="text-right">Discount %</td>
                                                    <td style="text-align: right; padding-right: 30px;width: 200px">
                                                        <input name="Discount_percentage" type="text"
                                                            class="form-control" id="discount-percentage"
                                                            onkeyup="getPrice()">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: right; font-weight: bold">
                                                        Grand Total ₹
                                                    </td>
                                                    <td>
                                                        <input name="grand_total_pay" class="form-control" type="text"
                                                            id="grand_total_pay" readonly>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Other Information</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer submit-section">
                                <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>
                                <button type="submit" name="add_invoice" class="btn btn-primary submit-btn"> Save</a>
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
    //Add
    function add() {
        var one = document.getElementById("Qty").value;
        var two = document.getElementById("Amount").value;
        var Total = parseFloat(one) * parseFloat(two);
        document.getElementById("Sum_total").value = Total;

        //For GST Calculations
        var GstTotal = (Total + Total * 0.18);
        document.getElementById("Gst_price").value = GstTotal;
    }

    //For Grand Total and discount
    getPrice = function() {
        var Discount_num = Number(document.getElementById("Gst_price").value);
        var Discount_percent = Number(document.getElementById("discount-percentage").value) / 100;
        var totalValue = Discount_num - Discount_num * Discount_percent;
        document.getElementById("grand_total_pay").value = totalValue.toFixed(2);
    };
    </script>

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