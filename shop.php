
<?php include 'include/connection.php'; ?>
<?php include 'include/header.php'; ?>

<div class="hero-wrap hero-bread" style="background-image: url('images-1/homeslider7.jpg' ); width: 1500px; height: 240px;">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

	

<section class="ftco-section">
    	<div class="container">
			<div class="row justify-content-center">
    			<div class="col-md-12 mb-5 text-center">
    				<ul class="product-category">
                        <?php
							$cmd="select * from categorys ";
							$ans=mysqli_query($con,$cmd);
							while($row=mysqli_fetch_array($ans))
							{
            			?>
							<li><a href="shop.php?catId=<?php echo $row['catId']; ?>"><?php echo $row['catName']; ?></a></li>
						<?php 
							}
						?>
					</ul>
    			</div>
    		</div>
    		<div class="row">
			<?php
			if(isset($_GET['catId']))
			{
				$set = $_GET['catId'];
				
						$select_query="select * from products where catId=$set ";
						$result=mysqli_query($con,$select_query);
						while($row=mysqli_fetch_assoc($result))
						{
							
			?>
						<div class='col-md-6 col-lg-3 ftco-animate'>
						<div class='product'>
						
							<a href='#' class='img-prod shadow'><img class='img-fluid' src='<?php echo $row['proImage'];?>'>
								<div class='overlay'></div>
							</a>
							<div class='text py-3 pb-4 px-3 text-center'>
								<h3><a href='#'><?php echo $row['proName'];?></a></h3>	
								<div class='d-flex'>
									<div class='pricing'>
										<p class='price'><span class='mr-2 price-dc'></span><span
												class='price-sale text-dark'>Price ₹<?php echo $row['proPrice'];?></span></p>
									</div>
								</div>
								<div class='bottom-area d-flex px-3'>
									<div class='m-auto d-flex'>
										<a href='product-info.php?proid=<?php echo $row['proId']; ?>'
											class='add-to-cart d-flex justify-content-center align-items-center text-center'>
											<span><i class='ion-ios-menu'></i></span>
										</a>
										<a  href="user_add-to-cart.php?proId=<?php echo $row['proId'];?>"  class='buy-now d-flex justify-content-center align-items-center mx-1'>
											<span><i class='ion-ios-cart'></i></span>
										</a>
										
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
						<?php
						}
					}
					else
					{
						$select_query="select * from products";
						$result=mysqli_query($con,$select_query);
						while($row=mysqli_fetch_assoc($result))
						{
							?>
						<div class='col-md-6 col-lg-3 ftco-animate'>
						<div class='product'>
						
							<a href='#' class='img-prod shadow'><img class='img-fluid' src='<?php echo $row['proImage'];?>'>
								<div class='overlay'></div>
							</a>
							<div class='text py-3 pb-4 px-3 text-center'>
								<h3><a href='#'><?php echo $row['proName'];?></a></h3>	
								<div class='d-flex'>
									<div class='pricing'>
										<p class='price'><span class='mr-2 price-dc'></span><span
												class='price-sale text-dark'>Price ₹<?php echo $row['proPrice'];?></span></p>
									</div>
								</div>
								<div class='bottom-area d-flex px-3'>
									<div class='m-auto d-flex'>
										<a href='product-info.php?proid=<?php echo $row['proId']; ?>'
											class='add-to-cart d-flex justify-content-center align-items-center text-center'>
											<span><i class='ion-ios-menu'></i></span>
										</a>
										<a id="" href="user_add-to-cart.php?proId=<?php echo $row['proId']; ?>" class='buy-now d-flex justify-content-center align-items-center mx-1'>
											<span><i class='ion-ios-cart'></i></span>
										</a>
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<?php
					}
				}
					?>
    			<!--<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images-1/kurkure1.jpg" alt="Aloo Bhujiya">
    						<span class="status">25%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Aloo Bhujiya</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">₹50.00</span><span class="price-sale">₹30.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>-->
    			
			
    			</div>
    		</div>
    		
    	</div>
    </section>
	<?php
	//if(isset("submit"))
	{
		
	}
	?>

    <?php include 'include/footer.php'; ?>