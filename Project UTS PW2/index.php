<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Reports</title>
    <!-- Bootstrap CSS -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../Project UTS PW2/src/assets/css/all.min.css" type="text/css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" type="text/css" href="../Project UTS PW2/src/assets/css/OverlayScrollbars.min.css" type="text/css">
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="../Project UTS PW2/src/assets/css/adminlte.min.css">
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather</title>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="src/pages/data_lokasi.php" class="nav-link">Data Lokasi</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="src/pages/data_laporan_cuaca.php" class="nav-link">Data Laporan Cuaca</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="src/pages/data_ramalan_cuaca.php" class="nav-link">Data Ramalan Cuaca</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="src/pages/data_tipe_cuaca.php" class="nav-link">Data Tipe Cuaca</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="#" class="brand-link">
         <img src="src/assets/img/weather-logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Weather Reports</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="src/assets/img/formal.jpg" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="https://www.instagram.com/rezzaarieff/?igsh=MWswbWdwdnhoNXhleQ%3D%3D" class="d-block">Reza Arif <br> Sistem Informasi 2023 </a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Data 
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                     <li class="nav-item">
                             <a href="src/pages/data_lokasi.php" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Lokasi</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="src/pages/data_laporan_cuaca.php" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Laporan Cuaca</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="src/pages/data_ramalan_cuaca.php" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Ramalan Cuaca</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="src/pages/data_tipe_cuaca.php" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Tipe Cuaca</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                
              <a href="app/login.php" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
               <p> Logout </p>
             </a>
         </li>    
          


             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside> 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ramalan Cuaca</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">BMKG Lite </h2>


                        </div>
                        <div class="card-body" height="1500" width="150">
                            <p>Tau ga persamaan kamu sama cuaca? Sama-sama susah ditebak
                            <img src="src/assets/img/SadCloud.png" alt="Sad Cloud" height="80" width="80">
                            </p>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'src/layouts/footer.php';
?>