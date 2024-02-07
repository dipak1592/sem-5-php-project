
<?php include 'include/connection.php'; ?>
<?php include 'include/header.php';  ?>
<div class="hero-wrap hero-bread" style="background-image: url('images-1/homeslider7.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate ">
    				<div class="cart-list ">
	    				<table class="table">
						    <thead class="thead-primary bg-info">
						      <tr class="text-center">
								<th>Serial-No</th>
						        <th>Products</th>
						        <th>Product name</th>
								<th>Quantity(Gram)</th>
						        <th>Price</th>
								<th>Total</th>
								<th>Opretion</th>
						      </tr>
						    </thead>
						    <tbody>

						      <tr class="text-center">
							  <!-- $price = $row['proPrice'];	
								$total = $total + $price;	
								$delivery = $total * 5 / 100;
								$discout = $total * 10 / 100;
								$totalPrice = ($total + $delivery - ( $total * 10 / 100));
							    	 $_SESSION['total'] = $total = $total + $_SESSION['price'];
								
								$total = $_SESSION['total'];
								-->
							  <?php
								$userId = $_SESSION['user']['userId'];
								 $sql1="select a.*,p.*  from addtocarts a,products p where a.proId=p.proId and a.userId=$userId";
								$result1=mysqli_query($con,$sql1);

								
								$price=0;
								$pricetotal=0;	
								$total =0;
								$delivery=0;
								$discount=0;
								$totalPrice = 0;

								while($row=mysqli_fetch_array($result1))
								{

								$_SESSION['price'] = $price = $row['proPrice'];	
								$_SESSION['qty'] = $qty = $row['qty'];
								$_SESSION['pricetotal'] = $_SESSION['price'] * $_SESSION['qty'];
								$_SESSION['total'] = $total = $total + $_SESSION['pricetotal'];
								$_SESSION['delivery'] = $delivery = $_SESSION['total'] * 5 / 100;
								$_SESSION['discount'] = $discout = $_SESSION['total'] * 10 / 100;
								$_SESSION['totalprice'] = $totalPrice = ($_SESSION['total'] + $_SESSION['delivery'] - ( $_SESSION['total'] * 10 / 100));
								

								$price = $_SESSION['price'];
								$qty = $_SESSION['qty'];
								$pricetotal = $_SESSION['pricetotal'];
								$total = $_SESSION['total'];
								$delivery = $_SESSION['delivery'];
								$discount = $_SESSION['discount'];
								$totalprice = $_SESSION['totalprice'];
								
								
								?>
								<form method="post">
								<td text-dark><?php echo $row['cartId']; ?></td>
								<td class=""><img src="<?php echo $row['proImage']; ?>" height="100px" width="100px"></img></td>
						        <td class="product-name">
						        	<h3><?php echo $row['proName']; ?></h3>
						        	<p><?php echo $row['proDescription']; ?></p>
						        </td>
						        <td>
									<form method="post" action="">
									<!-- <input type="button" class="minus"value="-" onclick="decreasecount(event,this)"> -->
									<input type="number"  maxsize="2" class="qty text-dark text-center" id="itemqty" name="qty" value="<?php echo $row['qty'] ?>" ><br>
									<input type="hidden" value="<?= $row['cartId']?>" name="cartId">
									<!-- <input type="button" class="plus"value="+" onclick="increasecount(event,this)"> -->
									<input class="" type="submit" value="Update" name="add"></input>
									</form>
									<?php
									// if(isset($_POST['add']) && $row['qty']==0)
									// {
									// 	echo "<script>alert('please select 1 item')</script>";
									// }
									// else	
									// {

											if(isset($_POST['add']))
											{
												if(isset($_POST['cartId']) && isset($_POST['qty']))
												{
													$cartId = $_POST['cartId'];
													$qty = $_POST['qty'];
													$userId = $_SESSION['user']['userId'];
													$query = "update addtocarts set qty=$qty,price=$price,totalprice=$pricetotal where cartId=$cartId and userId=$userId";
													$result = mysqli_query($con,$query);
													if($result)
													{
														echo "<script>window.location.href=mycart.php</script>";
													}
													else
													{
														echo mysqli_error($con);
													}
												}
											}
									//}
									
									
									
									?>
								</td>
						        <td class="price"><?php echo $price ?></td>
								<td class="pricetotal text-dark"><?php echo $pricetotal ?></td>

								<td class="product-remove"><a href="mycart-delete.php?cartId=<?php echo $row['cartId']?>" style="background-color:red"><span class="ion-ios-close" ></span></a></td>
									
								<!-- <td><input type="hidden" class="cartId" value="$row['cartId']"></td>
								
								<td><input type="hidden" class="proprice" value="$row['price']"></td> -->
								
								</form>
							</tr>
										        
							  <?php
							  
								}
								?>
								
								<tr class="bg-light" >
									<td colspan=2><p><a href="shop.php" class="btn btn-info py-3 px-4">Continue Shopping</a></p></td>
									<td colspan=3 class="text-center text-dark" style="font-size:40px;"><b>SubTotal =</b></td>
									<td class="text-dark" style="font-size:40px"><?php echo $total  ?></td>
							   </tr>
								
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			
    		<div class="row justify-content-end">
    			
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3 class="bg-danger">Cart Totals</h3>
    					<p class="d-flex">
    						<span class="text-dark">Subtotal</span>
    						<span class="text-dark"><?php echo $total  ?></span>
    					</p>
    					<p class="d-flex text-dark">
    						<span class="text-dark">Delivery</span>
    						<span class="text-dark"><?php echo $delivery ?></span>
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
    				</div>
					<!-- <input  type="submit" value="Update" name="submit"></input> -->
    				<p><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>
		<!-- <script>
			$(document).ready(function()
			{
				$(".itemqty").on('change',function()
				{
					var $el = $(this).closest('tr');

					var proid =$el.find(".cartId").val();

					var proprice =$el.find(".proprice").val();

					var qty =$el.find(".itemqty").val();

					location.reload(true);

					$.ajax({
						url:'admin-product-view.php',
						method:'post',
						cache:false,
						data:{proid:proid,proprice:proprice,qty:qty},
						success:function(response);
						console.log(response);
					})
				})
			})

			<?php
			//if(isset($_POST['qty']))
			//{
			//	$qty = $_POST['qty'];
			//	$$pricetotal = $_POST['proprice'];
			//	$proid = $_POST['proid'];

			//	$update_query = "update from addtocarts set qty=?,totalprice=? where cartId=?";

			//	$result = mysqli_query($con,$update_query);

				
			//}
			?>
		</script> -->

		<!-- <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> -->
   

   <script>
	$(document).ready(function(){

		var quantitiy=0;
		   $('.itemqty').click(function(e)
		   {
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#itemqty').val());
		        
		        // If is not undefined
		            if(quantitiy<150)
					{
		            $('#itemqty').val(quantity + 1);
					}

		          
		            // Increment
		        
		    });

		    $('.itemqty').click(function(e)
			{
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#itemqty').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0)
					{
		            	$('#itemqty').val(quantity - 1);
		            }
		    });
		    
	});
	</script>
     
  </body>
</html>

<?php include 'include\footer.php';  ?>