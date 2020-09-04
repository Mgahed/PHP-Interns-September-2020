<?php
include_once('dbcon.php');
$sql = "SELECT * FROM task3";
$flag = $con->query($sql);
if ($flag) {
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>

  <!-- MDBootstrap Datatables  -->
<link href="css/addons/datatables.min.css" rel="stylesheet">
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Start your project here-->
  <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Client

      </th>
      <th class="th-sm">Deal

      </th>
      <th class="th-sm">Hour

      </th>
      <th class="th-sm">Accepted

      </th>
      <th class="th-sm">Refused

      </th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($row = $flag->fetch_array(MYSQLI_ASSOC)){
     ?>
    <tr>
      <td><?php echo $row['Client']; ?></td>
      <td><?php echo $row['Deal']; ?></td>
      <td><?php echo $row['Hour']; ?></td>
      <td><?php echo $row['Accepted']; ?></td>
      <td><?php echo $row['Refused']; ?></td>
    </tr>
  <?php }
  ?>
  </tbody>
  <tfoot>
    <tr>
      <th>Client
      </th>
      <th>Deal
      </th>
      <th>Hour
      </th>
      <th>Accepted
      </th>
      <th>Refused
      </th>
    </tr>
  </tfoot>
</table>
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="js/addons/datatables.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">
  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
  </script>

</body>
</html>

<?php
}
else {
  echo "<script>alert('Error or table not exist')</script>";
  echo "<meta http-equiv='refresh' content='1;url=index.php' />";
}
 ?>
