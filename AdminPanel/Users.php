<?php
include("config.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../CSS/tempusdominus-bootstrap-4.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../CSS/all.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../CSS/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../CSS/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../CSS/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../CSS/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../CSS/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../CSS/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="../CSS/googleleaps.css" rel="stylesheet">



</head>

<body  class="hold-transition sidebar-mini layout-fixed">
  <div id="myDiv" class="wrapper">

 

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="./index.php" class="nav-link">Home</a>
        </li>
      </ul>

      
   
    </nav>
    <!-- /.navbar -->

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
          <span class="brand-text font-weight-light">Admin</span>
        </a>
  
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="./img/Profile.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Ultra Legend</a>
            </div>
          </div>
  
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  
              <li class="nav-item">
                <a href="./Users.php" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Orders.php" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Products.php" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Products
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Events.php" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Events</p>
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
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Total Users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Agents -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Total Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Created At</th>
                    <th> Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  <?php
 
 $fetch = "select * from users";
 $result = $link->query($fetch);

if($result->num_rows > 0)
{
 while($row = $result->fetch_array())
 {
   echo "<tr>";
   echo "<td>" . $row['id'] . "</td>";
 	echo "<td>" . $row['username'] . "</td>";
 	echo "<td>" . $row['password'] . "</td>";
	 echo "<td>" . $row['created_at'] . "</td>";
	 echo "<td>" . "<a href='User_Delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span>Remove</span></a>" . "</td>";
 	echo "</tr>";
 }
}
?>
                  
                 
                  </tbody>
           
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
  
  
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- End -->
    
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer text-center">
      <strong>Copyright &copy; 2020</strong>
      <span>All rights reserved </span>.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="./../JS/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="./../JS/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="./../JS/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="./../JS/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="./../JS/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="./../JS/jquery.vmap.min.js"></script>
  <script src="./../JS/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="./../JS/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="./../JS/moment.min.js"></script>
  <script src="./../JS/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="./../JS/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="./../JS/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="./../JS/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./../JS/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="./../JS/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="./../JS/demo.js"></script>
  <script src="./../JS/all.min.js"></script>



</body>

</html>