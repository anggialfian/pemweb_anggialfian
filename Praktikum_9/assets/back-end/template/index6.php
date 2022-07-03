<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebAdmin | BMI Calculator</i></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.html" class="nav-link">Home</a>
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
            <form class="w-100 d-flex justify-content-center">
              <div class="input-group input-group-sm w-75">
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
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">WebAdmin 2.0</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/kafe3.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Franss Mukti</a>
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
            <li class="nav-item menu-is-opening">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Praktikum 1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index2.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Praktikum 2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index3.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Praktikum 3</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index4.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Praktikum 4</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index5.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Praktikum 5</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="./index6.php" class="nav-link active">
                <i class="nav-icon fas fa-calculator"></i>
                <p>
                  BMI Calculator
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Midterm Project</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Midterm Project</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">BMI Calculator</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- Require File -->
          <?php
          require_once 'class_pasien.php';
          require_once 'class_BMI.php';
          // require_once 'class_BMIPasien.php';
          ?>
          <!-- Card Body -->
          <div class="card-body">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <h1 class="text-center display-4 text-capitalize font-weight-lighter" style="color: #00BC8C;">body mass index calculator</h1>
                  <form method="POST" name="formbmi" style="border: 3px solid black;" class="overflow-hidden bg-white rounded-lg p-3 shadow-lg" action="index6result.php">
                    <div class="mx-auto mb-3 w-50 overflow-hidden text-white">
                      <div class="card-body text-center bg-success rounded-lg">
                        <label class="">GENDER</label>
                        <div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_0" type="radio" required="required" class="custom-control-input gender" value="L">
                            <label for="gender_0" class="custom-control-label">Man</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_1" type="radio" required="required" class="custom-control-input gender" value="P">
                            <label for="gender_1" class="custom-control-label">Woman</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-around gap-5">
                      <label class="form-label">Nama Pasien</label>
                      <input id="nama" pattern="[A-Za-z ]{1,}" title="Hanya Huruf" name="nama" type="text" class="form-control w-auto" placeholder="Input Nama" required="required">
                    </div>
                    <div class="mb-3 d-flex justify-content-around gap-5">
                      <label class="form-label">Berat Badan</label>
                      <input name="bb" id="bb" type="text" class="form-control w-auto" pattern="[0-9]{1,3}" title="Hanya Angka" placeholder="Input Body Weight" required="required">
                    </div>
                    <div class="mb-3 d-flex justify-content-around gap-5">
                      <label class="form-label">Tinggi Badan</label>
                      <input name="tb" id="tb" type="text" class="form-control w-auto" pattern="[0-9]{1,3}" title="Hanya Angka" placeholder="Input Body Height" required="required">
                    </div>
                    <div class="mb-3">
                      <button class="btn btn-success d-block mx-auto w-100">Calculate</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <footer class="text-muted">Develop By @<a href="#">FranssMukti</a> &copy;2022</footer>
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="#">WebAdmin.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>