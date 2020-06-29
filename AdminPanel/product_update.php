<?php
include 'config.php';
Session_start();
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../CSS/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../CSS/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../CSS/adminlte.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="../CSS/daterangepicker.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="../CSS/googleleaps.css" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="../index.php" class="nav-link">Home</a>
    </li>
    
  </ul>


  
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
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
        <img src="./dist/img/user3-128x128.jpg" class="img-circle elevation-2" alt="User Image">
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
            <i class="nav-icon  fas fa-th"></i>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Add On Form -->
    <section>
      <div class="container">
        
      <?php


$p_id = $_GET['id'];
$_SESSION['p_id'] = $p_id;


$query = "select * from product where p_id='$p_id'";
$result = $link->query($query);

while($row = $result->fetch_array())
{

?>


<div class="container">

<form action=""   method="post" enctype="multipart/form-data">

<div class="input-group mt-3 mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" value="<?php echo $row['p_name'] ?>" name="name">
              </div>


              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rs.</span>
                </div>
                <input type="text" class="form-control"  value="<?php echo $row['p_price'] ?>" name="price">
              </div>

              <div class="custom-file mb-3">
            <label>Product Image</label>
            <br>
            <input type="file" name="file">
            </div>


    <div class="mt-3">
      <img src="<?php echo $row['p_file'] ?>" width="150px" height="150px">
    </div>
  
  <button type="submit" class="btn btn-default mt-3" name="btnupdate">Update</button>

</form>
</div>

<?php
}
?>

<?php


if(isset($_FILES['file']['name']) )

{
    $pid = $_SESSION['p_id'];
    $pn = $_POST['name'];
    $pprice = $_POST['price'];

    $file_name= $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name'];

    $save_file = "uploads/".$file_name;

     move_uploaded_file($temp_name, $save_file);

    $query2 = "UPDATE product SET p_name='$pn' , p_price='$pprice', p_file='$save_file' where p_id='$pid'";

if($link->query($query2))

{ 
  echo "<script>window.location.href='Products.php'</script>";
}

else
{echo "Not Updated!";}
}

?>      
        
      </div>
    </section>
    

    



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.1
    </div>
    <strong>Copyright &copy; 2020 <a href="index.php">The Cake</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../js/all.min.js"></script>
   
</body>
</html>
