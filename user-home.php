<?php include 'include/connection.php'; ?>
<?php include 'include/header.php'; ?>

<?php
$user = $_SESSION['user']['userName'];
$birthDate = $_SESSION['user']['birthDate'];
$emailId = $_SESSION['user']['emailId'];
$password = $_SESSION['user']['password'];
$mobileNo = $_SESSION['user']['mobileNo'];
$address = $_SESSION['user']['address'];


?>
<p class="text-center text-dark shadow bg bg-danger" style="font-size:40px;">My-Home</p><br>
<section class="ftco-section contact-section bg-light  ">
      <div class="container" >
        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex" >

            <form  method="post" action="#" class="bg-light p-5 contact-form container" enctype="multipart/form-data">
                        <!-- <p class="text-center text-dark  " style="font-size:30px;">Name :-<?php echo 'Hello🙋‍♂️'.$user; ?></p>
                        <p class="text-center text-dark  " style="font-size:30px;">BirthDate :- <?php echo $birthDate; ?></p>
                        <p class="text-center text-dark  " style="font-size:30px;">MobileNo :- <?php echo $mobileNo; ?></p>
                        <p class="text-center text-dark  " style="font-size:30px;">Email-Id :- <?php echo $emailId; ?></p>
                        <p class="text-center text-dark  " style="font-size:30px;">Password :- <?php echo $password; ?></p>
                        <p class="text-center text-dark  " style="font-size:30px;">Address :-<?php echo $address; ?></p>
                        <br><div  align="center"> 
                        <a href="logout.php?uid" ><input type="" value="Logout" class="btn btn-warning  py-3 px-5"></a>
                        <a href="logout.php" ><input type="" value="" class="btn btn-warning  py-3 px-5"></a> -->
                      
                        <?php
                        $sessiouser = $_SESSION['user']['userId'];

								$sql="select * from users where userId=$sessiouser";
								$result=mysqli_query($con,$sql);

								while($row=mysqli_fetch_array($result))
								{
								?>
						       <div align=center> <p class="text-dark" style="font-size:30px;">Name :-  <?php echo $row["userName"] ?></p></div>
								<p class="text-dark"><?php   ?></p>
								<div align=center><p class="text-dark" style="font-size:30px;">BirthDate:-  <?php echo $row["birthDate"] ?></p></div>
								<div align=center><p class="text-dark" style="font-size:30px;">Gender:-  <?php echo $row["gender"] ?></p></div>
								<div align=center><p class="text-dark" style="font-size:30px;">Email-Id:-  <?php echo $row["emailId"] ?></p></div>
								<div align=center><p class="text-dark" style="font-size:30px;">Password:-  <?php echo $row["password"] ?></p></div>
								<div align=center><p class="text-dark" style="font-size:30px;">MobileNo:-  <?php echo $row["mobileNo"] ?></p></div>
								<div align=center><p class="text-dark" style="font-size:30px;">Address:-  <?php echo $row["address"] ?></p></div>
						       
								<div align=center>
								<a href="show-cart-data.php?userId=<?php  echo $row['userId']; ?>"><input type="" class='btn btn-danger text-dark' value="Mycart"></a>

								<a href="logout.php"><input type="" class='btn btn-warning text-dark' value="Logout"></a>
								
								<a href="user-home-edit.php?id=<?php echo $row['userId']; ?>"><input type="" class='btn btn-info text-dark' value="Edit-information"></a>
							
								</div>
                <!-- <a class="btn btn-danger text-dark" href="user_delete.php?id=<?php echo $row['userId']; ?>">Delete</a> -->
								
						      </tr>
								<?php
								}
								?>
            </form>
	        </div>
	      </div>
	    </div>
</section> 	
<?php include 'include/footer.php'; ?>