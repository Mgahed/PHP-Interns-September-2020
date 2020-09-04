<?php
error_reporting(0);
include_once('dbcon.php');
if (isset($_POST['importdatasubmit'])) {
$file = fopen('uploads/Task 3 CSV.csv','r');
while (!feof($file)) {
  $content = fgetcsv($file);
  $cnt = count($content);
  $flagmum = 999999;
  for ($i=0; $i < $cnt ; $i++) {
    // echo $content[$i] . "\t";
    $flagmum = $i;
  }

if ($content[$flagmum] == "refused") {

}
else {
  $client = $content[$flagmum-4];
  $deal = $content[$flagmum-3];
  $hour = $content[$flagmum-2];
  $accepted = $content[$flagmum-1];
  $refused = $content[$flagmum];
$sql = "INSERT INTO task3(Client,Deal,Hour,Accepted,Refused) VALUES('$client','$deal','$hour','$accepted','$refused')";

if ($con->query($sql) == TRUE) {

}


}
}

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
