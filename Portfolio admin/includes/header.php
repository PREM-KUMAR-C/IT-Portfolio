<!--
/* 2022 Shakthi Prakash Copyright all rights reserved
Author       : Shakthi
Template Name: Shakthi - Portfolio Admin
*/
-->
<div class="header">
    <!-- Logo -->
    <div class="header-left">
        <a href="index.php" class="logo">
            <img src="./assets/img/logo.svg" alt="logo" width="55" height="35">
        </a>
    </div>
    <!-- /Logo -->

    <a id="toggle_btn" href="javascript:void(0);">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <!-- Header Title -->
    <div class="page-title-box">
        <h3>Shakthi Technologies</h3>
    </div>
    <!-- /Header Title -->

    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><img src="./assets/img/images/menu hamburger.svg" alt="menu"
            width="25" height="30"></a>

    <!-- Header Menu -->
    <ul class="nav user-menu">

        <!-- Search -->
        <li class="nav-item">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <img src="./assets/img/images/search.svg" alt="search" width="20" height="30">
                </a>
                <form action="search.php">
                    <input class="form-control" type="text" placeholder="Search here">
                    <button class="btn" type="submit"><img src="./assets/img/images/search.svg" alt="search" width="20"
                            height="30"></button>
                </form>
            </div>
        </li>
        <!-- /Search -->



        <!-- Notifications -->
        <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <img src="./assets/img/images/bell.svg" alt="notification" width="25" height="50"> <span
                    class="badge badge-pill">4</span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="activities.php">
                                <div class="media">
                                    <span class="avatar">
                                        <img alt="" src="assets/img/profiles/avatar arjun.svg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Arjun</span> added new task
                                            <span class="noti-title">Patient appointment booking</span>
                                        </p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.php">
                                <div class="media">
                                    <span class="avatar">
                                        <img alt="" src="assets/img/profiles/avatar vasishta.svg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Vasishta</span> changed the
                                            task name <span class="noti-title">Appointment booking with payment
                                                gateway</span></p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.php">
                                <div class="media">
                                    <span class="avatar">
                                        <img alt="" src="assets/img/profiles/avatar pulakesi.svg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Agastya</span> added <span
                                                class="noti-title">Rukmini</span> and <span
                                                class="noti-title">Parvathi</span> to project <span
                                                class="noti-title">Doctor available module</span></p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.php">
                                <div class="media">
                                    <span class="avatar">
                                        <img alt="" src="assets/img/profiles/avatar prithviraj.svg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Bharadwaj</span> completed task
                                            <span class="noti-title">Patient and Doctor video conferencing</span>
                                        </p>
                                        <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.php">
                                <div class="media">
                                    <span class="avatar">
                                        <img alt="" src="assets/img/profiles/avatar ranjith singh.svg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Goutama</span> added new task
                                            <span class="noti-title">Private chat module</span>
                                        </p>
                                        <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="activities.php">View all Notifications</a>
                </div>
            </div>
        </li>
        <!-- /Notifications -->

        <!-- Message Notifications -->
        <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <img src="./assets/img/images/message.svg" alt="projects" width="23" height="30"> <span
                    class="badge badge-pill">6</span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Messages</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="chat.php">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img alt="" src="assets/img/profiles/avatar sukarna.svg">
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Sukarna </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="chat.php">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img alt="" src="assets/img/profiles/avatar arjun.svg">
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Arjun</span>
                                        <span class="message-time">6 Mar</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="chat.php">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img alt="" src="assets/img/profiles/avatar vasishta.svg">
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Vasishta </span>
                                        <span class="message-time">5 Mar</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="chat.php">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img alt="" src="assets/img/profiles/avatar nakula.svg">
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Nakula</span>
                                        <span class="message-time">3 Mar</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="chat.php">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img alt="" src="assets/img/profiles/avatar lachit.svg">
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Govind </span>
                                        <span class="message-time">27 Feb</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="chat.php">View all Messages</a>
                </div>
            </div>
        </li>
        <!-- /Message Notifications -->

        <?php 
		$sql = "SELECT * from users";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;
		?>

        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">

                <span><?php echo htmlentities(ucfirst($_SESSION['userlogin']));?></span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.php">My Profile</a>
                <a class="dropdown-item" href="settings.php">Settings</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </li>
    </ul>
    <!-- /Header Menu -->

    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.php">My Profile</a>
            <a class="dropdown-item" href="settings.php">Settings</a>
            <a class="dropdown-item" href="login.php">Logout</a>
        </div>
    </div>
    <!-- /Mobile Menu -->

</div>