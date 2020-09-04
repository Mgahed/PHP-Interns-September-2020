<?php
session_start();
include_once('dbcon.php');
if (isset($_POST['submit'])) {
$mail = $_POST['mail'];
$password = $_POST['password'];
$sql = "SELECT * FROM UserInfo WHERE Mail = '$mail'";
$flag = $con->query($sql);
$row = $flag->fetch_array(MYSQLI_ASSOC);

if ($password == $row["Password"]) {

  $_SESSION["mail"] = $row["Mail"];
  $_SESSION["name"] = $row["Name"];
  header("Location: home.php");
}
else {
  echo "<script>alert('Error in login check your details');</script>";
  echo "<meta http-equiv='refresh' content='1;url=login.php' />";
}
}
else {
  echo "<script>alert('Somthing Wrong');</script>";
  echo "<meta http-equiv='refresh' content='1;url=login.php' />";
} ?>
