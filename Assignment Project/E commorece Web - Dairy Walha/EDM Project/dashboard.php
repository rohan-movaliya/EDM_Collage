<?php

include('heder.php');
include('connection.php');

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
    <form>
    <div class="col-lg-50 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product Table</h4>
                    <a href='form.php'><button type='button' class='btn btn-primary' style='margin-left:807px;'>Add</button></a>
                    </p>
                    <div class="table-responsive">


                    <?php 
                      $s = mysqli_query($conn, "SELECT * FROM  product WHERE  flag = 0");
                    ?>

                      <table class="table">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            
                            <th>Description</th>
                            <th>Catagory</th>
                            <th>Image</th>

                            <th style="text-align:end">Action</th>
                          </tr>
                        </thead>

                        <?php

                          $i = 1;


                          while($row = mysqli_fetch_assoc($s))
                          {
                              echo '<tr>';
                              echo "<td>".$i."</td>";
                              echo "<td>".$row['productname']."</td>";
                              echo "<td>".$row['price']."</td>";
                              echo "<td>".$row['description']."</td>";
                              // echo "<td>".$row['product_Image']."</td>";
                              echo "<td>".$row['dropdown']."</td>";
                              $i++;
                        ?>
                        
                              <td><img style="height:40px; width: 40px;%;"  src='img/<?= $row["product_Image"] ?>'></td>
                                  
                              
                        <?php    

                                    $id = $row['id'];
                                    

                                    echo "<td><a href='delete.php?id=$id'><button type='button' class='btn btn-primary'>Delete</button></a></td>";
                                    echo "<td><a href='update.php?id=$id'><button type='button' class='btn btn-primary'>Update</button></a></td>";
                             
                          }

                       ?>                       
                      </table>
                    </div>
                  </div>
                </div>
              </div>
    </form>
</body>
</html>
<?php
include('footer.php');
?>