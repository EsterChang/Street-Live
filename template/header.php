<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- Bootstrap select pluings -->
        <link href="/assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />

        <!-- c3 plugin css -->
        <link rel="stylesheet" type="text/css" href="/assets/libs/c3/c3.min.css">

        <!-- App css -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
        
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notifications
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon">
                                        <div class="notify-icon bg-warning">
                                        <i class="mdi mdi-bell-outline"></i>
                                    </div>
                                    <p class="notify-details">Performer Update</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Steve Smith is live right now at the corner of 10th and 11th St.!</small>
                                    </p>
                                </a>

                    
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="/assets/images/default-user-icon.jpg" alt="user-image" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome *username*!</h6>
                            </div>

                            <!-- item-->
                            <a href="/me/profile" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="/me/settings" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>
                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="/auth/logout" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="/" class="logo text-center">
                        <span class="logo-lg">
                            <img src="/assets/images/streets-live-logo.png" alt="" height="60">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src="/assets/images/streets-live-logo.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
        
                    <li class="dropdown d-none d-lg-block ">
                        <div class="lang-option">
                            <select class="selectpicker form-control" title="" data-width="110px">
                                <option> English </option>
                                <option> German </option>
                            </select>
                        </div>
            
                    </li>

                </ul>
            </div>
            <!-- end Topbar -->

            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Street Performers</li>

                            <li<?php if ($active == '/') { echo ' class="mm-active"'; } ?>>
                                <a href="/"<?php if ($active == '/') { echo ' class="active"'; } ?>>
                                    <i class="fe-map"></i>
                                    <span class="badge badge-success badge-pill float-right">1</span> <!-- show how manty are live -->
                                    <span> Live Map </span>
                                </a>
                            </li>

                            <li<?php if (preg_match('@^/browse@i', $active)) { echo ' class="mm-active"'; } ?>>
                                <a href="javascript: void(0);">
                                    <i class="fe-list"></i>
                                    <span> Browse </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="/browse"<?php if ($active == '/browse') { echo ' class="active"'; } ?>>All</a></li>
                                    <li><a href="/browse/singers"<?php if ($active == '/browse/singers') { echo ' class="active"'; } ?>>Singers</a></li>
                                    <li><a href="/browse/musicians"<?php if ($active == '/browse/musicians') { echo ' class="active"'; } ?>>Musicians</a></li>
                                    <li><a href="/browse/dancers"<?php if ($active == '/browse/dancers') { echo ' class="active"'; } ?>>Dancers</a></li>
                                    <li><a href="/browse/others"<?php if ($active == '/browse/others') { echo ' class="active"'; } ?>>Others</a></li>
                                </ul>
                            </li>
							
							<li<?php if ($active == '/streams') { echo ' class="mm-active"'; } ?>>
                                <a href="/streams"<?php if ($active == '/streams') { echo ' class="active"'; } ?>>
                                    <i class="fe-video"></i>
                                    <span class="badge badge-success badge-pill float-right">1</span> <!-- show how manty are live -->
                                    <span> Streams </span>
                                </a>
                            </li>

                            <li class="menu-title mt-2">Me</li>

							<li<?php if ($active == '/me/stream') { echo ' class="mm-active"'; } ?>>
                                <a href="/me/stream"<?php if ($active == '/me/stream') { echo ' class="active"'; } ?>>
                                    <i class="fe-play"></i>
                                    <span> Start a Stream </span>
                                </a>
                            </li>
							
                            <li<?php if ($active == '/me') { echo ' class="mm-active"'; } ?>>
                                <a href="/me"<?php if ($active == '/me') { echo ' class="active"'; } ?>>
                                    <i class="fe-user"></i>
                                    <span> Profile </span>
                                </a>
                            </li>
							
							<li<?php if ($active == '/me/settings') { echo ' class="mm-active"'; } ?>>
                                <a href="/me/settings"<?php if ($active == '/me/settings') { echo ' class="active"'; } ?>>
                                    <i class="fe-settings"></i>
                                    <span> Settings </span>
                                </a>
                            </li>
							
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
			<div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
						