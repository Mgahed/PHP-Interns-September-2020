<?php
if (isset($_POST['droptablesubmit'])) {

include_once('dbcon.php');
$sql = "DROP TABLE task3";

if ($con->query($sql) == TRUE) {
  echo "<script>alert('Table task3 deleted successfully')</script>";
} else {
  echo "<script>alert('Error deleting table')</script>";
}
echo "<meta http-equiv='refresh' content='1;url=index.php' />";
}

else {
  echo "<script>alert('Error Happend try again')</script>";
  echo "<meta http-equiv='refresh' content='1;url=index.php' />";
}
 ?>
