<?php 
include 'include/connection.php'; 

$id=$_GET['catid'];

$sql="delete from categorys where catid={$id}";

$result=mysqli_query($con,$sql) or die("query unsuccessfull");

header("Location: http://localhost/mnf/admin-home.php");

mysqli_close($con);

?>
