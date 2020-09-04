<?php
include_once('dbcon.php');
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <form action="createtable.php" method="post">
        <label>Create Task3 Table</label>
        <br><br>
        <input type="submit" name="createtablesubmit" value="Create Table">
      </form>
      <br>

      <label>Upload File</label>
      <br>
      <form action="upload.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <input type="submit" name="filesubmit" value="Upload">
      </form>
      <br>

      <label>Import data from CSV to DataBase</label>
      <br><br>
      <form action="importdata.php" method="post">
        <input type="submit" name="importdatasubmit" value="Import Data from csv to DataBase">
      </form>
      <br>

      <label>See the data imported</label>
      <br><br>
      <form action="seedata.php" method="post">
        <input type="submit" name="seedatasubmit" value="See data imported">
      </form>
      <br>

      <label>Drop Task3 Table</label>
      <br><br>
      <form action="droptable.php" method="post">
        <input type="submit" name="droptablesubmit" value="Drop Table">
      </form>
  </center>
  </body>
</html>
