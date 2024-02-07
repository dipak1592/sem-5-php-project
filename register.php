<?php include 'include/connection.php'; ?>
<?php include 'include/header.php'; ?>

<?php
if(isset($_POST['submit']))
{
  $userName = $_POST['userName'];
  $birthDate = $_POST['birthDate'];
  $gender = $_POST['gender'];
  $emailId = $_POST['emailId'];
  $password = $_POST['password'];
  $mobileNo = $_POST['mobileNo'];
  $address = $_POST['address'];

  
  $query="insert into users (userName ,birthDate,gender,emailId,password,mobileNo,address) values('$userName','$birthDate','$gender','$emailId','$password','$mobileNo','$address')";
  $result=mysqli_query($con,$query);
  
 echo "<script> alert('record inserted successfully') </script>";
  }

?>

<body class="goto-here">
 <section class="ftco-section contact-section bg-light" >
      <div class="container">
        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex" >
            <form  method="post" action="#" class="bg-white p-5 contact-form container" enctype="multipart/form-data">
              <p class="text-center text-dark" style="font-size:40px;">Registration-Form </p>
			
              <div class="form-group" >
				        <label  for="userName" class="text-dark" > Enter Name</label>
                  <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter Your Name" required>
             </div>

              <div class="form-group">
				       <label class="text-dark"> Enter Date of Birth </label>
                <input type="date" class="form-control" id="dob" name="birthDate" placeholder="Enter Date of Birth" required>
              </div>
             

              <label class="text-dark" > Select Gender</label><br>
              <div class="form-group d-flex" >
				
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Male"id="male" required>
                      <label class="form-check-label" for="male">Male &nbsp;&nbsp;&nbsp;</label>
                  </div>

                   <div class="form-check">
                     <input class="form-check-input" type="radio" name="gender" value="Female" id="female" required> 
                     <label class="form-check-label" for="male">Female</label>  
                  </div>     
              </div>
              

              <div class="form-group" >
			        	<label  for="email" class="text-dark" > Enter Email id</label>
                <input type="email" class="form-control" id="emial" name="emailId" placeholder="Enter Email Id" required>
              </div>

             <div class="form-group" >
				        <label  for="pass" class="text-dark" > Enter Password</label>
                <input type="password" class="form-control" id="pass" name="password" placeholder="Enter Password" required>
              </div>
            
              <div class="form-group" >
				        <label  for="mob" class="text-dark" > Enter Mobile No</label>
                <input type="number" class="form-control" id="mob" name="mobileNo" placeholder="Enter Mobile No" required>
              </div>

             <div class="form-group" >
			        	<label  for="add" class="text-dark" > Enter Address</label>
                 <div class="form-group">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" required></textarea>
                </div>
      
              </div>

                <input type="submit" value="submit"  name="submit" class="btn btn-primary py-3 px-5">&nbsp;&nbsp;&nbsp;<a href="login.php">Go to login</a>
          
            </form>
            </div>
          </div>
        </div>
      
    </section> 
	<?php include 'include/footer.php'; ?>


 
    
