
<?php include 'include/connection.php'; ?>
<?php include 'include/admin-header.php'; ?>

<?php
        if(isset($_POST["submit"]))
        {
                $catName = $_POST["catName"];
               
                        
                $query="insert into categorys (catName) values ('$catName')"; 
                $result=mysqli_query($con,$query);
                echo "<script>alert('record inserted successfully')</script>";
        }


?>
 <section class="ftco-section contact-section bg-light">
      <div class="container" >
        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex" >
            <form method="post" action="#" class="bg-white p-5 contact-form container" >
                <p class="text-center text-dark " style="font-size:40px;">Category-Add</p>
                
                <div class="form-group" >
                        <label  class="text-dark" > Category Name</label>
                        <input type="text" class="form-control" id="name" name="catName" placeholder="Enter Product Name">
                </div>
               
                <div class="form-group">
                  <div class="container">
                    <div class="row">      
                        <input type="submit" value="submit" name="submit" class="btn btn-primary py-3 px-5">
                        <input type="submit" value="reset" class="btn btn-danger py-3 px-5">
                    </div>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </section> 
    
<?php include 'include/admin-footer.php'; ?>