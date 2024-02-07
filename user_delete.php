<?php include 'include/connection.php'; ?>
<?php include 'include/admin-header.php'; ?>

<?php

$id=  $_GET['id'];

$sql="delete from users where userId = {$id};";

if($result=mysqli_query($con,$sql))
{
    echo "<script>alert('Record Deleted')</script>";
    ?>
        <meta http-equiv = "refresh" content = "1; url= http://localhost/mnf/admin-user-view.php" />

    <?php
}
else
{
    echo "query failed";
}


?>
<?php include 'include/admin-footer.php'; ?>