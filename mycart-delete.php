<?php include 'include/connection.php'; ?>

<?php

$cartId = $_GET['cartId'];

$delete_query = "delete from addtocarts where cartId=$cartId";

$result = mysqli_query($con,$delete_query);

if($result)
{
    echo "<script>alert('Item Deleted')</script>";
    echo "<script>window.location.href='mycart.php'</script>";
}

?>