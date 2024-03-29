<?php
session_start();

if (!isset($_SESSION['suc_log'])) {
    header("Location:login.php");
}
include("functions/connect.php");

// $USER_PRIVILEGES_SESSION = $_SESSION['user_info']['priv'];
$USER_PRIVILEGES_SESSION = $_SESSION['suc_log'][$_SESSION['user']]['priv'];
// echo $USER_PRIVILEGES_SESSION;

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Edited</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .err-msg {
            color: red;
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">My Pro <sup>1</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php
                                if ($status === "dashboard") {
                                    echo "active";
                                } ?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                ADMINS
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php
                                if ($status === "ADMINS") {
                                    echo "active";
                                } ?>">
                <a class="nav-link" href="ADMINS.php">
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                    <span>ADMINS</span></a>
            </li>


            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Messages
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php
                                if ($status === "messages") {
                                    echo "active";
                                } ?>">
                <a class="nav-link" href="Messages.php">
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                    <span>Messages</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Products
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?php
                                if ($status === "Products") {
                                    echo "active";
                                } ?>">
                <a class="nav-link collapsed" href="products.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>products</span>
                </a>
                <!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Custom Components:</h6>
                                <a class="collapse-item" href="buttons.html">Buttons</a>
                                <a class="collapse-item" href="cards.html">Cards</a>
                            </div>
                        </div> -->
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                logout
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="logout.php">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    <span>LogOut</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->