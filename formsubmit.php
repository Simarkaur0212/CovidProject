<?php
include 'conn.php';
if(isset($_POST['submit'])){
  $uname=$_POST['uname'];
  $email=$_POST['mail'];
  $no=$_POST['mobile'];
  $symp=$_POST['coronasym'];
  $msg=$_POST['msg'];

  $chk="";

  foreach ($symp as $chk1) {
    $chk .= $chk1.",";
  }

  $insertquery =  "INSERT INTO contact(username,email,mobile,symptoms,message) values('$uname','$email','$no','$chk','$msg')";

  $query = mysqli_query($con, $insertquery);

  if($query){
  ?>
  <script>
    alert("Inserted Successful");
  </script>
  <?php

  }
  else{
    echo mysqli_error($con);
  }
}
?>
