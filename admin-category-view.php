<?php include "include/connection.php"; ?>
<?php include "include/admin-header.php"; ?>
 
 <section class="ftco-section ">
			<div class="container">
				<div class="row">
    			<div class="col-md-12">
				<p class="text-center text-dark shadow" style="font-size:40px;">Category-View</p>
    				<!-- <div class="cart-list"> -->
					<table class="table table-striped ">
						    <thead class="bg-info text-dark">
						      <tr class="text-center">
						        <th>Category Id</th>
						        <th>Category Name</th>
						        <th colspan="2" align="center">Action</th>
								
						      </tr>
						    </thead>
						    <tbody>
						    <tr class="text-dark">
								<?php
									$cmd = "select * from categorys";
									$result = mysqli_query($con,$cmd);
									while($row = mysqli_fetch_array($result))
									{
								?>
						        	<td><?php echo $row["catId"]; ?></td>
									<td><?php echo $row["catName"]; ?></td>
						        	<td><div class="btn text-white btn-secondary"><a href="category_edit.php?cid=<?php echo $row['catId']; ?>">Update</a></div></td>
									<td><a class="btn text-white btn-danger" href="category_delete.php?cid=<?php echo $row['catId']; ?>">Delete</a></td>
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