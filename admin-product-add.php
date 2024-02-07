<?php include 'include/connection.php'; ?>
<?php include 'include/admin-header.php'; ?>

<?php
        if(isset($_POST["Submit"]))
        {
                $proName = $_POST["proName"];
                $proPrice = $_POST["proPrice"];
                
                $proImage = "images-1/" . $_FILES["proImage"]["name"];
                $tempname = $_FILES["proImage"]["tmp_name"];

                move_uploaded_file($tempname,$proImage);


                $proWeight = $_POST["proWeight"];
                $catId = $_POST["catId"];
                $proDescription = $_POST["proDescription"];
                        
                $query="insert into products (proName,proPrice,proImage,proWeight,catId,proDescription) values('$proName','$proPrice','$proImage','$proWeight','$catId','$proDescription')"; 
                $result=mysqli_query($con,$query);
                echo "<script>alert('record inserted successfully')</script>";
        }


?>
 <section class="ftco-section contact-section bg-light">
      <div class="container" >
        <div class="row block-9">
          
          <div class="col-md-12 order-md-last d-flex" >
		  
            <form method="post" action="#" class="bg-white p-5 contact-form container" enctype="multipart/form-data">
                <p class="text-center text-dark" style="font-size:40px;">Product-Add</p>
                
                <div class="form-group" >
                        <label  for="pname" class="text-dark" > Product Name</label>
                        <input type="text" class="form-control" id="pname" name="proName" placeholder="Enter Product Name">
                </div>
                      
                <div class="form-group" >
                        <label  for="price" class="text-dark" > Product Price</label>
                        <input type="text" class="form-control" id="price" name="proPrice" placeholder="Enter Product Price">
                </div>

                <div class="form-group" >
                        <label  for="weight" class="text-dark" >product Image</label>
                        <input type="file" class="form-control-file" id="image" name="proImage">       
                </div>
                
        
                <div class="form-group">
                      <label for="image" class="text-dark">Product Weight(gram)</label>
                      <input type="text" class="form-control" id="weight" name="proWeight" placeholder="Enter Product weight">
                      
                </div>
                
                
                <div class="form-group" >
                <?php
                        if(isset($_POST['Submit']))
                        {
                                $catId = $_POST['catId'];
                        }
                        $sql="select * from categorys";
                        $result=mysqli_query($con,$sql);     
                ?>        
                <select class="form-group" value="category" name="catId">
                <label class="text-dark"> <option> Select Category Id</option></label>
               
                <?php
                        foreach($result as $key=>$value)
                        { 
                ?>
                     <option value="<?=$value['catId']; ?>"><?=$value['catId']; ?><?=$value['catName']; ?></option> 
                <?php 
                        }
                ?>
                </select><br>
                </div>
                <div class="form-group">
                      <label for="image" class="text-dark">proDescription</label>
                      <input type="text" class="form-control" id="weight" name="proDescription" placeholder="Enter Product Discription">
                      
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