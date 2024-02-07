<?php include 'include/connection.php'; ?>
<?php

$id = $_GET['id'];



$sql="delete from orders where orderId = {$id};";

if($result=mysqli_query($con,$sql))
{
    echo "<script>alert('order Deleted')</script>";
    ?>
        <meta http-equiv = "refresh" content = "1; url= http://localhost/mnf/show-cart-data.php" />

    <?php
}
else
{
    echo "query failed";
}





?>