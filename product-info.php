<?php include 'include/header.php'; ?>
<?php include 'include/connection.php'; ?>

<?php
if(isset($_SESSION['user']))
{
$id = $_GET['proid'];

$select_query = "select * from products where proid=$id";
$result = mysqli_query($con,$select_query);
$row = mysqli_fetch_array($result);
?>
<section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/product-1.jpg" class="image-popup"><img src="<?php echo $row['proImage'] ?>" class="img-fluid" alt="image"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo $row['proName'] ?></h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
							</p>
						</div>
    				<p class="price"><span>Price=₹<?php echo $row['proPrice'] ?></span></p>
    				<p class="text-dark">Weight=<?php echo $row['proWeight'] ?></p>
                    <p class="text-dark"><?php echo $row['proDescription'] ?></p>
						<div class="row mt-4">
							<div class="col-md-6">
							</div>
    		</div>
    	</div>
    </section>
	
	<section class="ftco-section ">
			<div class="container">
				<div class="row">
    			<div class="col-md-12">
				<!-- <p class="text-center text-dark shadow" style="font-size:40px;">Review-View</p> -->
    				<!-- <div class="cart-list"> -->
					<table class="table table-striped ">
						    <thead class="bg-info text-dark">
						      <tr class="text-center">
							  
						        <th>Review Id</th>
						        <th>UserName</th>
						        <th>ProductName</th>
						        <th>Comment</th>
								<th>Date</th>
						      </tr>
						    </thead>
						    <tbody>
							<?php
								$userId = $_SESSION['user']['userId'];
								$query = "select r.*,p.*,u.userName from reviews r,products p,users u where r.proId=p.proId and r.userId=u.userId";
								$result1 = mysqli_query($con,$query);
								?><h1 align=center>our reviews </h1><?php	
								while($row1=mysqli_fetch_array($result1))
								{
								?>
						      <tr class="text-dark">
								<td><?php echo  $row1['reviewId']; ?></td>
						        <td><?php echo  $row1['userName']; ?></td>
								<td><?php echo $row1['proName']; ?></td>
								<td><?php echo $row1['comment']; ?></td>
								<td><?php echo $row1['reviewDate']; ?></td>
								
						        
                  				</tr>
								  <?php
								}
								?>
                 
				</table>
    			</div>
    		</div>
			</div>
	</section>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Write your review </h1>
			<form action="#" method="post">

				<input type="hidden" name="proId" value="<?php echo $row['proId'] ?>">
				<input type="hidden" name="userId" value="<?php echo $userId ?>">
				<textarea name="comment"></textarea>
				<?php 
					// date_default_timezone_set("Asia/KolKata"); 
					//   $reviewDate =date('Y-m-d h:i:s');
				?>
				<!-- <input type="date" name="reviewDate" class="form-control text-dark" required> -->
				<input type="submit" value="Submit" name="Submit" class="btn btn-primary py-3 px-5" required>
			</form>
		</div>
	</div>
</div>
<?php
}
if(!isset($_SESSION['user']))
{
    echo "<script> window.location.href='login.php' </script>";
}
?>
<?php

if(isset($_POST['Submit']))
{
	$proId = $_POST['proId'];
	$userId = $_POST['userId'];
	$comment = $_POST['comment'];
	//$reviewDate = $_POST['reviewDate'];
	date_default_timezone_set("Asia/KolKata"); 
    $reviewDate =date('Y-m-d h:i:s');

	$insert_query = "insert into reviews (proId,userId,reviewDate,comment) values ('$proId','$userId','$reviewDate','$comment') ";
	$result1=mysqli_query($con,$insert_query);

}

?>
<?php include 'include/footer.php';
?>