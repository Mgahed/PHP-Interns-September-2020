<?php
if (isset($_POST['filesubmit'])) {
  $filename = $_FILES['file']['name'];
  $filetmp = $_FILES['file']['tmp_name'];
  $filedistenation = 'uploads/' . $filename;
  move_uploaded_file($filetmp, $filedistenation);
}
else {
  echo "<script>alert('Error Happend try again')</script>";
  echo "<meta http-equiv='refresh' content='1;url=index.php' />";
}
 ?>
