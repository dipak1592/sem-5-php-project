
<?php include 'include/connection.php'; ?>
<?php include 'include/admin-header.php'; ?>
<?php
 $id = $_GET['id'];
	
 $sql1="select * from orders where orderId = '$id'";
 $result1=mysqli_query($con,$sql1);
 $row=mysqli_fetch_array($result1);

?>
<section class="ftco-section ">
  <div class="container">
	<div class="row">
    <div class="col-md-12">
	<p class="text-center text-dark " style="font-size:40px;">Order-Update-Data</p>
		<div class="row block-9">
          <div class="col-md-12 order-md-last d-flex" >
            <form action="#" class="bg-white p-5 contact-form col-md-12" method="post" enctype="multiport/form-data">
              <div class="form-group " >
			  	<label>Order Id</label>
                <input type="text" class="form-control" name="orderId" value="<?php echo $row['orderId']; ?>">
              </div>
              <div class="form-group">
			  <label>Product Name</label>
                <input type="text" class="form-control" name="proName" value="<?php echo $row['proName']; ?>">
              </div>
              <div class="form-group">
			  <label>User Name</label>
                <input type="text" class="form-control" name="userName" value="<?php echo $row['userName']; ?>">
              </div>

			  <div class="form-group">
			  <label>Order quantity</label>
                <input type="number" class="form-control" name="quantity" value="<?php echo $row['quantity']; ?>">
              </div>
			  <div class="form-group">
			  <label>Order Date</label>
                <input type="date" class="form-control" name="orderDate" value="<?php echo $row['orderDate']; ?>">
			  </div>
			  <div class="form-group">
                <input type="submit" value="Update" name="Update" class="btn btn-primary py-3 px-5">
				<input type="reset" value="Reset" class="btn btn-danger py-3 px-5">
              </div>
            </form>
          
          </div>

         
        </div>
					
</div>
</div>
</div>
</section>
<?php
		if(isset($_POST['Update']))
		{
			$orderId = $_POST['orderId'];
			$proName = $_POST['proName'];
			$userName = $_POST['userName'];
			$quantity = $_POST['quantity'];
			$orderDate = $_POST['orderDate'];

				$updatequery="update orders set orderId='{$_POST['orderId']}',proName='{$_POST['proName']}',userName='{$_POST['userName']}',quantity='{$_POST['quantity']}',orderDate='{$_POST['orderDate']}' where orderId='{$_GET['id']}' ";
                $result2=mysqli_query($con,$updatequery);

				if($result2)
				{
                echo "<script>alert('record Updated successfully')</script>";
				?>
					<meta http-equiv = "refresh" content = "0; url= http://localhost/mnf/admin-order-view.php" />

				<?php
				}
				else
				{
					echo "query failed";
				}
		}
?>

<?php include 'include/admin-footer.php'; ?>