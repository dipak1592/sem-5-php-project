
<?php include 'include/connection.php'; ?>
<?php include 'include/header.php'; ?>
<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images-1/homeslider7.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>

		<?php
		$total=0;
		$delivery=0;
		$userId = $_SESSION['user']['userId'];

	
		?>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center text-dark">
          <div class="col-xl-7 ftco-animate">
						<form action="#" class="billing-form" Method="post">
							<h3 class="mb-4 billing-heading bg-primary">Billing Details</h3>
	          	<div class="row align-items-end text-dark">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="userName">User Name *</label>
	                  <input type="text" name="userName" class="form-control text-dark" placeholder="Enter user name" required>
	                </div>
	              </div>
	              <div class="col-md-12">
	                <div class="form-group">
	                	<label for="lastname">Mobile Number * </label>
	                  <input type="number"  name="mobileNo" class="form-control text-dark" placeholder="Enter mobile number" required>
	                </div>
                </div>
				<div class="col-md-12">
	                <div class="form-group">
	                	<label for="emailId">Email Adress *</label>
	                  <input type="text" name="emailId" class="form-control text-dark" placeholder="Enter email-id" required>
	                </div>
	              </div>
				  <div class="col-md-12">
	                <div class="form-group">
	                	<label for="address">Address *</label>
	                  <input type="text" name="address" class="form-control text-dark" placeholder="Enter your address" required>
	                </div>
	              </div>

                <!-- <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
										<div class="radio">
										  <label class="mr-3"><input type="radio" name="optradio" required> Create an Account? </label>
										  <label><input type="radio" name="optradio" required> Ship to different address</label>
										</div>
									</div>
                </div>
				 -->
	            </div>
	          <!-- END -->
					</div>
					<div class="col-xl-5">
					 
	          <div class="row mt-5 pt-3">

					<div class="col-md-12 d-flex mb-5">
		          		<div class="cart-detail cart-total p-3 p-md-4">
									<?php
											
											$price = $_SESSION['price'];
											$total = $_SESSION['total'];
											$delivery = $_SESSION['delivery'];
											$discount = $_SESSION['discount'];
											$totalprice = $_SESSION['totalprice'];
									?>
									<h3 class="billing-heading mb-4 bg-danger">Cart Total</h3>
									<p class="d-flex">
										<span class="text-dark">Subtotal</span>
										<span class="text-dark"><?php echo $total?></span>
									</p>
									<p class="d-flex text-dark">
										<span class="text-dark">Delivery</span>
										<span class="text-dark"><?php echo $delivery?></span>
									</p>
									<p class="d-flex text-dark">
										<span class="text-dark">Discount</span>
										<span class="text-dark"><?php echo $discount ?> </span>
									</p>
									<hr>
									<p class="d-flex total-price">
										<span class="text-dark">Total</span>
										<span class="text-dark"><?php echo $totalprice ?></span>
									</p>
									<?php
								
								?>
						</div>
	          	    </div>
		</div>
	          	<div class="col-md-12">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4 bg-warning">Payment Method</h3>
									
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2" required>Cash On Delivery</label>
											</div>
										</div>
									</div>
									
								</div> 
								<a><input type="submit" value="Submit" name="Submit" class="btn btn-primary py-3 px-5"></a>
											</form>
							</div>
	          </div>
          </div> 
        </div>
      </div>
    </section>
	
	<?php
	
	if(isset($_POST['Submit']))
	{
		$userId = $_SESSION['user']['userId'];
		$userName = $_POST['userName'];
		$mobileNo = $_POST['mobileNo'];
		$emailId = $_POST['emailId'];
		$address = $_POST['address'];
		//$orderDate = $_POST['orderDate'];
		date_default_timezone_set("Asia/KolKata"); 
        $orderDate =date('Y-m-d');

		// echo $userId."<br>";
		// echo $mobileNo."<br>";
		// echo $emailId."<br>";
		// echo $address."<br>";
		// echo $orderDate;
		$sql_cart="select a.*,p.* from addtocarts a,products p where a.proId=p.proId and  userId='$userId'";
		$result_cart=mysqli_query($con,$sql_cart);
		while($row=mysqli_fetch_array($result_cart))
		{
			$proId=$row['proId'];
			$proPrice=$row['proPrice'];
			$qty = $_SESSION['qty'];
			$totalprice = $_SESSION['total'];
			
			$inser_query = "insert into orders (userId,proId,qty,proPrice,totalprice,mobileNo,emailId,address,orderDate) values('$userId','$proId','$qty','$proPrice','$totalprice','$mobileNo','$emailId','$address','$orderDate')";
			 $result = mysqli_query($con,$inser_query);

		}

		if($result)
		{
			$delete_query = "delete from addtocarts where userId=$userId";
			$result1=mysqli_query($con,$delete_query);

			echo "<script>alert('order added successfully')</script>";
			?>
        		<meta http-equiv = "refresh" content = "1; url= http://localhost/mnf/index.php" />
           <?php
		}
		else
		{
			echo mysqli_error($con);
		}
	 }
	
		
	?>
   
	<?php include 'include/footer.php' ?>

									 <!--<script>
											 function message()
											 {
												swal(hello!);
											 }
									</script>-->
									
	
	