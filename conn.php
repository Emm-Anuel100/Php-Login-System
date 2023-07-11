<?php

$host = 'localhost';
$username =  'root';
$dbname = 'kryptip_db';
$password = '';

$conn = new mysqli ($host,$username,$dbname,$password);
mysqli_select_db($conn, $dbname);

if ($conn->connect_error) {
   # code...
   die("connection failed!" .$conn->connect_error);
}

?>
