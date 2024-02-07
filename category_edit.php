<?php include 'include/connection.php'; ?>
<?php include 'include/admin-header.php'; ?>
<?php
 $id = $_GET['cid'];
	
 $sql1="select * from categorys where catId = '$id'";
 $result1=mysqli_query($con,$sql1);
 $row=mysqli_fetch_array($result1);

?>
<section class="ftco-section ">
  <div class="container">
	<div class="row">
    <div class="col-md-12">
		<p class="text-center text-dark " style="font-size:40px;">Category-Update</p>
		<div class="row block-9">
          <div class="col-md-12 order-md-last d-flex" >
            <form action="" class="bg-white p-5 contact-form col-md-12" method="post">
             
              <div class="form-group " >
			  	      <label>category Id</label>
                <input type="text" class="form-control" name="catId" value="<?php echo $row['catId']; ?>">
              </div>

              <div class="form-group">
			          <label>category Name</label>
                <input type="text" class="form-control" name="catName" value="<?php echo $row['catName']; ?>">
              </div>
              
              <div class="form-group">
                <input type="submit" value="Update" name="Update" class="btn btn-primary py-3 px-5">
				        <input type="reset" value="Reset" class="btn btn-danger py-3 px-5">
              </div>
            </form>
          
          </div>

         
        </div>
					
</div>
</div>
</div>
</section>

<?php
		if(isset($_POST['Update']))
		{
			$catId = $_POST['catId'];
			$catName = $_POST['catName'];
			

				$updatequery="update categorys set catId='{$_POST['catId']}',catName='{$_POST['catName']}' where catId='{$_GET['cid']}' ";
        		$result2=mysqli_query($con,$updatequery);

				if($result2)
				{
                echo "<script>alert('record Updated successfully')</script>";
				?>
					<meta http-equiv = "refresh" content = "0; url= http://localhost/mnf/admin-category-view.php" />

				<?php
				}
				else
				{
					echo "query failed";
				}
		}
?>

<?php include 'include/admin-footer.php'; ?>