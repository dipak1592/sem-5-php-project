<?php include 'include/connection.php'; ?>
<?php include 'include/admin-header.php'; ?>



 <section class="ftco-section ">
			<div class="container">
				<div class="row">
    			<div class="col-md-12">
				<p class="text-center text-dark shadow" style="font-size:40px;">User-View</p>
    				<!-- <div class="cart-list"> -->
					<table class="table table-striped ">
						    <thead class="bg-info text-dark">
						      <tr class="text-center">
						        <th>User Id</th>
						        <th>User Name</th>
						        <th>Date of Birth</th>
						        <th>Gender</th>
						        <th>Email Id</th>
								<th>Password</th>
								<th>Mobile No</th>
								<th>Address</th>
								<th colspan=2 align=center>Action</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-dark">
								<?php
								$sql="select * from users";
								$result=mysqli_query($con,$sql);

								while($row=mysqli_fetch_array($result))
								{
								?>
						        <td class="text-dark"><?php echo $row["userId"] ?></td>
								<td class="text-dark"><?php echo $row["userName"] ?></td>
								<td class="text-dark"><?php echo $row["birthDate"] ?></td>
								<td class="text-dark"><?php echo $row["gender"] ?></td>
								<td class="text-dark"><?php echo $row["emailId"] ?></td>
								<td class="text-dark"><?php echo $row["password"] ?></td>
								<td class="text-dark"><?php echo $row["mobileNo"] ?></td>
								<td class="text-dark"><?php echo $row["address"] ?></td>
						        <td class="text-dark"><a  class='btn btn-primary' href="user_edit.php?id=<?php echo $row['userId']; ?>">Update</a></td>
								<td class="text-dark"><a class="btn btn-danger" href="user_delete.php?id=<?php echo $row['userId']; ?>">Delete</a></td>
								
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