<?php
session_start();
if (isset( $_SESSION["mail"])){
  ?>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-danger" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
  <div class="jumbotron">
  <div class="card-body">
    <h5 class="card-title">Welcome <?php echo $_SESSION["name"]; ?></h5>
  </div>
</div>
</div>
  </body>
</html>
<?php }
else {
  echo "<script>alert('Fail to go to home page')</script>";
  echo "<meta http-equiv='refresh' content='1;url=login.php' />";

} ?>
