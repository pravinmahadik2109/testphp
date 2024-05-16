<?php
$username="id22117411_root";
$password="Pravin@123";
$dbname="id22117411_diemscse_erp";
$servername="localhost";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
echo "DB Connected";
else
die("Error".mysqli_connect_error());
?>