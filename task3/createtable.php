<?php
if (isset($_POST['createtablesubmit'])) {

include_once('dbcon.php');
$sql = "CREATE TABLE task3 (
Client VARCHAR(50) NOT NULL,
Deal VARCHAR(50) NOT NULL,
Hour VARCHAR(15) NOT NULL,
Accepted int(5) NOT NULL,
Refused int(5) NOT NULL
)";

if ($con->query($sql) == TRUE) {
  echo "<script>alert('Table task3 created successfully')</script>";
} else {
  echo "<script>alert('Error creating table ')</script>";
}
echo "<meta http-equiv='refresh' content='1;url=index.php' />";
}

else {
  echo "<script>alert('Error Happend try again')</script>";
  echo "<meta http-equiv='refresh' content='1;url=index.php' />";
}
 ?>
