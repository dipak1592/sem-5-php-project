<?php include 'include/connection.php'; ?>
<?php include 'include/admin-header.php'; ?>


 <section class="ftco-section ">
			<div class="container">
				<div class="row">
    			<div class="col-md-12">
				<p class="text-center text-dark shadow" style="font-size:40px;">Product-View</p>
    				<!-- <div class="cart-list"> -->
					<table class="table table-striped ">
						    <thead class="bg-info text-dark">
						      <tr class="text-center">
						        <th>Product Id</th>
						        <th>Product Name</th>
						        <th>Product Price(&#8377;)</th>
						        <th>Product Image</th>
						        <th>category</th>
								<th colspan="2" align="center">Action</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-dark" >
								<?php
								$sql="select p.*,c.catName from products p,categorys c where p.catId=c.catId order by proId desc";
								$result=mysqli_query($con,$sql);

								while($row=mysqli_fetch_assoc($result))
								{
								?>
						        <td><?php echo $row["proId"] ?></td>
								<td><?php echo $row["proName"] ?></td>
								<td><?php echo $row["proPrice"] ?></td>
								<td><img style="height:150px;  width:150px;" src= "<?php echo $row['proImage'] ?>"></img></td>
								<td><?php echo $row["catName"] ?></td>
								<td><div ><a class="btn btn-primary" href="product_edit.php?id=<?php echo $row['proId']; ?>">Update</a></div></td>
								<td><div ><a class="btn btn-danger" href="product_delete.php?id=<?php echo $row['proId']; ?>">Delete</a></div></td>
								</tr>
								<?php
								}
								?>
                  
						    </tbody>
						  </table>
					  <!-- </div> -->
    			</div>
    		</div>
			</div>
	</section>

<?php include 'include/admin-footer.php'; ?>
