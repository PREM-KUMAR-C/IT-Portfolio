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
    <title>Termination - Portfolio admin</title>

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

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

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
                            <h3 class="page-title">Termination</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Termination</li>
                            </ul>
                        </div>
                        <div class="col-auto float-right ml-auto">
                            <a href="#addnew" data-toggle="modal" class="btn add-btn">+ Add Termination</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <th>#</th>
                                    <th>Employee</th>
                                    <th>Department</th>
                                    <th>Termination Type</th>
                                    <th>Termination Date</th>
                                    <th>Reason</th>
                                    <th>Notice Date</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
											$sql = "SELECT * FROM termination";
											$query = $conn->query($sql);
											while($row = $query->fetch_assoc()){
										?>
                                    <tr>
                                        <td><?php echo $cnt;?></td>
                                        <td><?php echo $row['Employee']; ?></td>
                                        <td><?php echo $row['Department']; ?></td>
                                        <td><?php echo $row['Termin_type']; ?></td>
                                        <td><?php echo $row['Termin_date']; ?></td>
                                        <td><?php echo $row['Reason']; ?></td>
                                        <td><?php echo $row['Notice_date']; ?></td>
                                        <?php
										echo
												"<td>
													<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'> Edit</a>	
													<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'> Delete</a>
												</td>";
										?>
                                    </tr>
                                    <?php include('termin_add_edit_delete_modal.php'); $cnt=$cnt+1;
									}
									?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('termin_add_edit_delete_modal.php') ?>
    </div>

    </div>
    <!-- /Page Wrapper -->


    </div>
    <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

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

    <!-- Datatable JS -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>