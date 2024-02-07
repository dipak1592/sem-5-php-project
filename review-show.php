<?php include 'include/header.php'; ?>
<?php include 'include/connection.php'; ?>

<section class="ftco-section contact-section bg-light">
      <div class="container" >
        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex" >

		<form  method="post" action="#" class="bg-white p-5 contact-form container" enctype="multipart/form-data">
		<p class="text-left text-dark shadow " style="font-size:40px;">Add-Your-Reviews</p>
			<div class="form-group" >
				<label  for="proId" class="text-dark" >Enter Product Name</label>
					<input type="text" class="form-control" id="proId" name="proId">
			</div>

			<div class="form-group" >
				<label  for="userId	" class="text-dark" >Enter your Name</label>
					<input type="text" class="form-control" id="userId" name="userId">
			</div>
			<div class="form-group" >
				<label  for="date" class="text-dark" >Date</label>
					<input type="date" class="form-control" id="reviewDate" name="reviewDate">
			</div>

			<div class="form-group" >
				<label  for="add" class="text-dark" > Comment</label>
				<div class="form-group">
					<textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
				</div>
			</div>

			<input type="submit" value="submit"  name="submit" class="btn btn-primary py-3 px-5">
		</form>
	</div>
	</div>
	</div>
</section> 		         
<?php						    
if(isset($_POST["submit"]))
{
	$proId = $_POST['proId'];
	$userId = $_POST['userId'];
	$reviewDate = $_POST['reviewDate'];
	$comment = $_POST['comment'];

	
	$query="insert into reviews (proId,userId,reviewDate,comment) values('$proId','$userId','$reviewDate',$comment)";
	$result = mysqli_query($con,$query);
	
	if($result)
	{
		echo "<script>alert(Review Sent Successfully)</script>";
		//echo "<script>window.location.href='shop.php'</script>";
	}
	else
	{
		echo "<script>window.location.href='shop.php'</script>";
	}
	
}
?>


<?php include 'include/footer.php'; ?>



