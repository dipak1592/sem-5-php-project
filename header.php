
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MAHAVIR NAMKEEN & FRYUMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1" style="background-color:orange">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+91 9427821741</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <a href="https:\www.mahavirnamkeenfryums@gmail.com"> <span class="text">mahavirnamkeenfryums1222@gmail.com</span></a>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>

	
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
			
		<a class="navbar-brand" href="index.php"><img src="images-1/newlogo2.png" alt="logo" height="100px" width="200px" ></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
			
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
			  <li class="nav-item"><a href="aboutus.php" class="nav-link">About us</a></li>
			  <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
	          <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">shop</a>
				 <a class="dropdown-item" href="product2-snacks.php">Snacks</a>
              	<a class="dropdown-item" href="product3-sweets.php">Sweets</a>
                <a class="dropdown-item" href="product4-fryums.php">Fryums</a>
                <a class="dropdown-item" href="product5-wafer.php">Wafer</a>
                <a class="dropdown-item" href="product6-syrups.php">Syrups</a> 
              </div>
            </li>-->
			
			<li class="nav-item"><a href="contactus.php" class="nav-link">Contact us</a></li>
	        
			<?php 
				if(!isset($_SESSION['user'])){
			?>

			<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
			
			<?php }else{ ?>
				<li class="nav-item cta cta-colored"><a href="mycart.php" class="nav-link"><span class="icon-shopping_cart"></span>[<span id="count"></span>]</a></li>
				 
				<li class="text-dark"><a href="user-home.php"><img src="images-1/loginimage1" alt="logo" height="80px" width="80px" ></a><?php echo 'Welcome🙋‍♂️'.$_SESSION['user']['userName']; ?></li>
				
				
				<!--<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li> -->

				<!-- <li class="nav-item dropdown"> -->
					<!-- <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
					<!-- <div class="dropdown-menu" aria-labelledby="dropdown04"> -->
						<!-- <a class="dropdown-item" href="logout.php">Logout</a>
					</div>
           		 </li> -->
				
			<?php } ?>
		    
				<script>
				
				
				cartcount();
					
				function cartcount(){
				
					xml = new XMLHttpRequest();
					xml.open("POST","cartcount.php?uid=<?php echo $_SESSION['user']['userId']; ?>",true);
					xml.send();

					xml.onreadystatechange=function()
					{
						if(xml.readyState == 4 && xml.status == 200)
						{
							document.getElementById("count").innerHTML=xml.responseText;
						}
					}
				}	
				</script>
			  <!--<li class="nav-item"><a href="register.html" class="nav-link" style="background-image:url(images-1/userlogin.png)">-->

	        </ul>
			<!-- <ul class="navbar-nav ml-auto">
			<li> <input type="text" placeholder="Search product"></li>
			<li><button class="bg bg-warning ">Search</button></li>
			</ul> -->
	      </div>
	    </div>
	  </nav>
	  <!-- <div class="align=center ">
					<div class="form-outline align=center">
						<input type="search" id="form1" name="form1"  class="form-control align=center" placeholder="Search" />
						<button   type="button"  class="btn btn-info align=right" style="width:80px; height:60px;">submit </button>
			--> <!-- <label class="form-label" for="form1">Search</label> -->
					</div>
					
					<!-- <a class='btn  btn-danger' href="show-cart-data.php">OK</a> -->
			<!--</div> -->
			
			<div class="row">
				
				<div class="col-md-10 " style="position:relative;left:50%;transform:translateX(-50%);">
				
				<form  action="search-show-data.php" method="get">
						<div class="input-group mb-3">
							<input type="text" name="search" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>" class="form-control"placeholder="Search data" required>
							<button type="submit" class="btn btn-warning">Search</button>
						</div>
				</form>
			
				</div>
			</div>
			

							

						
		


