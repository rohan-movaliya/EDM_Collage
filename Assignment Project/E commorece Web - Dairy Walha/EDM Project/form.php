<?php
include('heder.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dairy wala</title>
</head>
<body>
    <div class="col-20 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Product</h4>
                   
                    <form class="forms-sample" method="post" action="add_product.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Product Name" name="productname">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">New Price</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="New Price" name="price">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Old Price</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Old Price" name="oprice">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="description" rows="4" placeholder="Description" name="description"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Catagory</label>
                        <select class="form-control" id="exampleSelectGender" name="dropdown">
                          <option value="Milk">Milk</option>
                          <option value="Bakery">Bakery</option>
                          <option value="Sweet">Sweet</option>
                        </select>
                      </div>
                      <div class="form-group">
                          <label>File upload</label>
                        <div class="input-group col-xs-12">
                          
                          <input type='file' name='f1'>
                        </div>
                      </div>
                      
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      
                      
                      
                      
                      
                    </form>
                    
                  </div>
                </div>
              </div>
</body>
</html>
<?php
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
