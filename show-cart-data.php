<?php 
include 'include/connection.php';
include 'include/header.php'; 


$userId = $_SESSION['user']['userId'];
//$userName = $_SESSION['user']['userName'];
?>

<section class="ftco-section ">
			<div class="container">
				<div class="row">
    			<div class="col-md-12">
				<p class="text-center text-dark shadow" style="font-size:40px;">My-Order</p>
    				<!-- <div class="cart-list"> -->
	    				<table class="table table-striped ">
						    <thead class="bg-info text-dark">
						      <tr class="text-center">
						        <th><u>Serial-No</u></th>
								<th><u>Order Date</u></th>
                                <th><u>Address</u></th>
								<th><u>Mobile-No</u></th>
								<th colspan="1"><u>Action</u><th>
						      </tr>
						    </thead>
						    <tbody>
						    <tr class="text-dark">
								<?php 
								//$proId=$_SESSION['product_Id'];
								 //$userId=$_SESSION['user']['userId'];
								//$sql_cart="select o.*,a.* from orders o,addtocarts a where o.proId=a.proId and userId=$userId";
								//$sql="select * from orders,users where orders.userName=$userName and   users.userId=$userId  ";
								$sql_cart="select * from orders where userId=$userId";
								$result_cart=mysqli_query($con,$sql_cart);
								while($row=mysqli_fetch_array($result_cart))
								{
								?>
						        <td><?php echo $row["orderId"] ?></td>
								<td><?php echo $row["orderDate"] ?></td>
                                <td><?php echo $row["address"] ?></td>
								<td><?php echo $row["mobileNo"] ?></td>
								<td><a class='btn  btn-primary' href="user_order_view.php?id=<?php echo $row['orderId']; ?>">View</a></td>
								<td><a class='btn  btn-danger' href="user_order_delete.php?id=<?php echo $row['orderId']; ?>">Delete</a></td>
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
    

<?php include 'include/footer.php';?>