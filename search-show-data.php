<?php include 'include/connection.php'; 
include 'include/header.php';
    //echo $_GET['search'];
?>
<!-- <section class="ftco-section">
<div class="container"> -->
<div class="row">

	<?php
			if(isset($_GET['search']))
			{
				$filtervalues = $_GET['search'];
				$query ="select * from products where CONCAT(proName,proPrice,proImage,proWeight,proDescription) LIKE '%$filtervalues%' ";
				$result =mysqli_query($con,$query);
				if(mysqli_num_rows($result) > 0)
				{
				while($row=mysqli_fetch_assoc($result))
				{
						
					// foreach($result as $row)
					// {
			?>


        
			<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						
						<a href="shop.php" class="img-prod"><img class="img-fluid" src="<?php  echo $row['proImage'];?>" alt="">
							<div class="overlay"></div>
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
										<a  href="user_add-to-cart.php?proId=<?php  echo $row['proId'];?>"  class='buy-now d-flex justify-content-center align-items-center mx-1'>
											<span><i class='ion-ios-cart'></i></span>
										</a>
									</div>
								</div>																		
						</div>
					</div>
			</div>
	<!-- </div>		
</div> -->
<!-- </section> -->

<?php 
	}
		}
		else
		{
			?>
			<div class="row">
				<div class="col-md-12">
				<?php echo "No Search Record found";
				?>
				</div>
			</div>
				<?php
		}
}			
?>
</div>
<?php include 'include/footer.php' ; ?>

<!-- <section class="ftco-section">
    	<div class="container">
    		<div class="row">
						<div class='col-md-6 col-lg-3 ftco-animate'>
						<div class='product'>
							<a href='#' class='img-prod shadow'><img class='img-fluid' src='<?php // echo $row['proImage'];?>'>
								<div class='overlay'></div>
							</a>
							<div class='text py-3 pb-4 px-3 text-center'>
								<h3><a href='#'><?php //echo $row['proName'];?></a></h3>	
								<div class='d-flex'>
									<div class='pricing'>
										<p class='price'><span class='mr-2 price-dc'></span><span
												class='price-sale text-dark'>Price ₹<?php //echo $row['proPrice'];?></span></p>
									</div>
								</div>
								<div class='bottom-area d-flex px-3'>
									<div class='m-auto d-flex'>
										<a href='product-info.php?proid=<?php //echo $row['proId']; ?>'
											class='add-to-cart d-flex justify-content-center align-items-center text-center'>
											<span><i class='ion-ios-menu'></i></span>
										</a>
										<a  href="user_add-to-cart.php?proId=<?php // echo $row['proId'];?>"  class='buy-now d-flex justify-content-center align-items-center mx-1'>
											<span><i class='ion-ios-cart'></i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
    		</div>
    	</div>
</section> -->








<!-- <section class="ftco-section">
    	<div class="container">
            <div class="row">
                <div class='col-md-3 col-lg-3 ftco-animate'>
					<div class='product'>
											<a href=''><img src="<?php //echo 'images-1/'.$row['proImage']; ?>"></img>
											 <td><img style="height:150px;  width:150px;" src= "<?php //echo $row['proImage'] ?>"></img></td>	 
                                            <div class='overlay'></div>
											</a>
											<div class='text py-3 pb-4 px-3 text-center'>
												<h3><a href=''><?php //echo $row['proName'];?></a></h3>	
												<div class='d-flex'>
													<div class='pricing'>
														<p class='price'><span class='mr-2 price-dc'></span><span
																class='price-sale text-dark'>Price ₹<?php //echo $row['proPrice'];?></span></p>
													</div>
												</div>
												<div class='bottom-area d-flex px-3'>
													<div class='m-auto d-flex'>
														
														<a  href="user_add-to-cart.php?proId=<?php //echo $row['proId'];?>"  class='buy-now d-flex justify-content-center align-items-center mx-1'>
															<span><i class='ion-ios-cart'></i></span>
														</a>
														
														
													</div>
												</div>
											</div>
					</div>
				</div> 
            </div>
        </div>
</section> -->
                
