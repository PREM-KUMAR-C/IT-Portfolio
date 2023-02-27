<!--
/* 2022 Shakthi Prakash Copyright all rights reserved
Author       : Shakthi
Template Name: Shakthi - Portfolio Admin
*/
-->
<div class="sidebar" id="sidebar">
    <?php 
		$sql = "SELECT * from users";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;
		?>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="submenu">
                    <a href="#"><img src="./assets/img/images/compass.svg" alt="compass" width="25" height="30"> <span>
                            Dashboard</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="index.php">Admin Dashboard</a></li>
                        <li><a href="employee-dashboard.php">Employee Dashboard</a></li>
                    </ul>
                </li>

                <li class="menu-title">
                    <span>Employees</span>
                </li>
                <li class="submenu">
                    <a href="#" class="noti-dot"><img src="./assets/img/images/employer.svg" alt="employee" width="25"
                            height="30"> <span> Employees</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="employees.php">All Employees</a></li>
                        <li><a href="leaves-employee.php">Employee Leave</a></li>
                        <li><a href="department.php">Departments</a></li>
                        <li><a href="designations.php">Designations</a></li>
                        <li><a href="timesheet.php">Timesheet</a></li>
                    </ul>
                </li>
                <li>
                    <a href="clients.php"><img src="./assets/img/images/clients.svg" alt="clients" width="25"
                            height="30"> <span>Clients</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><img src="./assets/img/images/rocket.svg" alt="project" width="25" height="30"> <span>
                            Projects</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="projects.php">Projects</a></li>
                    </ul>
                </li>
                <li>
                    <a href="leads.php"><img src="./assets/img/images/leads.svg" alt="leads" width="25" height="30">
                        <span>Leads</span></a>
                </li>

                <li class="menu-title">
                    <span>HR</span>
                </li>
                <li class="submenu">
                    <a href="#"><img src="./assets/img/images/accounts.svg" alt="accounts" width="25" height="30">
                        <span> Accounts </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="invoices.php">Invoices</a></li>
                        <li><a href="payments.php">Payments</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><img src="./assets/img/images/rupee.svg" alt="rupee" width="25" height="30"> <span>
                            Payroll </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="salary.php"> Employee Salary </a></li>
                    </ul>
                </li>




                <li><a href="promotion.php"><img src="./assets/img/images/bullhorn.svg" alt="bullhorn" width="25"
                            height="30"> <span>Promotion</span></a></li>
                <li><a href="resignation.php"><img src="./assets/img/images/resignation.svg" alt="resign" width="25"
                            height="30"> <span>Resignation</span></a></li>
                <li><a href="termination.php"><img src="./assets/img/images/danger.svg" alt="terminate" width="25"
                            height="30"> <span>Termination</span></a></li>
                <li class="menu-title">
                    <span>Administration</span>
                </li>



                <li>
                    <a href="users.php"><img src="./assets/img/images/users add.svg" alt="users" width="25" height="30">
                        <span>Users</span></a>
                </li>
                <li>
                    <a href="settings.php"><img src="./assets/img/images/settings.svg" alt="settings" width="25"
                            height="30"> <span>Settings</span></a>
                </li>
                <li>
                    <a href="logout.php"><img src="./assets/img/images/logout.svg" alt="logout" width="25" height="30">
                        <span>Logout</span></a>
                </li>

            </ul>
        </div>
    </div>
</div>