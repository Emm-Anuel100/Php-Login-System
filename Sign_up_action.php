
<?php

require_once("conn.php"); #require connection file

$username = mysqli_real_escape_string($conn, $_POST["username"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password =  mysqli_real_escape_string($conn, $_POST["password"]);
$notify = mysqli_real_escape_string($conn, $_POST["notify"]);

$password = password_hash($password, PASSWORD_DEFAULT); // hash password before saving to database

$sql = "INSERT INTO users (username,email,password,notify)
  VALUES('$username','$email','$password','$notify')";

  if ($conn ->query($sql) === TRUE) {
   # code...
   ?>
   <script type="text/javascript" lang="javascript">
   alert("successfull");
   </script>
   <?php
  } else {
   # code...
   ?>
      <script type="text/javascript" lang="javascript">
      alert("error signing up");
   </script>
   <?php
  }
?>
