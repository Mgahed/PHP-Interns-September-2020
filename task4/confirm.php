<?php
session_start();
if (isset($_POST['submit'])) {
$_SESSION["name"] = $_POST['name'];
$_SESSION["mail"] = $_POST['mail'];
$_SESSION["password"] = $_POST['password'];
$_SESSION["number"] = $_POST['number'];
$_SESSION["address"] = $_POST['address'];

echo "name is " . $_SESSION["name"] . "<br><br>";
echo "mail is " . $_SESSION["mail"] . "<br><br>";
echo "password is " . $_SESSION["password"] . "<br><br>";
echo "Number is " . $_SESSION["number"] . "<br><br>";
echo "Address is " . $_SESSION["address"] . "<br><br>";

 ?>
 <html lang="en" dir="ltr">
   <head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   </head>
   <body class="jumbotron">
     <form action="confirmsignup.php" method="post">
       <a style="float: right;" href="index.php"><button class="btn btn-danger" type="button" name="button">Cancel Signup</button></a>
       <input class="btn btn-primary" type="submit" name="submit" value="Confirm Information">
     </form>
   </body>
 </html>
<?php

}
else {
  echo "<script>alert('Somthing Wrong');</script>";
  header("Location: index.php");
} ?>
