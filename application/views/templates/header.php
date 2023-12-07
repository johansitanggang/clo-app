<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $judul; ?>
    </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/mycss.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->

            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li> -->


                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark" data-toggle="dropdown" href="#">
                        <i class="fas fa-user-alt mr-1"></i>
                        <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png"
                            alt="User Image" class="user-image img-circle" width="30"> -->
                        <?= $this->session->userdata('nama_dosen'); ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>

                <!-- start fullscreen -->
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li> -->
                <!-- end fullscreen -->

            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('dashboard'); ?>" class="brand-link">
                <img src="<?= base_url(); ?>assets/dist/img/logo-polibatam.jpg" alt="AdminLTE Logo"
                    class="brand-image img-circle" style="opacity: .5">
                <span class="brand-text">CLO Polibatam</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

                        <li class="nav-header " style="color: #000;">MAIN</li>

                        <li class="nav-item">
                            <a href="<?= base_url(); ?>dashboard" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>asesmen" class="nav-link">
                                <i class="nav-icon fa fa-chalkboard"></i>
                                <p>
                                    Assessment
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Assessment Summary
                                </p>
                            </a>
                        </li> -->
                        <li class="nav-header" style="color: #000;">SETUP</li>

                        <li class="nav-item">
                            <a href="<?= base_url(); ?>Course" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Course
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>MetodeAsesmen" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Assessment Method
                                </p>
                            </a>
                        </li>

                        <li class="nav-header" style="color: #000;">PROGRAM STUDI</li>

                        <li class="nav-item">
                            <a href="<?= base_url(); ?>jurusan" class="nav-link">
                                <i class="nav-icon fas fa-university"></i>
                                <p>
                                    Jurusan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>ProgramStudi" class="nav-link">
                                <i class="nav-icon fas fa-school"></i>
                                <p>
                                    Program Studi
                                </p>
                            </a>
                        </li>
                        <li class="nav-header" style="color: #000;">UTILITY</li>

                        <li class="nav-item">
                            <a href="<?= base_url(); ?>AssessmentType" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Assessment Type
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>GradingCategory" class="nav-link">
                                <i class="nav-icon fas fa-layer-group"></i>
                                <p>
                                    Grading Category
                                </p>
                            </a>
                        </li>




                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>