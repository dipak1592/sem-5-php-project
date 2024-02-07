<?php include 'include/connection.php'; ?>
<?php
$id= $_GET['id'];

//echo $id;

$query ="delete from reviews where reviewId = {$id};";
$result = mysqli_query($con,$query);
if($result)
{
     echo "<script>alert('Record Deleted')</script>";
    ?>
        <meta http-equiv = "refresh" content = "1; url= http://localhost/mnf/admin-review-view.php" />

    <?php
}
else
{
    echo "query failed";
}
?>
