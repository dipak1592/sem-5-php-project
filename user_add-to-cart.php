<?php include 'include/connection.php';?>

<?php
session_start();
if(isset($_SESSION['user']))
{
   $_SESSION['product_Id']= $proId = $_GET['proId'];
   
    $userId = $_SESSION['user']['userId'];

    
  
 $query = "select * from products where proId=$proId";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);


$qty = 1;
// $price=$_POST['proPrice'];
// $totalprice= $qty * $price;
// $totalprice=
// $price=$_SESSION['price'];

// $totalprice= $qty * $price;
// $totalprice=$_SESSION['pricetotal'];

$query="insert into addtocarts (proId,userId,qty) values ($proId,$userId,1)";
$result = mysqli_query($con,$query);

if($result)
{
    
    echo "<script> window.location.href='mycart.php' </script>";
}
else
{
    // echo "<script> alert('Item Not Inserted') </script>";
    echo mysqli_error($con);
    
}
}

if(!isset($_SESSION['user']))
{
    echo "<script> window.location.href='login.php' </script>";
}

?>