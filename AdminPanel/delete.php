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
<body>

<?php

if(isset($_POST['btndelete']))

{
    $sql = "DELETE FROM product WHERE p_id='$pid'";

    if (mysqli_query($link, $sql)) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . mysqli_error($link);
    }
    
    mysqli_close($link);
}

?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     Are u sure!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="btndelete">Confirm</button>
      </div>
    </div>
  </div>
</div>


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
	echo"<td><a>Update</a></td>";
	echo"<td><a data-toggle='modal' data-target='#exampleModal'>Delete</a></td>";
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
<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../js/all.min.js"></script>
   
</body>
</html>
