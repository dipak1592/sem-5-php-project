<?php 
include 'include/header.php';
include 'include/connection.php'; 

$orderId=$_GET['id'];
?>
<section class="ftco-section ">
			<div class="container">
				<div class="row">
    			<div class="col-md-12">
				<p class="text-center text-dark shadow" style="font-size:40px;">My-Order</p>
    				<!-- <div class="cart-list"> -->
	    				<table class="table">
						    <thead class="bg-info text-dark">
						      <tr class="text-center">
						        <th><u>Product</u></th>
                                <th><u>Name</u></th>
								<th><u>Quentity</u></th>
                                <th><u>Price</u></th>
                                <th><u>Total</u></th>
						      </tr>
						    </thead>
						    <tbody>
						    <tr class="text-dark">
								<?php 
								$sql_query="select o.*,p.* from orders o,products p where o.proId=p.proId and orderId=$orderId";
								$result_cart=mysqli_query($con,$sql_query);
								while($row=mysqli_fetch_array($result_cart))
								{
                                    
								?>
						       <td><img style="height:150px;  width:150px;" src= "<?php echo $row['proImage'] ?>"></img></td>
								<td><?php echo $row["proName"] ?></td>
                                <td><?php echo $row["qty"] ?></td>
                                <td><?php echo $row["proPrice"] ?></td>
                                <td><?php echo $row["totalprice"] ?></td>
								</tr>
                                <tr>
                                <td  colspan="5"><a class='btn  btn-danger' href="show-cart-data.php">OK</a></td>
							
                                </tr>
								<?php
                                }
								?>
								
							</tbody>
						</table>
    			</div>
    		</div>
			</div>
	</section>
<?php include 'include/footer.php'; ?>