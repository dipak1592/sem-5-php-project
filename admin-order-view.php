<?php include 'include/connection.php'; ?>
<?php include 'include/admin-header.php'; ?>

 <section class="ftco-section ">
			<div class="container">
				<div class="row">
    			<div class="col-md-12">
				<p class="text-center text-dark shadow" style="font-size:40px;">Order-View</p>
    				<!-- <div class="cart-list"> -->
	    				<table class="table table-striped ">
						    <thead class="bg-info text-dark">
						      <tr class="text-center">
						        <th>Order Id</th>
						        <th>Product Name</th>
						        <th>User Name</th>
						        <th>Quantity(gram)</th>
								<th>Order Date</th>
						       	<!-- <th colspan="2" align="center">Action<th> -->
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-dark">
								<?php 
								
								$sql="select o.*,p.proName,u.userName from orders o,products p,users u where o.proId=p.proId and o.userId=u.userId";
								$result=mysqli_query($con,$sql);
								while($row=mysqli_fetch_array($result))
								{
								?>
						        <td><?php echo $row["orderId"] ?></td>
								<td><?php echo $row["proName"] ?></td>
								<td><?php echo $row["userName"] ?></td>
								<td><?php echo $row["qty"] ?></td>
								<td><?php echo $row["orderDate"] ?></td>
								<!-- <td><a class='btn  btn-primary' href="order_edit.php?id=<?php //echo $row['orderId']; ?>">Update</a></td> -->
								<!-- <td><a class='btn  btn-danger' href="order_delete.php?id=<?php //echo $row['orderId']; ?>">Delete</a></td> -->
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
<?php include 'include/admin-footer.php'; ?>