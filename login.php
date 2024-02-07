
<?php include 'include/connection.php'; ?>
<?php include 'include/header.php'; ?>
  <body class="goto-here">
  
   
 <section class="ftco-section contact-section bg-light" >
      <div class="container">
        <div class="row block-9">
          
          <div class="col-md-12 order-md-last d-flex" >
		  
            <form action="#" method="post" class="bg-white p-5 contact-form container" >
          <p class="text-center text-dark" style="font-size:40px;">Login</p>

            <div class="form-group" >
				<label  for="email" class="text-dark" > Enter Email id</label>
                <input type="email" class="form-control" id="emailId" name="emailId" placeholder="Enter Email Id">
            </div>

            <div class="form-group" >
				<label  for="pass" class="text-dark" > Enter Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
            </div>
           <div class="form-group" >
            <a href="#"class="link" onclick="message()">Forgate Password</a>
            <script>
              function message()
              {
                alert('conferm forgate password');
                $password=null
              }
            </script>
           </div>
           <div>
                <input type="submit" value="Login" name="Login" class="btn btn-primary py-3 px-5">
                &nbsp;&nbsp;&nbsp;<a href="register.php" class="link">Go to register</a>
              </div>
             
            </form>
          
          </div>
        </div>
      </div>
    </section> <!-- section -->
   
  </body>
  <?php
  
  if(isset($_POST["Login"]))
  {
    $emailId = $_POST['emailId'];
    $password = $_POST['password'];

    $fetchsql="select * from users  where emailId = '$emailId'";
    $result=mysqli_query($con,$fetchsql);
    

  if($row=mysqli_fetch_array($result))
  {
      $upass= $row['password'];
      if($upass==$password)
      {
        $_SESSION['user'] = $row;
        echo "<script> window.location.href='index.php' </script>";
        // header("location:index.php");
      }
      else
      {
        echo "<script> alert('Password Incorrect') </script>";
      }
  }
  else
  {
    
    $query="select * from admins  where name = '$emailId' and password='$password' ";
    $resultadmin=mysqli_query($con,$query);
    if($rowAdmin=mysqli_fetch_array($resultadmin))
    {
      $_SESSION['admin'] = $rowAdmin;
      echo "<script> window.location.href='admin-home.php' </script>";
    }else{
      echo "<script> alert(' Invalid email Id') </script>";
    }
  }
  
  }
  
  ?>
  <?php include 'include/footer.php'; ?>

  