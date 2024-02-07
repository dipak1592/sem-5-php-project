<?php include 'include/connection.php'; ?>
<?php include 'include/header.php'; ?>
<?php
$id= $_GET['id'];
 
	
 $sql1="select * from users where userId = '$id'";
 $result1=mysqli_query($con,$sql1);
 $row=mysqli_fetch_array($result1);

?>
<section class="ftco-section ">
  <div class="container">
	<div class="row">
    <div class="col-md-12">
				<p class="text-center text-dark " style="font-size:40px;">Update-info</p>
		<div class="row block-9">
          <div class="col-md-12 order-md-last d-flex" >
            <form action="#" class="bg-white p-5 contact-form col-md-12" method="post" enctype="multiport/form-data">
              
              <div class="form-group text-dark">
			  <label>User Name</label>
                <input type="text" class="form-control" name="userName" value="<?php echo $row['userName']; ?>">
              </div>
              <div class="form-group text-dark">
			  <label>User BirthDate</label>
                <input type="date" class="form-control" name="birthDate" value="<?php echo $row['birthDate']; ?>">
              </div>

              <label class="text-dark text-dark" > Select Gender</label><br>
              <div class="form-group d-flex" >
				
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Male"id="male"
					<?php 
						if($row['gender'] == "male")
						{
							echo "checked";
						}
					?>
					><label class="form-check-label text-dark" for="male">Male &nbsp;&nbsp;&nbsp;</label>
                  </div>

                   <div class="form-check">
                     <input class="form-check-input" type="radio" name="gender" value="Female" id="Female"
					 <?php 
						if($row['gender'] == "Female")
						{
							echo "checked";
						}
					?>
					 ><label class="form-check-label text-dark" for="female">Female</label>  
                  </div>     
              </div>	

			  <div class="form-group text-dark">
			  <label>User Email-Id</label>
                <input type="text" class="form-control" name="emailId" value="<?php echo $row['emailId']; ?>">
              </div>
			  <div class="form-group text-dark">
			  <label>User Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>">
				</div>
			  <div class="form-group text-dark">
				<label>User MobileNo</label>
                <input type="number" class="form-control" name="mobileNo" value="<?php echo $row['mobileNo']; ?>">
              </div>
              <div class="form-group text-dark">
			  <label>User Address</label>
                <textarea id="" cols="30" rows="7" name="address" class="form-control"><?php echo $row['address']; ?></textarea>
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
			$userId = $_POST['userId'];
			$userName = $_POST['userName'];
			$birthDate = $_POST['birthDate'];
			$gender = $_POST['gender'];
			$emailId = $_POST['emailId'];
			$password = $_POST['password'];
			$mobileNo = $_POST['mobileNo'];
			$address = $_POST['address'];

				$updatequery="update users set userId='{$_POST['userId']}',userName='{$_POST['userName']}',birthDate='{$_POST['birthDate']}',gender='{$_POST['gender']}',emailId='{$_POST['emailId']}',password='{$_POST['password']}',mobileNo='{$_POST['mobileNo']}',address='{$_POST['address']}' where userId='{$_GET['id']}' ";
                $result2=mysqli_query($con,$updatequery);

				if($result2)
				{
               		 echo "<script>alert('record Updated successfully')</script>";
						?>
						<meta http-equiv = "refresh" content = "1; url= http://localhost/mnf/user-home.php" />
				
					<?php
				}
				else
				{
					echo "query failed";
				}
		}
?>



<?php include 'include/footer.php'; ?>