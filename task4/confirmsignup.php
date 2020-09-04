<?php
session_start();
include_once('dbcon.php');
if (isset($_POST['submit'])) {
  $name = $_SESSION["name"];
  $mail = $_SESSION["mail"];
  $password = $_SESSION["password"];
  $number = $_SESSION["number"];
  $address = $_SESSION["address"];
$sql = "INSERT INTO UserInfo(Name,Mail,Password,Numberr,Address) VALUES('$name','$mail','$password','$number','$address')";
$flag = $con->query($sql);
if ($flag) {
  unset($_SESSION['password']);
  unset($_SESSION['number']);
  unset($_SESSION['address']);
  echo "<script>alert('Information submited successfully')</script>";
  echo "<meta http-equiv='refresh' content='1;url=home.php' />";
}
else {
  echo "<script>alert('Error happened or may some info already exist')</script>";
  echo "<meta http-equiv='refresh' content='1;url=index.php' />";
}
}
 ?>
