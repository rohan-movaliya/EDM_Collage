<?php
include('heder.php');
include('connection.php');
?>
<?php
$id=$_GET['id'];
$q1=mysqli_query($conn,"select * from product where id='$id'");
while($row=mysqli_fetch_assoc($q1))
{
?>
<body>
    <div class="col-20 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Product</h4>
                   
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputName1">Product Id</label>
                        <input type="text" class="form-control" value="<?php echo $row['id']?>" id="exampleInputName1" placeholder="Product Name" name="ino">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Product Name</label>
                        <input type="text" class="form-control" value="<?php echo $row['productname']?>" id="exampleInputName1" placeholder="Product Name" name="productname">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Price</label>
                        <input type="number" class="form-control" value="<?php echo $row['price']?>" id="exampleInputEmail3" placeholder="Price" name="price">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputPassword4">Description</label>
                        <input type="text" class="form-control" value="<?php echo $row['description']?>" id="description" placeholder="Description" name="description">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Catagory</label>
                        
                          <input type="text" name="dropdown" class="form-control" value="<?php echo $row['dropdown']?>" id="exampleSelectGender">
                      </div>
                      
                      <div class="form-group">
                          <label>File upload</label>

                        <div class="input-group col-xs-12">
                          
                          <input type='file' name='f1' style="border: double;" required>
                         <input type='text' name='old' value="<?php echo $row['product_Image']; ?>">
                        </div>
                      </div>
                      <!-- <div class="form-group">
                          <label>File upload</label>
                        <div class="input-group col-xs-12">
                          
                          <input type='file' name='f1'>
                        </div>
                      </div> -->
                      
                      <input type="submit" class="btn btn-primary mr-2" name="s2" value="Update">
                      <input type="submit" class="btn btn-primary mr-2" name="s3" value="Back">
                      <!-- <a href="dashboard.php"><button class="btn btn-dark">Cancel</button> -->
                      
                      
                    </form>
                  </div>
                </div>
              </div>
</body>
</html>
<?php
}
if(isset($_POST['s2']))
{
        $ino=$_POST['ino'];
        $productname=$_POST['productname']; 
        $price=$_POST['price']; 
        $description=$_POST['description']; 
        $dropdown=$_POST['dropdown'];
        $oprice=$_POST['oprice'];
       
        //$q1=mysqli_query($conn,"update product set productname='$productname',price=$price,description='$description',dropdown='$dropdown',oprice='$oprice',flag='0' where id=$ino "); 
        
        $image = $_FILES['f1']['name'];  //echo karvo hoi to karvano
        $img = $_FILES['f1']['tmp_name'];  //echo karvo hoi to karvano
        move_uploaded_file($img,'move/'.$image);

        $q1=mysqli_query($conn,"UPDATE `product` SET `productname`='$productname',`price`='$price',`description`='$description',`product_Image`='$image',`dropdown`='$dropdown' WHERE id=$ino");
        
        if($q1)
        {
            
          echo "<script>
          window.location.href = 'dashboard.php';
          </script>";
          
        } 
}
if(isset($_POST['s3']))
{
        
        if($q1)
        {
            
          echo "<script>
          window.location.href = 'dashboard.php';
          </script>";
          
        } 
}
?> 
<?php
include('footer.php');
?>