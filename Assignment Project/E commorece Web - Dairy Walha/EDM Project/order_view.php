<?php
include('heder.php');
include('connection.php');
error_reporting(E_ERROR | E_PARSE);
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
<form method='post'>
    <div class="col-lg-50 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Order Table</h4>
                    <div class="table-responsive">


                    <?php 
                      $userid=$_GET['userid'];
                      $s = mysqli_query($conn, "SELECT * FROM  confirmorder where userid=$userid");
                    ?>

                      <table class="table">
                        <thead>
                          <tr>
                            <th>Index</th>
                            <th>order id</th>
                            <th>userid</th>
                            <th>productname</th>
                            <th>price</th>
                            <th>catagory</th>
                            <th>description</th>
                            <th>oredr date and time</th>

                          </tr>
                        </thead>

                        <?php

                          $i = 1;


                          while($row = mysqli_fetch_assoc($s))
                          {
                              echo '<tr>';
                              echo "<td>".$i."</td>";
                              echo "<td>".$row['orderid']."</td>";
                              echo "<td>".$row['userid']."</td>";
                              echo "<td>".$row['productname']."</td>";
                              echo "<td>".$row['price']."</td>";
                              echo "<td>".$row['dropdown']."</td>";
                              echo "<td>".$row['description']."</td>";
                              echo "<td>".$row['order_date']."</td>";
                              $i++;
                        ?>
                        
                              
                                  
                              
                        <?php    

                                    
                                    $orderid=$row['orderid'];

                                    
                                    echo "<td><a href='order_delete.php?orderid=$orderid'  style='color:white;'><button type='submit' name='s1' class='btn btn-primary'>Delete</a></td>";
                             
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