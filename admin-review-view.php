<?php include 'include/connection.php'; ?>
<?php include 'include/admin-header.php'; ?>

 <section class="ftco-section ">
			<div class="container">
				<div class="row">
    			<div class="col-md-12">
				<p class="text-center text-dark shadow" style="font-size:40px;">Review-View</p>
    				<!-- <div class="cart-list"> -->
					<table class="table table-striped ">
						    <thead class="bg-info text-dark">
						      <tr class="text-center">
						        <th>Review Id</th>
						        <th>Comment</th>
						        <th>Review Date</th>
						        <th>User</th>
						        <th>Product</th>
								<th>Action</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-dark">
								<?php 
								$sql="select * from reviews";
								$result=mysqli_query($con,$sql);

								while($row=mysqli_fetch_array($result))
								{
								?>
									
						        <td><?php echo $row["reviewId"] ?></td>
								<td><?php echo $row["proId"] ?></td>
								<td><?php echo $row["userId"] ?></td>
								<td><?php echo $row["reviewDate"] ?></td>
								<td><?php echo $row["comment"] ?></td>
						        <td><div ><a class="btn btn-danger" href="review_delete.php?id=<?php echo $row['reviewId']; ?>">Delete</a></div></td>
                  				</tr>
								<?php
								}
								?>
                 
				</table>
    			</div>
    		</div>
			</div>
	</section>

	<?php include 'include/admin-footer.php'; ?>