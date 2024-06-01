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
                 <a href="https://www.instagram.com/rezzaarieff/?igsh=MWswbWdwdnhoNXhleQ%3D%3D" class="d-block">Reza Arif <br> Sistem Informasi 2023</a>
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
                             <a href="src/pages/lokasi/index.php" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Lokasi</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="src/pages/laporan_cuaca/index.php" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Laporan Cuaca</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="src/pages/ramalan_cuaca/index.php" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Ramalan Cuaca</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="src/pages/tipe_cuaca/index.php" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Tipe Cuaca</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                
              <a href="src/pages/login.php" class="nav-link">
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