<?php include 'include/connection.php'; ?>
<?php include 'include/admin-header.php'; ?>

<?php
        if(isset($_POST["Submit"]))
        {
			$userName = $_POST['userName'];
			$birthDate = $_POST['birthDate'];
			$gender = $_POST['gender'];
			$emailId = $_POST['emailId'];
			$password = $_POST['password'];
			$mobileNo = $_POST['mobileNo'];
			$address = $_POST['address'];
                        
                $query="insert into users (userName,birthDate,gender,emailId,password,mobileNo,address) values('$userName','$birthDate','$gender','$emailId','$password','$mobileNo','$address')"; 
                $result=mysqli_query($con,$query);
                echo "<script>alert('record inserted successfully')</script>";
        }


?>
 <section class="ftco-section contact-section bg-light">
      <div class="container" >
        <div class="row block-9">
          
          <div class="col-md-12 order-md-last d-flex" >
		  
            <form method="post" action="#" class="bg-white p-5 contact-form container" enctype="multipart/form-data">
                <p class="text-center text-dark " style="font-size:40px;">User-Add</p>
                
                <div class="form-group" >
                        <label  for="userName" class="text-dark" >User Name</label>
                        <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter User Name">
                </div>
                      
                <div class="form-group" >
                        <label  for="birthDate" class="text-dark" >User BirthDate</label>
                        <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="Enter User BirthDate">
                </div>

                <label class="text-dark" > Select Gender</label><br>
                <div class="form-group d-flex" >
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Male"id="Male"><label class="form-check-label" for="male">Male &nbsp;&nbsp;&nbsp;</label>
                  </div>

                   <div class="form-check">
                     <input class="form-check-input" type="radio" name="gender" value="Female" id="Female"><label class="form-check-label" for="female">Female</label>  
                  </div>     
                </div>
                <div class="form-group" >
                        <label  for="emailId" class="text-dark" >User Email-Id</label>
                        <input type="text" class="form-control" id="emailId" name="emailId" placeholder="Enter User Email-Id">
                </div>
                <div class="form-group">
                        <label  for="password" class="text-dark" >User Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter User Password">
                </div>
                <div class="form-group">
                        <label  for="mobileNo" class="text-dark" >User Mobile-No</label>
                        <input type="text" class="form-control" id="mobileNo" name="mobileNo" placeholder="Enter User Mobile-No">
                </div>
                <div class="form-group">
			  <label>User Address</label>
                <textarea id="address" cols="30" rows="7" name="address" class="form-control"></textarea>
              </div>
                
                <div class="form-group">
                  <div class="container">
                    <div class="row">      
                        <input type="submit" value="Submit" name="Submit" class="btn btn-primary py-3 px-5">
                        <input type="submit" value="reset" class="btn btn-danger py-3 px-5">
                    </div>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </section> <!-- .section -->
    
<?php include 'include/admin-footer.php'; ?>