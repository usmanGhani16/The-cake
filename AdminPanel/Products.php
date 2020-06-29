<?php
include 'config.php';
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
            <h1>Add Products</h1>
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
        <!-- Input addon -->
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Add New Product</h3>
            </div>
            <div class="card-body">

            <form method="post" enctype="multipart/form-data">


            <div class="custom-file mb-3">
            <label>Product Image</label>
            <br>
            <input type="file" name="p-file">
            </div>

              <div class="input-group mt-3 mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Product Name" name="product_name">
              </div>


                <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rs.</span>
                </div>
                <input type="text" class="form-control" placeholder="Price" name="product_price">
              </div>
          

            <!-- /.card-body -->
            <div class="card-footer">
            <input type="submit" value="Upload" name="btnsubmit">
            </div>
              </form>

              <!--Add New Product  -->
<?php
if(isset($_POST['btnsubmit']))
{
$pn = $_POST['product_name'];
$pprice = $_POST['product_price'];

if(isset($_FILES['p-file']['name']))
{
	
$file_get = $_FILES['p-file']['name'];
$temp = $_FILES['p-file']['tmp_name'];


$file_to_be_saved = "uploads/".$file_get;  
move_uploaded_file($temp, $file_to_be_saved);
$sql = "insert into product(p_file, p_name, p_price) values('$file_to_be_saved','$pn', '$pprice')";

if($link->query($sql))
{
	echo "File Uploaded";
}
else
{
	echo "Error";
	}	
}
}
?>

        
          </div>
          <!-- /.card -->
      </div>
    </section>
    

      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Edit Events</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Add New Events</h3>
                  </div>
                  <div class="card-body">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Event Title">
                    </div>
      
                    <div class="form-group">
                        <label>Event Type</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
      
                    <div class="form-group">
                        <label>Event Description</label>
                        <textarea class="form-control" rows="3" placeholder="Description"></textarea>
                      </div>
      
                      <div class="form-group">
                          <label>Date range:</label>
        
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control float-right" id="reservation" placeholder="12/12/2019 - 13/12/2019">
                          </div>
                          <!-- /.input group -->
                        </div>
                        
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button id="btnSubmit5t" class="btn btn-info">
                        Publish Event !
                    </button>
                </div>
                </div>
                <!-- /.card -->
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-info">Add</button>
              </div>
          </div>
      </div>
  </div>
  <!-- End -->


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Product Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Image</th>
                  <th>Cake</th>
                  <th>Price</th>
                  <th>Edit</th>
                  <th> Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                 <!--Product data fetch  -->
                <?php

$fetch = "select * from product";
$result = $link->query($fetch);


while ($row = $result->fetch_array()) 
{
	echo "<tr>";
?>
<td><img class="img-responsive"  style="height:100px;width:100px;"  src="<?php echo $row[1] ?>"></td>

<?php
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
	echo"<td><a href='product_update.php?id=".$row['p_id']."'>Update</a></td>";
	echo"<td><a href='product_delete.php?id=".$row['p_id']."'>Delete</a></td>";
	echo "</tr>";
}

?>

                </tr>
               
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
