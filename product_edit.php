
<?php include 'include/connection.php'; ?>
<?php include 'include/admin-header.php'; ?>

<section class="ftco-section ">
  <div class="container">
	<div class="row">
    <div class="col-md-12">
		<p class="text-center text-dark" style="font-size:40px;">Product-Update-Data</p>
		<div class="row block-9">
          <div class="col-md-12 order-md-last d-flex" >
		  <?php
			$id = $_GET['id'];	
			$sql1="select * from products where proId = '$id'";
			$result1=mysqli_query($con,$sql1);
			{
				foreach($result1 as $row)
				{
					
		  ?>
			
              <form action="product_edit.php?id=<?php echo $id; ?>" class="bg-white p-5 contact-form col-md-12" method="post" enctype="multipart/form-data">
              <div class="form-group " >
				<label>Product Id</label>
                <input type="text" class="form-control" name="proId" value="<?php echo $row['proId']; ?>">
              </div>
              <div class="form-group">
				 <label>Product Name</label>
                <input type="text" class="form-control" name="proName" value="<?php echo $row['proName']; ?>">
              </div>
              <div class="form-group">
	 			<label>Product Price</label>
                <input type="text" class="form-control" name="proPrice" value="<?php echo $row['proPrice']; ?>">
              </div>
              <div class="form-group">
			 <label>Product Image</label>
   			 <input type="file" class="form-control" name="proImage">
			 <input type="text" class="form-control" name="old_Image" value="<?php echo $row['proImage']; ?>">
				<img src="<?php echo $row['proImage'];?>">
              </div>
				<div class="form-group">
                <input type="text" class="form-control" name="catId" value="<?php echo $row['catId'];?>">
                </div>
              <div class="form-group">
                <input type="submit" value="Update" name="Update" class="btn btn-primary py-3 px-5">
				<input type="reset" value="Reset" class="btn btn-danger py-3 px-5">
              </div>
            </form>
			<?php
				}
		}
			?>
            
          
          </div>

         
        </div>
					
</div>
</div>
</div>
</section>
<?php
		if(isset($_POST['Update']))
		{
			$proId = $_POST['proId'];
			$proName = $_POST['proName'];
			$proPrice = $_POST['proPrice'];
			$catId = $_POST['catId'];
			$proImage = $_FILES['proImage']['name'];
			$old_Image = $_POST['old_Image'];
			if($proImage != '')
			{
				$proImage = "images-1/" . $_FILES["proImage"]["name"];
                $tempname = $_FILES["proImage"]["tmp_name"];

                move_uploaded_file($tempname,$proImage);

				$updatequery="update products set proImage='$proImage' where proId='$proId'";
				$result2=mysqli_query($con,$updatequery);


			}
			
				$updatequery="update products set proName='$proName',proprice='$proPrice',catId='$catId' where proId='$proId'";
				$result2=mysqli_query($con,$updatequery);

				if($result2)
				{
					echo "<script> alert('Record Updated successfully') </script>";
					echo "<script> window.location.href='admin-product-view.php' </script>";
				}
				else
				{
					echo "<script> alert('No Record Updated') </script>";
					echo "<script> window.location.href='admin-product-view.php' </script>";
				}
				
				
		}
?>
<?php include 'include/admin-footer.php'; ?>