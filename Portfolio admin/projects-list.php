<!--
/* 2022 Shakthi Prakash Copyright all rights reserved
Author       : Shakthi
Template Name: Shakthi - Portfolio Admin
*/
-->

<?php 
	session_start();
	error_reporting(0);
	include_once('includes/config.php');
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
    <title>Projects - Portfolio admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

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
                            <h3 class="page-title">Projects</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Project</li>
                            </ul>
                        </div>
                        <div class="col-auto float-right ml-auto">
                            <a href="#addnew" class="btn add-btn" data-toggle="modal">+ Add Project</a>
                            <div class="view-icons">
                                <a href="projects.php" title="Grid View" class="grid-view btn btn-link active"><i
                                        class="fa fa-th"></i></a>
                                <a href="projects-list.php" title="Tabular View" class="list-view btn btn-link"><i
                                        class="fa fa-bars"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <!-- Search Filter -->
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Project Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Project ID</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus">
                            <select class="select floating">
                                <option>Select Roll</option>
                                <option>Web Developer</option>
                                <option>Web Designer</option>
                                <option>Android Developer</option>
                                <option>Ios Developer</option>
                            </select>
                            <label class="focus-label">Designation</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div>
                <!-- /Search Filter -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <th>Project</th>
                                    <th>Project ID</th>
                                    <th>Leader</th>
                                    <th>Team</th>
                                    <th>Deadline</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
											$sql = "SELECT * FROM projects";
											$query = $conn->query($sql);
											while($row = $query->fetch_assoc()){
										?>
                                    <tr>
                                        <td><a
                                                href="project-view.php?id=<?php echo $row['id']; ?>"><?php echo $row['Project_name']; ?></a>
                                        </td>
                                        <td><?php echo $row['Project_id']; ?></td>
                                        <td>
                                            <ul class="team-members">
                                                <li>
                                                    <a href="#" data-toggle="tooltip"
                                                        title="<?php echo $row['leader_1'];?>"><img alt="picture"
                                                            src="img_projects/<?php echo $row['leader_1p'];?>"></a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="team-members text-nowrap">
                                                <li>
                                                    <a href="#" data-toggle="tooltip"
                                                        title="<?php echo $row['Team_1'];?>"><img alt="picture"
                                                            src="img_projects/<?php echo $row['Team_1p'];?>"></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="tooltip"
                                                        title="<?php echo $row['Team_2'];?>"><img alt="picture"
                                                            src="img_projects/<?php echo $row['Team_2p'];?>"></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="tooltip"
                                                        title="<?php echo $row['Team_3'];?>"><img alt="picture"
                                                            src="img_projects/<?php echo $row['Team_3p'];?>"></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="tooltip"
                                                        title="<?php echo $row['Team_4'];?>"><img alt="picture"
                                                            src="img_projects/<?php echo $row['Team_4p'];?>"></a>
                                                </li>
                                                <li class="dropdown avatar-dropdown">
                                                    <a href="#" class="all-users dropdown-toggle" data-toggle="dropdown"
                                                        aria-expanded="false">+15</a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td><?php echo $row['Deadline']; ?></td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <select class="btn btn-white btn-sm btn-rounded dropdown-toggle">
                                                    <option class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        href="#"><i class="fa fa-dot-circle-o text-success"></i> High
                                                    </option>
                                                    <option class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        href="#"><i class="fa fa-dot-circle-o text-danger"></i> Medium
                                                    </option>
                                                    <option class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        href="#"><i class="fa fa-dot-circle-o text-warning"></i> Low
                                                    </option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <select class="btn btn-white btn-sm btn-rounded dropdown-toggle">
                                                    <option class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        href="#"><i class="fa fa-dot-circle-o text-success"></i> Active
                                                    </option>
                                                    <option class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                                    </option>
                                                </select>
                                            </div>
                                        </td>
                                        <?php
											echo
												"<td>
													<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'> Edit</a>	
													<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'> Delete</a>
												</td>";
											?>
                                    </tr>
                                    <?php include('projects_add_edit_delete.php');
										}
										?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php include('projects_add_edit_delete.php') ?>
            </div>
            <!-- Page Wrapper -->
        </div>
        <!-- Main Wrapper -->
    </div>

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